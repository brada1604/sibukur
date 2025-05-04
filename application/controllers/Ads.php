<?php
class Ads extends CI_Controller{
	
	function __construct(){
		parent::__construct();
		$this->load->model('Ads_model','ads_model');
		$this->load->model('Visitor_model','visitor_model');
		$this->load->model('Site_model','site_model');
		$this->load->model('Galery_model','galery_model');
        $this->visitor_model->count_visitor();
        $this->load->helper('text');
        error_reporting(0);
	}

	function index(){
		$site_info = $this->db->get('tbl_site', 1)->row();
		$about = $this->db->get('tbl_about', 1)->row();
		$data['list_ads'] = $this->ads_model->get_all_ads_by_date();
		$v['logo'] =  $site_info->site_logo_header;
		$z['footer_galery'] = $this->galery_model->get_footer_galery();
		$data['icon'] = $site_info->site_favicon;
		$data['site_title'] = "Ads";
		$data['header'] = $this->load->view('frontend/header',$v,TRUE);
		$data['footer'] = $this->load->view('frontend/footer',$z,TRUE);
		$this->load->view('frontend/ads_view',$data);
	}

	function detail($id){
		$data=$this->ads_model->get_ads_by_id($id);
		if($data->num_rows() > 0){
			// $x['data_last_post']=$this->blog_model->get_last_post();
			// $x['data_all_categories_by_name']=$this->category_model->get_all_categories_by_name();
			// $x['data_all_tags_by_name']=$this->tag_model->get_all_tags_by_name();
		
		    $q=$data->row_array();
    		// $kode=$q['post_id'];
    		// $x['title']=$q['ad_title'];
    		// if(empty($q['post_description'])){
    		// 	$x['description'] = strip_tags(word_limiter($q['post_contents'],25));	
    		// }else{
    		// 	$x['description'] = $q['post_description'];
    		// }
    		$x['image']=$q['ads_image'];
    		$x['title']=$q['ads_title'];
    		$x['category']=$q['ads_category'];
    		$x['description']=$q['ads_description'];
    		$x['map']=$q['ads_map'];
    		$x['whatsapp']=$q['ads_whatsapp'];
    		$x['contact']=$q['ads_contact'];
    		$x['price']=$q['ads_price'];
    		$x['date']=$q['ads_date'];
    		// $x['content']=$q['post_contents'];
    		// $x['views']=$q['post_views'];
    		// $x['comment']=$q['comment_total'];
    		// $x['author']=$q['user_name'];
    		// $x['category']=$q['category_name'];
    		// $x['category_slug']=$q['category_slug'];
    		// $x['date']=$q['post_date'];
    		// $x['tags']=$q['post_tags'];
    		// $x['post_slug']=$q['post_slug'];
    		$x['ads_id']=$q['ads_id'];

    		// $category_id = $q['category_id'];
    		// $this->blog_model->count_views($kode);
    		// $x['related_post']  = $this->blog_model->get_related_post($category_id,$kode);
    		// $x['show_comments'] = $this->blog_model->show_comments($kode);
    		$site_info = $this->db->get('tbl_site', 1)->row();
			$v['logo'] =  $site_info->site_logo_header;
			$x['icon'] = $site_info->site_favicon;
			$x['header'] = $this->load->view('frontend/header',$v,TRUE);
			$x['footer'] = $this->load->view('frontend/footer','',TRUE);
    		$site = $this->site_model->get_site_data()->row_array();
			$x['site_name'] = $site['site_name'];
			$x['site_twitter'] = $site['site_twitter'];
			$x['site_facebook'] = $site['site_facebook'];
    		$this->load->view('frontend/ads_detail_view',$x);
		}else{
		    redirect('unggulan-kampung');
		}
			
	}
}