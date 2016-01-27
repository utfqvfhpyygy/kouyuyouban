<?php 

class UserModel extends CI_Model {
    
    public $database;
    
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->database = "kouyu_user";
    }
    
    public function getUser($key,$value)
    {
        $query = $this->db->get_where($this->database,array($key=>$value),1);
        return $query->result();
        
    }
    
    public function insertUser($data)
    {
        $query = $this->db->insert($this->database,$data);
    }
    
}