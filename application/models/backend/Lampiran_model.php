<?php

class Lampiran_model extends CI_Model{
	
	function get_lampiran(){
		$query = $this->db->get('tbl_lampiran');
		return $query;
	}

	function insert_lampiran($title,$url,$gambar){
		$data = array(
			'lampiran_title' => $title,
			'lampiran_url' => $url, 
			'lampiran_image' => $gambar,
		);
		$this->db->insert('tbl_lampiran',$data);
	}

	function update_lampiran($id,$title,$url,$gambar){
		$this->db->set('lampiran_title',$title);
		$this->db->set('lampiran_url',$url);
		$this->db->set('lampiran_image',$gambar);
		$this->db->where('lampiran_id',$id);
		$this->db->update('tbl_lampiran');
	}

	function update_lampiran_noimg($id,$title,$url){
		$this->db->set('lampiran_title',$title);
		$this->db->set('lampiran_url',$url);
		$this->db->where('lampiran_id',$id);
		$this->db->update('tbl_lampiran');
	}

	function delete_lampiran($lampiran_id){
		$this->db->where('lampiran_id',$lampiran_id);
		$this->db->delete('tbl_lampiran');
	}
}