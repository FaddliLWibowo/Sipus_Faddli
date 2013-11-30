<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Anggota extends CI_Controller 
{
	
	public function index()
	{
		if($this->session->userdata('logged_in')!="" && $this->session->userdata('stts')=="administrator")
		{
			$d['credit'] = $this->config->item('credit_aplikasi');
			$page=$this->uri->segment(4);
			$limit= $GLOBALS['site_limit_small'];
			if(!$page):
			$offset = 0;
			else:
			$offset = $page;
			endif;
			
			$d['tot']             = $offset;
			$tot_hal              = $this->db->get("tabel_anggota");
			$config['base_url']   = base_url() . 'admin/anggota/index/';
			$config['total_rows'] = $tot_hal->num_rows();
			$config['per_page']   = $limit;
			$config['uri_segment']= 4;
			$config['first_link'] = 'Awal';
			$config['last_link']  = 'Akhir';
			$config['next_link']  = 'Selanjutnya';
			$config['prev_link']  = 'Sebelumnya';
			$this->pagination->initialize($config);
			$d["paginator"]       =$this->pagination->create_links();
			$d['anggota']            = $this->db->get("tabel_anggota",$limit,$offset);
			$this->load->view('template_admin');
			$this->load->view('anggota/home',$d);
		}
		else
		{
			header('location:'.base_url().'');
		}
	}

	public function add()
	{
		if($this->session->userdata('logged_in')!="" && $this->session->userdata('stts')=="administrator")
		{
			$d['ID_Param']  = "";
			$d['Kode_Anggota'] = $this->app_model->get_kode_anggota();
			$d['Nama']     = "";
			$d['Username'] = "";
			$d['Password'] = "";
			$d['Jenis_Kelamin']  = "";
			$d['Alamat']   = "";
			$d['Tanggal_Daftar']       = "";
			$d['No_Telepon']     = "";
			$d['status']    = "Tambah";
			$this->load->view('template_admin');
			$this->load->view('anggota/add',$d);
		}
		else
		{
			header('location:'.base_url().'');
		}
	}

	public function save()
	{
		if($this->session->userdata('logged_in')!="" && $this->session->userdata('stts')=="administrator")
		{
			$id['ID_Anggota'] = $this->input->post("id_param");
			$status 	   =  $_POST["status"];
			if($status=="Edit")
				{
					$u['Kode_Anggota'] = $_POST["Kode_Anggota"];
					$u['Nama'] 	= $_POST["Nama"];
					$u['Username'] = $_POST["Username"];
					$u['Password'] 	= $_POST["Password"];
					$u['Jenis_Kelamin']  = $_POST["Jenis_Kelamin"];
					$u['Alamat'] 	= $_POST["Alamat"];
					$u['Tanggal_Daftar']       = $_POST["Tanggal_Daftar"];
					$u['No_Telepon'] 	= $_POST["No_Telepon"];

					$this->db->update("tabel_anggota",$u,$id);
					header('location:'.base_url().'admin/anggota');
				}
			else if ($status=="Tambah")
				{
					$u['Kode_Anggota'] = $_POST["Kode_Anggota"];
					$u['Nama'] 	= $_POST["Nama"];
					$u['Username'] = $_POST["Username"];
					$u['Password'] 	= $_POST["Password"];
					$u['Jenis_Kelamin']  = $_POST["Jenis_Kelamin"];
					$u['Alamat'] 	= $_POST["Alamat"];
					$u['Tanggal_Daftar']       = $_POST["Tanggal_Daftar"];
					$u['No_Telepon'] 	= $_POST["No_Telepon"];

					$this->db->insert("tabel_anggota",$u);
					header('location:'.base_url().'admin/anggota');
				}
		}
		else
		{
			header('location:'.base_url().'');
		}
	}
	public function edit()
	{
		if($this->session->userdata('logged_in')!="" && $this->session->userdata('stts')=="administrator")
		{
			
			$id['ID_Anggota'] = $this->uri->segment(4);
			$q = $this->db->get_where("tabel_anggota",$id);
			$u = array();
			foreach($q->result() as $f)
			{
				$u['ID_Param']  = $f->ID_Anggota;
				$u['Kode_Anggota'] = $f->Kode_Anggota;
				$u['Nama'] 	= $f->Nama;
				$u['Username'] = $f->Username;
				$u['Password'] 	=$f->Password;
				$u['Jenis_Kelamin']  = $f->Jenis_Kelamin;
				$u['Alamat'] 	= $f->Alamat;
				$u['Tanggal_Daftar']       = $f->Tanggal_Daftar;
				$u['No_Telepon'] 	= $f->No_Telepon;
			}
			$u['status'] = "Edit";
			$this->load->view('template_admin');
			$this->load->view('anggota/add',$u);
		}
		else
		{
			header('location:'.base_url().'');
		}
	}

	public function delete()
	{
		if($this->session->userdata('logged_in')!="" && $this->session->userdata('stts')=="administrator")
		{
			$id['ID_Anggota'] = $this->uri->segment(4);
			$this->db->delete("tabel_anggota",$id);
			header('location:'.base_url().'admin/anggota');
		}
		else
		{
			header('location:'.base_url().'');
		}
	}

	public function detail()
	{
		if($this->session->userdata('logged_in')!="" && $this->session->userdata('stts')=="administrator")
		{
			
			$id['ID_Anggota'] = $this->uri->segment(4);
			$q = $this->db->get_where("tabel_anggota",$id);
			$u = array();
			foreach($q->result() as $f)
			{
				$u['ID_Param']  = $f->ID_Anggota;
				$u['Kode_Anggota'] = $f->Kode_Anggota;
				$u['Nama'] 	= $f->Nama;
				$u['Username'] = $f->Username;
				$u['Password'] 	=$f->Password;
				$u['Jenis_Kelamin']  = $f->Jenis_Kelamin;
				$u['Alamat'] 	= $f->Alamat;
				$u['Tanggal_Daftar']       = $f->Tanggal_Daftar;
				$u['No_Telepon'] 	= $f->No_Telepon;
			}
			$u['status'] = "Edit";
			$this->load->view('template_admin');
			$this->load->view('anggota/detail',$u);
		}
		else
		{
			header('location:'.base_url().'');
		}
	}

	public function search()
	{
		if($this->session->userdata('logged_in')!="" && $this->session->userdata('stts')=="administrator")
		{
			if($this->input->post("cari")=="")
			{
				$kata = $this->session->userdata('kata');
			}
			else
			{
				$sess_data['kata'] = $this->input->post("cari");
				$this->session->set_userdata($sess_data);
				$kata = $this->session->userdata('kata');
			}
			
			$page=$this->uri->segment(4);
			$limit= $GLOBALS['site_limit_medium'];
			if(!$page):
			$offset = 0;
			else:
			$offset = $page;
			endif;
			
			$d['tot'] = $offset;
			$tot_hal = $this->db->query("select * from tabel_anggota where Nama like '%".$kata."%' ");
			$config['base_url']   = base_url() . 'admin/anggota/index/';
			$config['total_rows'] = $tot_hal->num_rows();
			$config['per_page'] = $limit;
			$config['uri_segment'] = 4;
			$config['first_link'] = 'Awal';
			$config['last_link'] = 'Akhir';
			$config['next_link'] = 'Selanjutnya';
			$config['prev_link'] = 'Sebelumnya';
			$this->pagination->initialize($config);
			$d["paginator"] =$this->pagination->create_links();
			$d['buku'] = $this->db->query("select * from tabel_anggota where Nama like '%".$kata."%' limit ".$offset.",".$limit."");
			$this->load->view('template_admin');
			$this->load->view('anggota/home',$d);
		}
		else
		{
			header('location:'.base_url().'');
		}
	}

	public function delete_all()
	{
		if($this->session->userdata('logged_in')!="" && $this->session->userdata('stts')=="administrator")
		{
			for($i = 0; $i <count($_POST["chk"]); $i++)
					{
						$in  = $_POST['chk'][$i];
						$this->db->delete('tabel_anggota','ID_Anggota in ('.$in.')');
					}
				header('location:'.base_url().'admin/anggota');
		}
		else
		{
			header('location:'.base_url().'');
		}
	}
}