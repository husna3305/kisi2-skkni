<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class peserta extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('mpeserta');
	}

	public function index()
	{
		$data['dataPeserta'] = $this->mpeserta->getPesertaAll()->result();
		$this->template->template('peserta/index',$data);
	}
	public function insert()
	{
		if (!!$this->input->post('nik')) {
			$data_insert[0]=array('nik' => $this->input->post('nik'),
									'nama' => $this->input->post('nama'),
									'noHp' => $this->input->post('noHp'),
									'email' => $this->input->post('email'),
									'idSkema' => $this->input->post('idSkema'),
									'tempatUjikom' => $this->input->post('tempatUjikom'),
									'rekomendasi' => $this->input->post('rekomendasi'),
									'tglTerbitSertifikat' => $this->input->post('tglTerbitSertifikat'),
									'tglLahir' => $this->input->post('tglLahir'),
									'organisasi' => $this->input->post('organisasi')
								);
			if ($this->mpeserta->insert($data_insert)) {
				echo "Sukses";
			}
		}else{
			$data['skema'] = $this->mpeserta->skemaSertifikasi()->result();
			$this->template->template('peserta/insert',$data);
		}
	}

	public function delete($nik=null)
	{
		if (!!$nik) {
			$data_insert[0];
			if ($this->mpeserta->insert($data_insert)) {
				echo "Sukses";
			}
		}else{
			redirect(site_url('peserta'),'refresh');
		}
	}
}
