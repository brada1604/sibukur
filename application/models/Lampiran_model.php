<?php

class Lampiran_model extends CI_Model{

	function get_all_lampiran(){
		$this->db->select('tbl_lampiran.*');
		$this->db->from('tbl_lampiran');
		$query = $this->db->get();
		return $query;
	}
}