<?php

class Lampiran_model extends CI_Model{

	function get_all_lampiran(){
		$this->db->select('tbl_lampiran.*');
		$this->db->from('tbl_lampiran');
		$query = $this->db->get();
		return $query;
	}

	function get_all_lampiran_by_date(){
		$this->db->select('tbl_lampiran.*');
		$this->db->from('tbl_lampiran');
		$this->db->order_by('lampiran_date', 'DESC');
		$query = $this->db->get();
		return $query;
	}
}