<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Auth_login extends CI_Model 
	{

		public function getLoginData($data)
		{
			$stts = $data['stts'];
			if($stts=="administrator")
			{
				$login['username'] = mysql_real_escape_string($data['username']);
				$login['password'] = md5(mysql_real_escape_string($data['password'].'AppSimpeg32'));
				$login['stts']     = mysql_real_escape_string($data['stts']);
				$cek = $this->db->get_where('tabel_user', $login);
				if($cek->num_rows()>0)
				{
					foreach($cek->result() as $qad)
					{
						$sess_data['logged_in'] = 'yesGetMeLoginBaby';
						$sess_data['id_user'] = $qad->id_user_login;
						$sess_data['username'] = $qad->username;
						$sess_data['nama'] = $qad->nama_lengkap;
						$sess_data['stts'] = $qad->stts;
						$this->session->set_userdata($sess_data);
					}
					header('location:'.base_url().'');
				}
				else
				{
					$this->session->set_flashdata('result_login', 'username dan password salah.');
					header('location:'.base_url().'');
				}
			}
			else if($stts=="anggota")
			{
				$login['username'] = mysql_real_escape_string($data['username']);
				$login['password'] = md5(mysql_real_escape_string($data['password'].'#$aV(*)L!C4-5i'));
				$login['stts'] 	   = mysql_real_escape_string($data['stts']);
				$cek = $this->db->get_where('tabel_anggota', $login);
				if($cek->num_rows()>0)
				{
					foreach($cek->result() as $qad)
					{
						$sess_data['logged_in'] = 'yesGetMeLoginBaby';
						$sess_data['ID_Anggota'] = $qad->ID_Anggota;
						$sess_data['Username'] = $qad->Username;
						$sess_data['Nama'] = $qad->Nama;
						$sess_data['stts'] = $qad->stts;
						$this->session->set_userdata($sess_data);
					}
					header('location:'.base_url().'');
				}
				else
				{
					$this->session->set_flashdata('result_login', 'username dan password salah.');
					header('location:'.base_url().'');
				}
			}
			else if($stts=="siswa")
			{
				$login['username'] = mysql_real_escape_string($data['username']);
				$login['password'] = md5(mysql_real_escape_string($data['password'].'#$aV(*)L!C4-5i'));
				$login['stts']     = mysql_real_escape_string($data['stts']);
				$cek = $this->db->get_where('tabel_user', $login);
				if($cek->num_rows()>0)
				{
					foreach($cek->result() as $qad)
					{
						$sess_data['logged_in'] = 'yesGetMeLoginBaby';
						$sess_data['nis'] = $qad->nis;
						$sess_data['username'] = $qad->username;
						$sess_data['nama'] = $qad->nama;
						$sess_data['stts'] = $qad->stts;
						$this->session->set_userdata($sess_data);
					}
					header('location:'.base_url().'');
				}
				else
				{
					$this->session->set_flashdata('result_login', 'username dan password salah.');
					header('location:'.base_url().'');
				}
			}	
		}		
	}
