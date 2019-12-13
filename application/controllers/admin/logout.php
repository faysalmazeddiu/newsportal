<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Logout extends CI_Controller {

    function index() {
        unset($_SESSION['userid']);
        unset($_SESSION['username']);
        $this->session->set_flashdata('error', "You've been logged out!");
        redirect('admin/login');
    }

    public function __construct() {
        parent::__construct();
        session_start();
    }

}
