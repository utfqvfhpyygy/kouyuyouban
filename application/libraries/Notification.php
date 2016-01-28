<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Notification {
    
    //注册通知
    public function noti()
    {
        return 11111;
    }
    
    //登录成功通知
    public function notiLogin()
    {
        
    }
    
    //心情点赞
    public function postLike()
    {
        $CI =& get_instance();
        $CI->load->library("umeng");
        $CI->umeng->sendAndroidBroadcast();
    }
}