<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Page_Principale extends CI_Controller {


	public function index()
	{
		$this->load->view('template/header');
        $this->load->view('page_principale');
		$this->load->view('template/footer');
	}
}