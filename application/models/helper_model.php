<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Helper_Model extends CI_Model {

    function _get_data($query) {
        $data = array();
        $Q = $this->db->query($query);
        if ($Q->num_rows() > 0) {
            foreach ($Q->result_array() as $row) {
                $data[] = $row;
            }
        }
        $Q->free_result();
        return $data;
    }

    function __construct() {
        parent::__construct();
    }

}
