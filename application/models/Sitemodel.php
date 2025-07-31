<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Sitemodel extends CI_Model
{
	
	public function __construct() {
      
    }
	public function mainNavData()
	{
		$this->db->order_by('id', 'Asc');
		$query = $this->db->get('tbl_pages');
		return $query->result();
	}
	public function aboutusdata()
	{
		$this->db->where('id', 1);
		$query = $this->db->get('tbl_aboutus');
		return $query->result();
	}
	public function privacydata()
	{
		$this->db->where('id', 2);
		$query = $this->db->get('tbl_aboutus');
		return $query->result();
	}
	public function termsdata()
	{
		$this->db->where('id', 3);
		$query = $this->db->get('tbl_aboutus');
		return $query->result();
	}
	public function whyData()
	{
		$this->db->where('id', 12);
		$query = $this->db->get('tbl_aboutus');
		return $query->result();
	}
	public function sevendaysData()
	{
		$this->db->where('id', 13);
		$query = $this->db->get('tbl_aboutus');
		return $query->result();
	}
	public function footersData()
	{
		$this->db->where('id', 1);
		$query = $this->db->get('tbl_footers');
		return $query->result();
	}
	public function inside_aboutData($id)
	{
		$this->db->where('user_id', $id);
		$query = $this->db->get('tbl_inside_content');
		return $query->result();
	}

	public function getpages_slug($slug)
	{
        $query = $this->db->get_where('tbl_pages', array('slug' => $slug));
		if($query->num_rows() > 0)
        return $query->row();
        return false;
    }
	public function pagesdata_byid($id)
    {	 
        $this->db->where('id', $id);
		$query = $this->db->get('tbl_pages');
		return $query->result();
    }
	public function insidepages_byid($id)
    {	 
        $this->db->where('user_id', $id);
		$query = $this->db->get('tbl_pages_inside_content');
		return $query->result();
    }
	public function allservicesData()
	{
		$this->db->order_by('id', 'Asc');
		$query = $this->db->get('tbl_services');
		return $query->result();
	}
	
	public function servicesData()
	{
		$this->db->order_by('id', 'Asc');
		$query = $this->db->get('tbl_services');
		return $query->result();
	}
	public function getservices_slug($slug)
    {
        
		$query = $this->db->get_where('tbl_services', array('slug' => $slug));
		if($query->num_rows() > 0)
        return $query->row();
        return false;
    }
	public function servicesdata_byid($id)
    {	 
        $this->db->where('id', $id);
		$query = $this->db->get('tbl_services');
		return $query->result();
    }
	public function services_inside($id)
    {	 
		$this->db->where('user_id', $id);
		$query = $this->db->get('tbl_services_content');
		return $query->result();
    }
	public function mediadata()
	{
		$this->db->where('id', 1);
		$query = $this->db->get('tbl_media');
		return $query->result();
	}
	

	public function blogscategorydata()
	{
	$query = $this->db->get('tbl_blog_category');
	return $query->result();
	}
	public function blogsdata()
	{
        $this->db->order_by('created_on', 'desc');
		$query = $this->db->get('tbl_blog');
		return $query->result();
	}
	public function blog_slug($slug)
    {
        $query = $this->db->get_where('tbl_blog', array('slug' => $slug));
		return $query->result();
    } 
	public function latestpostdata()
	{
		$this->db->order_by('created_on', 'desc');
		//$this->db->where('created_on', '>=', date('Y-m-d').' 00:00:00');
		//$this->db->where('created_on', date('Y-m-d'));
		$this->db->limit(8);
		$query = $this->db->get('tbl_blog');
		return $query->result();
	}
	
	

}	