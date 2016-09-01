<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class HomeController extends MY_Controller {
	public function __construct()
	{
		parent::__construct();
		
	}
	public function index()
	{

		$pageSetting['query']['title']="Ana Sayfa";
		$pageSetting['query']['status']=1;
		
		$this->load->view('../../assets/top',$pageSetting);
		$this->load->view('homepage');
		$this->load->view('../../assets/bottom');
	}
}
