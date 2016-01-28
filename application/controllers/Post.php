<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Post extends CI_Controller {
    
    public function __construct()
    {
        parent::__construct();
        $this->load->model("postModel");
    }
    
    public function addPost() 
    {
        $data = array(
            "uid"      =>102,
            "second"   =>60,
            "tags"     =>"电影 购物",
            "username" =>"kenneth",
        );
        
        $this->postModel->insertPost($data);
        
        //发心情成功,通知回调
        $this->load->library("notification");      
//         $this->notification->postLike();
    }
    
    public function deletePost()
    {
        
    }
    
    public function updatePost()
    {
        
    }
    
    public function getPost()
    {
        
    }
}