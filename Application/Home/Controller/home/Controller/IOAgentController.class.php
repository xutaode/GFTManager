<?php
namespace Home\Controller;
use Think\Controller;
class IOAgentController extends Controller {
	//主页
    public function index(){
        $thid->Userlist = M("admin")->alias("a")->where("admin_id=".$this->admin_id)->join("tp_user_account u on u.merchant_number = a.merchant_number")->join("tp_shop_user o on o.merchant_number = u.merchant_number",'LEFT')->find();
        $this->display();
    }

    //账户资料
    public function acount_info(){
        $this->display();
    }

}