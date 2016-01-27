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
	    
	    $this->notification->noti();
	}
	

	public function login()
	{
	    
	}
	

	public function loginByMobile($mobile)
	{
	    
	}
	

	public function getUser()
	{
	    
	}
}
