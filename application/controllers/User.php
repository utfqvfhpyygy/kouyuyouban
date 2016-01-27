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
	 * ע���û�
	 */
	public function signup()
	{
	    
	    $data = array(
	        "name"    => "kenneth",
	        "mobile"  => 15913190484,
	        "token"   => "1111111",
	    );
	    
	    $this->userModel->insertUser($data);
	    
	    //����ע��ɹ������Ϣ
	    $this->notification->noti();
	}
	
	/*
	 * �û���¼
	 */
	public function login()
	{
	    
	}
	
	/*
	 * �ֻ���¼
	 */
	public function loginByMobile($mobile)
	{
	    
	}
	
	/*
	 * ��ȡ�û������Ϣ
	 */
	public function getUser()
	{
	    
	}
}
