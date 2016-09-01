<?php
class OtherModel extends CI_Model {
    
    function __construct() {
        parent::__construct();
    }
    function helpGet() {
        return $this->db->get('help')->result();
    }
	function userGet()
	{
		return $this->db->get('user')->result();
	}
	function socialGet() {
        return $this->db->get('social')->result();
    }
	function socialAdd($socialTitle,$URL,$icon)
	{
		$data = array(
		   'title' => $socialTitle,
		   'icon' => $icon ,
		   'link' => $URL
		);
		$add=$this->db->insert('social', $data);
		if($add)
		{
			return 1;
		}
		else
		{
			return 2;
		}
	}
	function socialDelete($id)
	{
		$this->db->where('id', $id);
		$delete=$this->db->delete('social');
		if($delete)
		{
			return 1;
		}
		else
		{
			return 2;
		}
	}
}