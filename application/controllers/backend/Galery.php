<?php

class Galery extends CI_Controller{
	
	function __construct(){
		parent::__construct();
		if($this->session->userdata('logged') !=TRUE){
            $url=base_url('administrator');
            redirect($url);
        };
		$this->load->model('backend/galery_model','galery_model');
		$this->load->library('upload');
		$this->load->helper('text');
	}

	function index(){
		$x['data'] = $this->galery_model->get_galery();
		$this->load->view('backend/v_galery',$x);
	}

	function insert(){
		$title=htmlspecialchars($this->input->post('title',TRUE),ENT_QUOTES);
		
		$config['upload_path'] = './assets/depan/img/galery'; //path folder
	    $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
	    $config['encrypt_name'] = TRUE; //nama yang terupload nantinya
	    
	    $this->upload->initialize($config);
	    
    	if(!empty($_FILES['filefoto']['name'])){
	        if ($this->upload->do_upload('filefoto')){
	            $gbr = $this->upload->data();
                //Compress Image
                $config['image_library']='gd2';
                $config['source_image']='./assets/depan/img/galery/'.$gbr['file_name'];
                $config['create_thumb']= FALSE;
                $config['maintain_ratio']= FALSE;
                $config['quality']= '100%';
                $config['width']= 1920;
                $config['height']= 1080;
                $config['new_image']= './assets/depan/img/galery/'.$gbr['file_name'];
                $this->load->library('image_lib', $config);
                $this->image_lib->resize();

	            $gambar=$gbr['file_name'];		
				$this->galery_model->insert_galery($title,$gambar);
				echo $this->session->set_flashdata('msg','success');
				redirect('backend/galery');
			}else{
	            echo $this->session->set_flashdata('msg','error-img');
	            redirect('backend/galery');
	    	}
	                 
	    }
	}

	function update(){
		$id=htmlspecialchars($this->input->post('galery_id',TRUE),ENT_QUOTES);
		$title=htmlspecialchars($this->input->post('title',TRUE),ENT_QUOTES);
		
		$config['upload_path'] = './assets/depan/img/galery'; //path folder
	    $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
	    $config['encrypt_name'] = TRUE; //nama yang terupload nantinya
	    
	    $this->upload->initialize($config);
	    
    	if(!empty($_FILES['filefoto']['name'])){
	        if ($this->upload->do_upload('filefoto')){
	            $gbr = $this->upload->data();
                //Compress Image
                $config['image_library']='gd2';
                $config['source_image']='./assets/depan/img/galery/'.$gbr['file_name'];
                $config['create_thumb']= FALSE;
                $config['maintain_ratio']= FALSE;
                $config['quality']= '100%';
                $config['width']= 1920;
                $config['height']= 1080;
                $config['new_image']= './assets/depan/img/galery/'.$gbr['file_name'];
                $this->load->library('image_lib', $config);
                $this->image_lib->resize();

	            $gambar=$gbr['file_name'];		
				$this->galery_model->update_galery($id,$title,$gambar);
				echo $this->session->set_flashdata('msg','info');
				redirect('backend/galery');
			}else{
	            echo $this->session->set_flashdata('msg','error-img');
	            redirect('backend/galery');
	    	}
	                 
	    }else{
	    	$this->galery_model->update_galery_noimg($id,$title);
			echo $this->session->set_flashdata('msg','info');
			redirect('backend/galery');
	    }
	}


	function delete(){
		$galery_id=$this->input->post('kode',TRUE);
		$this->galery_model->delete_galery($galery_id);
		echo $this->session->set_flashdata('msg','success-hapus');
		redirect('backend/galery');
	}

}