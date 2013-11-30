<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

Class app_model extends CI_Model
{

	public function __construct()
	{
		$dt = $this->db->get("tabel_rules");
		foreach($dt->result() as $d)
		{
			$GLOBALS[$d->tipe] = $d->content_setting;
		}
	}
	
	public function get_kode_buku()
	{
		$q = $this->db->query("select MAX(RIGHT(ID_Buku,5)) as kd_max from tabel_buku");
		$kd = "";
		if($q->num_rows()>0)
		{
			foreach($q->result() as $k)
			{
				$tmp = ((int)$k->kd_max)+1;
				$kd = sprintf("%05s", $tmp);
			}
		}
		else
		{
			$kd = "00001";
		}	
		return "KB".$kd;
	}

	public function get_kode_anggota()
	{
		$q = $this->db->query("select MAX(RIGHT(ID_Anggota,5)) as kd_max from tabel_anggota");
		$kd = "";
		if($q->num_rows()>0)
		{
			foreach($q->result() as $k)
			{
				$tmp = ((int)$k->kd_max)+1;
				$kd = sprintf("%05s", $tmp);
			}
		}
		else
		{
			$kd = "00001";
		}	
		return "KA".$kd;
	}
	
	function get_active_semester()
	{
		$this->db->select('id_semester');
		$this->db->where('nama_status', 1);
		return $this->db->get('tabel_semester');
	}

	function get_active_tahun()
	{
		$this->db->select('id_tahun');
		$this->db->where('status', 1);
		return $this->db->get('tabel_tahun');
	}
}
