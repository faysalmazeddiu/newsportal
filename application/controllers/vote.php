<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class CAjaxPoll extends CI_Controller {

    function setup() {
        $this->items = array();
        $this->result = 'OK';
        $temp = $this->Votes_Model->get();
        $this->vote_id = $temp[0]['vote_id'];
    }

    function read_vote() {
        $this->items['yes'] = $this->Votes_Model->get_total($this->vote_id, 'yes');
        $this->items['no'] = $this->Votes_Model->get_total($this->vote_id, 'no');
        $this->items['none'] = $this->Votes_Model->get_total($this->vote_id, 'none');
    }

    function vote2() { // Increments Yes, No, None fields in DB by 1
        if (isset($_REQUEST['item_tid']))
            $ynn = $_REQUEST['item_tid'];

        if (!empty($ynn))
            $this->Votes_Model->cast_vote($this->vote_id, $ynn);

        $this->read_vote();

        return true;
    }

    function vote() {
        $ret = array();
        $ret[] = "cmd:'vote'";

        if ($this->vote2()) {
            if (count($this->items) > 0) {
                $ix = array();
                foreach ($this->items as $key => $val) {
                    $ix[] = $key . ":" . $val;
                }
                $json_items = "{" . implode(",", $ix) . "}";
            } else {
                $json_items = "{}";
            }
            $ret[] = "items:{$json_items}";
        }
        $ret[] = "result:'" . $this->result . "'";

        $json = "{" . implode(",", $ret) . "}";

        echo $json;
    }

    function process($cmd) {
        switch ($cmd) {
            case 'vote':
                $this->vote();
                break;
        }
    }

    public function __construct() {
        parent::__construct();
        $this->load->model('Votes_Model');
    }

}

?>
