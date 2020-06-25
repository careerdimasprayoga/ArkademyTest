<?php

class M_produk extends CI_model {

	public function semuaData() {
		return $this->db->get('produk')->result_array();
	}
	public function semuaDataID($id) {
		return $this->db->get_where('produk', array('id' => $id))->row_array();
	}
	public function tambahData() {
		$data = [
			"nama_produk" 	=> $this->input->post('nama_produk'),
			"keterangan" 	=> $this->input->post('keterangan'),
			"harga" 		=> $this->input->post('harga'),
			"jumlah" 		=> $this->input->post('jumlah')
		];
		$this->db->insert('produk', $data);
	}
	public function ubahData($id) {
		$data = [
			"nama_produk" 	=> $this->input->post('nama_produk'),
			"keterangan" 	=> $this->input->post('keterangan'),
			"harga" 		=> $this->input->post('harga'),
			"jumlah" 		=> $this->input->post('jumlah')
		];
		$this->db->where('id', $id);
		$this->db->update('produk', $data);
	}
	public function hapusData($id) {
		$this->db->where('id', $id);
		$this->db->delete('produk');
	}
}
?>