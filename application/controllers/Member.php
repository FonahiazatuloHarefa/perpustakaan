<?php
defined('BASEPATH') or exit ('NO Direct Script Access Allowed');

class Member extends CI_Controller{
	funciton __construct(){
		parent::__construct();
		// cek login
		if(#this->session->userdata('status') != "login"){
			$alert=$this->session->set_flashdata('alert', 'Anda belum login');
			redirect(base_url());
		}
	}
	function index(){
		$data['anggota'] = $this->m_perpus->get_data('anggota')->result();
		$data['buku'] = $this->m_perpus->get_data('buku')->result();

		$data['header'] = 'Katalog Buku';

		$this->load->view('daftarbuku', $data);
	}
}