<?php

class Ads_model extends CI_Model{

	function get_all_ads(){
		$this->db->select('tbl_ads.*');
		$this->db->from('tbl_ads');
		$query = $this->db->get();
		return $query;
	}

	function get_all_ads_by_date(){
		$this->db->select('tbl_ads.*');
		$this->db->from('tbl_ads');
		$this->db->order_by('ads_date', 'DESC');
		$query = $this->db->get();
		return $query;
	}

	function get_3_last_ads(){
		$this->db->select('tbl_ads.*');
		$this->db->from('tbl_ads');
		$this->db->order_by('ads_date', 'DESC');
		$this->db->limit(3);
		$query = $this->db->get();
		return $query;
	}

	function get_ads_by_id($id){
		$query = $this->db->query("SELECT * FROM tbl_ads WHERE ads_id='$id' LIMIT 1");
		return $query;
	}


}