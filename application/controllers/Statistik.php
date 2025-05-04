<?php
class Statistik extends CI_Controller{
	
	function __construct(){
		parent::__construct();
		$this->load->model('Visitor_model','visitor_model');
		$this->load->model('Galery_model','galery_model');
        $this->visitor_model->count_visitor();
        $this->load->helper('text');
        error_reporting(0);
	}

	function index(){
		$site_info = $this->db->get('tbl_site', 1)->row();
		$v['logo'] =  $site_info->site_logo_header;
		$z['footer_galery'] = $this->galery_model->get_footer_galery();
		$data['icon'] = $site_info->site_favicon;
		$data['header'] = $this->load->view('frontend/header',$v,TRUE);
		$data['footer'] = $this->load->view('frontend/footer',$z,TRUE);
		$this->load->view('frontend/statistik_kampung',$data);
	}

}