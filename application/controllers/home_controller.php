<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class home_controller extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->helper("form");
					
		$this->nav = array(
			array('Home', site_url('home_controller/home'),'home'),
			array('About', site_url('home_controller/about'),'about'),
			array('Request A Quote', site_url('home_controller/quote'),'quote'),
			array('Comments', site_url('home_controller/comment'),'comment'),
			array('Contact', site_url('home_controller/contact'),'contact'));
			
		$this->load->vars(array('NavigationArray' => $this->nav));
	}

	public function index()
	{
		$this->home();
	}
	
	public function home()
	{	
		$data['which_page'] = "home"; 
		
		$this->load->view('site_outline', $data);
	}
	
	public function about()
	{
		$data['which_page'] = "about"; 
		
		$this->load->view('site_outline', $data);
	}
	
	public function quote()
	{
		$data['which_page'] = "quote"; 
		
		$this->load->view('site_outline', $data);
	}
	
	public function quote_DB_insert()
	{
		// will call the model that inserts the adds new quote requests to the DB
		$this->load->model("access_db");
		$this->load->library("form_validation");
		
		$this->form_validation->set_rules("fullName","Full Name", "required|xss_clean");
		$this->form_validation->set_rules("emailAddress","Email Address", "required|valid_email|xss_clean");
		$this->form_validation->set_rules("details","Details", "required|xss_clean");
		
		$data['which_page'] = "quote"; 
		
		if($this->form_validation->run() == TRUE)
		{
			$form_data = array(
				"name"=>$this->input->post('fullName'),
				"emailAddress"=>$this->input->post('emailAddress'),
				"details"=>$this->input->post('details')
			);
			$this->access_db->insert($form_data);
			$data['which_page'] = "form_success";
			$_POST = array();
		}
		$this->load->view('site_outline', $data);
	}
	
	public function comment()
	{
		// will call the model that gets comments from the DB
		$this->load->model("access_db");
		$data['results'] = $this->access_db->getAll();
		
		$data['which_page'] = "comment"; 
		
		$this->load->view('site_outline', $data);
	}
	
	public function contact()
	{
		// get a list of all the locations in the Locations table
		$this->load->model("access_db");
		$data['results'] = $this->access_db->selectLocations();
		
		$data['which_page'] = "contact"; 
		
		$this->load->view('site_outline', $data);
	}
}
