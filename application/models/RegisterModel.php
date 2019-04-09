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

	public function hapusDataMahasiswa($id)
	{
		//use query builder to delete data based on id 
		$this->db->where('id', $id);
		$this->db->delete('mahasiswa');
	}

	public function getMahasiswaById($id)
	{
		//get data mahasiswa based on id 
		$this->db->where('id', $id);
		return $this->db->get('mahasiswa')->row_array();

	}

	public function ubahDataMahasiswa($id)
	{
		$data = [
			"nama" => $this->input->post('nama', true),
			"nim" => $this->input->post('nim', true),
			"email" => $this->input->post('email', true),
			"jurusan" => $this->input->post('jurusan', true),
		];
		//use query builder class to update data mahasiswa based on id
		$this->db->where('id', $id);
		return $this->db->update('mahasiswa', $data);
	}

	public function cariDataMahasiswa()
	{
		$keyword = $this->input->post('keyword', true);
		//use query builder class to search data mahasiswa based on keyword "nama" or "jurusan" or "nim" or "email"
		$this->db->like('nama', $keyword, 'both');
		$this->db->or_like('jurusan', $keyword, 'both');
		$this->db->or_like('nim', $keyword, 'both');
		$this->db->or_like('email', $keyword, 'both');
		return $this->db->get('mahasiswa')->result_array();



		//return data mahasiswa that has been searched
	}
}
