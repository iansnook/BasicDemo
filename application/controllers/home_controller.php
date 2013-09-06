<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class home_controller extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */ 

	public function index()
	{
		$this->home();
	}
	
	public function home()
	{	
		$data['which_page'] = "home_content"; 
		
		$this->load->view('site_outline', $data);
	}
	
	public function about()
	{
		$data['which_page'] = "about_content"; 
		
		$this->load->view('site_outline', $data);
	}
	
	public function quote()
	{
		$data['which_page'] = "quote_content"; 
		
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
		
		$data['which_page'] = "quote_content"; 
		
		if($this->form_validation->run() == TRUE)
		{
			$form_data = array(
				"name"=>$this->input->post('fullName'),
				"emailAddress"=>$this->input->post('emailAddress'),
				"details"=>$this->input->post('details')
			);
			$this->access_db->insert($form_data);
			$data['which_page'] = "form_success";
		}
		//print_r($data);
		$this->load->view('site_outline', $data);
	}
	
	public function comment()
	{
		// will call the model that gets comments from the DB
		$this->load->model("access_db");
		$data['results'] = $this->access_db->getAll();
		
		$data['which_page'] = "comment_content"; 
		
		$this->load->view('site_outline', $data);
	}
	
	public function contact()
	{
		// get a list of all the locations in the Locations table
		$this->load->model("access_db");
		$data['results'] = $this->access_db->selectLocations();
		
		$data['which_page'] = "contact_content"; 
		
		$this->load->view('site_outline', $data);
	}
}
