<?php

class Galery_model extends CI_Model{

	function get_all_galery(){
		$this->db->select('tbl_galery.*');
		$this->db->from('tbl_galery');
		$query = $this->db->get();
		return $query;
	}

	function get_all_galery_by_date(){
		$this->db->select('tbl_galery.*');
		$this->db->from('tbl_galery');
		$this->db->order_by('galery_date', 'DESC');
		$query = $this->db->get();
		return $query;
	}

	function get_footer_galery(){
		$this->db->select('tbl_galery.*');
		$this->db->from('tbl_galery');
		$this->db->order_by('galery_date', 'DESC');
		$this->db->limit(6);
		$query = $this->db->get();
		return $query;
	}
}