<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	function __construct(){
		parent::__construct();

		$this->load->model('Ads_model','ads_model');
		$this->load->model('Category_model','category_model');
		$this->load->model('Galery_model','galery_model');
		$this->load->model('Home_model','home_model');
		$this->load->model('Site_model','site_model');
		$this->load->model('Staff_model','staff_model');
		$this->load->model('Visitor_model','visitor_model');

        $this->visitor_model->count_visitor();

        $this->load->helper('text');
	}
	function index(){
		//$this->output->enable_profiler(TRUE);
		$site = $this->site_model->get_site_data()->row_array();
		$data['site_desc'] = $site['site_description'];
		$data['site_image'] = $site['site_logo_big'];
		$data['site_name'] = $site['site_name'];
		$data['site_title'] = $site['site_title'];
		$data['site_twitter'] = $site['site_twitter'];
		
		$data['latest_post'] = $this->home_model->get_latest_post();
		$data['popular_post'] = $this->home_model->get_popular_post();
		$data['post_header'] = $this->home_model->get_post_header();
		$data['post_header_2'] = $this->home_model->get_post_header_2();
		$data['post_header_3'] = $this->home_model->get_post_header_3();
		
		$data['list_staff'] = $this->staff_model->get_all_staff();
		
		$data['category_name'] = $this->category_model->get_all_categories_by_name();
		
		$data['last_ads'] = $this->ads_model->get_3_last_ads();
		
		$about = $this->db->get('tbl_about', 1)->row();
		$data['about_desc'] = $about->about_description;
		$data['about_img'] = $about->about_image;
		$data['about_loc'] = $about->about_location;
		$data['about_map'] = $about->about_map;

		$home = $this->db->get('tbl_home',1)->row();
		$data['caption_1'] = $home->home_caption_1;
		$data['caption_2'] = $home->home_caption_2;
		$data['bg_header'] = $home->home_bg_heading;
		$data['bg_testimoni'] = $home->home_bg_testimonial;
		
		$data['testimonial'] = $this->db->get('tbl_testimonial');
		
		$site_info = $this->db->get('tbl_site', 1)->row();
		$v['logo'] =  $site_info->site_logo_header;
		$data['icon'] = $site_info->site_favicon;
		
		$z['footer_galery'] = $this->galery_model->get_footer_galery();
		
		// Layout
		$data['header'] = $this->load->view('frontend/header',$v,TRUE);
		$data['footer'] = $this->load->view('frontend/footer',$z,TRUE);

		$this->load->view('frontend/landing-page',$data);
	}

	function index_old(){
		//$this->output->enable_profiler(TRUE);
		$site = $this->site_model->get_site_data()->row_array();
		$data['site_name'] = $site['site_name'];
		$data['site_title'] = $site['site_title'];
		$data['site_desc'] = $site['site_description'];
		$data['site_twitter'] = $site['site_twitter'];
		$data['site_image'] = $site['site_logo_big'];
		$data['post_header'] = $this->home_model->get_post_header();
		$data['post_header_2'] = $this->home_model->get_post_header_2();
		$data['post_header_3'] = $this->home_model->get_post_header_3();
		$data['latest_post'] = $this->home_model->get_latest_post();
		$data['popular_post'] = $this->home_model->get_popular_post();
		$home = $this->db->get('tbl_home',1)->row();
		$data['caption_1'] = $home->home_caption_1;
		$data['caption_2'] = $home->home_caption_2;
		$data['bg_header'] = $home->home_bg_heading;
		$data['bg_testimoni'] = $home->home_bg_testimonial;
		$data['testimonial'] = $this->db->get('tbl_testimonial');
		$site_info = $this->db->get('tbl_site', 1)->row();
		$v['logo'] =  $site_info->site_logo_header;
		$z['footer_galery'] = $this->galery_model->get_footer_galery();
		$data['icon'] = $site_info->site_favicon;
		$data['header'] = $this->load->view('header',$v,TRUE);
		$data['footer'] = $this->load->view('footer','',TRUE);
		$this->load->view('home_view',$data);
	}

	
}