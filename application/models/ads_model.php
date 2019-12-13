<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Ads_Model extends CI_Model {

    function getAll() {
        $query = "SELECT * "
                . "FROM bdnews_ads";
        $data = $this->Helper_Model->_get_data($query);
        return $data;
    }

    function __construct() {
        parent::__construct();
    }

}
