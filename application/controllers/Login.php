<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{
	public function index()
	{
		$data = [
			'title' => 'Login | SisToko',
		];
		$this->load->view('pages/loginpage', $data);
	}
}
