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
	    $this->twiggy->title()->append("Retail IT Solutions");
		$this->twiggy->display('');
	 }
	 
	 public function med_IT_sol()
	 {
	    $this->twiggy->title()->append("Medical IT Solutions");
		$this->twiggy->display('');
	 }
	 
	 public function manuf_IT_sol()
	 {
	    $this->twiggy->title()->append("Manufacturing IT Solutions");
		$this->twiggy->display('');
	 }
	 
	 public function edu_inform_sys()
	 {
	    $this->twiggy->title()->append("Education Information Systems");
		$this->twiggy->display('');
	 }
	 
	 public function online_marketing()
	 {
	    $this->twiggy->title()->append("Online Marketing");
		$this->twiggy->display('');
	 }
	 
	 public function crm()
	 {
	    $this->twiggy->title()->append("Customer Relationship Management");
		$this->twiggy->display('');
	 }
	 
	 public function data_ware()
	 {
	    $this->twiggy->title()->append("Data Warehousing");
		$this->twiggy->display('');
	 }
	 
	 public function google_app_setup()
	 {
	    $this->twiggy->title()->append("Google apps For Business Setup");
		$this->twiggy->display('');
	 }
	 
	 public function msoffice_setup()
	 {
	    $this->twiggy->title()->append("MS Office 365 Setup & Maintenance");
		$this->twiggy->display('');
	 }
	 
	 public function erp()
	 {
	    $this->twiggy->title()->append("Enterprise Resource Planning");
		$this->twiggy->display('');
	 }
	 
	 public function product_management()
	 {
	    $this->twiggy->title()->append("Product LifeCycle Management");
		$this->twiggy->display('');
	 }
	 
	 public function scm()
	 {
	    $this->twiggy->title()->append("Supply Chain Management");
		$this->twiggy->display('');
	 }
	 
	 public function business_analysis()
	 {
	    $this->twiggy->title()->append("Business Analysis Services");
		$this->twiggy->display('');
	 }
	   
}
?>