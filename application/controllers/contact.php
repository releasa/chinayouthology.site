<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Contact extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$data['css'] = 'contact';
		$data['menu'] = 'contact';

		$this->load->view('contact', $data);
	}

}

