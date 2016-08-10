<?php

/**
 * @author       Administrator
 */
class Product_stock_model extends MY_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * 获取单产品
     * @param $user_id
     * @param $lno
     * @param null $partsno
     */
    function getOneStockProduct($user_id,$lno,$partsno=null,$product_id=null)
    {

        $query=$this->db->select('user_type')->from('APSOS_user')
            ->where('uuid', $user_id)
            ->get();
        if( $query->num_rows()==1){

            $user_obj=$query->row();

            $curr_price_lable="";
            if($user_obj->user_type=='A'){
                $curr_price_lable="RetailPrice";
            }else if($user_obj->user_type=='B'){
                $curr_price_lable="BakPrice1";
            }else if($user_obj->user_type=='C'){
                $curr_price_lable="BakPrice2";
            }
            if(empty($curr_price_lable)){
                return  array();
            }
            $condistions=array();
            $Depot=iconv('utf-8', "GB2312//IGNORE", '主仓库');
            $sql="SELECT  id,a.lno, descrition, subattrib01, subattrib02, unit,
             type1code, type2code, partsno, relationno,onhandfreeqty,
            ".$curr_price_lable." as firstprice,
            a.lastindate,'".  $user_id."' as guestcode
            FROM T_SubStock A
             where   OwnNo='A01' and IsNull(Bad,0)=0
            AND Depot In( '".$Depot."','' )
            /*AND onHandFreeQTY>0*/";

            if(empty($lno)==FALSE)
            {
                $condistions[]=$lno;
                $sql=$sql." and A.Lno=?";
            }
            if(empty($partsno)==FALSE)
            {
                $condistions[]=$partsno;
                $sql=$sql." and A.partsno=?";
            }
            if(empty($product_id)==FALSE)
            {
                $condistions[]=$product_id;
                $sql=$sql." and A.id=?";
            }
            $query = $this->db->query($sql,$condistions);
            if(count($query->result_array())>1){
                return null;
            }
            else{
                return $query->row();
            }
        }else{
            return  array();
        }
    }

    /**
     * 获取库存产品
     * @return mixed
     */
    function getStockProducts($data,$limit = 10, $offset =1)
    {
        $curr_price_lable="";
        $query=$this->db->select('user_type')->from('APSOS_user')
            ->where('uuid', $data['user_id'])
            ->get();

        if( $query->num_rows()==1){
            $user_obj=$query->row();
            if($user_obj->user_type=='A'){
                $curr_price_lable="RetailPrice";
            }else if($user_obj->user_type=='B'){
                $curr_price_lable="BakPrice1";
            }else if($user_obj->user_type=='C'){
                $curr_price_lable="BakPrice2";
            }
            if(empty($curr_price_lable)){
                return  array();
            }
        }
        $sub_where="";
        $valueArray = array();
        $Depot=iconv('utf-8', "GB2312//IGNORE", '主仓库');

        /*$this->db->select("ID,A.Lno, Descrition, SubAttrib01, SubAttrib02, Unit,Type1Code, Type2Code, PartsNo, RelationNo,onHandFreeQty,
        B.FirstPrice, A.LastInDate,B.GuestCode");

        $this->db->limit($limit);

        $this->db->from("T_SubStock A ,T_SalePrice B");

        $this->db->where("OwnNo='A01' and IsNull(Bad,0)=0 AND Depot In( '" . $Depot . "','' ) AND onHandFreeQTY>0 AND A.Lno=B.Lno AND B.GuestCode=", $this->db->escape_like_str($data['user_id']));
         $query=$this->db->get();
        return $query->result_array();
        */
        /*, FOBPrice, RetailPrice, WholesalePrice, AllocatePrice, MinPrice,BakPrice1,BakPrice2,*/

        /*分页模板
         SELECT * FROM t_guest w1
        WHERE code in
        (
            SELECT top 30 code FROM
            (
                SELECT top 45030 code FROM t_guest ORDER BY code DESC
            ) w ORDER BY  w.code ASC
        )
        ORDER BY w1.code DESC
         */

        if (!empty($data['product_id'])) //产品主键
        {

            log_message("debug","产品ID:".$data['product_id']);
            $sub_where = $sub_where . " AND A.ID=?";
            array_push($valueArray, $data['product_id']);
        }

        if (!empty($data['category1'])) //产品分类1
        {
            $category1=iconv('utf-8', "GB2312//IGNORE", $data['category1']);
            $sub_where = $sub_where . " AND A.type1code like '%" . $this->db->escape_like_str($category1) . "%'";
        }

        if (!empty($data['product_name'])) //产品名称 like
        {
            $product_name=iconv('utf-8', "GB2312//IGNORE", $data['product_name']);
            log_message("debug","产品名称：".$product_name);
            $sub_where = $sub_where . " AND A.Descrition like '%" . $this->db->escape_like_str($product_name) . "%'";
        }
        if (!empty($data['standard_code'])) //标准码 like
        {
            $standard_code=iconv('utf-8', "GB2312//IGNORE", $data['standard_code']);
            log_message("debug","产品标准码：".$standard_code);
            $sub_where = $sub_where . " AND A.partsno like '%" . $this->db->escape_like_str($standard_code) . "%'";
        }
        if (!empty($data['product_code'])) //产品OE号 like
        {
            $product_code=iconv('utf-8', "GB2312//IGNORE", $data['product_code']);
            $sub_where = $sub_where . " And
            (
            (A.Lno like '%" . $this->db->escape_like_str($product_code) . "%')
            or
            (RelationNo in (Select RelationNo From T_RelationNo where A.Lno like '" . $this->db->escape_like_str($product_code) . "%' ))
            ) ";
        }

        $sql="SELECT ".(empty($sub_where)?"top 10":"")." id,A.lno, descrition, subattrib01, subattrib02, unit,type1code, type2code, partsno, relationno,onhandfreeqty,
            ".$curr_price_lable." as firstprice, a.lastindate
            FROM T_SubStock A
             where   OwnNo='A01' and IsNull(Bad,0)=0
            AND Depot In( '" . $Depot . "','' )
            AND   A.RetailPrice>0 ".$sub_where;

        $sql=$sql." order by Type1Code asc ,Descrition asc"; //排序
        $query = $this->db->query($sql, $valueArray);

        return $query->result_array();

    }


}

?>