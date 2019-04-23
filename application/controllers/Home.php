<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public $date = array('1','2','3','4','5','6','7','8','9','10','11','12','13','14','15','16','17','18','19','20','21','22','23','24','25','26','27','28','29','30','31');
	public $month = array('1','2','3','4','5','6','7','8','9','10','11','12');

	public function __construct()
	{
		parent::__construct();
		//load model "Mahasiswa_model"
		//load library form validation

		$this->load->model('RegisterModel');
		$this->load->model('FoodModel');
		$this->load->helper('form');
        $this->load->library('form_validation');
        $this->load->helper('url');
		$this->load->database();
		$this->load->library('googlemaps');
		$config=array();
		$config['center']="-6.973847, 107.630539";
		$config['zoom']=17;
		$config['map_height']="400px";
		$config['places'] = TRUE;
		$config['placesAutocompleteInputID'] = 'myPlaceTextBox';
		$config['placesAutocompleteBoundsMap'] = TRUE; // set results biased towards the maps viewport
		$config['placesAutocompleteOnChange'] = 'alert(\'You selected a place\');';
		$this->googlemaps->initialize($config);
		$marker=array();
		$marker['position']="-6.973847, 107.630539";
		$this->googlemaps->add_marker($marker);
	}


	public function index()
	{
        $data['map']=$this->googlemaps->create_map();
		$this->load->view('v_header',$data);
		$this->load->view('v_home');
		$this->load->view('v_footer');

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
				$data['map']=$this->googlemaps->create_map();
				$this->load->view('v_header',$data);
				$this->load->view('v_login');
				$this->load->view('v_footer');
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
				$data['map']=$this->googlemaps->create_map();
				$this->load->view('v_header',$data);
				$this->load->view('v_masuk');
				$this->load->view('v_footer');
			}else{
				$email = $this->input->post('email');
				$password = $this->input->post('password');
				$where = array(
					'email' => $email,
					'password' => md5($password)
					);
				$cek = $this->RegisterModel->cek_login("tbuser",$where)->num_rows();
				

				if($cek > 0){
					$data_user = $this->RegisterModel->get_akun($email);
					$data_session = array(
						'first_name' => $data_user['first_name'],
						'lastName' => $data_user['last_name'],
						'gender' => $data_user['gender'],
						'phone' => $data_user['phone'],
						'birth' => $data_user['birth'],
						'email' => $data_user['email'],
						'password' => $data_user['password'],
						'status' => "login"
						);
					$this->session->set_userdata($data_session);
					redirect('index.php/Home/loginsuccess');
		 
				}else{
					echo "Username dan password salah !";
					redirect('index.php/Home/aksi_login');
				}
			}

		
	}
 
	function logout(){
		$this->session->sess_destroy();
		redirect(base_url('index.php/Home'));
	}

	function loginsuccess(){
		$data['map']=$this->googlemaps->create_map();
		$this->load->view('v_header',$data);
		$this->load->view('v_logsuccess');
		$this->load->view('v_footer');
	}

	public function lihat_predetail(){
		$data['tbuser'] = $this->RegisterModel->get_akun($this->session->userdata("email"));
		$data['date'] = $this->date;
		$data['month'] = $this->month;
		$data['map']=$this->googlemaps->create_map();
		$this->load->view('v_header');
		$this->load->view('v_predetail', $data);
		$this->load->view('v_footer');
	}
	

	public function edituser(){
		$user = array(
			"first_name" => $this->input->post('firstName'),
			"last_name" => $this->input->post('lastName'),
			"gender" => $this->input->post('jk'),
            "phone" => $this->input->post('phone'),
            "birth" => $this->input->post('day') . "-" . $this->input->post('month') . "-" . $this->input->post('year'),
			"email" => $this->input->post('email'),
            "password" => md5($this->input->post('password'))
		
		);
		$email = $this->input->post('email');
		$akun = $this->RegisterModel->get_akun($email);
		$old_pass = md5($this->input->post('old-password'));
		if ($akun['password'] == $old_pass) {
			$this->RegisterModel->ubahDataUser($email,$user);
			redirect('index.php/Home');
		}else{
			$this->session->set_flashdata("failed","Old Password didn't match");
			redirect('index.php/Home/lihat_detail');
		}
	}

	public function food($food){
		$data['food'] = $this->FoodModel->categoryFood($food);
		$data['map']=$this->googlemaps->create_map();
		$this->load->view('v_header',$data);
		$this->load->view('v_list_category_food', $data);
		$this->load->view('v_footer');
	}

}
