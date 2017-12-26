<?php
class Order_model extends CI_model {
    public function __construct () {
        $this->load->database();
    }

    public function get_all_orders () {
        $query = $this->db->get('orders');
        return $query->result_array();
    }

    public function create_order ($id_customer = false, $id_show = false, $id_ticket = false) {
        if ($id_customer === false || $id_show === false || $id_ticket === false) {
            return false;
        }
        $data = array(
            'id_customer' => $id_customer,
            'id_show' => $id_show,
            'id_ticket' => $id_ticket,
            'datatime' => time(),
            'status' => $this->input->post('status'),
            'data_send' => mktime(0,0,0,0,0,0)
            // 时分秒月日年
        );
        return $this->db->insert('orders',$data);
        //return $this->db->insert_id('orders',$data);
    }






    public function get_orders_by_customer ($customer=false){
        if ($customer===false){
            return false;
        }
        //...
    }

    public function get_orders_by_ticket ($ticket=false){
        if ($ticket===false){
            return false;
        }
        //...
    }
}