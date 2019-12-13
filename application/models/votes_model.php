<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Votes_Model extends CI_Model {

    function get() {
        $query = "SELECT vote_id, topic "
                . "FROM bdnews_votes "
                . "ORDER BY ts DESC LIMIT 1"; // Selects the last posted topic
        return $results = $this->Helper_Model->_get_data($query);
    }

    function cast_vote($vote_id, $ynn) { // $ynn = yes, no, none
        $query = "UPDATE bdnews_votes "
                . "SET " . $ynn . "=" . $ynn . "+1" . ", ts=ts "
                . "WHERE vote_id=" . $vote_id;
        mysql_query($query);
    }

    function get_total($vote_id, $ynn) { // Retrieve total vote from DB
        $query = "SELECT " . $ynn
                . " FROM bdnews_votes "
                . "WHERE vote_id=" . $vote_id;

        $result = mysql_query($query);
        $value = mysql_fetch_assoc($result);
        return $value[$ynn];
    }

    function __construct() {
        parent::__construct();
    }

}
