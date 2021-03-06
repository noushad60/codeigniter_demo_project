<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Site extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('site_model');
    }

    public function index() {
        if ($this->session->userdata('user') != '') {
            $data['page_title'] = 'site create';
            $data['page'] = 'site/home.php';
            $this->load->view('content/master_content', $data);
        } else {
            redirect(base_url() . 'login/index');
        }
    }

    public function create() {
        if ($this->session->userdata('user') != '') {
            $data['page_title'] = 'site create';
            $data['page'] = 'site/create.php';

            $this->load->view('content/master_content', $data);
        } else {
            redirect(base_url() . 'login/index');
        }
    }

    public function submit() {

        $data = array(
            'name' => $this->input->post('name'),
            'email' => $this->input->post('email'),
            'address' => $this->input->post('address'),
//            $username = $this->input->post('username');
        );
        $this->site_model->addUser($data);
        return redirect('site/create');

//        exit();
//        echo "<meta http-equiv='refresh' content='0'>";
//        echo $query;
//        print_r($_POST); exit();
//        $this->load->library('form_validation');
//
//        $this->form_validation->set_rules('name', 'Email', 'required');s
//
//        if ($this->form_validation->run()) {
//            print_r('dsfsd');
//
//            return redirect();
//        } else {
//
//            return redirect();
//        }
    }

    public function info() {
        if ($this->session->userdata('user') != '') {
            $data['info'] = $this->site_model->retrive();
            $data['page_title'] = 'information';
            $data['page'] = 'site/info.php';

            $this->load->view('content/master_content', $data);
        } else {
            redirect(base_url() . 'login/index');
        }
    }

    public function edit($id) {

        if ($this->session->userdata('user') != '') {
            $data['page_title'] = 'site update';
            $data['page'] = 'site/edit.php';
            $data['info'] = $this->site_model->edit($id);
            $this->load->view('content/master_content', $data);
        } else {
            redirect(base_url() . 'login/index');
        }
    }

    public function update() {
        $data = array(
            'id' => $id = $this->input->post('id'),
            'name' => $this->input->post('name'),
            'email' => $this->input->post('email'),
            'address' => $this->input->post('address')
        );
//        $this->db->from('user');
        $this->db->where('id', $id);
        $query = $this->db->update('user', $data);
        $this->error_handle($query);
        if($query){
            redirect(base_url().'site/info');
        }
    }

    public function delete($id) {
        $this->db->where('id', $id);
        $query = $this->db->delete('user');
        $this->error_handle($query);
        return redirect('site/info');
    }

    public function error_handle($query) {
        if ($query) {
            echo 'Data updated successfully';
        } else {
            die('Data update fail');
        }
    }

    public function logout() {
        $this->session->unset_userdata('user');
        redirect(base_url() . 'login/index');
    }

}
