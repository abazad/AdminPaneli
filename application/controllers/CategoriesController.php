<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CategoriesController extends MY_Controller {
	public function __construct()
	{
		parent::__construct();
	}
	public function index()
	{
		$pageSetting['query']['title']="Kategoriler";
		$pageSetting['query']['status']=5;
		$this->load->view('../../assets/top',$pageSetting);
		$this->load->view('categories');
		$this->load->view('../../assets/bottom');
	}
}
