<?php
//session_start(); //we need to start session in order to access it through CI 
if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 

class Magneto extends CI_Controller { 
	
	public function __construct() {
		parent::__construct();  
		$this->load->helper('form');
		$this->load->library('form_validation');
		$this->load->library('session');
		$this->load->model('Adminmodel');
		$this->load->library('image_lib');
		$this->load->helper('text');
  	    $this->load->helper('security');
	}
	
	public function index()
	{
		$this->load->view('admin/index');
	}
	public function dashboard()
	{
		//$this->load->view('admin/managecontent');
		redirect('magneto/manageaboutus');
	} 
	
	public function checkuser() {
		$this->form_validation->set_rules('username', 'Username', 'trim|required|xss_clean');
		$this->form_validation->set_rules('password', 'Password', 'trim|required|xss_clean');
		
		if ($this->form_validation->run() == FALSE) 
		{
			if(isset($this->session->userdata['logged_in']))
			{
				//$this->load->view('admin/managecontent');
				redirect('magneto/managecontent');
			}
			else
			{
				$this->load->view('admin/index');
			}
		} 
		else 
		{
		$data = array(
			'username' => $this->input->post('username'),
			'password' => md5($this->input->post("password"))
			);
		$result = $this->Adminmodel->login($data);
			if ($result == TRUE) 
			{
			
				$username = $this->input->post('username');
				$result = $this->Adminmodel->read_user_information($username);
				if ($result != false) 
				{
			    $session_data = array(
				'userid' => $result[0]->id,
				'username' => $result[0]->username,
				);
			// Add user data in session
				$this->session->set_userdata('logged_in', $session_data);
				redirect('magneto/manageaboutus');
				}
			} 
			else 
			{
				$data = array(
				'error_message' => 'Invalid Username or Password'
				);
				$this->load->view('admin/index', $data);
			}
		}
	}
	
	// Logout from admin page
	public function logout() {
	// Removing session data
		$sess_array = array(
		'username' => ''
		);
		$this->session->unset_userdata('logged_in', $sess_array);
		$data['message_display'] = 'Successfully Logout';
		$this->load->view('admin/index', $data);
	}
	
	public function changepassword()
	{
		$this->load->view('admin/header');
		$this->load->view('admin/changepassword');
	}
	public function updatepassword()
	{
		$id=$this->input->post('id');
		$data= array(
			'password' => md5($this->input->post("password"))
		);
		$this->db->where('id',$id);
		$this->db->update('tbl_login',$data);
		$this->session->set_flashdata('message', '<p>Password successfully updated!</p>');
		redirect('magneto/changepassword');
	}
	
	
	// main login area end here
	public function media_edit($id = null)
	{
		$row=$this->Adminmodel->getmediaonerow($id);
		$data['r']=$row;
		
		$this->load->view('admin/header');
		$this->load->view('admin/manage_media_addf',$data);
	
	}
	public function media_update($id = null)
	{
		$this->form_validation->set_rules('phone', 'Phone', 'trim|xss_clean|required');
		$this->form_validation->set_rules('email', 'Email', 'trim|valid_email|xss_clean|required');
		$this->form_validation->set_rules('facebook', 'Facebook', 'trim|xss_clean');
		$this->form_validation->set_rules('twitter', 'Twitter', 'trim|xss_clean');
		$this->form_validation->set_rules('linkedin', 'Linkedin', 'trim|xss_clean');
		$this->form_validation->set_rules('google_plus', 'Google Plus', 'trim|xss_clean');
		$this->form_validation->set_rules('youtube', 'Youtube', 'trim|xss_clean');
		$this->form_validation->set_rules('instagram', 'Instagram', 'trim|xss_clean');
		$this->form_validation->set_rules('home_about', 'Home About Us', 'trim|xss_clean');
		$this->form_validation->set_rules('address', 'Address', 'trim|xss_clean');
		
		if ($this->form_validation->run() == FALSE)
		{
			$id=$this->input->post('id');
			$row=$this->Adminmodel->getmediaonerow($id);
			$data['r']=$row;
			$this->load->view('admin/header');
			$this->load->view('admin/manage_media_addf',$data);
		}
		else
		{
			$id=$this->input->post('id');
			$data= array(
						'phone' => $this->input->post('phone'),
						'email' => $this->input->post('email'),
						'facebook' => $this->input->post('facebook'),
						'twitter' => $this->input->post('twitter'),
						'linkedin' => $this->input->post('linkedin'),
						'google_map' => $this->input->post('google_map'),			
						'youtube' => $this->input->post('youtube'),
						'instagram' => $this->input->post('instagram'),
						'address' => $this->input->post('address'),			
						'home_about' => $this->input->post('home_about'),
						
						);
			$this->db->where('id',$id);
			$this->db->update('tbl_media',$data);
			$this->session->set_flashdata('message', '<p>Record successfully updated!</p>');
			redirect('magneto/media_edit/'.$id);
		}
	
	}
	// main login area end here
	public function manage_footers()
	{
		$id = '1';
		$row=$this->Adminmodel->getfootersonerow($id);
		$data['r']=$row;
		
		$this->load->view('admin/header');
		$this->load->view('admin/manage_footers',$data);

	}
	public function manage_footers_update($id = null)
	{
		$id=$this->input->post('id');
		$data= array(
					'footer1' => $this->input->post('footer1'),
					'footer2' => $this->input->post('footer2'),			
					'footer3' => $this->input->post('footer3'),
					
					);
		$this->db->where('id',$id);
		$this->db->update('tbl_footers',$data);
		$this->session->set_flashdata('message', '<p>Record successfully updated!</p>');
		redirect('magneto/manage_footers/');	
	}
	/* About Us section*/	
	public function manageaboutus()
	{
		$data['row'] = $this->Adminmodel->aboutdata();
		$this->load->view('admin/header',$data);
		$this->load->view('admin/manage_aboutus',$data);		
	}	

	public function aboutus_add()
	{
		
		$this->load->view('admin/header');
		$this->load->view('admin/manage_aboutus_add');
	}
	public function aboutus_insert()	
	{
		$slug = url_title($this->input->post('pagetitle'), 'dash', TRUE);	
		if($_FILES['pic']['name'] != "")
		{
		
		$config['upload_path'] = './upload/';
		$config['allowed_types'] = 'gif|jpg|png|jpeg|webp';
		//$config['max_size'] = 5000;
		$this->load->library('upload', $config);
		if ( !$this->upload->do_upload('pic'))
		{
			$error = $this->upload->display_errors();
			$this->session->set_flashdata('message', $error);
			redirect('magneto/aboutus_add');
		}
		else
		{
			$data_upload_files = $this->upload->data();
			$image = $data_upload_files['file_name']; 
			$data = array(
						
						'meta_title' => $this->input->post('meta_title'),
						'meta_desc' => $this->input->post('meta_desc'),
						'meta_keyword' => $this->input->post('meta_keyword'),
						'pagetitle' => $this->input->post('pagetitle'),
						'title' => $this->input->post('title'),
						'description' => $this->input->post('description'),
						'image' => $image,
						'slug' => $slug
						 ); 
			//unlink('upload/'.$image);			 
			$this->db->insert('tbl_aboutus',$data);
			$this->session->set_flashdata('message', '<p>Record successfully inserted!</p>');
			redirect('magneto/aboutus_add');
		}
		}	
		else
		{
			$data = array(
						'meta_title' => $this->input->post('meta_title'),
						'meta_desc' => $this->input->post('meta_desc'),
						'meta_keyword' => $this->input->post('meta_keyword'),
						'pagetitle' => $this->input->post('pagetitle'),
						'title' => $this->input->post('title'),
						'description' => $this->input->post('description'),
						'slug' => $slug
						 ); 
			$this->db->insert('tbl_aboutus',$data);
			$this->session->set_flashdata('message', '<p>Record successfully inserted!</p>');
			redirect('magneto/aboutus_add');
		}				
	}

	public function aboutus_edit($id = null)
	{
		$row=$this->Adminmodel->aboutusonerow($id);
		$data['r']=$row;
		$this->load->view('admin/header',$data);
		$this->load->view('admin/manage_aboutus_edit',$data);
	}
    public function aboutus_update($id=null)
	{		
		$id=$this->input->post('id');
		$slug = url_title($this->input->post('pagetitle'), 'dash', TRUE);	
		//if(!empty($_FILES))
		if(!empty($_FILES['pic']['name']))
		{
			$config['upload_path'] = './upload/';
			$config['allowed_types'] = 'gif|jpg|png|jpeg|webp';
			//$config['max_size'] = 2000;
			$this->load->library('upload', $config);
			
			if (!$this->upload->do_upload('pic'))
			{
				$error = $this->upload->display_errors();
				$this->session->set_flashdata('message', $error);
				redirect($_SERVER['HTTP_REFERER']);
			}
			else
			{
				$data_upload_files = $this->upload->data();
				$image = $data_upload_files['file_name'];
				$data = array(
							'meta_title' => $this->input->post('meta_title'),
							'meta_desc' => $this->input->post('meta_desc'),
							'meta_keyword' => $this->input->post('meta_keyword'),
							'pagetitle' => $this->input->post('pagetitle'),
							'title' => $this->input->post('title'),
							'description' => $this->input->post('description'),
							'image' => $image,
							'slug' => $slug
							 ); 
			$this->db->where('id',$id);
			$this->db->update('tbl_aboutus',$data);
			$this->session->set_flashdata('message', '<p>Record successfully updated!</p>');
			redirect('magneto/manageaboutus');
			}
		}	
		else
		{
		$data = array(
						'meta_title' => $this->input->post('meta_title'),
						'meta_desc' => $this->input->post('meta_desc'),
						'meta_keyword' => $this->input->post('meta_keyword'),
						'pagetitle' => $this->input->post('pagetitle'),
						'title' => $this->input->post('title'),
						'description' => $this->input->post('description'),
						'slug' => $slug
					 ); 
			$this->db->where('id',$id);
			$this->db->update('tbl_aboutus',$data);
			$this->session->set_flashdata('message', '<p>Record successfully updated!</p>');
			redirect('magneto/manageaboutus');
		}
		
	}
   public function aboutus_delete($id = null) 
		{
		$row=$this->Adminmodel->aboutusonerow($id);
		$data['r']=$row;
			$query =  $this->db->get_where('tbl_aboutus',array('id' => $id));
			if( $query->num_rows() > 0 )
			{
				$row = $query->row();
				$picture = $row->image;
				if($picture!= "")
				{
				unlink('upload/'.$picture);
				}
				$this->db->delete('tbl_aboutus', array('id' => $id));
				$this->session->set_flashdata('message', '<p>Record successfully deleted!</p>');
				redirect($_SERVER['HTTP_REFERER']);
				return true;
			}
			$this->session->set_flashdata('message', '<p>Record successfully deleted!</p>');
			redirect($_SERVER['HTTP_REFERER']);
			return false;   
		}
		
	public function aboutus_img_delete($id = null)
		{
		$row=$this->Adminmodel->aboutusonerow($id);
		$data['r']=$row;
			$query =  $this->db->get_where('tbl_aboutus',array('id' => $id));
			if( $query->num_rows() > 0 )
			{
				$row = $query->row();
				$picture = $row->image;
				$id = $row->id;
				if($picture!= "")
				{
				unlink('upload/'.$picture);
				}
				//$this->db->delete('tbl_brand', array('id' => $id));
				$data = array(
						'image' => ''
				);
				$this->db->where('id',$id);
				$this->db->update('tbl_aboutus',$data);
				$this->session->set_flashdata('message', '<p>Record image successfully deleted!</p>');
				redirect($_SERVER['HTTP_REFERER']);
				return true;
			}
			$this->session->set_flashdata('message', '<p>Record image successfully deleted!</p>');
			redirect($_SERVER['HTTP_REFERER']);
			return false;   
		}
	//About inside content
	public function manage_inside_content($id = null)
	{
	    $data['result'] = $this->Adminmodel->user_content_DataId($id);
		$data['cat_result'] = $this->Adminmodel->aboutdata();
		//print_r($data['cat_result']);
		$this->load->view('admin/header');
		$this->load->view('admin/about_inside_content',$data);
	
	}	
	
	public function inside_content_add()
	{
	    $data['cat_result'] = $this->Adminmodel->aboutdata();
		$this->load->view('admin/header');
		$this->load->view('admin/about_inside_content_add',$data);
	}
	public function inside_content_insert()	
	{
		$user_id=$this->input->post('user_id');
		if($_FILES['pic']['name'] != "")
		{		
		$config['upload_path'] = './upload/';
		$config['allowed_types'] = 'gif|jpg|png|jpeg|webp';
		//$config['max_size'] = 5000;
		$this->load->library('upload', $config);
		if ( !$this->upload->do_upload('pic'))
		{
			$error = $this->upload->display_errors();
			$this->session->set_flashdata('message', $error);
			redirect('magneto/inside_content_add');
		}
		else
		{
			$data_upload_files = $this->upload->data();
			$image = $data_upload_files['file_name']; 
			
			$data = array(
						'user_id' => $this->input->post('user_id'),
						'name' => $this->input->post('name'),
						'description' => $this->input->post('description'),
						'image' => $image 
						 ); 
			//unlink('upload/'.$image);			 
			$this->db->insert('tbl_inside_content',$data);
			$this->session->set_flashdata('message', '<p>Record successfully inserted!</p>');
			redirect('magneto/manage_inside_content/'.$user_id);
		}
		}	
		else
		{
			$data = array(
						'user_id' => $this->input->post('user_id'),
						'name' => $this->input->post('name'),
						'description' => $this->input->post('description')
						 ); 
			$this->db->insert('tbl_inside_content',$data);
			$this->session->set_flashdata('message', '<p>Record successfully inserted!</p>');
			redirect('magneto/manage_inside_content/'.$user_id);
		}				
	}
	public function inside_content_edit($id = null)
	{
		$data['cat_result'] = $this->Adminmodel->aboutdata();
		$row=$this->Adminmodel->user_content_onerow($id);
		$data['r']=$row;
		$this->load->view('admin/header',$data);
		$this->load->view('admin/about_inside_content_edit',$data);
	}
	public function inside_content_update($id=null)
	{		
		$id=$this->input->post('id');
		$user_id=$this->input->post('user_id');
		//if(!empty($_FILES))
		if(!empty($_FILES['pic']['name']))
		{
			$config['upload_path'] = './upload/';
			$config['allowed_types'] = 'gif|jpg|png|jpeg|webp';
			//$config['max_size'] = 2000;
			$this->load->library('upload', $config);
			
			if (!$this->upload->do_upload('pic'))
			{
				$error = $this->upload->display_errors();
				$this->session->set_flashdata('message', $error);
				redirect($_SERVER['HTTP_REFERER']);
			}
			else
			{
				$data_upload_files = $this->upload->data();
				$image = $data_upload_files['file_name'];
				
				$data = array(
							'user_id' => $this->input->post('user_id'),
						    'name' => $this->input->post('name'),
							'description' => $this->input->post('description'),
							'image' => $image 
							 ); 
			$this->db->where('id',$id);
			$this->db->update('tbl_inside_content',$data);
			$this->session->set_flashdata('message', '<p>Record successfully updated!</p>');
			redirect('magneto/manage_inside_content/'.$user_id);
			}
		}	
		else
		{
		$data = array(
							'user_id' => $this->input->post('user_id'),
						    'name' => $this->input->post('name'),
							'description' => $this->input->post('description')
					 ); 
			$this->db->where('id',$id);
			$this->db->update('tbl_inside_content',$data);
			$this->session->set_flashdata('message', '<p>Record successfully updated!</p>');
			redirect('magneto/manage_inside_content/'.$user_id);
		}		
	}
	public function inside_content_delete($id = null) 
		{
		$row=$this->Adminmodel->user_content_onerow($id);
		$data['r']=$row;
			$query =  $this->db->get_where('tbl_inside_content',array('id' => $id));
			if( $query->num_rows() > 0 )
			{
				$row = $query->row();
				$picture = $row->image;
				if($picture!= "")
				{
				unlink('upload/'.$picture);
				unlink('upload/thumb/'.$picture);
				}
				$this->db->delete('tbl_inside_content', array('id' => $id));
				$this->session->set_flashdata('message', '<p>Record successfully deleted!</p>');
				redirect($_SERVER['HTTP_REFERER'],$data);
				return true;
			}
			$this->session->set_flashdata('message', '<p>Record successfully deleted!</p>');
			//redirect('magneto/managebannerimagesubcategory');
			redirect($_SERVER['HTTP_REFERER']);
			return false;   
		}
	 public function inside_content_img_delete($id = null)
		{
		$row=$this->Adminmodel->user_content_onerow($id);
		$data['r']=$row;
			$query =  $this->db->get_where('tbl_inside_content',array('id' => $id));
			if( $query->num_rows() > 0 )
			{
				$row = $query->row();
				$picture = $row->image;
				$id = $row->id;
				if($picture!= "")
				{
				unlink('upload/'.$picture);
				unlink('upload/thumb/'.$picture);
				}
				//$this->db->delete('tbl_brand', array('id' => $id));
				$data = array(
						'image' => ''
				);
				$this->db->where('id',$id);
				$this->db->update('tbl_inside_content',$data);
				$this->session->set_flashdata('message', '<p>Image successfully deleted!</p>');
				redirect($_SERVER['HTTP_REFERER'],$data);
				return true;
			}
			$this->session->set_flashdata('message', '<p>Image successfully deleted!</p>');
			redirect($_SERVER['HTTP_REFERER']);
			return false;   
		}	
	
	/* Pages section*/	
	public function managepages()
	{
		$data['row'] = $this->Adminmodel->pagesdata();
		$this->load->view('admin/header',$data);
		$this->load->view('admin/manage_pages',$data);		
	}	

	public function pages_add()
	{
		
		$this->load->view('admin/header');
		$this->load->view('admin/manage_pages_add');
	}
	public function pages_insert()	
	{
		$slug = url_title($this->input->post('pagetitle'), 'dash', TRUE);	
		//File 1  upload picture
		if (!empty($_FILES['userfile']['name'])) {
			$config['upload_path'] = './upload/';
			$config['allowed_types'] = 'gif|jpg|png|jpeg';
			$config['file_name'] = $_FILES['userfile']['name'];

			//Load upload library and initialize configuration
			$this->load->library('upload', $config);
			//$this->upload->initialize($config);

			if ($this->upload->do_upload('userfile')) {
				$uploadData = $this->upload->data();
				$userfile = $uploadData['file_name'];
				

			} else {
				$userfile = '';
			}
		} else {
			$userfile = '';
		}

		//File 2  upload picture
		if (!empty($_FILES['userfile2']['name'])) {
			$config['upload_path'] = './upload/pdf/';
			$config['allowed_types'] = 'pdf';
			$config['file_name'] = $_FILES['userfile2']['name'];

			//Load upload library and initialize configuration
			$this->load->library('upload', $config);
			$this->upload->initialize($config);

			if ($this->upload->do_upload('userfile2')) {
				$uploadData = $this->upload->data();
				$userfile2 = $uploadData['file_name'];
				
			} else {
				$userfile2 = '';
			}
		} else {
			$userfile2 = '';
		}
		//File 3  upload picture
		if (!empty($_FILES['userfile3']['name'])) {
			$config['upload_path'] = './upload/';
			$config['allowed_types'] = 'gif|jpg|png|jpeg';
			$config['file_name'] = $_FILES['userfile3']['name'];

			//Load upload library and initialize configuration
			$this->load->library('upload', $config);
			//$this->upload->initialize($config);

			if ($this->upload->do_upload('userfile3')) {
				$uploadData = $this->upload->data();
				$userfile3 = $uploadData['file_name'];
			} else {
				$userfile3 = '';
			}
		} else {
			$userfile3 = '';
		}
		//File 3  upload picture
		if (!empty($_FILES['userfile4']['name'])) {
			$config['upload_path'] = './upload/';
			$config['allowed_types'] = 'gif|jpg|png|jpeg';
			$config['file_name'] = $_FILES['userfile4']['name'];

			//Load upload library and initialize configuration
			$this->load->library('upload', $config);
			$this->upload->initialize($config);

			if ($this->upload->do_upload('userfile4')) {
				$uploadData = $this->upload->data();
				$userfile4 = $uploadData['file_name'];
				
			} else {
				$userfile4 = '';
			}
			} else {
				$userfile4 = '';
		}
		$data = array(
					
					'meta_title' => $this->input->post('meta_title'),
					'meta_desc' => $this->input->post('meta_desc'),
					'meta_keyword' => $this->input->post('meta_keyword'),
					'footer_type' => $this->input->post('footer_type'),
					'formtitle' => $this->input->post('formtitle'),
					'pagetitle' => $this->input->post('pagetitle'),
					'title' => $this->input->post('title'),
					'small_description' => $this->input->post('small_description'),
					'description' => $this->input->post('description'),
					'footer_desc' => $this->input->post('footer_desc'),
					'google_map' => $this->input->post('google_map'),
					'image' => $userfile,
					'image2' => $userfile2,
					'image3' => $userfile3,
					'image4' => $userfile4,
					'slug' => $slug
						); 
		//unlink('upload/'.$image);			 
		$this->db->insert('tbl_pages',$data);
		$this->session->set_flashdata('message', '<p>Record successfully inserted!</p>');
		redirect('magneto/pages_add');	
		
	}

	public function pages_edit($id = null)
	{
		$row=$this->Adminmodel->pagesonerow($id);
		$data['r']=$row;
		$this->load->view('admin/header',$data);
		$this->load->view('admin/manage_pages_edit',$data);
	}
    public function pages_update($id=null)
	{		
		$id=$this->input->post('id');
		$slug = url_title($this->input->post('pagetitle'), 'dash', TRUE);	
		//Check whether user upload picture
		if (!empty($_FILES['userfile']['name'])) {
			$config['upload_path'] = './upload/';
			$config['allowed_types'] = 'gif|jpg|png|jpeg';
			$config['file_name'] = $_FILES['userfile']['name'];

			//Load upload library and initialize configuration
			$this->load->library('upload', $config);
			$this->upload->initialize($config);

			if ($this->upload->do_upload('userfile')) {
				$uploadData = $this->upload->data();
				$userfile = $uploadData['file_name'];
				
			} else {
				$userfile = $this->input->post('userfile');
			}
		} else {
			$userfile = $this->input->post('userfile');
		}

		//Check whether user upload picture
		if (!empty($_FILES['userfile2']['name'])) {
			$config['upload_path'] = './upload/pdf/';
			$config['allowed_types'] = 'pdf';
			$config['file_name'] = $_FILES['userfile2']['name'];

			//Load upload library and initialize configuration
			$this->load->library('upload', $config);
			$this->upload->initialize($config);

			if ($this->upload->do_upload('userfile2')) {
				$uploadData = $this->upload->data();
				$userfile2 = $uploadData['file_name'];
				
			} else {
				$userfile2 = $this->input->post('userfile2');
			}
		} else {
			$userfile2 = $this->input->post('userfile2');
		}
		//Check whether user upload picture
		if (!empty($_FILES['userfile3']['name'])) {
			$config['upload_path'] = './upload/';
			$config['allowed_types'] = 'gif|jpg|png|jpeg';
			$config['file_name'] = $_FILES['userfile3']['name'];

			//Load upload library and initialize configuration
			$this->load->library('upload', $config);
			$this->upload->initialize($config);

			if ($this->upload->do_upload('userfile3')) {
				$uploadData = $this->upload->data();
				$userfile3 = $uploadData['file_name'];
				
			} else {
				$userfile3 = $this->input->post('userfile3');
			}
		} else {
			$userfile3 = $this->input->post('userfile3');
		}
		//Check whether user upload picture
		if (!empty($_FILES['userfile4']['name'])) {
			$config['upload_path'] = './upload/';
			$config['allowed_types'] = 'gif|jpg|png|jpeg';
			$config['file_name'] = $_FILES['userfile4']['name'];

			//Load upload library and initialize configuration
			$this->load->library('upload', $config);
			$this->upload->initialize($config);

			if ($this->upload->do_upload('userfile4')) {
				$uploadData = $this->upload->data();
				$userfile4 = $uploadData['file_name'];
				
			} else {
				$userfile4 = $this->input->post('userfile4');
			}
		} else {
			$userfile4 = $this->input->post('userfile4');
		}
		$data = array(
					'meta_title' => $this->input->post('meta_title'),
					'meta_desc' => $this->input->post('meta_desc'),
					'meta_keyword' => $this->input->post('meta_keyword'),
					'footer_type' => $this->input->post('footer_type'),
					'formtitle' => $this->input->post('formtitle'),
					'pagetitle' => $this->input->post('pagetitle'),
					'title' => $this->input->post('title'),
					'small_description' => $this->input->post('small_description'),
					'description' => $this->input->post('description'),
					'footer_desc' => $this->input->post('footer_desc'),
					'google_map' => $this->input->post('google_map'),
					'image' => $userfile,
					'image2' => $userfile2,
					'image3' => $userfile3,
					'image4' => $userfile4,
					'slug' => $slug
						); 
		$this->db->where('id',$id);
		$this->db->update('tbl_pages',$data);
		$this->session->set_flashdata('message', '<p>Record successfully updated!</p>');
		redirect('magneto/managepages');
		
		
	}
   public function pages_delete($id = null) 
		{
		$row=$this->Adminmodel->pagesonerow($id);
		$data['r']=$row;
			$query =  $this->db->get_where('tbl_pages',array('id' => $id));
			if( $query->num_rows() > 0 )
			{
				$row = $query->row();
				$picture = $row->image;
				$picture2 = $row->image2;
				if($picture!= "")
				{
				unlink('./upload/'.$picture);
				}
				if($picture2!= "")
				{
				unlink('./upload/pdf/'.$picture2);
				}
				$this->db->delete('tbl_pages', array('id' => $id));
				$this->session->set_flashdata('message', '<p>Record successfully deleted!</p>');
				redirect($_SERVER['HTTP_REFERER']);
				return true;
			}
			$this->session->set_flashdata('message', '<p>Record successfully deleted!</p>');
			redirect($_SERVER['HTTP_REFERER']);
			return false;   
		}
		
	public function pages_img_delete($id = null, $img_name = "")
		{
		$row=$this->Adminmodel->pagesonerow($id);
		$data['r']=$row;
			$query =  $this->db->get_where('tbl_pages',array('id' => $id));
			if( $query->num_rows() > 0 )
			{
				$row = $query->row();
				//$picture = $row->image;
				$picture = $img_name;
				$id = $row->id;
				if($picture != '') {
					$image_with_path = './upload/'.$picture;
				
				   if(file_exists($image_with_path)){
					   unlink($image_with_path);            
				   }
				}
				//$this->db->delete('tbl_brand', array('id' => $id));
				$data = array(
					$picture => ''
				);
				$this->db->where('id',$id);
				$this->db->update('tbl_pages',$data);
				$this->session->set_flashdata('message', '<p>Record image successfully deleted!</p>');
				redirect($_SERVER['HTTP_REFERER']);
				return true;
			}
			$this->session->set_flashdata('message', '<p>Record image successfully deleted!</p>');
			redirect($_SERVER['HTTP_REFERER']);
			return false;   
		}
		public function pages_img2_delete($id = null)
		{
		$row=$this->Adminmodel->pagesonerow($id);
		$data['r']=$row;
			$query =  $this->db->get_where('tbl_pages',array('id' => $id));
			if( $query->num_rows() > 0 )
			{
				$row = $query->row();
				$picture = $row->image2;
				$id = $row->id;
				if($picture!= "")
				{
				unlink('upload/pdf/'.$picture);
				}
				//$this->db->delete('tbl_brand', array('id' => $id));
				$data = array(
						'image2' => ''
				);
				$this->db->where('id',$id);
				$this->db->update('tbl_pages',$data);
				$this->session->set_flashdata('message', '<p>Record image successfully deleted!</p>');
				redirect($_SERVER['HTTP_REFERER']);
				return true;
			}
			$this->session->set_flashdata('message', '<p>Record image successfully deleted!</p>');
			redirect($_SERVER['HTTP_REFERER']);
			return false;   
		}
	//pages pages inside content
	public function manage_pages_inside_content($id = null)
	{
	    $data['result'] = $this->Adminmodel->pages_content_DataId($id);
		$data['cat_result'] = $this->Adminmodel->pagesdata();
		//print_r($data['cat_result']);
		$this->load->view('admin/header');
		$this->load->view('admin/pages_inside_content',$data);
	
	}	
	
	public function pages_inside_content_add()
	{
	    $data['cat_result'] = $this->Adminmodel->pagesdata();
		$this->load->view('admin/header');
		$this->load->view('admin/pages_inside_content_add',$data);
	}
	public function pages_inside_content_insert()	
	{
		$user_id=$this->input->post('user_id');
		if($_FILES['pic']['name'] != "")
		{		
		$config['upload_path'] = './upload/';
		$config['allowed_types'] = 'gif|jpg|png|jpeg|webp';
		//$config['max_size'] = 5000;
		$this->load->library('upload', $config);
		if ( !$this->upload->do_upload('pic'))
		{
			$error = $this->upload->display_errors();
			$this->session->set_flashdata('message', $error);
			redirect('magneto/pages_inside_content_add');
		}
		else
		{
			$data_upload_files = $this->upload->data();
			$image = $data_upload_files['file_name']; 
			
			$data = array(
						'user_id' => $this->input->post('user_id'),
						'name' => $this->input->post('name'),
						'description' => $this->input->post('description'),

						'image' => $image 
						 ); 
			//unlink('upload/'.$image);			 
			$this->db->insert('tbl_pages_inside_content',$data);
			$this->session->set_flashdata('message', '<p>Record successfully inserted!</p>');
			redirect('magneto/manage_pages_inside_content/'.$user_id);
		}
		}	
		else
		{
			$data = array(
						'user_id' => $this->input->post('user_id'),
						'name' => $this->input->post('name'),
						'description' => $this->input->post('description')
						 ); 
			$this->db->insert('tbl_pages_inside_content',$data);
			$this->session->set_flashdata('message', '<p>Record successfully inserted!</p>');
			redirect('magneto/manage_pages_inside_content/'.$user_id);
		}				
	}
	public function pages_inside_content_edit($id = null)
	{
		$data['cat_result'] = $this->Adminmodel->pagesdata();
		$row=$this->Adminmodel->pages_content_onerow($id);
		$data['r']=$row;
		$this->load->view('admin/header',$data);
		$this->load->view('admin/pages_inside_content_edit',$data);
	}
	public function pages_inside_content_update($id=null)
	{		
		$id=$this->input->post('id');
		$user_id=$this->input->post('user_id');
		//if(!empty($_FILES))
		if(!empty($_FILES['pic']['name']))
		{
			$config['upload_path'] = './upload/';
			$config['allowed_types'] = 'gif|jpg|png|jpeg|webp';
			//$config['max_size'] = 2000;
			$this->load->library('upload', $config);
			
			if (!$this->upload->do_upload('pic'))
			{
				$error = $this->upload->display_errors();
				$this->session->set_flashdata('message', $error);
				redirect($_SERVER['HTTP_REFERER']);
			}
			else
			{
				$data_upload_files = $this->upload->data();
				$image = $data_upload_files['file_name'];
			
				$data = array(
							'user_id' => $this->input->post('user_id'),
						    'name' => $this->input->post('name'),
							'description' => $this->input->post('description'),
							'image' => $image 
							 ); 
			$this->db->where('id',$id);
			$this->db->update('tbl_pages_inside_content',$data);
			$this->session->set_flashdata('message', '<p>Record successfully updated!</p>');
			redirect('magneto/manage_pages_inside_content/'.$user_id);
			}
		}	
		else
		{
		$data = array(
							'user_id' => $this->input->post('user_id'),
						    'name' => $this->input->post('name'),
							'description' => $this->input->post('description')
					 ); 
			$this->db->where('id',$id);
			$this->db->update('tbl_pages_inside_content',$data);
			$this->session->set_flashdata('message', '<p>Record successfully updated!</p>');
			redirect('magneto/manage_pages_inside_content/'.$user_id);
		}		
	}
	public function pages_inside_content_delete($id = null) 
		{
		$row=$this->Adminmodel->pages_content_onerow($id);
		$data['r']=$row;
			$query =  $this->db->get_where('tbl_pages_inside_content',array('id' => $id));
			if( $query->num_rows() > 0 )
			{
				$row = $query->row();
				$picture = $row->image;
				if($picture!= "")
				{
				unlink('upload/'.$picture);
				unlink('upload/thumb/'.$picture);
				}
				$this->db->delete('tbl_pages_inside_content', array('id' => $id));
				$this->session->set_flashdata('message', '<p>Record successfully deleted!</p>');
				redirect($_SERVER['HTTP_REFERER'],$data);
				return true;
			}
			$this->session->set_flashdata('message', '<p>Record successfully deleted!</p>');
			//redirect('magneto/managebannerimagesubcategory');
			redirect($_SERVER['HTTP_REFERER']);
			return false;   
		}
	 public function pages_inside_content_img_delete($id = null)
		{
		$row=$this->Adminmodel->pages_content_onerow($id);
		$data['r']=$row;
			$query =  $this->db->get_where('tbl_pages_inside_content',array('id' => $id));
			if( $query->num_rows() > 0 )
			{
				$row = $query->row();
				$picture = $row->image;
				$id = $row->id;
				if($picture!= "")
				{
				unlink('upload/'.$picture);
				unlink('upload/thumb/'.$picture);
				}
				//$this->db->delete('tbl_brand', array('id' => $id));
				$data = array(
						'image' => ''
				);
				$this->db->where('id',$id);
				$this->db->update('tbl_pages_inside_content',$data);
				$this->session->set_flashdata('message', '<p>Image successfully deleted!</p>');
				redirect($_SERVER['HTTP_REFERER'],$data);
				return true;
			}
			$this->session->set_flashdata('message', '<p>Image successfully deleted!</p>');
			redirect($_SERVER['HTTP_REFERER']);
			return false;   
		}	
	/* services Us section*/	
	public function manageservices()
	{
		$data['row'] = $this->Adminmodel->servicesdata();
		$this->load->view('admin/header',$data);
		$this->load->view('admin/manage_services',$data);		
	}	

	public function services_add()
	{
		$data['cat_result'] = $this->Adminmodel->servicesdata();
		$this->load->view('admin/header');
		$this->load->view('admin/manage_services_add');
	}
	public function services_insert()	
	{
		$slug = url_title($this->input->post('pagetitle'), 'dash', TRUE);	
		//File 1  upload picture
		if (!empty($_FILES['userfile']['name'])) {
			$config['upload_path'] = './upload/';
			$config['allowed_types'] = 'gif|jpg|png|jpeg';
			$config['file_name'] = $_FILES['userfile']['name'];

			//Load upload library and initialize configuration
			$this->load->library('upload', $config);
			//$this->upload->initialize($config);

			if ($this->upload->do_upload('userfile')) {
				$uploadData = $this->upload->data();
				$userfile = $uploadData['file_name'];
			} else {
				$userfile = '';
			}
		} else {
			$userfile = '';
		}

		//File 2  upload picture
		if (!empty($_FILES['userfile2']['name'])) {
			$config['upload_path'] = './upload/pdf/';
			$config['allowed_types'] = 'pdf';
			$config['file_name'] = $_FILES['userfile2']['name'];

			//Load upload library and initialize configuration
			$this->load->library('upload', $config);
			$this->upload->initialize($config);

			if ($this->upload->do_upload('userfile2')) {
				$uploadData = $this->upload->data();
				$userfile2 = $uploadData['file_name'];
				
			} else {
				$userfile2 = '';
			}
		} else {
			$userfile2 = '';
		}
		//File 3  upload picture
		if (!empty($_FILES['userfile3']['name'])) {
			$config['upload_path'] = './upload/';
			$config['allowed_types'] = 'gif|jpg|png|jpeg';
			$config['file_name'] = $_FILES['userfile3']['name'];

			//Load upload library and initialize configuration
			$this->load->library('upload', $config);
			//$this->upload->initialize($config);

			if ($this->upload->do_upload('userfile3')) {
				$uploadData = $this->upload->data();
				$userfile3 = $uploadData['file_name'];
			} else {
				$userfile3 = '';
			}
		} else {
			$userfile3 = '';
		}
		//File 3  upload picture
		if (!empty($_FILES['userfile4']['name'])) {
			$config['upload_path'] = './upload/';
			$config['allowed_types'] = 'gif|jpg|png|jpeg';
			$config['file_name'] = $_FILES['userfile4']['name'];

			//Load upload library and initialize configuration
			$this->load->library('upload', $config);
			$this->upload->initialize($config);

			if ($this->upload->do_upload('userfile4')) {
				$uploadData = $this->upload->data();
				$userfile4 = $uploadData['file_name'];
				
			} else {
				$userfile4 = '';
			}
			} else {
				$userfile4 = '';
		}
			$data = array(
						
						'meta_title' => $this->input->post('meta_title'),
						'meta_desc' => $this->input->post('meta_desc'),
						'meta_keyword' => $this->input->post('meta_keyword'),
						'footer_type' => $this->input->post('footer_type'),
						'formtitle' => $this->input->post('formtitle'),
						'pagetitle' => $this->input->post('pagetitle'),
						'title' => $this->input->post('title'),
						'small_description' => $this->input->post('small_description'),
						'description' => $this->input->post('description'),
						'footer_desc' => $this->input->post('footer_desc'),
						'google_map' => $this->input->post('google_map'),
						'image' => $userfile,
						'image2' => $userfile2,
						'image3' => $userfile3,
						'image4' => $userfile4,
						'slug' => $slug
						 ); 
			$this->db->insert('tbl_services',$data);
			$this->session->set_flashdata('message', '<p>Record successfully inserted!</p>');
			redirect('magneto/services_add');
					
	}

	public function services_edit($id = null)
	{
		$row=$this->Adminmodel->servicesonerow($id);
		$data['r']=$row;
		$this->load->view('admin/header',$data);
		$this->load->view('admin/manage_services_edit',$data);
	}
    public function services_update($id=null)
	{		
		$id=$this->input->post('id');
		$slug = url_title($this->input->post('pagetitle'), 'dash', TRUE);	
		//Check whether user upload picture
		if (!empty($_FILES['userfile']['name'])) {
			$config['upload_path'] = './upload/';
			$config['allowed_types'] = 'gif|jpg|png|jpeg';
			$config['file_name'] = $_FILES['userfile']['name'];

			//Load upload library and initialize configuration
			$this->load->library('upload', $config);
			$this->upload->initialize($config);

			if ($this->upload->do_upload('userfile')) {
				$uploadData = $this->upload->data();
				$userfile = $uploadData['file_name'];
				
			} else {
				$userfile = $this->input->post('userfile');
			}
		} else {
			$userfile = $this->input->post('userfile');
		}

		//Check whether user upload picture
		if (!empty($_FILES['userfile2']['name'])) {
			$config['upload_path'] = './upload/pdf/';
			$config['allowed_types'] = 'pdf';
			$config['file_name'] = $_FILES['userfile2']['name'];

			//Load upload library and initialize configuration
			$this->load->library('upload', $config);
			$this->upload->initialize($config);

			if ($this->upload->do_upload('userfile2')) {
				$uploadData = $this->upload->data();
				$userfile2 = $uploadData['file_name'];
				
			} else {
				$userfile2 = $this->input->post('userfile2');
			}
		} else {
			$userfile2 = $this->input->post('userfile2');
		}
		//Check whether user upload picture
		if (!empty($_FILES['userfile3']['name'])) {
			$config['upload_path'] = './upload/';
			$config['allowed_types'] = 'gif|jpg|png|jpeg';
			$config['file_name'] = $_FILES['userfile3']['name'];

			//Load upload library and initialize configuration
			$this->load->library('upload', $config);
			$this->upload->initialize($config);

			if ($this->upload->do_upload('userfile3')) {
				$uploadData = $this->upload->data();
				$userfile3 = $uploadData['file_name'];
				
			} else {
				$userfile3 = $this->input->post('userfile3');
			}
		} else {
			$userfile3 = $this->input->post('userfile3');
		}
		//Check whether user upload picture
		if (!empty($_FILES['userfile4']['name'])) {
			$config['upload_path'] = './upload/';
			$config['allowed_types'] = 'gif|jpg|png|jpeg';
			$config['file_name'] = $_FILES['userfile4']['name'];

			//Load upload library and initialize configuration
			$this->load->library('upload', $config);
			$this->upload->initialize($config);

			if ($this->upload->do_upload('userfile4')) {
				$uploadData = $this->upload->data();
				$userfile4 = $uploadData['file_name'];
				
			} else {
				$userfile4 = $this->input->post('userfile4');
			}
		} else {
			$userfile4 = $this->input->post('userfile4');
		}
		$data = array(
					'meta_title' => $this->input->post('meta_title'),
					'meta_desc' => $this->input->post('meta_desc'),
					'meta_keyword' => $this->input->post('meta_keyword'),
					'footer_type' => $this->input->post('footer_type'),
					'formtitle' => $this->input->post('formtitle'),
					'pagetitle' => $this->input->post('pagetitle'),
					'title' => $this->input->post('title'),
					'small_description' => $this->input->post('small_description'),
					'description' => $this->input->post('description'),
					'footer_desc' => $this->input->post('footer_desc'),
					'google_map' => $this->input->post('google_map'),
					'image' => $userfile,
					'image2' => $userfile2,
					'image3' => $userfile3,
					'image4' => $userfile4,
					'slug' => $slug
						); 
		
			$this->db->where('id',$id);
			$this->db->update('tbl_services',$data);
			$this->session->set_flashdata('message', '<p>Record successfully updated!</p>');
			redirect('magneto/manageservices');
		
		
	}
   public function services_delete($id = null) 
		{
		$row=$this->Adminmodel->servicesonerow($id);
		$data['r']=$row;
			$query =  $this->db->get_where('tbl_services',array('id' => $id));
			if( $query->num_rows() > 0 )
			{
				$row = $query->row();
				$picture = $row->image;
				if($picture!= "")
				{
				unlink('upload/'.$picture);
				}
				$this->db->delete('tbl_services', array('id' => $id));
				$this->session->set_flashdata('message', '<p>Record successfully deleted!</p>');
				redirect($_SERVER['HTTP_REFERER']);
				return true;
			}
			$this->session->set_flashdata('message', '<p>Record successfully deleted!</p>');
			redirect($_SERVER['HTTP_REFERER']);
			return false;   
		}
		
	public function services_img_delete($id = null, $img_name = "")
		{
		$row=$this->Adminmodel->servicesonerow($id);
		$data['r']=$row;
			$query =  $this->db->get_where('tbl_services',array('id' => $id));
			if( $query->num_rows() > 0 )
			{
				$row = $query->row();
				//$picture = $row->image;
				$picture = $img_name;
				$id = $row->id;
				if($picture != '') {
					$image_with_path = './upload/'.$picture;
				
				   if(file_exists($image_with_path)){
					   unlink($image_with_path);            
				   }
				}
				//$this->db->delete('tbl_brand', array('id' => $id));
				$data = array(
					$picture => ''
				);
				$this->db->where('id',$id);
				$this->db->update('tbl_services',$data);
				$this->session->set_flashdata('message', '<p>Record image successfully deleted!</p>');
				redirect($_SERVER['HTTP_REFERER']);
				return true;
			}
			$this->session->set_flashdata('message', '<p>Record image successfully deleted!</p>');
			redirect($_SERVER['HTTP_REFERER']);
			return false;   
		}
	public function services_img2_delete($id = null)
		{
			$row=$this->Adminmodel->servicesonerow($id);
			$data['r']=$row;
				$query =  $this->db->get_where('tbl_services',array('id' => $id));
				if( $query->num_rows() > 0 )
				{
					$row = $query->row();
					$picture = $row->image2;
					$id = $row->id;
					if($picture!= "")
					{
					unlink('upload/pdf/'.$picture);
					}
					//$this->db->delete('tbl_brand', array('id' => $id));
					$data = array(
							'image2' => ''
					);
					$this->db->where('id',$id);
					$this->db->update('tbl_services',$data);
					$this->session->set_flashdata('message', '<p>Record image successfully deleted!</p>');
					redirect($_SERVER['HTTP_REFERER']);
					return true;
				}
				$this->session->set_flashdata('message', '<p>Record image successfully deleted!</p>');
				redirect($_SERVER['HTTP_REFERER']);
				return false;   
		}	
	//services inside content
	public function manage_services_inside_content($id = null)
	{
	    $data['result'] = $this->Adminmodel->services_content_DataId($id);
		$data['cat_result'] = $this->Adminmodel->servicesdata();
		//print_r($data['cat_result']);
		$this->load->view('admin/header');
		$this->load->view('admin/services_inside_content',$data);
	
	}	
	
	public function services_inside_content_add()
	{
	    $data['cat_result'] = $this->Adminmodel->servicesdata();
		$this->load->view('admin/header');
		$this->load->view('admin/services_inside_content_add',$data);
	}
	public function services_inside_content_insert()	
	{
		$user_id=$this->input->post('user_id');
		if($_FILES['pic']['name'] != "")
		{		
		$config['upload_path'] = './upload/';
		$config['allowed_types'] = 'gif|jpg|png|jpeg|webp';
		//$config['max_size'] = 5000;
		$this->load->library('upload', $config);
		if ( !$this->upload->do_upload('pic'))
		{
			$error = $this->upload->display_errors();
			$this->session->set_flashdata('message', $error);
			redirect('magneto/services_inside_content_add');
		}
		else
		{
			$data_upload_files = $this->upload->data();
			$image = $data_upload_files['file_name']; 
			
			$data = array(
						'user_id' => $this->input->post('user_id'),
						'name' => $this->input->post('name'),
						'description' => $this->input->post('description'),
						'image' => $image 
						 ); 
			//unlink('upload/'.$image);			 
			$this->db->insert('tbl_services_content',$data);
			$this->session->set_flashdata('message', '<p>Record successfully inserted!</p>');
			redirect('magneto/manage_services_inside_content/'.$user_id);
		}
		}	
		else
		{
			$data = array(
						'user_id' => $this->input->post('user_id'),
						'name' => $this->input->post('name'),
						'description' => $this->input->post('description')
						 ); 
			$this->db->insert('tbl_services_content',$data);
			$this->session->set_flashdata('message', '<p>Record successfully inserted!</p>');
			redirect('magneto/manage_services_inside_content/'.$user_id);
		}				
	}
	public function services_inside_content_edit($id = null)
	{
		$data['cat_result'] = $this->Adminmodel->servicesdata();
		$row=$this->Adminmodel->services_content_onerow($id);
		$data['r']=$row;
		$this->load->view('admin/header',$data);
		$this->load->view('admin/services_inside_content_edit',$data);
	}
	public function services_inside_content_update($id=null)
	{		
		$id=$this->input->post('id');
		$user_id=$this->input->post('user_id');
		//if(!empty($_FILES))
		if(!empty($_FILES['pic']['name']))
		{
			$config['upload_path'] = './upload/';
			$config['allowed_types'] = 'gif|jpg|png|jpeg|webp';
			//$config['max_size'] = 2000;
			$this->load->library('upload', $config);
			
			if (!$this->upload->do_upload('pic'))
			{
				$error = $this->upload->display_errors();
				$this->session->set_flashdata('message', $error);
				redirect($_SERVER['HTTP_REFERER']);
			}
			else
			{
				$data_upload_files = $this->upload->data();
				$image = $data_upload_files['file_name'];
				 
				$data = array(
							'user_id' => $this->input->post('user_id'),
						    'name' => $this->input->post('name'),
							'description' => $this->input->post('description'),
							'image' => $image 
							 ); 
			$this->db->where('id',$id);
			$this->db->update('tbl_services_content',$data);
			$this->session->set_flashdata('message', '<p>Record successfully updated!</p>');
			redirect('magneto/manage_services_inside_content/'.$user_id);
			}
		}	
		else
		{
		$data = array(
							'user_id' => $this->input->post('user_id'),
						    'name' => $this->input->post('name'),
							'description' => $this->input->post('description')
					 ); 
			$this->db->where('id',$id);
			$this->db->update('tbl_services_content',$data);
			$this->session->set_flashdata('message', '<p>Record successfully updated!</p>');
			redirect('magneto/manage_services_inside_content/'.$user_id);
		}		
	}
	public function services_inside_content_delete($id = null) 
		{
		$row=$this->Adminmodel->services_content_onerow($id);
		$data['r']=$row;
			$query =  $this->db->get_where('tbl_services_content',array('id' => $id));
			if( $query->num_rows() > 0 )
			{
				$row = $query->row();
				$picture = $row->image;
				if($picture!= "")
				{
				unlink('upload/'.$picture);
				unlink('upload/thumb/'.$picture);
				}
				$this->db->delete('tbl_services_content', array('id' => $id));
				$this->session->set_flashdata('message', '<p>Record successfully deleted!</p>');
				redirect($_SERVER['HTTP_REFERER'],$data);
				return true;
			}
			$this->session->set_flashdata('message', '<p>Record successfully deleted!</p>');
			//redirect('magneto/managebannerimagesubcategory');
			redirect($_SERVER['HTTP_REFERER']);
			return false;   
		}
	 public function services_inside_content_img_delete($id = null)
		{
		$row=$this->Adminmodel->services_content_onerow($id);
		$data['r']=$row;
			$query =  $this->db->get_where('tbl_services_content',array('id' => $id));
			if( $query->num_rows() > 0 )
			{
				$row = $query->row();
				$picture = $row->image;
				$id = $row->id;
				if($picture!= "")
				{
				unlink('upload/'.$picture);
				unlink('upload/thumb/'.$picture);
				}
				//$this->db->delete('tbl_brand', array('id' => $id));
				$data = array(
						'image' => ''
				);
				$this->db->where('id',$id);
				$this->db->update('tbl_services_content',$data);
				$this->session->set_flashdata('message', '<p>Image successfully deleted!</p>');
				redirect($_SERVER['HTTP_REFERER'],$data);
				return true;
			}
			$this->session->set_flashdata('message', '<p>Image successfully deleted!</p>');
			redirect($_SERVER['HTTP_REFERER']);
			return false;   
		}		
	
	
	public function manage_blog()
	{
		$data['row'] = $this->Adminmodel->blogdata();
		$this->load->view('admin/header',$data);
		$this->load->view('admin/manage_blog',$data);
		
	}	
	public function blog_add()
	{
		$this->load->view('admin/header');
		$this->load->view('admin/manage_blog_add');
	}
	
	public function blog_insert() {
	  $slug = url_title($this->input->post('blog_title'), 'dash', TRUE);
	  	//File 1  upload picture
            if(!empty($_FILES['userfile']['name'])){
                $config['upload_path'] = './upload/';
		        $config['allowed_types'] = 'gif|jpg|png|jpeg';
                $config['file_name'] = $_FILES['userfile']['name'];
                
                //Load upload library and initialize configuration
                $this->load->library('upload',$config);
                $this->upload->initialize($config);
                
                if($this->upload->do_upload('userfile')){
                    $uploadData = $this->upload->data();
                    $userfile = $uploadData['file_name'];
                }else{
                    $userfile = '';
                }
            }else{
                $userfile = '';
            }
		  
	  // Verify the data using print_r($data); die;
	  
	  $data = array(										
						'meta_title' => $this->input->post('meta_title'),
						'meta_desc' => $this->input->post('meta_desc'),
						'meta_keyword' => $this->input->post('meta_keyword'),
						'blog_title' => $this->input->post('blog_title'),											
						'description' => $this->input->post('description'),					
						'image' => $userfile,
						'slug' => $slug
						 ); 
		//print_r($data); die;				 
			//unlink('upload/'.$image);			 
			$this->db->insert('tbl_blog',$data);
			$this->session->set_flashdata('message', '<p>Record successfully inserted!</p>');
			redirect('magneto/blog_add');
	}
	public function blog_edit($id = null)
	{
		$row=$this->Adminmodel->blogonerow($id);
		$data['r']=$row;
		$this->load->view('admin/header',$data);
		$this->load->view('admin/manage_blog_edit',$data);
	}
	 public function blog_update($id=null)
	{		
		$id=$this->input->post('id');
		$slug = url_title($this->input->post('blog_title'), 'dash', TRUE);
	  //Check whether user upload picture
        if(!empty($_FILES['userfile']['name'])){
                $config['upload_path'] = './upload/';
		        $config['allowed_types'] = 'gif|jpg|png|jpeg';
                $config['file_name'] = $_FILES['userfile']['name'];
                
                //Load upload library and initialize configuration
                $this->load->library('upload',$config);
                $this->upload->initialize($config);
                
                if($this->upload->do_upload('userfile')){
                    $uploadData = $this->upload->data();
                    $userfile = $uploadData['file_name'];
                }else{
                    $userfile = $this->input->post('userfile');
                }
            }else{
                $userfile = $this->input->post('userfile');
         }
	   
		  
	  // Verify the data using print_r($data); die;
	  
	  $data = array(										
						'meta_title' => $this->input->post('meta_title'),
						'meta_desc' => $this->input->post('meta_desc'),
						'meta_keyword' => $this->input->post('meta_keyword'),
						'blog_title' => $this->input->post('blog_title'),											
						'description' => $this->input->post('description'),
						'created_on' => $this->input->post('created_on'),						
						'image' => $userfile,
						'slug' => $slug
						 ); 
		$this->db->where('id',$id);
		$this->db->update('tbl_blog',$data);
		$this->session->set_flashdata('message', '<p>Record successfully updated!</p>');
		redirect('magneto/manage_blog/');		
	}
	public function blog_delete($id = null) 
	{
	$row=$this->Adminmodel->blogonerow($id);
	$data['r']=$row;
		$query =  $this->db->get_where('tbl_blog',array('id' => $id));
		if( $query->num_rows() > 0 )
		{
			$row = $query->row();
			$picture = $row->image;
			if($picture!= "")
			{
			unlink('upload/'.$picture);

			//unlink('upload/thumb/'.$picture);
			}
			$this->db->delete('tbl_blog', array('id' => $id));
			$this->session->set_flashdata('message', '<p>Record successfully deleted!</p>');
			redirect($_SERVER['HTTP_REFERER'],$data);
			return true;
		}
		$this->session->set_flashdata('message', '<p>Record successfully deleted!</p>');
		//redirect('magneto/manageimagesubcategory');
		redirect($_SERVER['HTTP_REFERER']);
		return false;   
	}
		
	public function blog_img_delete($id = null)
	{
	$row=$this->Adminmodel->blogonerow($id);
	$data['r']=$row;
		$query =  $this->db->get_where('tbl_blog',array('id' => $id));
		if( $query->num_rows() > 0 )
		{
			$row = $query->row();
			$picture = $row->image;
			$id = $row->id;
			if($picture!= "")
			{
			unlink('upload/'.$picture);
			}
			//$this->db->delete('tbl_brand', array('id' => $id));
			$data = array(
					'image' => ''
			);
			$this->db->where('id',$id);
			$this->db->update('tbl_blog',$data);
			$this->session->set_flashdata('message', '<p>Record image successfully deleted!</p>');
			redirect($_SERVER['HTTP_REFERER']);
			return true;
		}
		$this->session->set_flashdata('message', '<p>Record image successfully deleted!</p>');
		redirect($_SERVER['HTTP_REFERER']);
		return false;   
	}
		/*manage contact form*/
	public function managecontactform()
	{
		$data['result'] = $this->Adminmodel->contactformdata();
		$this->load->view('admin/header',$data);
		$this->load->view('admin/manage_contactform',$data);		
	}
	public function manage_contactform_delete($id = null) 
	{
		$id=$this->db->where('id',$id);
		$this->db->delete('tbl_contactform');
		$this->session->set_flashdata('message', '<p>Record successfully deleted!</p>');
		redirect($_SERVER['HTTP_REFERER']);
			return false;  
	}
	public function export_contactform_csv(){ 
		/* file name */
		$filename = 'contactform_'.date('Ymd').'.csv'; 
		header("Content-Description: File Transfer"); 
		header("Content-Disposition: attachment; filename=$filename"); 
		header("Content-Type: application/csv; ");
	   /* get data */
		$usersData = $this->Adminmodel->get_contactformDetails();
		/* file creation */
		$file = fopen('php://output','w'); 
		$header = array("Name", "Email Id","Phone","State","Zipcode","Quantity","Date Time");
		fputcsv($file, $header);
		foreach ($usersData as $key=>$line){ 
			fputcsv($file,$line); 
		}
		//fclose($file); 
		//exit; 
	}	
	
}