<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Adminmodel extends CI_Model
{
	
		
	// Read data using username and password
	public function login($data) {
		
		$condition = "username =" . "'" . $data['username'] . "' AND " . "password =" . "'" . $data['password'] . "'";
		$this->db->select('*');
		$this->db->from('tbl_login');
		$this->db->where($condition);
		$this->db->limit(1);
		$query = $this->db->get();
		
		if ($query->num_rows() == 1) {
		return true;
		} else {
		return false;
		}
	}
	
	// Read data from database to show data in admin page
	public function read_user_information($username) {
		
		$condition = "username =" . "'" . $username . "'";
		$this->db->select('*');
		$this->db->from('tbl_login');
		$this->db->where($condition);
		$this->db->limit(1);
		$query = $this->db->get();
		
		if ($query->num_rows() == 1) {
		return $query->result();
		} else {
		return false;
		}
	}
	
	public function viewdata()
	{
		$query = $this->db->get('tbl_content');
		return $query->result();
	}
	public function aboutdata()
	{
		$query = $this->db->get('tbl_aboutus');
		return $query->result();
	}
	public function aboutusonerow($id)
	{
		$this->db->where('id',$id);
		$query=$this->db->get('tbl_aboutus');
		return $query->row();
	}
	public function user_content_DataId($id)
	{
		$this->db->order_by('id', 'desc');
		$query = $this->db->get_where('tbl_inside_content', array('user_id' => $id));
		return $query->result();
	}
	
   public function user_content_onerow($id)
	{
		$this->db->where('id',$id);
		$query=$this->db->get('tbl_inside_content');
		return $query->row();
	}
	public function pagesdata()
	{
		$query = $this->db->get('tbl_pages');
		return $query->result();
	}
	public function pagesonerow($id)
	{
		$this->db->where('id',$id);
		$query=$this->db->get('tbl_pages');
		return $query->row();
	}
	public function pages_content_DataId($id)
	{
		$this->db->order_by('id', 'desc');
		$query = $this->db->get_where('tbl_pages_inside_content', array('user_id' => $id));
		return $query->result();
	}
	
   public function pages_content_onerow($id)
	{
		$this->db->where('id',$id);
		$query=$this->db->get('tbl_pages_inside_content');
		return $query->row();
	}
	public function getmediaonerow($id)
	{
		$this->db->where('id',$id);
		$query = $this->db->get('tbl_media');
		return $query->row();
	}	
	public function getfootersonerow($id)
	{
		$this->db->where('id',$id);
		$query = $this->db->get('tbl_footers');
		return $query->row();
	}	
	public function imagedata()
	{
		$this->db->order_by("id", "desc"); 
		$query = $this->db->get('tbl_image');
		return $query->result();
	}
	public function imageonerow($id)
	{
			$this->db->where('id',$id);
			$query=$this->db->get('tbl_image');
			return $query->row();
	}	
	public function faqsdata()
	{
		$this->db->order_by("id", "desc"); 
		$query = $this->db->get('tbl_faqs');
		return $query->result();
	}
	public function faqsonerow($id)
	{
			$this->db->where('id',$id);
			$query=$this->db->get('tbl_faqs');
			return $query->row();
	}
	
	/*------ Manage video data ------*/
	public function videodata()
		{
			$this->db->order_by("id", "desc"); 
			$query = $this->db->get('tbl_video');
			return $query->result();
		}
	public function videoonerow($id)
	{
			$this->db->where('id',$id);
			$query=$this->db->get('tbl_video');
			return $query->row();
	}
	/*------ Manage services content data ------*/
	public function servicesdata()
	{
		$query = $this->db->get('tbl_services');
		return $query->result();
	}
	public function servicesonerow($id)
	{
		$this->db->where('id',$id);
		$query=$this->db->get('tbl_services');
		return $query->row();
	}
	public function services_content_DataId($id)
	{
		$this->db->order_by('id', 'desc');
		$query = $this->db->get_where('tbl_services_content', array('user_id' => $id));
		return $query->result();
	}
	public function services_content_Data()
	{
		$this->db->order_by('id', 'desc'); 
		$query = $this->db->get('tbl_services_content');
		return $query->result();		
	
	}		
   public function services_content_onerow($id)
	{
		$this->db->where('id',$id);
		$query=$this->db->get('tbl_services_content');
		return $query->row();
	}
		
	/*blog section*/
 	public function blogcatdata()
	{
		
		$query=$this->db->get('tbl_blog_category');
		return $query->result();
	}
	 public function blogcatonerow($id)
	{
		$this->db->where('id',$id);
		$query=$this->db->get('tbl_blog_category');
		return $query->row();
	}		
	public function blogdata()
	{
		$query = $this->db->get('tbl_blog');
		return $query->result();
	}

	public function blogonerow($id)
	{
		$this->db->where('id',$id);
		$query=$this->db->get('tbl_blog');
		return $query->row();
	}
	/*Projects*/
	public function projectview_data()
	{
        $this->db->order_by('id', 'desc');
		//$query = $this->db->get_where('tbl_project_category', array('cat_id' => $id));
		$query=$this->db->query("SELECT ud.*
                                 FROM tbl_project_category ud 
                                 ORDER BY ud.id DESC");
        return $query->result_array();
    }	
	public function project_categoryonerow($id)
		{
			$this->db->where('id',$id);
			$query=$this->db->get('tbl_project_category');
			return $query->row();
		}	
	
	
	
	
	public function projectonerow($id)
		{
			$this->db->where('id',$id);
			$query=$this->db->get('tbl_project_image');
			return $query->row();
		}	
	public function project_view_data(){
        $query=$this->db->query("SELECT ud.*
                                 FROM tbl_project_category ud 
                                 ORDER BY ud.id DESC");
        return $query->result_array();
    }	
	public function project_upload_image($inputdata,$filename)
	{
	  
		$slug = url_title($inputdata['title'], 'dash', TRUE);
			
		$data = array('title' => $inputdata['title'],
					  'slug' => $slug);
		$this->db->insert('tbl_project_category', $data); 

	  $insert_id = $this->db->insert_id();

	  if($filename!='' ){
	  $filename1 = explode(',',$filename);
	  foreach($filename1 as $file){
	  $file_data = array(
	  'image' => $file,
	  'cat_id' => $insert_id
	  );
	  $this->db->insert('tbl_project_image', $file_data);
	  }
	  }
	}
		
		
		
	public function project_edit_data($id){
        $query=$this->db->query("SELECT ud.*
                                 FROM tbl_project_category ud 
                                 WHERE ud.id = $id");
        return $query->result_array();
    }	
	
	public function project_edit_data_image($id){
        $query=$this->db->query("SELECT photo.*
                                 FROM tbl_project_category ud 
                                 RIGHT JOIN tbl_project_image as photo
								 ON ud.id = photo.cat_id 
                                 WHERE ud.id = $id");
        return $query->result_array();
    }

    public function project_edit_upload_image($id,$inputdata,$filename ='')
	{
	$slug = url_title($inputdata['title'], 'dash', TRUE);
	
	$data = array(
				'title' => $inputdata['title'],
				'sort_list' => $inputdata['sort_list'],
				'slug' => $slug
				);
	$this->db->where('id', $id);
	$this->db->update('tbl_project_category', $data);

	  if($filename!='' ){
	  $filename1 = explode(',',$filename);
	  foreach($filename1 as $file){
	  $file_data = array(
	  'image' => $file,
	  'cat_id' => $id
	  );
	  $this->db->insert('tbl_project_image', $file_data);
	  }
	  }
	}
	public function project_pic_onerow($id)
	{
		$this->db->where('id',$id);
		$query=$this->db->get('tbl_project_image');
		return $query->row();
	}	
	
	public function contactformdata()
	{
		$this->db->order_by("id", "desc"); 
		$query = $this->db->get('tbl_contactform');
		return $query->result();
	}
	public function get_contactformDetails(){
 		$response = array();
		$this->db->select('name,email,phone,state,zipcode,quantity,created_on');
		$q = $this->db->get('tbl_contactform');
		$response = $q->result_array();
	 	return $response;
	}
	
}	

