<?php
namespace Home\Controller;
use Think\Controller;
class AccountManageController extends Controller {
	//主页
    public function CommercialInfo(){
        $this->info_list = M("admin")->alias("a")->where("admin_id=1")->join("tp_user_account u on u.merchant_number = a.merchant_number")->join("tp_shop_user o on o.merchant_number = u.merchant_number")->join("tp_attr t on t.id = o.attr_id")->field("t.*,o.value")->select();
        //var_dump($this->info_list);
        $this->display();
    }

    //账户资料
    public function acount_info(){
        $this->display();
    }

}