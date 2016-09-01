<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class GroupsController extends MY_Controller {
	public function __construct()
	{
		parent::__construct();
	}
	public function index()
	{
		$pageSetting['query']['title']="Gruplar";
		$pageSetting['query']['status']=6;
		$this->load->view('../../assets/top',$pageSetting);
		$this->load->view('groups');
		$this->load->view('../../assets/bottom');
	}
}
