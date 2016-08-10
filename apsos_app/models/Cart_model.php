<?php

/**
* @author       winston bai
*/
class Cart_model extends  MY_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    function _insertProduct($data)
    {

        //>>>>>>>>>>>>合法性校验
        if (empty($data['product_id']) || empty($data['product_num'])) {
            $ret=  array('state' => false, 'msg' => '非法操作');
            return $ret;
        }

        $int_curr_product_num=0;  //购买数量
        if (preg_match("/^[1-9]\d*$/",$data['product_num'])){
            $int_curr_product_num=(int)$data['product_num'];
        }else{
            $ret=  array('state' => false, 'msg' => '请输入正确的购买数量');
            return $ret;
        }
        //<<<<<<<<<<<<<<<<<合法性校验

        $this->load->model("product_stock_model");
        $products= $this->product_stock_model->getStockProducts($data);
        if(empty($products))
        {
            $ret=  array('state' => false, 'msg' => '库存中未找到该产品');
            return $ret;
        }
        else
        {  //>>>>>>>>>>>>>找到库存的情况
            if(count($products)>1)
            {
                $ret=  array('state' => false, 'msg' => '加入购物车发生异常，请稍后再试');

                return $ret;
            }

            $simple_product=$products[0];
            $stock_product_num=(int)$simple_product['onhandfreeqty'];  //库存
            /*if($int_curr_product_num>$stock_product_num)  //本次购买大于库存
            {
                $ret=  array('state' => false, 'msg' => '加入购物车失败：购买数量大于库存数量');

                return $ret;
            }*/

            $cart_product=$this->_getProducts($data);
            if(count($cart_product)>=1){  //已经存在
                if(count($cart_product)>1){
                    $ret=  array('state' => false,
                        'msg' => '加入购物车失败：已经存在错误的购物记录');
                    return $ret;
                }else{
                    $simple_cart_product=$cart_product[0];
                    //购物车内已经存在数量+购买数 大于库存
                    $new_product_num=
                        $int_curr_product_num+ (int)$simple_cart_product['product_num'];
                    /*if($new_product_num>$stock_product_num)
                    {
                        $ret=array('state' => false,
                            'msg' => '更新购物车失败：购物车已存在该商品，累加本次数量后大于库存');
                        return $ret;
                    }else  //更新购物车
                    {   */
                        if($this->_updateProduct($simple_cart_product['uuid'],$new_product_num))
                        {
                            $ret=array('state' => true,
                                'msg' => '购物车更新成功：该产品的数量为 '.$new_product_num);
                            return $ret;
                        }

                   // }
                }
            }else{  //新加入
                $data = array(
                    'uuid'=>com_create_guid(),
                    'product_id' =>$simple_product['id'],
                    'product_num' => $data['product_num'],
                    'nowprice' => $simple_product['firstprice'],
                    'create_user_id' => $data['user_id'],
                    'add_time' =>  date('Y-m-d H:i:s',time())
                );
                if($this->db->insert('APSOS_cart', $data))
                {
                    $ret= array('state' => true, 'msg' => '加入购物车成功');
                    return $ret;
                }
                else
                {
                    $ret=array('state' => false, 'msg' => '加入购物车失败');
                    return $ret;
                }
            }

        } //<<<<<<<<<<<<<找到库存的情况
    }

    function _getProducts($data)
    {
        //, $data, $limit, $offset

        $sql='select c.uuid,c.product_id,c.nowprice,c.product_num,
              (c.nowprice*product_num) as total_price,c.add_time,
              b.lno,b.onhandfreeqty,b.type1code,b.type2code,b.descrition,b.subattrib01,b.partsno
      from APSOS_cart  c  left JOIN T_SubStock b ON c.Product_id=b.Id  WHERE  c.Create_user_id=? ';

        $condition_array=array($data['user_id']);

        if(!empty($data['product_id']))
        {
            $sql=$sql.' and c.Product_id in (?)';
            array_push($condition_array,$data['product_id']);
        }
        $sql=$sql.' order by b.Type1Code asc';
        $query = $this->db->query($sql,$condition_array);
        return $query->result_array();
    }

    /**
     * 获取购物车的总记录数
     * @param $user_id
     * @return mixed
     */
    function _getProductNum($user_id)
    {

        $sql='select count(1) product_count
      from APSOS_cart  c  left JOIN T_SubStock b ON c.Product_id=b.Id  WHERE  c.Create_user_id=? ';

        $condition_array=array($user_id);
        $query=$this->db->query($sql,$condition_array);
        return $query->row();
    }

    /**
     * 通过用户编号和产品编号 删除
     * @param $user_id
     * @param $product_id
     * @return bool|null
     */
    function _delProductByUserIdAndProductId($user_id,$product_id)
    {
        if(empty($user_id) || empty($product_id)){
            log_message("error","非法操作，登录者或产品编号为空");
            return null;
        }
        $delWhere=array('create_user_Id' => $user_id,'product_id'=>$product_id);
        $delret_val=$this->db->delete("apsos_cart",$delWhere);
        if($delret_val==TRUE)
        {
            log_message("debug","删除购物车,用户：".$user_id."产品编号：".$product_id);
            return true;
        }
        else
        {
            log_message("debug","删除购物车,用户：".$user_id."产品编号：".$product_id);
            return false;
        }
    }

    /**
     * 更新购物车数量
     * @param $product_uuid
     * @param $product_num
     * @return mixed
     */
    function _updateProduct($product_uuid,$product_num)
    {
        $data = array(
            'product_num' => $product_num
        );
        $this->db->where('uuid', $product_uuid);
        return $this->db->update('APSOS_cart', $data);
    }

    /**
     * 删除购物车的单件商品
     * @param $product_uuid
     * @return array
     */
    function _delProduct($product_uuid)
    {
        log_message("debug","删除产品编号：".$product_uuid);
        $this->db->where('uuid', $product_uuid);
        if( $this->db->delete('APSOS_cart'))
        {
            $ret= array('state' => true, 'msg' => '删除成功');
            return $ret;
        }else{
            $ret= array('state' => false, 'msg' => '删除失败');
            return $ret;
        }
    }

    /**
     * 删除购物车的多件产品
     * @param $product_uuids
     * @return array
     */
    function _delMoreProduct($product_uuids)
    {
        log_message("debug","删除产品编号：".$product_uuids);
        if(empty($product_uuids)){
            log_message("debug","所删除产品编号为空");
            $ret= array('state' => false, 'msg' => '产品编号为空');
            return $ret;
        }
        $uuid_array=explode(',',$product_uuids);
        $this->db->where_in('uuid', $uuid_array);
        if( $this->db->delete('APSOS_cart'))
        {
            $ret= array('state' => true, 'msg' => '删除成功');
            return $ret;
        }else{
            $ret= array('state' => false, 'msg' => '删除失败');
            return $ret;
        }
    }
}

?>