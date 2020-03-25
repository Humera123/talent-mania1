
     <?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jobseekerdatatable extends CI_Controller {

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
    //$this->load->view('templates/dashboardheader');
    $this->load->view('jobseekerdata');
    /*$this->load->view('templates/footer');*/
    }

    function jobseekerdata($result)
    {
      //$this->load->view('templates/header');
    $this->load->view('jobseekerdata',$result);
   // $this->load->view('templates/footer');
    }
    
    function loadIndex()
  {
        $this->load->view('index');
    }
    function jobseeker_data()
    {
      $result['data']=$this->admindashboard_model->jobseeker_retrieve_info();
      $this->jobseekerdata($result); 
    }

    function fiter_jobseeker_data()
    {
      $search_value=$this->input->post('search');
      $field_name=$this->input->post('field');
      $result['data']=$this->admindashboard_model->jobseeker_data_filter($search_value,$field_name);
      $this->jobseekerdata($result); 

    }

    function assign()
    {
      $result['data']=$this->admindashboard_model->assign_panelist(); 
      $this->load->view('tablesbasic',$this->session->set_flashdata('true', 'Successfully Panelist Alot'));     
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

