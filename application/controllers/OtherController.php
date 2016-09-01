<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class OtherController extends MY_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model("OtherModel");
	}
	public function socialmedia()
	{
		$pageSetting['query']['title']="Sosyal Medya";
		$pageSetting['query']['status']=7;
		$this->load->view('../../assets/top',$pageSetting);
		$data['socialGet']=$this->OtherModel->socialGet();
		$this->load->view('socialmedia',$data);
		$this->load->view('../../assets/bottom');
	}
	public function socialadd()
	{
		$socialTitle=$this->input->post('socialTitle');
		$URL=$this->input->post('URL');
		$icon=$this->input->post('icon');
		$data=$this->OtherModel->socialAdd($socialTitle,$URL,$icon);
		echo $data;
	}
	public function socialDelete()
	{
		$id=$this->input->post('id');
		$data=$this->OtherModel->socialDelete($id);
		echo $data;
	}
	public function management()
	{
		$pageSetting['query']['title']="Yönetim İşlemleri";
		$pageSetting['query']['status']=7;
		$this->load->view('../../assets/top',$pageSetting);
		$data['users']=$this->load->OtherModel->userGet();
		$this->load->view('management',$data);
		$this->load->view('../../assets/bottom');
	}
	public function help()
	{
		$pageSetting['query']['title']="Yardım Araçları";
		$pageSetting['query']['status']=7;
		$this->load->view('../../assets/top',$pageSetting);
		$data['query']=$this->load->OtherModel->helpGet();
		$this->load->view('help',$data);
		$this->load->view('../../assets/bottom');
	}
}
