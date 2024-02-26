<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Bts_sio extends CI_Controller {


	public function index()
	{
		$this->load->view('template/header');
        $this->load->view('bts_sio/bts_sio');
		$this->load->view('template/footer');
	}
}