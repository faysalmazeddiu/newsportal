<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Prayer_Model extends CI_Model {

    function getAll() {
        $query = "SELECT * "
                . "FROM bdnews_prayer "
                . "ORDER BY ts DESC LIMIT 1";
        $data = $this->Helper_Model->_get_data($query);
        return $data;
    }

    function __construct() {
        parent::__construct();
    }
}

