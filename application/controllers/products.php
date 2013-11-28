<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Products extends CI_Controller {
     
	 public function index()
	 {
	 
	   $this->load->view('products');
	 }
	 
	 public function acharya()
	 {
	 
	   $this->load->view('acharya');
	 }
	 
	 public function acharyaCA()
     {

       $this->load->view('acharyaCA');
     }	   
}
?>