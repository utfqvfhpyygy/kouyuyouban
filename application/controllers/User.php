<?php
defined('BASEPATH') OR exit('No direct script access allowed');

define("LOGIN_TYPE_QQ",     1);
define("LOGIN_TYPE_WECHAT", 2);
define("LOGIN_TYPE_MOBILE", 3);

class User extends CI_Controller {
    
    
	public function __construct()
	{
        parent::__construct();
        
        $this->load->model("userModel");
        $this->load->library("notification");
	}
	
	/*
	 * 注册用户
	 */
	public function signup()
	{
	    
	    $data = array(
	        "name"    => "kenneth",
	        "mobile"  => 15913190484,
	        "token"   => "1111111",
	    );
	    
	    $this->userModel->insertUser($data);
	    
	    //发送注册成功相关信息
	    $this->notification->noti();
	}
	
	/*
	 * 用户登录
	 */
	public function login()
	{
	    
	}
	
	/*
	 * 手机登录
	 */
	public function loginByMobile($mobile)
	{
	    
	}
	
	/*
	 * 获取用户相关信息
	 */
	public function getUser()
	{
	    
	}
}
