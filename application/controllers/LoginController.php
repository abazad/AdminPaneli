<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LoginController extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model("LoginModel");
	}
	public function index()
	{
		if($this->session->userdata('login'))
		{
			$pageSetting['query']['title']="Ana Sayfa";
			$pageSetting['query']['status']=1;
			$this->load->view('../../assets/top',$pageSetting);
			$this->load->view('homepage');
			$this->load->view('../../assets/bottom');
		}
		else
		{
			$pageSetting['query']['title']="Admin Paneli";
			$this->load->view('login',$pageSetting);
		}
	}
	public function logIn()
	{
		$username=$this->input->post('username');
		$password=$this->input->post('password');
		$data=$this->LoginModel->login($username,$password);
		echo $data;
	}
	public function logOut()
	{
		@$this->session->sess_destroy();
		$pageSetting['query']['title']="Admin Paneli";
		$this->load->view('login',$pageSetting);
	}
}
