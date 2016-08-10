<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 16-2-27
 * Time: 下午7:11
 */

class Account_model extends MY_Model
{


    public function __construct()
    {
        parent::__construct();
    }

    /**
     * 获取客户信息
     * @param $user
     * @return mixed
     */
    public function getGuest($user_id)
    {
        log_message("debug","客户信息的主键:".$user_id);
        $query=$this->db->query("
        Select top 10 a.code as guest_code, a.name, a.guesttypem,a.guesttype, a.retailorwhole, b.acctype,
b.invoicetypecode, a.phoneareacode, a.telephone, a.fax, a.address as guest_address, a.postcode,
a.httpaddress, a.business, a.city, a.provine, a.area, a.contactperson,
a.work, a.sex, a.birthday, a.handphonebp, a.handphonelt, a.email, a.qq,a.msn,
a.taxnumber, a.bank, a.bankaccount, a.invoiceaddress, a.businessno, a.remark,
a.nature, a.registerno, a.vin,b.aboutbusinesser,
b.department, b.classname, b.blackwarm, b.fistsaledate, b.lastsaledate,
b.historysaletimes, b.historysaleamount, b.priceformula, b.discountrate1,
b.discountrate2, b.creditalarmamount, b.creditlimitamount, b.creditalarmday from t_guest a left join f_arrearagehead b on a.code = b.code
 where    B.ownno ='A01'  and A.code = ? ",array($user_id)
        );
        return $query->row();
    }

}