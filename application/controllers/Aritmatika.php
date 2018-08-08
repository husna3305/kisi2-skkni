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
		$this->template->template('aritmatika/content');
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
			echo ucwords(terbilang($x_rep)).'||'.$x;
		}
		elseif($this->input->post('aritmatika')=='-')
		{
			$angka1=$this->input->post('angka1');
			$angka2=$this->input->post('angka2');
			$x = kurang($angka1, $angka2);
			$x_rep = str_replace(".", ",", "$x");
			echo ucwords(terbilang($x_rep)).'||'.$x;
		}
		elseif($this->input->post('aritmatika')=='*')
		{
			$angka1=$this->input->post('angka1');
			$angka2=$this->input->post('angka2');
			$x = kali($angka1, $angka2);
			$x_rep = str_replace(".", ",", "$x");
			echo ucwords(terbilang($x_rep)).'||'.$x;
		}
		elseif($this->input->post('aritmatika')=='/')
		{
			$angka1=$this->input->post('angka1');
			$angka2=$this->input->post('angka2');
			$x = bagi($angka1, $angka2);
			//$x=4.99;
			$x_rep = str_replace(".", ",", "$x");
			echo ucwords(terbilang($x_rep)).'||'.$x;
		}
	}
}
