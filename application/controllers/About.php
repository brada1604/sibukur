<?php
class About extends CI_Controller{
	
	function __construct(){
		parent::__construct();
		$this->load->model('Visitor_model','visitor_model');
        $this->visitor_model->count_visitor();
        $this->load->helper('text');
        error_reporting(0);
	}

	function index(){
		$site_info = $this->db->get('tbl_site', 1)->row();
		$about = $this->db->get('tbl_about', 1)->row();
		$data['about_img'] = $about->about_image;
		$data['about_desc'] = $about->about_description;
		$data['about_loc'] = $about->about_location;
		$data['about_map'] = $about->about_map;
		$data['about_visi'] = $about->about_visi;
		$data['about_misi'] = $about->about_misi;
		$data['about_logo'] = $about->about_logo;
		$v['logo'] =  $site_info->site_logo_header;
		$data['icon'] = $site_info->site_favicon;
		$data['header'] = $this->load->view('frontend/header',$v,TRUE);
		$data['footer'] = $this->load->view('frontend/footer','',TRUE);
		$this->load->view('frontend/about_view',$data);
	}

	function index_old(){
		$site_info = $this->db->get('tbl_site', 1)->row();
		$about = $this->db->get('tbl_about', 1)->row();
		$data['about_img'] = $about->about_image;
		$data['about_desc'] = $about->about_description;
		$v['logo'] =  $site_info->site_logo_header;
		$data['icon'] = $site_info->site_favicon;
		$data['header'] = $this->load->view('header',$v,TRUE);
		$data['footer'] = $this->load->view('footer','',TRUE);
		$this->load->view('about_view',$data);
	}
}