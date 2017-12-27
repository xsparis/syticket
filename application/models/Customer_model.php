<?php
class Customer_model extends CI_model {
    
    public function create_customer(){
        $data = array(
            'address' => $id_customer,
            'nb_tickets' => $id_show
        );
        return $this->db->insert('customers',$data);
        //return $this->db->insert_id('customers',$data);
    }
}