<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

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

	public function index()
	{
		$this->twiggy->title()->append("Mobile App Development");
		$this->twiggy->display('m_app_dev');
	}
}

/* End of file accounts.php */
/* Location: ./application/controllers/accounts.php */
?>

