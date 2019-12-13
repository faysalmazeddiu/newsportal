<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Comments_Model extends CI_Model {

    function load($news_id) {
        $query = "SELECT * FROM bdnews_comments "
                . "WHERE news_id = '$news_id' AND status='accept'";
        return $results = $this->Helper_Model->_get_data($query);
    }

    function __construct() {
        parent::__construct();
    }

}
