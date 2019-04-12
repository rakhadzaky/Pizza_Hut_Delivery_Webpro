<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		$this->load->view('v_header');
		$this->load->view('v_home');
	}
	public function register(){
		$this->load->library('form_validation');

		$this->form_validation->set_rules('firstName', 'First Name', 'required');
		$this->form_validation->set_rules('lastName', 'Last Name', 'required');
		$this->form_validation->set_rules('jk', 'Jenis Kelamin', 'required');
		$this->form_validation->set_rules('phone', 'Phone', 'required');
		$this->form_validation->set_rules('day', 'Day', 'required');
		$this->form_validation->set_rules('month', 'Month', 'required');
		$this->form_validation->set_rules('year', 'Year', 'required');
		$this->form_validation->set_rules('email', 'Email', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');

			if ($this->form_validation->run() == FALSE)
			{
				$this->load->view('v_header');
				$this->load->view('v_login');
			}
			else
			{
				$this->RegisterModel->RegisterUser();
				$this->session->set_flashdata('success', 'Register Success');
				redirect('index.php/Home/register');
			}
	}

	function aksi_login(){
		$this->load->library('form_validation');

		$this->form_validation->set_rules('email', 'Email', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');

		if ($this->form_validation->run() == FALSE)
			{
				$this->load->view('v_header');
				$this->load->view('v_masuk');
			}

		$email = $this->input->post('email');
		$password = $this->input->post('password');
		$where = array(
			'email' => $email,
			'password' => md5($password)
			);
		$cek = $this->RegisterModel->cek_login("tbuser",$where)->num_rows();
		if($cek > 0){

			$data_session = array(
				'nama' => $email,
				'status' => "login"
				);
 
			$this->session->set_userdata($data_session);
 
			redirect('index.php/Home');
 
		}else{
			echo "Username dan password salah !";
		}
	}
 
	function logout(){
		$this->session->sess_destroy();
		redirect(base_url('index.php/Home'));
	}

	


	public function edituser($first_name)
	{
		$data['tbuser'] = $this->RegisterModel->getUserByEmail($first_name);
		$this->load->library('form_validation');

		
		$this->form_validation->set_rules('email', 'Email', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');

			if ($this->form_validation->run() == FALSE)
			{
				$this->load->view('v_header');
				$this->load->view('v_edit');
			}
			else
			{
				$this->RegisterModel->ubahDataUser($first_name);
				$this->session->set_flashdata('success', 'Register Success');
				redirect('index.php/Home');
			}
	}

}
