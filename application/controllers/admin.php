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


}