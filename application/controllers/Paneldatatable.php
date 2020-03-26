
     <?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Paneldatatable extends CI_Controller {

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
    $this->load->library('encryptioncustom');
    $this->load->model('admindashboard_model');
  }

  function index()
  {
    $this->load->view('templates/dashboardhead');
		$this->load->view('templates/dashboardleft');
		$this->load->view('templates/dashboardright');
    $this->load->view('panelsdata');
    $this->load->view('templates/dashboardfooter');
    }

    function panelsdata($result)
    {
      $this->load->view('templates/dashboardhead');
		  $this->load->view('templates/dashboardleft');
		  $this->load->view('templates/dashboardright');
      $this->load->view('panelsdata',$result);
      $this->load->view('templates/dashboardfooter');
    }
    
    function loadIndex()
    {
        $this->load->view('index');
    }

        function panel_data()
    {
      $result['data']=$this->admindashboard_model->panel_retrieve_info();
      $this->panelsdata($result); 
    }

   

    function panel_data_filter()
    {
    $search_value=$this->input->post('search');
      $field_name=$this->input->post('field');
      $result['data']=$this->admindashboard_model->panel_data_filter($search_value,$field_name);
      $this->panelsdata($result);        
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

