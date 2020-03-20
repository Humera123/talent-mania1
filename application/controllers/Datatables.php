 

     <?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Datatables extends CI_Controller {

  /**
   * Index Page for this controller.
   *
   * Maps to the following URL
   *    http://example.com/index.php/welcome
   *  - or -
   *    http://example.com/index.php/welcome/index
   *  - or -
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
    //  redirect('index');
   //  }
    $this->load->library('encryptioncustom');
    $this->load->model('admindashboard_model');
  }

  function index()
  {
    /*$this->load->view('templates/header');*/
    $this->load->view('tablesbasic');
    /*$this->load->view('templates/footer');*/
    }

    function admin($result)
    {
      $this->load->view('templates/header');
    $this->load->view('tablesbasic',$result);
    $this->load->view('templates/footer');
    }
    
    function loadIndex()
  {
        $this->load->view('index');
    }

    function company_data()
    {
      $result['data']=$this->admindashboard_model->company_retrieve_info();
      $this->tablesbasic($result); 
    }

    function panel_data()
    {
      $result['data']=$this->admindashboard_model->panel_retrieve_info();
      $this->tablesbasic($result); 
    }

    function jobseeker_data()
    {
      $result['data']=$this->admindashboard_model->jobseeker_retrieve_info();
      $this->tablesbasic($result); 
    }

    function fiter_jobseeker_data()
    {
      $search_value=$this->input->post('search');
      $field_name=$this->input->post('field');
      $result['data']=$this->admindashboard_model->jobseeker_data_filter($search_value,$field_name);
      $this->tablesbasic($result); 

    }

    function panel_data_filter()
    {
    $search_value=$this->input->post('search');
      $field_name=$this->input->post('field');
      $result['data']=$this->admindashboard_model->panel_data_filter($search_value,$field_name);
      $this->tablesbasic($result);        
    }

    function company_data_filter()
    {
      $search_value=$this->input->post('search');
      $field_name=$this->input->post('field');
      $result['data']=$this->admindashboard_model->company_data_filter($search_value,$field_name);
      $this->tablesbasic($result); 
    }

    function view_company_job()
    {
      $cid = $this->uri->segment(3);
    $result['data']=$this->admindashboard_model->retreive_company_jobs($cid);
    $this->load->view('templates/header');
      $this->load->view('company_job',$result);
      $this->load->view('templates/footer');
    }

    function company_job_filter()
    {
      $search_value=$this->input->post('search');
      $field_name=$this->input->post('field');
      $result['data']=$this->admindashboard_model->company_job_filter($search_value,$field_name);
      $this->load->view('templates/header');
      $this->load->view('company_job',$result);
      $this->load->view('templates/footer');

    }

    function assign()
    {
      $result['data']=$this->admindashboard_model->assign_panelist(); 
      $this->load->view('tables-basic',$this->session->set_flashdata('true', 'Successfully Panelist Alot'));     
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
}


?>

