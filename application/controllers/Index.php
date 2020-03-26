<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Index extends CI_Controller {

 public function __construct()
 {
  parent::__construct();
  
  $this->load->library('form_validation');
  //$this->load->library('encrypt');
  $this->load->model('index_model');
  $this->load->model('admindashboard_model');
 }

 function index()
 {
    
    $type = $this->loadFile();
    //$this->index_model->viewerscount_insert($this->session->userdata('id'),$type);
    if($type == 1){
        $this->jobseekerdashboard();   
    }
    else if($type == 2){
        $this->companydashboard();
    }
    else if($type == 3){
        $this->paneldashboard();
    }
    else if($type == 4){
        $this->admindashboard();
    }
    
 }

 function loadFile(){
   
    $result = $this->index_model->dashboardLoad($this->session->userdata('id')); 
    return $result;
 }

 function jobseekerdashboard(){
   $data['getApproval'] = $this->index_model->getApproval($this->session->userdata('id'));
   $this->load->view('jobseeker',$data);
  
 }

 function companydashboard(){
    $this->load->view('company');
 }

 function paneldashboard(){
    $this->load->view('panel');
 }

 function admindashboard(){
   $this->load->view('templates/dashboardhead');
	$this->load->view('templates/dashboardleft');
	$this->load->view('templates/dashboardright');
   $result['jobseekers_count']=$this->admindashboard_model->totaljob_assigned();
	$result['company_count']=$this->admindashboard_model->totalcompanies();
	$result['panalist_count']=$this->admindashboard_model->totalpanalist();
    $this->load->view('admin',$result);
    $this->load->view('templates/dashboardfooter');
 }

}

?>