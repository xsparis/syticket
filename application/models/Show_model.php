<?php
class Show_model extends CI_model {
    public function __construct(){
        $this->load->database();
    }

    public function get_all_shows(){
        $query = $this->db->get('shows');
        return $query->result_array();
    }
}