<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {

    function index() {
        if ($this->input->post('username')) {
            $u = $this->input->post('username');
            $pw = $this->input->post('password');

            if ($this->Auth_Model->login($u, $pw)) {
                redirect('admin/manage/grid');
                return;
            } else {
                $this->session->set_flashdata('error', 'Sorry, your username or password is not recognized!');
                redirect('admin/login');
            }
        }
        $this->load->view('admin/login_view');
    }

    public function __construct() {
        parent::__construct();
        session_start();
        $this->load->model('Auth_Model');        
    }

}
