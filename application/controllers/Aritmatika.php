<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class aritmatika extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->helper('aritmatika');
		$this->load->helper('terbilang');
	}

	public function index()
	{
		$data['menus'] = $this->uri->segment(1);
		$this->template->template('aritmatika/content',$data);
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
			$angka3=$this->input->post('angka3');
			$x = tambah($angka1,$angka2, $angka3);
			$x = number_format($x,2,',','');
			$x_rep = str_replace(".", ",", "$x");
			echo ucwords(terbilang($x_rep)).'||'.$x;
		}
		elseif($this->input->post('aritmatika')=='-')
		{
			$angka1=$this->input->post('angka1');
			$angka2=$this->input->post('angka2');
			$angka3=$this->input->post('angka3');
			$x = kurang($angka1, $angka2,$angka3);
			$x = number_format($x,2,',','');
			$x_rep = str_replace(".", ",", "$x");
			echo ucwords(terbilang($x_rep)).'||'.$x;
		}
		elseif($this->input->post('aritmatika')=='*')
		{
			$angka1=$this->input->post('angka1');
			$angka2=$this->input->post('angka2');
			$angka3=$this->input->post('angka3');
			$x = kali($angka1, $angka2,$angka3);
			$x = number_format($x,2,',','');
			$x_rep = str_replace(".", ",", "$x");
			echo ucwords(terbilang($x_rep)).'||'.$x;
		}
		elseif($this->input->post('aritmatika')=='/')
		{
			$angka1=$this->input->post('angka1');
			$angka2=$this->input->post('angka2');
			$angka3=$this->input->post('angka3');
			$x = bagi($angka1, $angka2,$angka3);
			$x = number_format($x,2,',','');
			$x_rep = str_replace(".", ",", "$x");
			echo ucwords(terbilang($x_rep)).'||'.$x;
		}
	}
}
