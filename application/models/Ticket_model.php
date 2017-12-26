<?php
class Ticket_model extends CI_model {
    public function __construct () {
        $this->load->database();
    }

    public function get_ticket_id($id_show,$number) {
        //select id from tickets where numebr=number;
        //$this->db->get

    }
}