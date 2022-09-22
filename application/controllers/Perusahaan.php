<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Perusahaan extends CI_Controller
{
    public function index()
    {
        $data = [
            'title' => 'Perusahaan | SisToko',
        ];
        $this->load->view('pages/company/allcompany', $data);
    }
}
