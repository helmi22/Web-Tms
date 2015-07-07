<?php

class M_Sitemap extends CI_Model{

	function __construct()
	{
		parent::__construct();
	}

	function generate()
	{
		$this->db->select('id,pubdate');
		$this->db->from('posts');
		$this->db->order_by('id',"DESC");
		$query = $this->db->get();


		return $query->result();
	}
}

?>