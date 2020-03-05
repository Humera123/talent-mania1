<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

 public function __construct()
 {
  parent::__construct();
  $this->load->library('facebook');
  if($this->session->userdata('id'))
  {
   redirect('index');
  }
   $this->load->library('form_validation');
   $this->load->model('login_model');
   $this->load->helper('form');
  }

 function index()
 {
    $this->load->view('templates/header');
    $this->load->view('login');
    $this->load->view('templates/footer');
 }

 function validation()
 {

    $response = array();
    $this->form_validation->set_rules('user_email', 'Email Address', 'required|trim|valid_email');
    $this->form_validation->set_rules('user_password', 'Password', 'required');
    if($this->form_validation->run())
    {
      $result = $this->login_model->can_login($this->input->post('user_email'), $this->input->post('user_password')); 
      
     
        if($result == 'success')
        {          
          $response['message'] = "login success";
          $response['error'] = FALSE;   
        }
        else
        {
            $response['message'] = $result;  
          $response['error'] = TRUE;
        }
    }
    else
    {
         $response['message'] = "form validation error";  
          $response['error'] = TRUE;
    }
    echo json_encode($response);

   }

   function Facebook_Login()
   {
     $userData = array();
    if($this->facebook->is_authenticated())
    {
      $userProfile = $this->facebook->request('get', '/me?fields=id,first_name,last_name,email,gender,locale,picture');
      echo "<pre>";
      print_r($userProfile);
      die;
    }
    else
    {
            $data['authUrl'] =  $this->facebook->login_url();
            $this->load->view('home',$data);
    }
      
   }

   public function fb_logout() {
    $this->facebook->destroy_session();
    redirect();
    }

    public function logout(){
      destroy_session();
            $this->session->sess_destroy();
            redirect();
        }// viewer logout.

}



?>