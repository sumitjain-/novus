<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

	
	public function index()
	{
		$this->load->view('welcome_message');
	}

	public function tw(){
		$this->load->spark('twiggy/0.8.5');
		$this->twiggy->title("Novus Software Services");
		$this->twiggy->display();
	}

	public function se(){
		$this->load->spark('twiggy/0.8.5');
		$this->twiggy->theme('services');
		$this->twiggy->title("Novus Software Services");
		$this->twiggy->meta('keywords', 'Novus, software, SEO, web, ERP, google partner');
		$this->twiggy->meta('description', 'Twiggy is an implementation of Twig template engine for CI');
		$this->twiggy->display();
		echo $this->twiggy->meta;
		
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */