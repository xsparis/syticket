<?php
class Order extends CI_Controller {
    public function __construct(){
        parent::_construct();
        $this->load->model('order_model');
        $this->load->model('customer_model');
        $this->load->model('ticket_model');
    }
    public function index () {
        $this->load->view('welcome_message');
    }

    public function create (){
        $this->load->library('form_validation');

        if ($this->form_validation->run() === FALSE) {
            $this->load->view('c_order');
        } else {
            // create customer, show et ticket
            $id_customer = $this->customer_model->create_customer();
            $id_show = $this->input->post('id_show');
            $id_ticket = $this->ticket_model->get_ticket_id($id_show);            
            // create order
            $res=$id_customer = $this->order_model->create_order($id_customer,$id_show,$id_ticket);
            // res
            if ($res != false) {
                $this->load->view('success');
            }
            $this->load->view('false');
            
        }
        
    }
}