<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Surat extends CI_Controller
{
    public function fakturPenjualan()
    {
        $data = [
            'title' => 'Faktur Penjualan | SisToko',
        ];
        $this->load->view('pages/surat/invoice', $data);
    }

    public function fakturPajak()
    {
        $data = [
            'title' => 'Faktur Penjualan | SisToko',
        ];
        $this->load->view('pages/surat/tax', $data);
    }
}
