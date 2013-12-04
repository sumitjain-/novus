<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Services extends CI_Controller {
     
	 public function __construct(){
	 	parent::__construct();
	 	$this->load->spark('twiggy/0.8.5');
		$this->twiggy->theme('services');
		$this->twiggy->title("Novus Software Services", "Services")->set_title_separator(" - ");
		$data['styles'] = array(site_url().'css/bootstrap.min.css', site_url().'css/bootstrap-theme.min.css',site_url().'css/style.css');
		$data['scripts'] = array(site_url().'js/jquery.js',site_url().'js/bootstrap.min.js', site_url().'js/script.js');
		$this->twiggy->set($data, NULL , TRUE);
		$this->twiggy->register_function('site_url');
	 }


	 public function m_app_dev()
	 {
	 	$this->twiggy->title()->append("Mobile App Development");
		$this->twiggy->display('m_app_dev');
	 }
	 
	 public function w_design_dev()
	 {
	 
	   $this->twiggy->title()->append("Web design and Web app development");
		$this->twiggy->display('');
	 }
	 
	 public function networking_services()
	 {
	 
	   	$this->twiggy->title()->append("Networking solutions");
		$this->twiggy->display('');
	 }
	 
	 public function bus_IT_sol()
	 {
	 
	   	$this->twiggy->title()->append("Business IT Solutions");
		$this->twiggy->display('');
	 }
	 
	 public function retail_IT_sol()
	 {
	 
	   $this->load->view('retail_IT_sol');
	 }
	 
	 public function med_IT_sol()
	 {
	 
	   $this->load->view('med_IT_sol');
	 }
	 
	 public function manuf_IT_sol()
	 {
	 
	   $this->load->view('manuf_IT_sol');
	 }
	 
	 public function edu_inform_sys()
	 {
	 
	   $this->load->view('edu_inform_sys');
	 }
	 
	 public function online_marketing()
	 {
	 
	   $this->load->view('online_marketing');
	 }
	 
	 public function crm()
	 {
	 
	   $this->load->view('crm');
	 }
	 
	 public function data_ware()
	 {
	 
	   $this->load->view('data_ware');
	 }
	 
	 public function google_app_setup()
	 {
	 
	   $this->load->view('google_app_setup');
	 }
	 
	 public function msoffice_setup()
	 {
	 
	   $this->load->view('msoffice_setup');
	 }
	 
	 public function erp()
	 {
	 
	   $this->load->view('erp');
	 }
	 
	 public function product_management()
	 {
	 
	   $this->load->view('product_management');
	 }
	 
	 public function scm()
	 {
	 
	   $this->load->view('scm');
	 }
	 
	 public function business_analysis()
	 {
	 
	   $this->load->view('bas');
	 }
	   
}
?>