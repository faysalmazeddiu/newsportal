<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Auth_Model extends CI_Model {

    function login($u, $pw) {
        $this->db->select('admin_id,username');
        $this->db->where('username', $u);
        $this->db->where('password', $pw);
        $this->db->where('status', 'active');
        $this->db->limit(1);
        $Q = $this->db->get('bdnews_admins');

        if ($Q->num_rows() > 0) {
            $row = $Q->row_array();
            $_SESSION['userid'] = $row['admin_id'];
            $_SESSION['username'] = $row['username'];
            return 1;
        }
        return 0;
    }

    function get_logged_user() {
        return $_SESSION['userid'];
    }

    function is_allowed($grid_name, $userid) {
        $query = "SELECT ad.admin_id
                    FROM bdnews_group_grid   gg
                    INNER JOIN bdnews_grids  gr  ON  gr.grid_id  = gg.grid_id
                    INNER JOIN bdnews_groups gp  ON  gp.group_id = gg.group_id
                    INNER JOIN bdnews_admins ad  ON  ad.group_id = gp.group_id
                    WHERE gr.name= '" . $grid_name . "'";
        $results = $this->Helper_Model->_get_data($query);

        $truefalse = FALSE;

        foreach ($results as $row) {
            if ($row['admin_id'] == $userid)
                $truefalse = TRUE;
        }
        return $truefalse;
    }

    function get_allowed_grids($userid) {
        $query = "SELECT gr.name, gr.display_name
                    FROM bdnews_group_grid   gg
                    INNER JOIN bdnews_grids  gr  ON  gr.grid_id  = gg.grid_id
                    INNER JOIN bdnews_groups gp  ON  gp.group_id = gg.group_id
                    INNER JOIN bdnews_admins ad  ON  ad.group_id = gp.group_id
                    WHERE ad.admin_id= " . $userid;
        return $this->Helper_Model->_get_data($query);
    }

    function __construct() {
        parent::__construct();
    }

}
