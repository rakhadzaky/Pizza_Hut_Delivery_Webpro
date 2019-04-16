<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class admin extends CI_Controller {

	
public function __construct()
	{
		parent::__construct();
		//load model "Mahasiswa_model"
		//load library form validation

		$this->load->model('RegisterModel');
		$this->load->library('form_validation');
		$this->load->model('FoodModel');
	}

public function index()
	{
		
		$data['judul'] = 'Daftar User';
		$data['user'] = $this->RegisterModel->getAllUser();
		if ($this->input->post('keyword')) {
			$data['user'] = $this->RegisterModel->cariDataUser();
		}
		$this->load->view('v_admin', $data);
		
	}

public function hapus($email)
	{
		$this->RegisterModel->hapusDataUser($email);
		$data['user'] = $this->RegisterModel->hapusDataUser($email);
		$this->session->set_flashdata('flash','delete success'); 
		redirect('admin');

	}

public function detail($email)
{
	$this->load->view('v_header');
	$this->load->view('v_detail');
	$this->RegisterModel->getUserByEmail($email);
	$data['user'] = $this->RegisterModel->getUserByEmail($email);
	$this->load->view('admin/detail', $data);
}

	public function list_food(){
		$data['foods'] = $this->FoodModel->getAllFood();
		$this->load->view('v_admin_listFood', $data);
	}
	public function add_food(){
		$this->load->library('form_validation');

		$this->form_validation->set_rules('food_name','Food Name','required');
		$this->form_validation->set_rules('desc','Description','required');
		$this->form_validation->set_rules('price','Price','required');
		$this->form_validation->set_rules('category','Category','required');

		if ($this->form_validation->run() == false) {
			$this->load->view('v_admin_addFood');
		}else{
			$config['upload_path']          = './uploads/';
			$config['allowed_types']        = 'gif|jpg|png';
			$config['max_size']             = 1000;
			$config['max_width']            = 1024;
			$config['max_height']           = 768;

			$this->load->library('upload', $config);
			
			if ( ! $this->upload->do_upload('img'))
                {
                        $error = array('error' => $this->upload->display_errors());
                        $this->load->view('V_admin_addFood', $error);
                }
                else
                {
						$upload_data = $this->upload->data();
						$data = array(
							'nama' => $this->input->post('food_name'),
							'deskripsi' => $this->input->post('desc'),
							'harga' => $this->input->post('price'),
							'kategori' => $this->input->post('category'),
							'gambar' => $upload_data['file_name']
						);
						$this->FoodModel->insertFood($data);
						$this->session->set_flashdata('success','insert food success');
						redirect('index.php/admin/list_food');
                }
		}
	}

}