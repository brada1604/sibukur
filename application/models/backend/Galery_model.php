<?php

class Galery_model extends CI_Model{
	
	function get_galery(){
		$query = $this->db->get('tbl_galery');
		return $query;
	}

	function insert_galery($title,$gambar){
		$data = array(
			'galery_title' => $title,
			'galery_image' => $gambar,
		);
		$this->db->insert('tbl_galery',$data);
	}

	function update_galery($id,$title,$gambar){
		$this->db->set('galery_title',$title);
		$this->db->set('galery_image',$gambar);
		$this->db->where('galery_id',$id);
		$this->db->update('tbl_galery');
	}

	function update_galery_noimg($id,$title){
		$this->db->set('galery_title',$title);
		$this->db->where('galery_id',$id);
		$this->db->update('tbl_galery');
	}

	function delete_galery($galery_id){
		$this->db->where('galery_id',$galery_id);
		$this->db->delete('tbl_galery');
	}
}