<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Post extends CI_Controller {
    
    public function addPost() 
    {
        
        
        //
        $this->load->library("notification");      
        $this->notification->postLike();
    }
    
    public function deletePost()
    {
        
    }
    
    public function updatePost()
    {
        
    }
}