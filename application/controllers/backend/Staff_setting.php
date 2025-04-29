<?php

class Staff_setting extends CI_Controller{
	
	function __construct(){
		parent::__construct();
		if($this->session->userdata('logged') !=TRUE){
            $url=base_url('administrator');
            redirect($url);
        };
		$this->load->model('backend/Setting_model','setting_model');
		$this->load->model('backend/Staff_model','staff_model');
		$this->load->library('upload');
		$this->load->helper('text');
	}

	function index(){
		$x['data'] = $this->staff_model->get_all_staff();
		$this->load->view('backend/v_staff',$x);
	}

	function add_new(){
		$this->load->view('backend/v_add_staff');
	}

	function submit(){
		$config['upload_path'] = './assets/depan/img/staff/';
	    $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp';
	    $config['encrypt_name'] = TRUE;

	    $this->upload->initialize($config);

	    if(!empty($_FILES['filefoto']['name'])){
	        if ($this->upload->do_upload('filefoto')){
	            $img = $this->upload->data();
	            //Compress Image
	            $config['image_library']='gd2';
	            $config['source_image']='./assets/depan/img/staff/'.$img['file_name'];
	            $config['create_thumb']= FALSE;
	            $config['maintain_ratio']= FALSE;
	            $config['quality']= '80%';
	            $config['width']= 400;
	            $config['height']= 400;
	            $config['new_image']= './assets/depan/img/staff/'.$img['file_name'];
	            $this->load->library('image_lib', $config);
	            $this->image_lib->resize();

	            // $this->_create_thumbs($img['file_name']);

	            $image=$img['file_name'];
				
				$name = $this->input->post('name');
				$position = $this->input->post('position');
				$whatsapp = $this->input->post('whatsapp');
				$facebook = $this->input->post('facebook');
				$instagram = $this->input->post('instagram');
				$x = $this->input->post('x');
				$tiktok = $this->input->post('tiktok');
				

				$this->staff_model->save_staff($name,$position,$whatsapp,$facebook,$instagram,$x,$tiktok,$image);
				echo $this->session->set_flashdata('msg','success');
				redirect('backend/Staff_setting');
			}else{
	            echo $this->session->set_flashdata('msg','warning');
	            redirect('backend/Staff_setting');
	        }

	    }else{
			redirect('backend/Staff_setting');
		}
	}

	function get_edit(){
		$staff_id = $this->uri->segment(4);
		$x['data'] = $this->staff_model->get_staff_by_id($staff_id);
		$this->load->view('backend/v_edit_staff',$x);
	}

	function update(){
		$staff_id = $this->input->post('staff_id');
		$name = $this->input->post('name');
		$position = $this->input->post('position');
		$whatsapp = $this->input->post('whatsapp');
		$facebook = $this->input->post('facebook');
		$instagram = $this->input->post('instagram');
		$x = $this->input->post('x');
		$tiktok = $this->input->post('tiktok');

		$config['upload_path'] = './assets/depan/img/staff/';
	    $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp';
	    $config['encrypt_name'] = TRUE;

	    $this->upload->initialize($config);

	    if(!empty($_FILES['filefoto']['name'])){
	        if ($this->upload->do_upload('filefoto')){
	            $img = $this->upload->data();

	            //Compress Image
	            $config['image_library']='gd2';
	            $config['source_image']='./assets/depan/img/staff/'.$img['file_name'];
	            $config['create_thumb']= FALSE;
	            $config['maintain_ratio']= FALSE;
	            $config['quality']= '100%';
	            $config['width']= 400;
	            $config['height']= 400;
	            $config['new_image']= './assets/depan/img/staff/'.$img['file_name'];
	            $this->load->library('image_lib', $config);
	            $this->image_lib->resize();

	            // $this->_create_thumbs($img['file_name']);

	            $image=$img['file_name'];

				$this->staff_model->update_staff_img($staff_id,$image);
				
			}else{
	            echo $this->session->set_flashdata('msg','warning');
	            redirect('backend/Staff_setting');
	        }
	    }

        $this->staff_model->update_staff_noimg($staff_id,$name,$position,$whatsapp,$facebook,$instagram,$x,$tiktok);
        echo $this->session->set_flashdata('msg','success');
        redirect('backend/staff_setting');

	}

	function delete(){
		$staff_id = $this->input->post('id',TRUE);
		$this->staff_model->delete_staff($staff_id);
		echo $this->session->set_flashdata('msg','success-delete');
		redirect('backend/staff_setting');
	}

}