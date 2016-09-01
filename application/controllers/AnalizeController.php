<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AnalizeController extends MY_Controller {
	public function __construct()
	{
		parent::__construct();
	}
	public function index()
	{
		$pageSetting['query']['title']="İstatistik Bilgileri";
		$pageSetting['query']['status']=4;
		$this->load->view('../../assets/top',$pageSetting);
		$this->load->view('analize');
		$this->load->view('../../assets/bottom');
	}
	
}
