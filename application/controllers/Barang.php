<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Barang extends CI_Controller
{
    public function index()
    {
        $this->load->model('barang_model');
        $data = [
            'title' => 'Barang | SisToko',
        ];
        $data['row'] = $this->barang_model->getBarang();
        $this->load->view('pages/product/allproduct', $data);
    }
    public function addBarang()
    {
        $data = [
            'title' => 'Tambah Barang | SisToko',
        ];
        $this->load->view('pages/product/addproduct', $data);
    }
    public function detail($id)
    {
        $this->load->model('barang_model');
        $data = [
            'title' => 'Detail Barang | SisToko',
        ];
        $data['row'] = $this->barang_model->getBarang($id);
        $this->load->view('pages/product/detailproduct', $data);
    }
}
