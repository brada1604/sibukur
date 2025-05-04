<?php

class Ads extends CI_Controller{
	
	function __construct(){
		parent::__construct();
		if($this->session->userdata('logged') !=TRUE){
            $url=base_url('administrator');
            redirect($url);
        };
		$this->load->model('backend/ads_model','ads_model');
		$this->load->library('upload');
		$this->load->helper('text');
	}

	function index(){
		$x['data'] = $this->ads_model->get_ads();
		$this->load->view('backend/v_ads',$x);
	}

	function insert(){
		$title=$this->input->post('title',TRUE);
		$category=$this->input->post('category',TRUE);
		$description=$this->input->post('description',TRUE);
		$map=$this->input->post('map');
		$whatsapp=$this->input->post('whatsapp',TRUE);
		$contact=$this->input->post('contact',TRUE);
		$price=$this->input->post('price',TRUE);
		
		$config['upload_path'] = './assets/depan/img/ads'; //path folder
	    $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
	    $config['encrypt_name'] = TRUE; //nama yang terupload nantinya
	    
	    $this->upload->initialize($config);
	    
    	if(!empty($_FILES['filefoto']['name'])){
	        if ($this->upload->do_upload('filefoto')){
	            $gbr = $this->upload->data();
                //Compress Image
                $config['image_library']='gd2';
                $config['source_image']='./assets/depan/img/ads/'.$gbr['file_name'];
                $config['create_thumb']= FALSE;
                $config['maintain_ratio']= FALSE;
                $config['quality']= '100%';
                $config['width']= 400;
                $config['height']= 300;
                $config['new_image']= './assets/depan/img/ads/'.$gbr['file_name'];
                $this->load->library('image_lib', $config);
                $this->image_lib->resize();

	            $gambar=$gbr['file_name'];		
				$this->ads_model->insert_ads($title,$category,$description,$map,$whatsapp,$contact,$price,$gambar);
				echo $this->session->set_flashdata('msg','success');
				redirect('backend/ads');
			}else{
	            echo $this->session->set_flashdata('msg','error-img');
	            redirect('backend/ads');
	    	}
	                 
	    }
	}

	function update(){
		$id=htmlspecialchars($this->input->post('ads_id',TRUE),ENT_QUOTES);
		$title=$this->input->post('title',TRUE);
		$category=$this->input->post('category',TRUE);
		$description=$this->input->post('description',TRUE);
		$map=$this->input->post('map');
		$whatsapp=$this->input->post('whatsapp',TRUE);
		$contact=$this->input->post('contact',TRUE);
		$price=$this->input->post('price',TRUE);
		
		$config['upload_path'] = './assets/depan/img/ads'; //path folder
	    $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
	    $config['encrypt_name'] = TRUE; //nama yang terupload nantinya
	    
	    $this->upload->initialize($config);
	    
    	if(!empty($_FILES['filefoto']['name'])){
	        if ($this->upload->do_upload('filefoto')){
	            $gbr = $this->upload->data();
                //Compress Image
                $config['image_library']='gd2';
                $config['source_image']='./assets/depan/img/ads/'.$gbr['file_name'];
                $config['create_thumb']= FALSE;
                $config['maintain_ratio']= FALSE;
                $config['quality']= '100%';
                $config['width']= 400;
                $config['height']= 300;
                $config['new_image']= './assets/depan/img/ads/'.$gbr['file_name'];
                $this->load->library('image_lib', $config);
                $this->image_lib->resize();

	            $gambar=$gbr['file_name'];		
				$this->ads_model->update_ads($id,$title,$category,$description,$map,$whatsapp,$contact,$price,$gambar);
				echo $this->session->set_flashdata('msg','info');
				redirect('backend/ads');
			}else{
	            echo $this->session->set_flashdata('msg','error-img');
	            redirect('backend/ads');
	    	}
	                 
	    }else{
	    	$this->ads_model->update_ads_noimg($id,$title,$category,$description,$map,$whatsapp,$contact,$price);
			echo $this->session->set_flashdata('msg','info');
			redirect('backend/ads');
	    }
	}


	function delete(){
		$ads_id=$this->input->post('kode',TRUE);
		$this->ads_model->delete_ads($ads_id);
		echo $this->session->set_flashdata('msg','success-hapus');
		redirect('backend/ads');
	}

}