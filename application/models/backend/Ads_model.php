<?php

class Ads_model extends CI_Model{
	
	function get_ads(){
		$query = $this->db->get('tbl_ads');
		return $query;
	}

	function insert_ads($title,$category,$description,$map,$whatsapp,$contact,$price,$gambar){
		$data = array(
			'ads_title' => $title,
			'ads_category' => $category, 
			'ads_description' => $description, 
			'ads_map' => $map, 
			'ads_whatsapp' => $whatsapp, 
			'ads_contact' => $contact, 
			'ads_price' => $price, 
			'ads_image' => $gambar,
		);
		$this->db->insert('tbl_ads',$data);
	}

	function update_ads($id,$title,$category,$description,$map,$whatsapp,$contact,$price,$gambar){
		$this->db->set('ads_title',$title);
		$this->db->set('ads_category',$category);
		$this->db->set('ads_description',$description);
		$this->db->set('ads_map',$map);
		$this->db->set('ads_whatsapp',$whatsapp);
		$this->db->set('ads_contact',$contact);
		$this->db->set('ads_price',$price);
		$this->db->set('ads_image',$gambar);
		$this->db->where('ads_id',$id);
		$this->db->update('tbl_ads');
	}

	function update_ads_noimg($id,$title,$category,$description,$map,$whatsapp,$contact,$price){
		$this->db->set('ads_title',$title);
		$this->db->set('ads_category',$category);
		$this->db->set('ads_description',$description);
		$this->db->set('ads_map',$map);
		$this->db->set('ads_whatsapp',$whatsapp);
		$this->db->set('ads_contact',$contact);
		$this->db->set('ads_price',$price);
		$this->db->where('ads_id',$id);
		$this->db->update('tbl_ads');
	}

	function delete_ads($ads_id){
		$this->db->where('ads_id',$ads_id);
		$this->db->delete('tbl_ads');
	}
}