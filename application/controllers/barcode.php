<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Barcode extends CI_Controller 
{
  
  public function index()
  {
    if($this->session->userdata('logged_in')!="" && $this->session->userdata('stts')=="administrator")
    {
      
            $data['barcode_text'] = 'Text';
           
            $this->load->view('buku/barcode', $data);
        
    }
    else
    {
      header('location:'.base_url().'');
    }
  }
}
