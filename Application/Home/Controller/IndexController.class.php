<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {

	/**
     * 析构函数
     */
    function __construct() 
    {
        parent::__construct();       
    }

	//主页
    public function index(){
        $this->display();
    }

    //登录
    public function login(){
    	if ($_POST) {
    	}
        $this->display();
    }

}