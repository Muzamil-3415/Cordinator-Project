<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 

class Main extends CI_Controller { 
	
	public function __construct() {
		parent::__construct();
		//$this->load->library('session');
		$this->load->model('sitemodel');
		$this->load->helper('form');
		$this->load->library('form_validation');
		$this->load->helper('text');
	}
	
	public function index()
	{
		$data['mediadata'] = $this->sitemodel->mediadata();
		$data['main_nav'] = $this->sitemodel->mainNavData();
		$data['about_result'] = $this->sitemodel->aboutusData();
		$data['why_result'] = $this->sitemodel->whyData();
		$data['why_inside_result'] = $this->sitemodel->inside_aboutData(12);
		$data['sevendaysData'] = $this->sitemodel->sevendaysData();
		$data['resultdata'] = $this->sitemodel->pagesdata_byid(11);
		$data['inside_result'] = $this->sitemodel->insidepages_byid(11);	
		$data['footersData'] = $this->sitemodel->footersData();
		$this->load->view('index',$data);
	}
	
	public function error()
	{
		$data['mediadata'] = $this->sitemodel->mediadata();
		$data['homeaboutus'] = $this->sitemodel->aboutusdata();
		$data['services_list'] = $this->sitemodel->servicesData();
		$data['services_footer'] = $this->sitemodel->servicesData();
		$data['resultdata'] = $this->sitemodel->pagesdata_byid(4);
		$data['inside_result'] = $this->sitemodel->insidepages_byid(4);	
		$data['footersData'] = $this->sitemodel->footersData();
		$this->load->view('not_data',$data);
	}
	public function aboutus()
	{		
		$data['mediadata'] = $this->sitemodel->mediadata();
		$data['result'] = $this->sitemodel->aboutusdata();
		$data['services_list'] = $this->sitemodel->servicesData();
		$data['services_footer'] = $this->sitemodel->servicesData();
		$data['resultdata'] = $this->sitemodel->pagesdata_byid(4);
		$data['inside_result'] = $this->sitemodel->insidepages_byid(4);	
		$data['footersData'] = $this->sitemodel->footersData();
		$this->load->view('aboutus',$data);		
	}
	public function privacy()
	{		
		$data['mediadata'] = $this->sitemodel->mediadata();
		$data['result'] = $this->sitemodel->privacydata();
		$data['services_list'] = $this->sitemodel->servicesData();
		$data['services_footer'] = $this->sitemodel->servicesData();
		$data['resultdata'] = $this->sitemodel->pagesdata_byid(4);
		$data['inside_result'] = $this->sitemodel->insidepages_byid(4);	
		$data['footersData'] = $this->sitemodel->footersData();
		$this->load->view('privacy-policy',$data);		
	}
	public function terms()
	{		
		$data['mediadata'] = $this->sitemodel->mediadata();
		$data['result'] = $this->sitemodel->termsdata();
		$data['services_list'] = $this->sitemodel->servicesData();
		$data['services_footer'] = $this->sitemodel->servicesData();
		$data['resultdata'] = $this->sitemodel->pagesdata_byid(4);
		$data['inside_result'] = $this->sitemodel->insidepages_byid(4);	
		$data['footersData'] = $this->sitemodel->footersData();
		$this->load->view('terms',$data);		
	}
	public function water_treatment_florida(){
		$data['mediadata'] = $this->sitemodel->mediadata();
		$data['resultdata'] = $this->sitemodel->pagesdata_byid(4);
		$data['inside_result'] = $this->sitemodel->insidepages_byid(4);	
		$data['footersData'] = $this->sitemodel->footersData();
		$this->load->view('pages',$data);
		
	}
	public function deicing_salts(){
		$data['mediadata'] = $this->sitemodel->mediadata();
		$data['resultdata'] = $this->sitemodel->pagesdata_byid(5);
		$data['inside_result'] = $this->sitemodel->insidepages_byid(5);	
		$data['footersData'] = $this->sitemodel->footersData();
		$this->load->view('pages',$data);
	}
	public function food_salt_tx_near_me(){
		$data['mediadata'] = $this->sitemodel->mediadata();
		$data['resultdata'] = $this->sitemodel->pagesdata_byid(6);
		$data['inside_result'] = $this->sitemodel->insidepages_byid(6);	
		$data['footersData'] = $this->sitemodel->footersData();
		$this->load->view('pages',$data);
	}
	public function water_softener_tampa_fl(){
		$data['mediadata'] = $this->sitemodel->mediadata();
		$data['resultdata'] = $this->sitemodel->pagesdata_byid(7);
		$data['inside_result'] = $this->sitemodel->insidepages_byid(7);	
		$data['footersData'] = $this->sitemodel->footersData();
		$this->load->view('pages',$data);
	}
	public function rock_salt_near_me(){
		$data['mediadata'] = $this->sitemodel->mediadata();
		$data['resultdata'] = $this->sitemodel->pagesdata_byid(8);
		$data['inside_result'] = $this->sitemodel->insidepages_byid(8);	
		$data['footersData'] = $this->sitemodel->footersData();
		$this->load->view('pages',$data);
	}
	public function pool_salt(){
		$data['mediadata'] = $this->sitemodel->mediadata();
		$data['resultdata'] = $this->sitemodel->pagesdata_byid(9);
		$data['inside_result'] = $this->sitemodel->insidepages_byid(9);	
		$data['footersData'] = $this->sitemodel->footersData();
		$this->load->view('pages',$data);
	}
	public function water_softener_salt_tx_near_me(){
		$data['mediadata'] = $this->sitemodel->mediadata();
		$data['resultdata'] = $this->sitemodel->pagesdata_byid(10);
		$data['inside_result'] = $this->sitemodel->insidepages_byid(10);	
		$data['footersData'] = $this->sitemodel->footersData();
		$this->load->view('pages',$data);
	}
	public function bulk_road_salt_supplier(){
		$data['mediadata'] = $this->sitemodel->mediadata();
		$data['resultdata'] = $this->sitemodel->pagesdata_byid(11);
		$data['inside_result'] = $this->sitemodel->insidepages_byid(11);	
		$data['footersData'] = $this->sitemodel->footersData();
		$this->load->view('pages',$data);
	}
	public function industrial_salts(){
		$data['mediadata'] = $this->sitemodel->mediadata();
		$data['resultdata'] = $this->sitemodel->pagesdata_byid(12);
		$data['inside_result'] = $this->sitemodel->insidepages_byid(12);	
		$data['footersData'] = $this->sitemodel->footersData();
		$this->load->view('pages',$data);
	}
	public function brine_salt_near_me(){
		$data['mediadata'] = $this->sitemodel->mediadata();
		$data['resultdata'] = $this->sitemodel->pagesdata_byid(13);
		$data['inside_result'] = $this->sitemodel->insidepages_byid(13);	
		$data['footersData'] = $this->sitemodel->footersData();
		$this->load->view('pages',$data);
	}
	public function news()
	{	
		$data['mediadata'] = $this->sitemodel->mediadata();
		$data['resultdata'] = $this->sitemodel->pagesdata_byid(13);
		$data['inside_result'] = $this->sitemodel->insidepages_byid(13);	
		$data['footersData'] = $this->sitemodel->footersData();
		$data['blogresult'] = $this->sitemodel->blogsdata();
		//print_r($data['blogresult']);
		$this->load->view('news',$data);		
	}
	public function post($slug=false)
	{
		$data['mediadata'] = $this->sitemodel->mediadata();
		$data['resultdata'] = $this->sitemodel->pagesdata_byid(13);
		$data['inside_result'] = $this->sitemodel->insidepages_byid(13);	
		$data['footersData'] = $this->sitemodel->footersData();
		$data['latestpost'] = $this->sitemodel->latestpostdata();
		if($slug)
		{		
			$data['result'] = $this->sitemodel->blog_slug($slug);	
			//print_r($data['result']);	
			$this->load->view('post',$data);
		}
		else
		{
		$this->load->view('not_data',$data);
		}		
	}
	
	public function pages($slug=false)
	{
		$data['mediadata'] = $this->sitemodel->mediadata();
		$data['footersData'] = $this->sitemodel->footersData();
		if($slug)
	    {
		   	$sl = $this->sitemodel->getpages_slug($slug);
			//print_r($sl);
			
				if($sl)
				{
					$data['resultdata'] = $this->sitemodel->pagesdata_byid($sl->id);
					$data['inside_result'] = $this->sitemodel->insidepages_byid($sl->id);	
					$this->load->view('pages',$data);
				}
				else
				{
					 $this->load->view('not_data',$data);
				}
	    }
	    else
	    {
			$this->load->view('not_data');
	    }		
	}
	public function services($slug=false)
	{
		$data['mediadata'] = $this->sitemodel->mediadata();
		$data['footersData'] = $this->sitemodel->footersData();
		if($slug)
	    {
		   	$sl = $this->sitemodel->getservices_slug($slug);
			//print_r($sl);
			
				if($sl)
				{
					$data['resultdata'] = $this->sitemodel->servicesdata_byid($sl->id);
					$data['inside_result'] = $this->sitemodel->services_inside($sl->id);	
					$this->load->view('services',$data);
				}
				else
				{
					 $this->load->view('not_data',$data);
				}
	    }
	    else
	    {
			$this->load->view('not_data');
	    }		
	}
	public function projects()
	{		
		$data['mediadata'] = $this->sitemodel->mediadata();
		$data['services_list'] = $this->sitemodel->servicesData();
		$data['services_footer'] = $this->sitemodel->servicesData();
		$data['galleryview'] = $this->sitemodel->get_project();
		$data['galleryview_image'] = $this->sitemodel->projectview_data_image();	
		$this->load->view('projects',$data);		
	}
	public function contact()
	{		
		$data['mediadata'] = $this->sitemodel->mediadata();
		$data['services_list'] = $this->sitemodel->servicesData();
		$data['services_footer'] = $this->sitemodel->servicesData();
		$data['resultdata'] = $this->sitemodel->pagesdata_byid(4);
		$data['inside_result'] = $this->sitemodel->insidepages_byid(4);	
		$data['footersData'] = $this->sitemodel->footersData();
		$this->load->view('contact',$data);		
	}
    public function registration()
	{		
		$data['mediadata'] = $this->sitemodel->mediadata();
		$this->load->view('registration',$data);		
	}	
    
    public function contactform(){
        $this->load->library('email');  
		$config = Array(
            'protocol' => 'smtp',
            'smtp_host' => 'ssl://smtp.googlemail.com',
            'smtp_port' => 465,
            'smtp_user' => 'rocksalttoday00@gmail.com',
            'smtp_pass' => 'cnbcdorukuifopbk',
            'mailtype'  => 'html', 
            'charset'   => 'iso-8859-1'
        );
        $this->email->initialize($config);
        $this->email->set_mailtype("html");
        $this->email->set_newline("\r\n");
		
		$from_email = "info@rocksalttoday.com"; 
	    $bcc_email = "deep@wamexs.com";
	    
		$email_setting = array('mailtype'=>'html');
		$this->email->initialize($email_setting);
        
		//$from_email = "info@rocksalttoday.com"; 
	    //$to_email = "sales@rocksalttoday.com";
	    $to_email = "nwebprocess@gmail.com";

		$name = $this->input->post('form_name');
		$email = $this->input->post('form_email');
		$phone = $this->input->post('form_phone');
		$state_name = $this->input->post('form_state');
		$zipcode = $this->input->post('form_zipcode');
		$quantity = $this->input->post('form_quantity');
		//$this->load->library('email');  
		$html = "Person Name: ".$name."<br /><br />Email address : " .$email."<br /><br />Phone : ".$phone."<br /><br />State : ".$state_name."<br /><br />Zipcode : ".$zipcode."<br /><br />Quantity : ".$quantity."<br /><br />";
		
		//print_r($html);
		//exit();
   
		$this->email->from($from_email, 'Rock Salt Today'); 
		$this->email->to($to_email);
		$this->email->bcc($bcc_email);
		$this->email->subject('Request from Quote Form'); 
		$this->email->message($html); 
		$data = array(
					'name' => $this->input->post('form_name'),
					'email' => $this->input->post('form_email'),
					'phone' => $this->input->post('form_phone'),
					'state' => $this->input->post('form_state'),
					'zipcode' => $this->input->post('form_zipcode'),
					'quantity' => $this->input->post('form_quantity')
					); 
		//print_r($data) or die();		
		$this->db->insert('tbl_contactform',$data);

		$result =$this->email->send();  

		if( $result == true ){  
			//echo "Message sent successfully..."; 
			$this->session->set_flashdata('message', 'Thank you for your message!');
			redirect('thanks');
		}else{  
			//echo "Sorry, unable to send mail..."; 
			echo "<pre>".$this->email->print_debugger() ."</pre>";  
			print_r($message); 
		}		   
    }    
	
	public function thanks()
	{		
		$data['mediadata'] = $this->sitemodel->mediadata();
		$data['result'] = $this->sitemodel->privacydata();
		$data['services_list'] = $this->sitemodel->servicesData();
		$data['services_footer'] = $this->sitemodel->servicesData();
		$data['resultdata'] = $this->sitemodel->pagesdata_byid(4);
		$data['inside_result'] = $this->sitemodel->insidepages_byid(4);	
		$data['footersData'] = $this->sitemodel->footersData();
		$this->load->view('thanks',$data);		
	}
		public function testing()
	{		
		
		$this->load->view('testing');		
	}
   public function formPost()

    {
    
        print_r($this->input->post('name'));
    
        print_r($this->input->post('email'));
    
       
    
        print_r($this->input->post());
    
       
    
        print_r($_POST['name']);
    
        print_r($_POST['email']);
    
        print_r($_POST);
    
        exit;
    
    }
		
} 