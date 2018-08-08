<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class peserta extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('mpeserta');
	}

	public function insert()
	{
		if (!!$this->input->post('submit')) {
			# code...
		}else{
			$data['skema'] = $this->mpeserta->skemasertifikasi()->result();
			$this->template->template('peserta/insert',$data);
		}
	}

	public function hitung()
	{
		if (!$this->input->post('aritmatika')) 
		{
			redirect(site_url('aritmatika'),'refresh');
		}
		elseif($this->input->post('aritmatika')=='+')
		{
			$angka1=$this->input->post('angka1');
			$angka2=$this->input->post('angka2');
			$x = tambah($angka1, $angka2);
			$x_rep = str_replace(".", ",", "$x");
			echo ucwords(number_to_words($x_rep)).'||'.$x;
		}
		elseif($this->input->post('aritmatika')=='-')
		{
			$angka1=$this->input->post('angka1');
			$angka2=$this->input->post('angka2');
			$x = kurang($angka1, $angka2);
			$x_rep = str_replace(".", ",", "$x");
			echo ucwords(number_to_words($x_rep)).'||'.$x;
		}
		elseif($this->input->post('aritmatika')=='*')
		{
			$angka1=$this->input->post('angka1');
			$angka2=$this->input->post('angka2');
			$x = kali($angka1, $angka2);
			$x_rep = str_replace(".", ",", "$x");
			echo ucwords(number_to_words($x_rep)).'||'.$x;
		}
		elseif($this->input->post('aritmatika')=='/')
		{
			$angka1=$this->input->post('angka1');
			$angka2=$this->input->post('angka2');
			$x = bagi($angka1, $angka2);
			$x_rep = str_replace(".", ",", "$x");
			echo ucwords(number_to_words($x_rep)).'||'.$x;
		}
	}
}
