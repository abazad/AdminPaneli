<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Controller extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->_check_auth();
	}
	function _check_auth(){
    	if($this->session->userdata('login')!=true)
		{
            redirect('/login');
    	}
	}
}