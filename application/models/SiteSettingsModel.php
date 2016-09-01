<?php
class SiteSettingsModel extends CI_Model {
    
    function __construct() {
        parent::__construct();
    }
    function settingGet() {
        return $this->db->get('setting')->result();
    }
	function settingSave($title,$descriptions,$keywords,$location,$check)
	{
		$data = array(
		   'title' => $title,
		   'keywords' => $keywords ,
		   'status' => $check ,
		   'date' => date('Y-m-d H:i:s'),
		   'maplocation' => $location,
		   'description' => $descriptions
		);
		$this->db->where('id', 1);
		$add=$this->db->update('setting', $data);
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