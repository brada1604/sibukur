<?php
class Lampiran extends CI_Controller{
	
	function __construct(){
		parent::__construct();
		$this->load->model('Lampiran_model','lampiran_model');
        // $this->visitor_model->count_visitor();
        $this->load->helper('text');
        error_reporting(0);
	}

	function index(){
		$site_info = $this->db->get('tbl_site', 1)->row();
		$about = $this->db->get('tbl_about', 1)->row();
		$data['list_lampiran'] = $this->lampiran_model->get_all_lampiran();
		$v['logo'] =  $site_info->site_logo_header;
		$data['icon'] = $site_info->site_favicon;
		$data['site_title'] = "Lampiran";
		$data['header'] = $this->load->view('frontend/header',$v,TRUE);
		$data['footer'] = $this->load->view('frontend/footer','',TRUE);
		$this->load->view('frontend/lampiran_view',$data);
	}
}