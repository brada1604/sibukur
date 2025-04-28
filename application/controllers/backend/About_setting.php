<?php

class About_setting extends CI_Controller{
	
	function __construct(){
		parent::__construct();
		if($this->session->userdata('logged') !=TRUE){
            $url=base_url('administrator');
            redirect($url);
        };
		$this->load->model('backend/Setting_model','setting_model');
		$this->load->library('upload');
		$this->load->helper('text');
	}

	function index(){
		$data = $this->setting_model->get_about_data()->row();
		$x['about_id'] = $data->about_id;
		$x['about_img'] = $data->about_image;
		$x['about_desc'] = $data->about_description;
		$x['about_loc'] = $data->about_location;
		$x['about_map'] = $data->about_map;
		$x['about_visi'] = $data->about_visi;
		$x['about_misi'] = $data->about_misi;
		$x['about_logo'] = $data->about_logo;
		$this->load->view('backend/v_about_setting',$x);
	}

	function update(){
		$about_id = htmlspecialchars($this->input->post('about_id',TRUE),ENT_QUOTES);
		$description = $this->input->post('description',TRUE);
		$location = $this->input->post('location',TRUE);
		$map = $this->input->post('map');
		$visi = $this->input->post('visi',TRUE);
		$misi = $this->input->post('misi',TRUE);
		
		$config['upload_path'] = './theme/images/';
	    $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp';
	    $config['encrypt_name'] = FALSE;

	    $this->upload->initialize($config);

	    if(!empty($_FILES['img_about']['name'])){
	    	if ($this->upload->do_upload('img_about')){
	            $img_about = $this->upload->data();
	            $img_about_image=$img_about['file_name'];

	            $this->setting_model->update_information_about_img($about_id,$img_about_image);
	        }
	    }

	    if(!empty($_FILES['logo_about']['name'])){
	    	if ($this->upload->do_upload('logo_about')){
	            $logo_about = $this->upload->data();
	            $img_about_logo=$logo_about['file_name'];

	            $this->setting_model->update_information_about_logo($about_id,$img_about_logo);
	        }
	    }

	        // $this->setting_model->update_information_about($about_id,$description,$location,$map,$visi,$misi,$image);
	        // $this->session->set_flashdata('msg','success');
	        // redirect('backend/about_setting');

	    // else{
	    	$this->setting_model->update_information_about_noimg($about_id,$description,$location,$map,$visi,$misi);
	        $this->session->set_flashdata('msg','success');
	        redirect('backend/about_setting');
	    // }
	}

}