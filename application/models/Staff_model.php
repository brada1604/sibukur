<?php

class Staff_model extends CI_Model{

	function get_all_staff(){
		$this->db->select('tbl_staff.*');
		$this->db->from('tbl_staff');
		// $this->db->order_by('category_name', 'ASC');
		$query = $this->db->get();
		return $query;
	}
}