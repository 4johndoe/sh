<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$data = array(
			'title' 	=> 'Home page',
			'heading' 	=> 'My Home Page'
			);

		$this->load->view('templates/header', $data);
		$this->load->view('templates/navbar');
		$this->load->view('templates/carousel');
		$this->load->view('templates/marketing');
		$this->load->view('templates/featurette');
		$this->load->view('templates/footer');
	}

	public function truck() {
		echo "truck";
	}
}
/*
 * header
 * navbar
 * carousel
 * marketing
 * featurette
 * footer
 */
