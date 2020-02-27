<?php
class Companydashboard_model extends CI_Model
{
 function insert_info($data,$id)
 {
    $query = null;
    $query = $this->db->get_where('company_info', array(//making selection
        'talentid' => $id
    ));
    $count = $query->num_rows();
    if ($count === 0) {

        $this->db->insert('company_info', $data);

    }
    elseif($count === 1){
        
        $this->db->where('talentid',$id);
        $this->db->update('company_info',$data);

    }

 }

 function verify_email($key)
 {
  $this->db->where('verification_key', $key);
  $this->db->where('is_email_verified', 'no');
  $query = $this->db->get('jobseeker_user');
  if($query->num_rows() > 0)
  {
   $data = array(
    'is_email_verified'  => 'yes'
   );
   $this->db->where('verification_key', $key);
   $this->db->update('jobseeker_user', $data);
   return true;
  }
  else
  {
   return false;
  }
 }
 function retrieve_info($id)
  {
    $sql  = 'SELECT *';
    $sql .= ' FROM company_info WHERE talentid = ?';
    $sql_params = array($id);
    $query = $this->db->query($sql, $sql_params);
    $form = $query->row_array();

    $data = array('title' => 'Edit Page', 'form' => $form);
    $this->load->view('companydashboard', $data);
  
  }
}

?>