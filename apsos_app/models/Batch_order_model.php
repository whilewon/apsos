<?php

/**
 * @author       winston bai
 */
class Batch_order_model extends MY_Model
{
    public function __construct()
    {
        parent::__construct();
    }


    /**
     * 解析excel
     * @param $upload_file
     * @param $upload_products
     * @throws PHPExcel_Reader_Exception
     */
    function parseXls($user_id, $file_full_path)
    {

        //解析excel
        log_message("debug", "解析EXCEL开始");

        $objReader = IOFactory::createReader('Excel5');//use excel2007 for 2007 format
        $objPHPExcel = $objReader->load($file_full_path);//加载目标Excel
        $sheet = $objPHPExcel->getSheet(0);//读取第一个sheet
        $highestRow = $sheet->getHighestRow(); // 取得总行数
        $highestColumn = $sheet->getHighestColumn(); // 取得总列数

        log_message("debug", "行数：" . $highestRow . "，列数：" . $highestColumn);
        $strExcel = '';
        $product_table = array();
        for ($i = 2; $i <= $highestRow; $i++) {//从第二行开始读取
            $product_row = array();
            $strExcel = '';
            for ($k = 'A'; $k <= $highestColumn; $k++) {
                if($k=='A'||$k=='B'){
                    if (trim($objPHPExcel->getActiveSheet()->getCell("$k$i")->getValue()) == '') {
                        $product_row = array();
                        continue;
                    }
                }
                $product_row[] = trim($objPHPExcel->getActiveSheet()->getCell("$k$i")->getValue());
                $strExcel = $strExcel . trim($objPHPExcel->getActiveSheet()->getCell("$k$i")->getValue()) . ',';
            }

            if (count($product_row) > 0) {
                log_message("debug", '第' . $i . '行:' . $strExcel);
                $product_table[] = $product_row;
            } else {
                continue;
            }
        }
        //文件内容不正确
        if (count($product_table) == 0) {
            log_message("debug", "上传excel中没有正确的数据");
            if (file_exists($file_full_path)) {
                log_message('debug', '删除文件' . $file_full_path);
                unlink($file_full_path);
            }
            return null;
        }
        log_message("debug", "解析EXCEL结束");
        if (file_exists($file_full_path)) {
            log_message('debug', '删除文件' . $file_full_path);
            unlink($file_full_path);
        }
        //净化数据
        $product_table = $this->security->xss_clean($product_table);
        //批量获取产品信息
        return  $this->_patchGetProducts($user_id, $product_table);

    }


    /**
     * 批量获取产品信息
     * @param $products
     */
    function _patchGetProducts($user_id, $products)
    {
        log_message('debug', '开始查询 下单产品的的库存信息');
        $show_table = array();

        $success_insert_product_ids='';
        //>>>>>>>>>>>>>>>>>>>>for table
        for ($i = 0; $i < count($products); $i++) {

            $show_row = array();
            $row = $products[$i];
            $row_error = '';

            $partsno=$row[0];
            $product_num=$row[1];

            //检查excel的行数据是否合法
            if (empty($partsno)) {
                $row_error = $row_error . '标准编码不能为空；';
            }


            if (empty($product_num) || preg_match('/^[1-9][0-9]*$/', $product_num) == FALSE) {
                $row_error = $row_error . '数量必须为正整数';
            }

            $show_row = array();
            $show_row['user_id'] = $user_id;
            $show_row['product_id'] = '';
            $show_row['onhandfreeqty'] = 0;
            $show_row['type1code'] = '';
            $show_row['descrition'] = '';
            $show_row['subattrib01'] = '';
            $show_row['nowprice'] = 0.00;
            $show_row['total_price'] = 0.00;
            $show_row['partsno'] = $partsno;
            $show_row['lno'] = '';
            $show_row['product_num'] = $product_num;
            $show_row['error'] = '';

            if (!empty($row_error)) {
                $show_row['error'] = $row_error;
                $show_table[] = $show_row;
                continue;
            }
            //查看库存的该产品
            $this->load->model('product_stock_model');
            $one_product =$this->product_stock_model->getOneStockProduct($user_id, null,$partsno);
            if (empty($one_product) == TRUE) { //通过标准码 未找到库存产品

                $show_row['error'] = '通过标准码查找库存产品，未找到或找到多件产品';
                $show_table[] = $show_row;
                continue;

            } else {

                $ret_item=$one_product;
                $show_row = array();
                $show_row['user_id'] = $user_id;
                $show_row['product_id'] = $ret_item->id;
                $show_row['onhandfreeqty'] = $ret_item->onhandfreeqty;
                $show_row['type1code'] = $ret_item->type1code;
                $show_row['descrition'] = $ret_item->descrition;
                $show_row['subattrib01'] = $ret_item->subattrib01;
                $show_row['nowprice'] = $ret_item->firstprice;
                $show_row['total_price'] = floatval($show_row['nowprice'])*intval($product_num);
                $show_row['partsno'] = $ret_item->partsno;
                $show_row['lno'] = $ret_item->lno;
                $show_row['product_num'] = $product_num;
                $show_row['error'] = '';
                $show_table[] = $show_row;
            }

        }//<<<<<<<<<<<<<<<<<<<for table

        log_message('debug', '结束  查询下单产品的的库存信息');
        return $show_table;
    }

}

?>