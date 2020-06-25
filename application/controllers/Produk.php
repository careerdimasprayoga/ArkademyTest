<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Produk extends CI_Controller {

 	public function __construct() {
	 	parent::__construct();
		$this->load->model('M_produk');
	 }
	public function index() {
		$data['title']	= 'Data Produk';
		$data['produk'] = $this->M_produk->semuaData();
		$this->load->view('templates/header',$data);
		$this->load->view('pages/home',$data);
	}
	public function tambah() {
		$data['title'] = 'Tambah Produk';
		$this->form_validation->set_rules('nama_produk', 'Nama Produk', 'required');
		$this->form_validation->set_rules('keterangan', 'Keterangan', 'required');
		$this->form_validation->set_rules('harga', 'Harga', 'required|numeric');
		$this->form_validation->set_rules('jumlah', 'Jumlah', 'required|numeric');

		if($this->form_validation->run() == false) {
			$this->load->view('templates/header',$data);
			$this->load->view('pages/produk_tambah',$data);
		} else {
			$this->M_produk->tambahData();
			$this->session->set_flashdata('sementara','<div class="alert alert-success"role="alert">Data berhasil disimpan!</div>');
			redirect("produk/tambah");
		}
	}
	public function ubah($id) {
		$data['title']	= 'Ubah Produk';
		$data['produk'] = $this->M_produk->semuaDataID($id);
		$this->form_validation->set_rules('nama_produk', 'Nama Produk', 'required');
		$this->form_validation->set_rules('keterangan', 'Keterangan', 'required');
		$this->form_validation->set_rules('harga', 'Harga', 'required|numeric');
		$this->form_validation->set_rules('jumlah', 'Jumlah', 'required|numeric');
		// var_dump($data['produk']);
		if($this->form_validation->run() == false) {
			$this->load->view('templates/header',$data);
			$this->load->view('pages/produk_ubah',$data);
		} else {
			$this->M_produk->ubahData($id);
			$this->session->set_flashdata('sementara','<div class="alert alert-success"role="alert">Data berhasil diubah!</div>');
			redirect("produk");
		}
	}
	public function hapus($id) {
		$this->M_produk->hapusData($id);
		$this->session->set_flashdata('sementara','<div class="alert alert-success"role="alert">Data berhasil dihapus!</div>');
			redirect("produk");
	}
}

