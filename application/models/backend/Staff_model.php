<?php

class Staff_model extends CI_Model{

	function get_all_staff(){
		$this->db->select('tbl_staff.*');
		$this->db->from('tbl_staff');
		// $this->db->order_by('category_name', 'ASC');
		$query = $this->db->get();
		return $query;
	}

	function get_staff_by_id($staff_id){
		$result = $this->db->query("SELECT * FROM tbl_staff WHERE staff_id='$staff_id'");
		return $result;
	}

	function save_staff($name,$position,$whatsapp,$facebook,$instagram,$x,$tiktok,$image){
		$data = array(
	        'staff_name'		=> $name,
	        'staff_position'	=> $position,
	        'staff_whatsapp'    => $whatsapp,
	        'staff_facebook'	=> $facebook,
	        'staff_instagram'	=> $instagram,
	        'staff_x'			=> $x,   
	        'staff_tiktok'		=> $tiktok,
	        'staff_image'		=> $image
		);
		$this->db->insert('tbl_staff', $data);
	}

	function update_staff_noimg($staff_id,$name,$position,$whatsapp,$facebook,$instagram,$x,$tiktok){
		$this->db->set('staff_name',$name);
		$this->db->set('staff_position',$position);
		$this->db->set('staff_whatsapp',$whatsapp);
		$this->db->set('staff_facebook',$facebook);
		$this->db->set('staff_instagram',$instagram);
		$this->db->set('staff_x',$x);
		$this->db->set('staff_tiktok',$tiktok);
		$this->db->where('staff_id',$staff_id);
		$this->db->update('tbl_staff');
	}

	function update_staff_img($staff_id,$image){
		$this->db->set('staff_image',$image);
		$this->db->where('staff_id',$staff_id);
		$this->db->update('tbl_staff');
	}

	function delete_staff($staff_id){
		$this->db->where('staff_id', $staff_id);
		$this->db->delete('tbl_staff');
	}
}