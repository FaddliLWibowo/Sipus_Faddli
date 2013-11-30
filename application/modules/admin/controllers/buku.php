<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Buku extends CI_Controller 
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
			$tot_hal              = $this->db->get("tabel_buku");
			$config['base_url']   = base_url() . 'admin/buku/index/';
			$config['total_rows'] = $tot_hal->num_rows();
			$config['per_page']   = $limit;
			$config['uri_segment']= 4;
			$config['first_link'] = 'Awal';
			$config['last_link']  = 'Akhir';
			$config['next_link']  = 'Selanjutnya';
			$config['prev_link']  = 'Sebelumnya';
			$this->pagination->initialize($config);
			$d["paginator"]       =$this->pagination->create_links();
			$d['buku']            = $this->db->get("tabel_buku",$limit,$offset);
			$this->load->view('template_admin');
			$this->load->view('buku/home',$d);
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
			$d['Kode_Buku'] = $this->app_model->get_kode_buku();
			$d['Judul']     = "";
			$d['Pengarang'] = "";
			$d['Penerbit']  = "";
			$d['Halaman']   = "";
			$d['Rak']       = "";
			$d['Stock']     = "";
			$d['status']    = "Tambah";
			$this->load->view('template_admin');
			$this->load->view('buku/add',$d);
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
			$id['ID_Buku'] = $this->input->post("id_param");
			$status 	   =  $_POST["status"];
			if($status=="Edit")
				{
					$u['Kode_Buku'] = $_POST["Kode_Buku"];
					$u['Judul'] 	= $_POST["Judul"];
					$u['Pengarang'] = $_POST["Pengarang"];
					$u['Judul'] 	= $_POST["Judul"];
					$u['Penerbit']  = $_POST["Penerbit"];
					$u['Halaman'] 	= $_POST["Halaman"];
					$u['Rak']       = $_POST["Rak"];
					$u['Stock'] 	= $_POST["Stock"];

					$this->db->update("tabel_buku",$u,$id);
					header('location:'.base_url().'admin/buku');
				}
			else if ($status=="Tambah")
				{
					$u['Kode_Buku'] = $_POST["Kode_Buku"];
					$u['Judul'] 	= $_POST["Judul"];
					$u['Pengarang'] = $_POST["Pengarang"];
					$u['Judul'] 	= $_POST["Judul"];
					$u['Penerbit']  = $_POST["Penerbit"];
					$u['Halaman'] 	= $_POST["Halaman"];
					$u['Rak']       = $_POST["Rak"];
					$u['Stock'] 	= $_POST["Stock"];
					$this->db->insert("tabel_buku",$u);
					header('location:'.base_url().'admin/buku');
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
			
			$id['ID_Buku'] = $this->uri->segment(4);
			$q = $this->db->get_where("tabel_buku",$id);
			$u = array();
			foreach($q->result() as $f)
			{
				$u['ID_Param']  = $f->ID_Buku;
				$u['Kode_Buku'] = $f->Kode_Buku;
				$u['Judul'] 	= $f->Judul;
				$u['Pengarang'] = $f->Pengarang;
				$u['Penerbit']  = $f->Penerbit;
				$u['Halaman'] 	= $f->Halaman;
				$u['Rak']       = $f->Rak;
				$u['Stock'] 	= $f->Stock;
			}
			$u['status'] = "Edit";
			$this->load->view('template_admin');
			$this->load->view('buku/add',$u);
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
			$id['ID_Buku'] = $this->uri->segment(4);
			$this->db->delete("tabel_buku",$id);
			header('location:'.base_url().'admin/buku');
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
			
			$id['ID_Buku'] = $this->uri->segment(4);
			$q = $this->db->get_where("tabel_buku",$id);
			$u = array();
			foreach($q->result() as $f)
			{
				$u['ID_Param']  = $f->ID_Buku;
				$u['Kode_Buku'] = $f->Kode_Buku;
				$u['Judul'] 	= $f->Judul;
				$u['Pengarang'] = $f->Pengarang;
				$u['Penerbit']  = $f->Penerbit;
				$u['Halaman'] 	= $f->Halaman;
				$u['Rak']       = $f->Rak;
				$u['Stock'] 	= $f->Stock;
			}
			$u['status'] = "Edit";
			$this->load->view('template_admin');
			$this->load->view('buku/detail',$u);
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
			$tot_hal = $this->db->query("select * from tabel_buku where Judul like '%".$kata."%' ");
			$config['base_url']   = base_url() . 'admin/buku/index/';
			$config['total_rows'] = $tot_hal->num_rows();
			$config['per_page'] = $limit;
			$config['uri_segment'] = 4;
			$config['first_link'] = 'Awal';
			$config['last_link'] = 'Akhir';
			$config['next_link'] = 'Selanjutnya';
			$config['prev_link'] = 'Sebelumnya';
			$this->pagination->initialize($config);
			$d["paginator"] =$this->pagination->create_links();
			$d['buku'] = $this->db->query("select * from tabel_buku where Judul like '%".$kata."%' limit ".$offset.",".$limit."");
			$this->load->view('template_admin');
			$this->load->view('buku/home',$d);
		}
		else
		{
			header('location:'.base_url().'');
		}
	}
}