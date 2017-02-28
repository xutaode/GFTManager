<?php
namespace Home\Controller;
use Think\Controller;
class CommonController extends Controller {

	/**
     * 析构函数
     */
    function __construct() 
    {
        parent::__construct();       
    }

    /*
     * 初始化操作
    */
    public function _initialize() 
   	{	
   		if(in_array(ACTION_NAME,array('login'))){
   		}else{
   			if(session('admin_id') > 0 ){
        		$this->check_priv();//检查管理员菜单操作权限
        	}else{
        		$this->error('请先登陆',U('Home/index/login'),1);
        	}
   		}
    }
    //检查管理员菜单操作权限
    public function check_priv(){
    	$list = M("admin")->where("admin_id=".session("admin_id"))->field("rote")->find();
    	$map['limits_id'] = array("in",trim($list['rote'],","));
    	$mlist = M("limits")->where($map)->select();
    	$now = CONTROLLER_NAME."-".ACTION_NAME
    	if (in_array($now,$mlist) || $now = "Index-index") {
    		$this->error('您没有此项的操作权限,请联系超级管理员分配权限',U('Home/Index/login'));
    	}else{
    		$this->assign("rlist",$mlist);
    	}
    }


}