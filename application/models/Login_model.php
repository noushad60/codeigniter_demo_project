<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Login_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    public function addUser($data) {
        $result = $this->db->insert('registration', $data);
        return $result;
    }

    public function retrive() {
        $result = $this->db->get('registration');
        return $result;
    }

    public function loginCheck($user, $pass) {

        $result = $this->db->where('username', $user)
                        ->where('password', $pass)
                        ->from('registration')
                        ->get()->row();
        if ($result):
            return true;
        else:
            return false;
        endif;
    }

}
