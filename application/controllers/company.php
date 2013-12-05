<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Company extends CI_Controller {

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
	    $this->twiggy->title()->append("Company");
		$this->twiggy->display();
	 }
	 
	 public function vision()
	 {
	    $this->twiggy->title()->append("Vision");
		$this->twiggy->display();
	 }
	 
	 public function mission()
     {
        $this->twiggy->title()->append("Mission");
		$this->twiggy->display();
     }

     public function management()
     {
        $this->twiggy->title()->append("Management");
		$this->twiggy->display();
     }

     public function values()
     {
        $this->twiggy->title()->append("Values");
		$this->twiggy->display();
     }

     public function contacts()

     {
        $this->twiggy->title()->append("Contacts");
		$this->twiggy->display();
     }

     public function support()

     {
        $this->twiggy->title()->append("Support");
		$this->twiggy->display();
     }

      public function careers()

      {
        $this->twiggy->title()->append("Careers");
		$this->twiggy->display();
      }	   
}
?>
