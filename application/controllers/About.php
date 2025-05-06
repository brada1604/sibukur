<?php
class About extends CI_Controller{
	
	function __construct(){
		parent::__construct();
		
		$this->load->model('Galery_model','galery_model');
		$this->load->model('Staff_model','staff_model');
		$this->load->model('Visitor_model','visitor_model');

        $this->visitor_model->count_visitor();
        
        $this->load->helper('text');
        
        error_reporting(0);
	}

	function index(){
		$data['site_title'] = "Profil - Kampung Pegat Bukur";

		$about = $this->db->get('tbl_about', 1)->row();
		$data['about_desc'] = $about->about_description;
		$data['about_img'] = $about->about_image;
		$data['about_loc'] = $about->about_location;
		$data['about_logo'] = $about->about_logo;
		$data['about_map'] = $about->about_map;
		$data['about_misi'] = $about->about_misi;
		$data['about_visi'] = $about->about_visi;
		$data['list_staff'] = $this->staff_model->get_all_staff();
		
		$site_info = $this->db->get('tbl_site', 1)->row();
		$v['logo'] =  $site_info->site_logo_header;
		$data['icon'] = $site_info->site_favicon;
		
		$z['footer_galery'] = $this->galery_model->get_footer_galery();

		// Layout
		$data['header'] = $this->load->view('frontend/header',$v,TRUE);
		$data['footer'] = $this->load->view('frontend/footer',$z,TRUE);
		
		$this->load->view('frontend/about_view',$data);
	}

}