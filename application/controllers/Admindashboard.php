<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admindashboard extends CI_Controller {

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
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

	public function __construct()
	{
		parent::__construct();
		// if(!$this->session->userdata('id'))
		// {
		// 	redirect('index');
	 //  }
		//$this->load->library('encryptioncustom');
		$this->load->model('admindashboard_model');
	}

	function index()
	{
        $this->load->view('templates/dashboardhead');
		$this->load->view('templates/dashboardleft');
		$this->load->view('templates/dashboardright');
		$result['jobseekers_count']=$this->admindashboard_model->totaljob_assigned();
		$result['company_count']=$this->admindashboard_model->totalcompanies();
		$result['panalist_count']=$this->admindashboard_model->totalpanalist();
		$this->load->view('admin',$result);
		$this->load->view('templates/dashboardfooter');
		
      
    }

    function admin($result)
    {
		$this->load->view('templates/dashboardhead');
		$this->load->view('templates/dashboardleft');
		$this->load->view('templates/dashboardright');
		$result['jobseekers_count']=$this->admindashboard_model->totaljob_assigned();
		$result['company_count']=$this->admindashboard_model->totalcompanies();
		$result['panalist_count']=$this->admindashboard_model->totalpanalist();
		$this->load->view('admin',$result);
		$this->load->view('templates/dashboardfooter');
    }
    
    function loadIndex()
	{
        $this->load->view('index');
    }

    function company_data()
    {
		$result['data']=$this->admindashboard_model->company_retrieve_info();
		$result['jobseekers_count']=$this->admindashboard_model->totaljob_assigned();
    	$this->admin($result); 
    }

    function panel_data()
    {
		$result['data']=$this->admindashboard_model->panel_retrieve_info();
		$result['jobseekers_count']=$this->admindashboard_model->totaljob_assigned();
    	$this->admin($result); 
    }

    function jobseeker_data()
    {
		$result['data']=$this->admindashboard_model->jobseeker_retrieve_info();
		$result['jobseekers_count']=$this->admindashboard_model->totaljob_assigned();
    	$this->admin($result); 
    }

    function fiter_jobseeker_data()
    {
    	$search_value=$this->input->post('search');
    	$field_name=$this->input->post('field');
		$result['data']=$this->admindashboard_model->jobseeker_data_filter($search_value,$field_name);
		$result['jobseekers_count']=$this->admindashboard_model->totaljob_assigned();
    	$this->admin($result); 

    }

    function panel_data_filter()
   	{
		$search_value=$this->input->post('search');
    	$field_name=$this->input->post('field');
		$result['data']=$this->admindashboard_model->panel_data_filter($search_value,$field_name);
		$result['jobseekers_count']=$this->admindashboard_model->totaljob_assigned();
    	$this->admin($result);    		
   	}

   	function company_data_filter()
   	{
   		$search_value=$this->input->post('search');
		$field_name=$this->input->post('field');
		$result['jobseekers_count']=$this->admindashboard_model->totaljob_assigned();
    	$result['data']=$this->admindashboard_model->company_data_filter($search_value,$field_name);
    	$this->admin($result); 
   	}

   	function view_company_job()
   	{
   		$cid = $this->uri->segment(3);
		$result['data']=$this->admindashboard_model->retreive_company_jobs($cid);
		$result['jobseekers_count']=$this->admindashboard_model->totaljob_assigned();
		$this->load->view('templates/header');
    	$this->load->view('company_job',$result);
    	$this->load->view('templates/footer');
   	}

   	function company_job_filter()
   	{
   		$search_value=$this->input->post('search');
    	$field_name=$this->input->post('field');
		$result['data']=$this->admindashboard_model->company_job_filter($search_value,$field_name);
		$result['jobseekers_count']=$this->admindashboard_model->totaljob_assigned();
    	$this->load->view('templates/header');
    	$this->load->view('company_job',$result);
    	$this->load->view('templates/footer');

   	}

    function assign()
    {
	  $this->load->view('templates/dashboardhead');
	  $this->load->view('templates/dashboardleft');
	  $this->load->view('templates/dashboardright');
	  $result['jobseekers_count']=$this->admindashboard_model->totaljob_assigned();
	  $result['company_count']=$this->admindashboard_model->totalcompanies();
	  $result['panalist_count']=$this->admindashboard_model->totalpanalist();
	  $result['data']=$this->admindashboard_model->assign_panelist(); 
	  $this->load->view('admin',$result);     
	  $this->load->view('templates/dashboardfooter');
    }

	function logout()
	{
		$data = $this->session->all_userdata();
		foreach($data as $row => $rows_value)
		{
			$this->session->unset_userdata($row);
		}
		redirect('home');
	}

	function totaljob_assigned(){

		$this->admindashboard_model->totaljob_assigned();	
	}
}

?>

