<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Rashifal extends CI_Controller {

    function get($rashi_name) {
        echo $name = $this->Rashifal_Model->get($rashi_name);
    }

    public function __construct() {
        parent::__construct();
        $this->load->model('Rashifal_Model');
    }

}
