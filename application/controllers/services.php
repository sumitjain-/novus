<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Services extends CI_Controller {
     
	 public function __construct(){
	 	parent::__construct();
	 	$this->load->spark('twiggy/0.8.5');
		$this->twiggy->title("Novus Software Services", "Services")->set_title_separator(" - ");
		$data['styles'] = array(site_url().'css/bootstrap.min.css', site_url().'css/bootstrap-theme.min.css',site_url().'css/style.css');
		$data['scripts'] = array(site_url().'js/jquery.js',site_url().'js/bootstrap.min.js', site_url().'js/script.js');
		$this->twiggy->set($data, NULL , TRUE);
		$this->twiggy->register_function('site_url');
	 }


	 public function m_app_dev()
	 {
	 	$this->twiggy->title()->append("Mobile App Development");
		$this->twiggy->display('services/m_app_dev');
	 }
	 
	 public function w_des_dev()
	 {
	 
	   $this->twiggy->title()->append("Web design and Web app development");
		$this->twiggy->display('services/w_des_dev');
	 }
	 
	 public function networking_services()
	 {
	 
	   	$this->twiggy->title()->append("Networking solutions");
		$this->twiggy->display('services/networking_services');
	 }
	 
	 public function bus_IT_sol()
	 {
	 
	   	$this->twiggy->title()->append("Business IT Solutions");
		$this->twiggy->display('services/bus_IT_sol');
	 }
	 
	 public function retail_IT_sol()
	 {
	    $this->twiggy->title()->append("Retail IT Solutions");
		$this->twiggy->display('services/retail_IT_sol');
	 }
	 
	 public function med_IT_sol()
	 {
	    $this->twiggy->title()->append("Medical IT Solutions");
		$this->twiggy->display('services/med_IT_sol');
	 }
	 
	 public function manuf_IT_sol()
	 {
	    $this->twiggy->title()->append("Manufacturing IT Solutions");
		$this->twiggy->display('services/manuf_IT_sol');
	 }
	 
	 public function edu_inform_sys()
	 {
	    $this->twiggy->title()->append("Education Information Systems");
		$this->twiggy->display('services/edu_infor_sys');
	 }
	 
	 public function online_marketing()
	 {
	    $this->twiggy->title()->append("Online Marketing");
		$this->twiggy->display('services/online_marketing');
	 }
	 
	 public function crm()
	 {
	    $this->twiggy->title()->append("Customer Relationship Management");
		$this->twiggy->display('services/crm');
	 }
	 
	 public function data_ware()
	 {
	    $this->twiggy->title()->append("Data Warehousing");
		$this->twiggy->display('services/data_ware');
	 }
	 
	 public function google_app_setup()
	 {
	    $this->twiggy->title()->append("Google apps For Business Setup");
		$this->twiggy->display('services/google_app_setup');
	 }
	 
	 public function msoffice_setup()
	 {
	    $this->twiggy->title()->append("MS Office 365 Setup & Maintenance");
		$this->twiggy->display('services/msoffice_setup');
	 }
	 
	 public function erp()
	 {
	    $this->twiggy->title()->append("Enterprise Resource Planning");
		$this->twiggy->display('services/erp');
	 }
	 
	 public function product_management()
	 {
	    $this->twiggy->title()->append("Product LifeCycle Management");
		$this->twiggy->display('services/product_management');
	 }
	 
	 public function scm()
	 {
	    $this->twiggy->title()->append("Supply Chain Management");
		$this->twiggy->display('services/scm');
	 }
	 
	 public function bas()
	 {
	    $this->twiggy->title()->append("Business Analysis Services");
		$this->twiggy->display('services/bas');
	 }
	   
}
?>