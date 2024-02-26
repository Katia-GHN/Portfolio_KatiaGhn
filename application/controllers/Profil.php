<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profil extends CI_Controller {


	public function index()
	{
		$this->load->view('template/header');
        $this->load->view('profil/profil');
		$this->load->view('template/footer');
	}
}