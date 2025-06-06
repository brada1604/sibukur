<?php
class Tag extends CI_Controller{
	
	function __construct(){
		parent::__construct();
		$this->load->model('Tag_model','tag_model');
		$this->load->model('Blog_model','blog_model');
		$this->load->model('Visitor_model','visitor_model');
		$this->load->model('Site_model','site_model');
		$this->load->model('Category_model','category_model');
		$this->load->model('Galery_model','galery_model');
        $this->visitor_model->count_visitor();
        $this->load->helper('text');
		error_reporting(0);
	}

	function index(){
		redirect('blog');
	}

	function detail($tag){
		$data=$this->tag_model->get_blog_by_tags($tag);
		if($data->num_rows() > 0){
			$jum=$data;
	        $page=$this->uri->segment(3);
	        if(!$page):
	            $off = 0;
	        else:
	            $off = $page;
	        endif;
	        $limit=9;
	        $offset = $off > 0 ? (($off - 1) * $limit) : $off;
	        $config['base_url'] = base_url() . 'tag/'.$tag.'/';
	        $config['total_rows'] = $jum->num_rows();
	        $config['per_page'] = $limit;
	        $config['uri_segment'] = 3;
	        $config['use_page_numbers']=TRUE;
	        
		    //Tambahan untuk styling
	        // $config['full_tag_open']    = '<div class="row"><nav class="page-pagination mt-60"><ul class="page-numbers">';
	        // $config['full_tag_close']   = '</ul></nav></div>';
	        // $config['num_tag_open']     = '<li><span class="page-numbers">';
	        // $config['num_tag_close']    = '</span></li>';
	        // $config['cur_tag_open']     = '<li><span class="page-numbers current">';
	        // $config['cur_tag_close']    = '<span class="sr-only">(current)</span></span></li>';
	        // $config['next_tag_open']    = '<li><span class="page-numbers">';
	        // $config['next_tagl_close']  = '<span aria-hidden="true">&raquo;</span></span></li>';
	        // $config['prev_tag_open']    = '<li><span class="page-numbers">';
	        // $config['prev_tagl_close']  = '</span>Next</li>';
	        // $config['first_tag_open']   = '<li><span class="page-numbers">';
	        // $config['first_tagl_close'] = '</span></li>';
	        // $config['last_tag_open']    = '<li><span class="page-numbers">';
	        // $config['last_tagl_close']  = '</span></li>';

		    // $config['first_link'] = '<';
		    // $config['last_link'] = '>';
		    // $config['next_link'] = '>>';
		    // $config['prev_link'] = '<<';
	        $config['full_tag_open']    = '<div class="col-12 wow slideInUp" data-wow-delay="0.1s"><nav aria-label="Page navigation"><ul class="pagination pagination-lg m-0">';
	        $config['full_tag_close']   = '</ul></nav></div>';

	        $config['num_tag_open']     = '<li class="page-item">';
	        $config['num_tag_close']    = '</li>';

	        $config['cur_tag_open']     = '<li class="page-item active"><a class="page-link" href="#">';
	        $config['cur_tag_close']    = '</a></li>';

	        $config['next_tag_open']    = '<li class="page-item">';
	        $config['next_tag_close']   = '</li>';

	        $config['prev_tag_open']    = '<li class="page-item">';
	        $config['prev_tag_close']   = '</li>';

	        $config['first_tag_open']   = '<li class="page-item">';
	        $config['first_tag_close']  = '</li>';

	        $config['last_tag_open']    = '<li class="page-item">';
	        $config['last_tag_close']   = '</li>';

	        $config['first_link'] = '<span aria-hidden="true"><i class="bi bi-arrow-left"></i></span>';
	        $config['last_link']  = '<span aria-hidden="true"><i class="bi bi-arrow-right"></i></span>';
	        $config['next_link']  = '<span aria-hidden="true"><i class="bi bi-arrow-right"></i></span>';
	        $config['prev_link']  = '<span aria-hidden="true"><i class="bi bi-arrow-left"></i></span>';

			// Untuk mengatur class tambahan di anchor tag
	        $config['attributes'] = array('class' => 'page-link');



	        $this->pagination->initialize($config);
	        $x['page'] =$this->pagination->create_links();
			$x['data']=$this->tag_model->blog_tags_perpage($tag,$offset,$limit);

			$x['data_last_post']=$this->blog_model->get_last_post();
			$x['data_all_categories_by_name']=$this->category_model->get_all_categories_by_name();
			$x['data_all_tags_by_name']=$this->tag_model->get_all_tags_by_name();

			$x['judul']= $tag;
			$x['description']= "Kumpulan artikel ".$tag." sangat bermanfaat untuk menambah wawasan Anda.";
			if(empty($this->uri->segment(3))){
				$next_page=2;
				$x['canonical']=site_url('tag/'.$tag);
				$x['url_prev']="";
			}elseif($this->uri->segment(3)=='1'){
				$next_page=2;
				$x['canonical']=site_url('tag/'.$tag);
				$x['url_prev']=site_url('tag/'.$tag);
			}elseif($this->uri->segment(3)=='2'){
				$next_page=$this->uri->segment(3)+1;
				$x['canonical']=site_url('tag/'.$tag.'/'.$this->uri->segment(3));
				$x['url_prev']=site_url('tag/'.$tag);
			}else{
				$next_page=$this->uri->segment(3)+1;
				$prev_page=$this->uri->segment(3)-1;
				$x['canonical']=site_url('tag/'.$tag.'/'.$this->uri->segment(3));
				$x['url_prev']=site_url('tag/'.$tag.'/'.$prev_page);
			}
			
			$x['url_next']=site_url('tag/'.$tag.'/'.$next_page);
			$x['populer_post'] = $this->blog_model->get_popular_post();
			$site_info = $this->db->get('tbl_site', 1)->row();
			$v['logo'] =  $site_info->site_logo_header;
			$x['icon'] = $site_info->site_favicon;
			$x['site_image'] = $site_info->site_logo_big;
			$z['footer_galery'] = $this->galery_model->get_footer_galery();
			$x['header'] = $this->load->view('frontend/header',$v,TRUE);
			$x['footer'] = $this->load->view('frontend/footer',$z,TRUE);
			$site = $this->site_model->get_site_data()->row_array();
			$x['site_name'] = $site['site_name'];
			$x['site_twitter'] = $site['site_twitter'];
			$this->load->view('frontend/blog_tag_view',$x);
		}else{
			redirect('blog');
		}
	}

	function detail_old($tag){
		$data=$this->tag_model->get_blog_by_tags($tag);
		if($data->num_rows() > 0){
			$jum=$data;
	        $page=$this->uri->segment(3);
	        if(!$page):
	            $off = 0;
	        else:
	            $off = $page;
	        endif;
	        $limit=9;
	        $offset = $off > 0 ? (($off - 1) * $limit) : $off;
	        $config['base_url'] = base_url() . 'tag/'.$tag.'/';
	        $config['total_rows'] = $jum->num_rows();
	        $config['per_page'] = $limit;
	        $config['uri_segment'] = 3;
	        $config['use_page_numbers']=TRUE;
	        
		    //Tambahan untuk styling
	        $config['full_tag_open']    = '<div class="row"><nav class="page-pagination mt-60"><ul class="page-numbers">';
	        $config['full_tag_close']   = '</ul></nav></div>';
	        $config['num_tag_open']     = '<li><span class="page-numbers">';
	        $config['num_tag_close']    = '</span></li>';
	        $config['cur_tag_open']     = '<li><span class="page-numbers current">';
	        $config['cur_tag_close']    = '<span class="sr-only">(current)</span></span></li>';
	        $config['next_tag_open']    = '<li><span class="page-numbers">';
	        $config['next_tagl_close']  = '<span aria-hidden="true">&raquo;</span></span></li>';
	        $config['prev_tag_open']    = '<li><span class="page-numbers">';
	        $config['prev_tagl_close']  = '</span>Next</li>';
	        $config['first_tag_open']   = '<li><span class="page-numbers">';
	        $config['first_tagl_close'] = '</span></li>';
	        $config['last_tag_open']    = '<li><span class="page-numbers">';
	        $config['last_tagl_close']  = '</span></li>';

		    $config['first_link'] = '<';
		    $config['last_link'] = '>';
		    $config['next_link'] = '>>';
		    $config['prev_link'] = '<<';
	        $this->pagination->initialize($config);
	        $x['page'] =$this->pagination->create_links();
			$x['data']=$this->tag_model->blog_tags_perpage($tag,$offset,$limit);

			$x['judul']= $tag;
			$x['description']= "Kumpulan artikel ".$tag." sangat bermanfaat untuk menambah wawasan Anda.";
			if(empty($this->uri->segment(3))){
				$next_page=2;
				$x['canonical']=site_url('tag/'.$tag);
				$x['url_prev']="";
			}elseif($this->uri->segment(3)=='1'){
				$next_page=2;
				$x['canonical']=site_url('tag/'.$tag);
				$x['url_prev']=site_url('tag/'.$tag);
			}elseif($this->uri->segment(3)=='2'){
				$next_page=$this->uri->segment(3)+1;
				$x['canonical']=site_url('tag/'.$tag.'/'.$this->uri->segment(3));
				$x['url_prev']=site_url('tag/'.$tag);
			}else{
				$next_page=$this->uri->segment(3)+1;
				$prev_page=$this->uri->segment(3)-1;
				$x['canonical']=site_url('tag/'.$tag.'/'.$this->uri->segment(3));
				$x['url_prev']=site_url('tag/'.$tag.'/'.$prev_page);
			}
			
			$x['url_next']=site_url('tag/'.$tag.'/'.$next_page);
			$x['populer_post'] = $this->blog_model->get_popular_post();
			$site_info = $this->db->get('tbl_site', 1)->row();
			$v['logo'] =  $site_info->site_logo_header;
			$x['icon'] = $site_info->site_favicon;
			$x['site_image'] = $site_info->site_logo_big;
			$x['header'] = $this->load->view('header',$v,TRUE);
			$x['footer'] = $this->load->view('footer','',TRUE);
			$site = $this->site_model->get_site_data()->row_array();
			$x['site_name'] = $site['site_name'];
			$x['site_twitter'] = $site['site_twitter'];
			$this->load->view('blog_tag_view',$x);
		}else{
			redirect('blog');
		}
	}


}