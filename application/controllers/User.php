<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {
    
    
	public function __construct()
	{
        parent::__construct();
        $this->load->database();
        
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
	    
	    $this->db->insert("kouyu_user",$data);
	    
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
	 * ��ȡ�û������Ϣ
	 */
	public function getUser()
	{
	    
	}
}
