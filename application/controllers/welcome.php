<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {


	public function __construct(){
		parent::__construct();
		$this->load->spark('twiggy/0.8.5');
		$this->twiggy->theme('welcome');
		$this->twiggy->title("Novus Software Services");
		$this->twiggy->register_function('site_url');

	}
	
	public function index()
	{

		$this->twiggy->display('welcome-basic');
	}


}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */