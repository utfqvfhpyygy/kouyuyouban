<?php

function return_msg($code,$list,$msg)
{
    $data['code'] = $code;
    $data['msg']  = $msg;
    $data['data'] = $list;
    
    echo json_encode($data);
    exit;
}