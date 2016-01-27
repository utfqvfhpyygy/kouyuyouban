<?php 

class UserModel extends CI_Model {
    
    public $database;
    
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->database = "kouyu_user";
        $this->load->helper("ip");
    }
    
    public function getUser($key,$value)
    {
        $query = $this->db->get_where($this->database,array($key=>$value),1);
        $data = $query->result_array();
        return $data[0];
    }
    
    public function insertUser($data)
    {
        $data["ctime"] = time();
        $data["ip"]    = get_real_ip();
        
        $this->db->insert($this->database,$data);
        return $this->db->insert_id();
    }
    
}