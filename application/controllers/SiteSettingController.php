<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SiteSettingController extends MY_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model("SiteSettingsModel");
		
	}
	public function index()
	{
		$pageSetting['query']['title']="Site Ayarları";
		$pageSetting['query']['status']=2;
		$this->load->view('../../assets/top',$pageSetting);
		$data['settings']=$this->SiteSettingsModel->settingGet();
		$this->load->view('sitesetting',$data);
		$this->load->view('../../assets/bottom');
	}
	public function settingSave()
	{
		$title=$this->input->post('titles');
		$descriptions=$this->input->post('descriptions');
		$keywords=$this->input->post('keywords');
		$location=$this->input->post('location');
		$check=$this->input->post('check');
		$data=$this->SiteSettingsModel->settingSave($title,$descriptions,$keywords,$location,$check);
		echo $data;
	}
	function sendMail()
	{
		$this->load->library('email');
		$configGmail = array(
			'protocol' => 'smtp',
			'smtp_host' => 'mail.yazilimciakli.com',
			'smtp_port' => 25,
			'smtp_user' => 'onderveli@yazilimciakli.com',
			'smtp_pass' => 'YazilimciAkli*23',
			'mailtype' => 'html',
			'charset' => 'utf-8',
			'newline' => "\r\n",
			'validation' => true
		);
        $this->email->initialize($config);
        $this->email->from($this->session->userdata('email'),$this->session->userdata('fullname'));
        $this->email->to('info@yazilimciakli.com'); 
        $this->email->subject('Email Test');
        $this->email->message('Testing the email class.'); 
		$this->email->send();
		echo $this->email->print_debugger();
	}
}
