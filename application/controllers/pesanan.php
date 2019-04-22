<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class pesanan extends CI_Controller {

    public function __construct()
	{
        parent::__construct();
        $this->load->model('OrderModel');
    }

    public function index(){
        $data['list_pesanan'] = $this->OrderModel->selectAll();
        $this->load->view('v_admin_pesanan',$data);
    }
    
    public function tambah_pesanan(){
        $data = [
            'no_rumah' => $this->input->post('address', true),
            'building' => $this->input->post('building', true),
            'type' => $this->input->post('type', true)
        ];
        $this->OrderModel->insert($data);
        $last = $this->OrderModel->selectLast();
        $this->session->set_userdata('order_id',$last['id']);
        redirect('index.php/home');
    }

}