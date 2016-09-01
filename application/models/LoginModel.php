<?php
class LoginModel extends CI_Model {
    
    function __construct() {
        parent::__construct();
		$this->load->library('session');
    }
    function login($username,$password) {
		$this->db->where('username',htmlspecialchars($username));
		$this->db->where('password',sha1(md5(htmlspecialchars($password))));
		$data=$this->db->get('user')->row();
        if($data)
		{
			$newdata = array(
              'user_id'  	=> $data->id,
			  'username'  	=> $data->username,
              'fullname'    => $data->fullname,
			  'email'     	=> $data->email,
			  'date'		=>$data->date,
              'login' 		=> TRUE
            );
			$this->session->set_userdata($newdata);
			return 1;
		}
		else
		{
			return 2;
		}
    }
}