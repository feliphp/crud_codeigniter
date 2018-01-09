<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function __construct()
	{
			parent::__construct();
			$this->load->helper(array('form', 'url'));
			$this->load->library(array('session', 'form_validation'));
	}

	public function index()
	{
		$this->load->view('welcome_message');
	}
}
