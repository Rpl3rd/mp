<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main_model extends CI_Model {

	public function login()
	{
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		
		$this->db->select('id_users, id_lembaga, nama_lengkap, jkl, foto, username, password, email, level, cp, create_date');
		$this->db->from('users');
		$this->db->where('username', $username);
		$this->db->where('password', $password);
		$this->db->limit(1);
		 
		$query = $this->db->get();
		
		if($query->num_rows() != 0)
		{
		  $result = $query->result();
		  if($result)
		  {
		    foreach($result as $row)
		    {
		      if ($row->foto != '' || $row->foto != null) {
	         	$foto = $row->foto;
	          }else{
	          	$foto = "default.png";
	          }

	          $ultah = explode(" ", $row->create_date);
	          $date = explode("-", $ultah[0]);
	          $tgl = new DateTime();
	          $tgl->setDate($date[0], $date[1], $date[2]);
	          $birthday = $tgl->format('M').", ".$date[0];

		      $sess_array = array(
		        'uid' => $row->id_users,
		        'idlem' => $row->id_lembaga,
		        'nama' => $row->nama_lengkap,
		        'kelamin' => $row->jkl,
		        'foto' => $foto,
		        'username' => $row->username,
		        'password' => $row->password,
		        'email' => $row->email,
		        'level' => $row->level,
		        'contact' => $row->cp,
		        'birthday' => $birthday
		      );
		      $this->session->set_userdata($sess_array);
		    }
		    redirect('home','refresh');
		  }
		  else
		  {
		    $this->session->set_flashdata('login', 'Harap cek kembali username dan password anda.');
		    redirect('main/masuk','refresh');
		  }
		}
		else
		{
		  $this->session->set_flashdata('login', 'Harap cek kembali username dan password anda.');
		  redirect('main/masuk','refresh');
		}
	}
	
	public function daftar()
	{
		$insert = array(
			'nama_lengkap' => $this->input->post('fname')." ".$this->input->post('lname'),
			'jkl' => $this->input->post('jekel'),
			'username' => $this->input->post('uname'),
			'password' => $this->input->post('pword'),
			'email' => $this->input->post('email'),
			'level' => 'siswa',
			'cp' => $this->input->post('conpers'),
			'status' => '1'
			);
		$create = $this->db->insert('users', $insert);
		if ($create == false) {
			$this->session->set_flashdata('regret', "Something went wrong.");
			redirect('main/daftar','refresh');
		}else{
			$this->session->set_flashdata('login', "Pendaftaran berhasil! Silahkan login.");
			redirect('main/masuk','refresh');
		}
	}

	function uploadkelas($nama_kelas,$foto, $deskripsi){
		// $simpan=$this->db->query("INSERT INTO `dbmp`.`kelas` (`id_kelas`, `id_lembaga`, `nama_kelas`, `foto`, `deskripsi`) VALUES (NULL, NULL, '$nama_kelas', '$foto', '$deskripsi')");
		$val = array(
				'id_kelas' => NULL,
				'id_lembaga' => NULL,
				'nama_kelas' => $nama_kelas,
				'foto' => $foto,
				'deskripsi' => $deskripsi
				);
		$this->db->insert('kelas', $val);
	    return site_url('home/kelas'); 
	}

	public function tanya()
	{
		echo "Title : ".$this->input->post('title');
		echo "Konten : ".$this->input->post('konten');
		echo "Tags : ".$this->input->post('tag');
	} 

}

/* End of file main_model.php */
/* Location: ./application/models/main_model.php */