<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Company extends CI_Controller {
     
	 public function index()
	 {
	 
	   $this->load->view('company');
	 }
	 
	 public function vision()
	 {
	 
	   $this->load->view('vision');
	 }
	 
	 public function mission()
     {

       $this->load->view('mission');
     }

     public function management()
     {

       $this->load->view('management');
     }

     public function values()
     {

       $this->load->view('values');
     }

     public function contacts()

     {

       $this->load->view('contacts');
     }

     public function support()

     {

       $this->load->view('support');
     }

      public function careers()

      {

       $this->load->view('careers');
      }	   
}
?>
