<?php
class UserSettingsModel extends CI_Model {
    
    function __construct() {
        parent::__construct();
    }
    function add($fullname,$nick,$email,$password) 
	{
		if($this->controller($nick,$email)==true)
		{
			return 3;
		}
		else
		{
			$data = array(
			   'fullname' => $fullname,
			   'username' => $nick ,
			   'password' => sha1(md5($password)) ,
			   'email' => $email
			);
			$add=$this->db->insert('user', $data);
			if($add)
			{
				return 1;
			}
			else
			{
				return 2;
			}
		}
    }
	function delete($id)
	{
		if(!is_numeric($id) || $id<0 || $id=="" || empty($id) || $id==$this->session->userdata('user_id'))
		{
			return 3;
		}
		else
		{
			$this->db->where('id',$id);
			$this->db->where('erasable',0);
			$query=$this->db->get('user')->result_array();
			if(empty($query))
			{
				return 2;
			}
			else
			{
				$this->db->where('id', $id);
				$delete=$this->db->delete('user');
				if($delete)
				{
					return 1;
				}
				else
				{
					return 3;
				}
			}
		}
	}
	function update($fullname,$nick,$password,$email,$oldpassword)
	{
		if($fullname=="" || $nick=="" || $oldpassword=="")
		{
			return 2;
		}
		elseif($this->session->userdata('username')!=$nick || $this->session->userdata('email')!=$email)
		{
			if($this->controller($nick,$email)==true)
			{
				return 4;
			}
		}
		else
		{
			$id=$this->session->userdata('user_id');
			$this->db->where('id', $id);
			$this->db->where('password', sha1(md5($oldpassword)));
			$query=$this->db->get('user')->result();
			if(empty($query))
			{
				return 3;
			}
			else
			{
				if($password=="")
				{
					$data = array(
				   'fullname' => $fullname,
				   'username' => $nick ,
				   'email' => $email
					);
				}
				else
				{
					$data = array(
				   'fullname' => $fullname,
				   'username' => $nick ,
				   'password' => sha1(md5($password)) ,
				   'email' => $email
					);
				}

				$this->db->where('id', $id);
				$update=$this->db->update('user', $data);
				if($update)
				{
					$newdata = array(
					  'username'  	=> $nick,
					  'fullname'    => $fullname,
					  'email'     	=> $email,
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
	}
	function controller($nick,$email)
	{
		$this->db->where('username', $nick);
		$this->db->or_where('email', $email);
		$query=$this->db->get('user');
		$count=$query->num_rows();
		if($count>0)
		{
			return true;
		}
		else
		{
			return false;
		}
	}
}