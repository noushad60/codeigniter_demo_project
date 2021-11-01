<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Site_model extends CI_Model {
    
    public function __construct(){
         parent::__construct();
    }
    
    public function addUser($data){
        $result = $this->db->insert('user',$data);
        return $result;
    }
    
    public function retrive() {
        $query = $this->db->get('user');
        return $query;
    }
    
    public function edit($id) {
        $this->db->from('user');
        $query = $this->db->where('id', $id);
        $query = $this->db->get();

        if ( $query->num_rows() > 0 )
        {
            $row = $query->row_array();
            return $row;
        }
//        return $query;
    }
}