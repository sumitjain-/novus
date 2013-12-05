<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Products extends CI_Controller {

    public function __construct(){
	 	parent::__construct();
	 	$this->load->spark('twiggy/0.8.5');
		$this->twiggy->theme('services');
		$this->twiggy->title("Novus Software Services", "Services")->set_title_separator(" - ");
		$data['styles'] = array(site_url().'css/bootstrap.min.css', site_url().'css/bootstrap-theme.min.css',site_url().'css/style.css');
		$data['scripts'] = array(site_url().'js/jquery.js',site_url().'js/bootstrap.min.js', site_url().'js/script.js', site_url().'js/unslider.min.js');
		$this->twiggy->meta("keywords","N, a, b, c");
		$this->twiggy->set($data, NULL , TRUE);
		$this->twiggy->register_function('site_url');
	 }
     
	 public function index()
	 {
	    $this->twiggy->title()->append("Products");
		$this->twiggy->display();
	 }
	 
	 public function acharya()
	 {
	    $this->twiggy->title()->append("Acharya");
		$this->twiggy->display();
	 }
	 
	 public function acharyaca()
     {
        $this->twiggy->title()->append("AcharyaCA");
		$this->twiggy->display();
     }	   
}
?>