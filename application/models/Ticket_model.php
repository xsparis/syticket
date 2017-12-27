<?php
class Ticket_model extends CI_model {
    public function __construct () {
        $this->load->database();
    }

    public function get_ticket($id_show,$num) {
        $table = 'tickets_show'.$id_show;
        $query = $this->db->get_where($table,array('number'=>$num));
        return $query->result_array();
    }
}