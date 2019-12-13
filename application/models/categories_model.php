<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Categories_Model extends CI_Model {

    function get($TYPE) {
        $query = "SELECT name "
                . "FROM bdnews_categories "
                . "WHERE type= '$TYPE'";
        return $this->Helper_Model->_get_data($query);
    }

    // Not in use now. May need in future
    function get_bangla_name($english_name) {
        $query = "SELECT bangla_name "
                . "FROM bdnews_categories "
                . "WHERE name= '$english_name'";
        $result = mysql_query($query);
        $value = mysql_fetch_assoc($result);
        return $value['bangla_name'];
    }

    function __construct() {
        parent::__construct();
    }

}
