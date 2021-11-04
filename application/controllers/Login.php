<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('login_model');
    }

    public function index() {
        if ($this->session->userdata('user') != '') {
            redirect(base_url() . 'site/index');
        } else {
            $data['page_title'] = 'Login';
            $data['page'] = 'login/login_page.php';

            $this->load->view('content/login_content', $data);
        }
    }

    public function registration() {
        if ($this->session->userdata('user') != '') {
            redirect(base_url() . 'site/index');
        } else {
            $data['message'] = '';
            $data['page_title'] = 'Registration';
            $data['page'] = 'login/registration_page';

            $this->load->view('content/login_content', $data);
        }
    }

    public function submit() {

        $this->load->helper('form', 'url');
        $this->form_validation->set_rules('name', 'Username', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');

        if ($this->form_validation->run()) {
            $data = array(
                'username' => $this->input->post('name'),
                'password' => $this->input->post('password'),
                'email' => $this->input->post('email'),
                'address' => $this->input->post('address'),
            );
            $this->login_model->addUser($data);
            redirect('login/index');
        } else {
            $message = validation_errors();
            $this->session->set_flashdata('msg', $message);
            redirect('login/registration');
        }
//        print_r($_POST);
    }

    public function login() {

        $user = $this->input->post('username');
        $pass = $this->input->post('password');

//        $data['info'] = $this->login_model->retrive();

        $result = $this->login_model->loginCheck($user, $pass);

//        print_r($result);

        if ($result) {
            $this->session->set_userdata('user', $user);
            redirect('site/index');
        } else {
            $message = 'Incorrect username & Password';
            $this->session->set_flashdata('msg', $message);
            return redirect('login/index');
        }
//        if ($query) {
//            return redirect('site/index');
//        } else {
//            echo 'wrong username password';
//        }
    }

}
