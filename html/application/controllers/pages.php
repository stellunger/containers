<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Pages extends CI_Controller {
	
	public function index()
	{
		$this->load->view('header');
		$this->load->view('main');
		$this->load->view('footer');
	}
}

