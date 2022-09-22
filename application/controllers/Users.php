<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Users extends CI_Controller
{
    public function index()
    {
        $data = [
            'title' => 'Akun | SisToko',
        ];
        $this->load->view('pages/users/allusers', $data);
    }
}
