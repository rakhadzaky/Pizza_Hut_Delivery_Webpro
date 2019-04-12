<?php
class RegisterModel extends CI_model
{
 
	

	public function RegisterUser()
	{
		$data = [
			"first_name" => $this->input->post('firstName', true),
			"last_name" => $this->input->post('lastName', true),
			"gender" => $this->input->post('jk', true),
            "phone" => $this->input->post('phone', true),
            "birth" => $this->input->post('day', true) . "-" . $this->input->post('month', true) . "-" . $this->input->post('year', true),
            "email" => $this->input->post('email', true),
            "password" => md5($this->input->post('password', true)),
		];
		return $this->db->insert('tbuser', $data);
	}

	public function getAllUser()
	{
		//use query builder to get data table "user"
		$this->db->select('*');
        $this->db->from('tbuser');
		$query=$this->db->get();
		
		return $query->result_array();
		
	}

	public function cariDataUser()
	{
		$keyword = $this->input->post('keyword', true);
		//use query builder class to search data mahasiswa based on keyword "nama" or "jurusan" or "nim" or "email"
		$this->db->like('first_name', $keyword, 'both');
		$this->db->or_like('last_name', $keyword, 'both');
		$this->db->or_like('gender', $keyword, 'both');
		$this->db->or_like('phone', $keyword, 'both');
		$this->db->or_like('birth', $keyword, 'both');
		$this->db->or_like('email', $keyword, 'both');
		$this->db->or_like('password', $keyword, 'both');
		return $this->db->get('tbuser')->result_array();

		//return data mahasiswa that has been searched
	}

	public function hapusDataUser($first_name)
	{
		//use query builder to delete data based on id 
		$this->db->where('first_name', $first_name);
		$this->db->delete('tbuser');
	}

	function cek_login($table,$where){		
		return $this->db->get_where($table,$where);
	}

		
	public function getUserByEmail($first_name)
	{
		
		return $this->db->get_where('tbuser', ['email' => $email])->row_array();

	}

	public function ubahDataUser($first_name)
	{
		$data = [
			"first_name" => $this->input->post('firstName', true),
			"last_name" => $this->input->post('lastName', true),
			"gender" => $this->input->post('jk', true),
            "phone" => $this->input->post('phone', true),
            "birth" => $this->input->post('day', true) . "-" . $this->input->post('month', true) . "-" . $this->input->post('year', true),
            "email" => $this->input->post('email', true),
            "password" => md5($this->input->post('password', true)),
		];
		//use query builder class to update data mahasiswa based on id
		$this->db->where('first_name', $first_name);
		return $this->db->update('tbuser', $data);
	}

	
}
