<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UserSettingsController extends MY_COntroller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model("UserSettingsModel");
	}
	public function newUser()
	{
		$pageSetting['query']['title']="Yeni Üye Ekle";
		$pageSetting['query']['status']=7;
		$this->load->view('../../assets/top',$pageSetting);
		$this->load->view('newuser');
		$this->load->view('../../assets/bottom');
	}
	public function addUser()
	{
		$fullname=$this->input->post('fullname');
		$nick=$this->input->post('nick');
		$email=$this->input->post('email');
		$password=$this->input->post('password');
		$data=$this->UserSettingsModel->add($fullname,$nick,$email,$password);
		echo $data;
	}
	public function deleteUser()
	{
		$id=$this->input->post('id');
		$data=$this->UserSettingsModel->delete($id);
		echo $data;
	}
	public function updateUser()
	{
		$fullname=$this->input->post('fullname');
		$nick=$this->input->post('nick');
		$email=$this->input->post('email');
		$password=$this->input->post('password');
		$oldpassword=$this->input->post('oldpassword');
		$data=$this->UserSettingsModel->update($fullname,$nick,$password,$email,$oldpassword);
		echo $data;
	}
	public function profile($user)
	{
		/*$vals = array(  
		 'img_path'  => './captcha/',  
		 'img_url'  => base_url().'captcha/',  
		 'font_path'  => './fonts/impact.ttf' ,
		 'img_width'=>300,
		 'img_height'=>50,
		 'expiration'=>3600
		); 
		$img = create_captcha($vals); 
		$data['image'] = $img['image'];*/
		$pageSetting['query']['title']=$this->session->userdata('fullname');
		$pageSetting['query']['status']=7;
		$this->load->view('../../assets/top',$pageSetting);
		$this->load->view('profile');
		$this->load->view('../../assets/bottom');
	}
}
