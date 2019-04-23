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
            'type' => $this->input->post('type', true),
            'id_user' => $this->input->post('id_user', true),
            'status' => 'on_going',
        ];
        $this->OrderModel->insert($data);
        $last = $this->OrderModel->selectLast($this->session->userdata('id_user'));
        $this->session->set_userdata('order_id',$last['id']);
        $qty = 0;
        $this->session->set_userdata('order_qty', $qty);
        redirect('index.php/home');
    }

    public function add_to_cart($id_food){
        $this->OrderModel->addToCart($id_food, $this->session->userdata('order_id'));
        $qty = $this->session->userdata('order_qty');
        $qty++;
        $this->session->userdata('order_qty', $qty);
        redirect('index.php/home');
    }

    public function selectCart($id_pemesanan){
        $this->db->where('id_pemesanan', $id_pemesanan);
        return $this->db->get('tbchart')->result_array();
    }
}