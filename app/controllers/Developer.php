<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Developer extends CI_Controller
{
	public function index()
	{
		$data['title'] = 'Halaman Developer';
		$this->load->view('pages/developer/devloginPage', $data);
	}
}
