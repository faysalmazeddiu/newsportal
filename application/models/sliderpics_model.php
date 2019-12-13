<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class SliderPics_Model extends CI_Model {

    function getAll() {
        $query = "SELECT * "
                . "FROM bdnews_slider_pics";
        $data = $this->Helper_Model->_get_data($query);
        return $data;
    }

    function __construct() {
        parent::__construct();
    }

}
