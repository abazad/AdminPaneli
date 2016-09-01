<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ProductController extends MY_Controller {
	public function __construct()
	{
		parent::__construct();
	}
	public function index()
	{
		$pageSetting['query']['title']="Ürünler";
		$pageSetting['query']['status']=3;
		$this->load->view('../../assets/top',$pageSetting);
		$this->load->view('product');
		$this->load->view('../../assets/bottom');
	}
}
