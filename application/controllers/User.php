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
	
	public function signup()
	{
	    
	    $data = array(
	        "name"    => "kenneth",
	        "mobile"  => 15913190484,
	        "token"   => "1111111",
	    );
	    
	    $uid = $this->userModel->insertUser($data);
	    //注册成功通知
	    $this->notification->noti();
	}
	

	public function login()
	{
	    $token      = $this->input->request("token");
        $loginType  = $this->input->request("loginType");
        
        switch ($loginType)
        {
            case LOGIN_TYPE_MOBILE:
                $this->loginByMobile($token);
                break;
            default:
                break;
        }
	}
	

	public function loginByMobile($mobile)
	{
	    $userInfo = $this->userModel->getUser("mobile",$mobile);
	    
	    if(!empty($userInfo)){
	        return_msg(EXIT_SUCCESS, $userInfo, "get user suc");
	    }else{
	        return_msg(EXIT_ERROR, "", "get user fail");
	    }
	}
	

	public function getUser()
	{
	    
	}
}
