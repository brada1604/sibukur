<?php

class Lampiran extends CI_Controller{
	
	function __construct(){
		parent::__construct();
		if($this->session->userdata('logged') !=TRUE){
            $url=base_url('administrator');
            redirect($url);
        };
		$this->load->model('backend/lampiran_model','lampiran_model');
		$this->load->library('upload');
		$this->load->helper('text');
	}

	function index(){
		$x['data'] = $this->lampiran_model->get_lampiran();
		$this->load->view('backend/v_lampiran',$x);
	}

	function insert(){
		$title=htmlspecialchars($this->input->post('title',TRUE),ENT_QUOTES);
		$url=htmlspecialchars($this->input->post('url',TRUE),ENT_QUOTES);
		
		$config['upload_path'] = './assets/depan/img/lampiran'; //path folder
	    $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
	    $config['encrypt_name'] = TRUE; //nama yang terupload nantinya
	    
	    $this->upload->initialize($config);
	    
    	if(!empty($_FILES['filefoto']['name'])){
	        if ($this->upload->do_upload('filefoto')){
	            $gbr = $this->upload->data();
                //Compress Image
                $config['image_library']='gd2';
                $config['source_image']='./assets/depan/img/lampiran/'.$gbr['file_name'];
                $config['create_thumb']= FALSE;
                $config['maintain_ratio']= FALSE;
                $config['quality']= '60%';
                $config['width']= 100;
                $config['height']= 100;
                $config['new_image']= './assets/depan/img/lampiran/'.$gbr['file_name'];
                $this->load->library('image_lib', $config);
                $this->image_lib->resize();

	            $gambar=$gbr['file_name'];		
				$this->lampiran_model->insert_lampiran($title,$url,$gambar);
				echo $this->session->set_flashdata('msg','success');
				redirect('backend/lampiran');
			}else{
	            echo $this->session->set_flashdata('msg','error-img');
	            redirect('backend/lampiran');
	    	}
	                 
	    }
	}

	function update(){
		$id=htmlspecialchars($this->input->post('lampiran_id',TRUE),ENT_QUOTES);
		$title=htmlspecialchars($this->input->post('title',TRUE),ENT_QUOTES);
		$url=htmlspecialchars($this->input->post('url',TRUE),ENT_QUOTES);
		
		$config['upload_path'] = './assets/depan/img/lampiran'; //path folder
	    $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
	    $config['encrypt_name'] = TRUE; //nama yang terupload nantinya
	    
	    $this->upload->initialize($config);
	    
    	if(!empty($_FILES['filefoto']['name'])){
	        if ($this->upload->do_upload('filefoto')){
	            $gbr = $this->upload->data();
                //Compress Image
                $config['image_library']='gd2';
                $config['source_image']='./assets/depan/img/lampiran/'.$gbr['file_name'];
                $config['create_thumb']= FALSE;
                $config['maintain_ratio']= FALSE;
                $config['quality']= '60%';
                $config['width']= 100;
                $config['height']= 100;
                $config['new_image']= './assets/depan/img/lampiran/'.$gbr['file_name'];
                $this->load->library('image_lib', $config);
                $this->image_lib->resize();

	            $gambar=$gbr['file_name'];		
				$this->lampiran_model->update_lampiran($id,$title,$url,$gambar);
				echo $this->session->set_flashdata('msg','info');
				redirect('backend/lampiran');
			}else{
	            echo $this->session->set_flashdata('msg','error-img');
	            redirect('backend/lampiran');
	    	}
	                 
	    }else{
	    	$this->lampiran_model->update_lampiran_noimg($id,$title,$url);
			echo $this->session->set_flashdata('msg','info');
			redirect('backend/lampiran');
	    }
	}


	function delete(){
		$lampiran_id=$this->input->post('kode',TRUE);
		$this->lampiran_model->delete_lampiran($lampiran_id);
		echo $this->session->set_flashdata('msg','success-hapus');
		redirect('backend/lampiran');
	}

}