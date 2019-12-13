<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Rashifal_Model extends CI_Model {

    function get($rashi_name) {
        $query = "SELECT " . $rashi_name .
                " FROM bdnews_rashifal " .
                "ORDER BY ts DESC LIMIT 1";
        $result = mysql_query($query);
        $value = mysql_fetch_assoc($result);
        return $value[$rashi_name];
    }

    function __construct() {
        parent::__construct();
    }

}
