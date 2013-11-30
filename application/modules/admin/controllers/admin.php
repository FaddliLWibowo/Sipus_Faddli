<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Controller 
{
	
	public function index()
	{
		if($this->session->userdata('logged_in')!="" && $this->session->userdata('stts')=="administrator")
		{
			$this->load->view('template_admin');
			$this->load->view('admin/dashboard');
		}
		else
		{
			header('location:'.base_url().'');
		}
	}
}