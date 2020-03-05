<?php
class Login_model extends CI_Model
{

 function can_login($email, $password)
 {

    $this->db->where('email', $email);
    $query = $this->db->get('jobseeker_user');
    if($query->num_rows() > 0)
    {
     foreach($query->result() as $row)
     {

        if($row->is_email_verified == 1)
        {
        if (password_verify($password, $row->password)) 

         {
          $this->session->set_userdata('id', $row->talentid);
          return "success";
         }
         else
         {
          return 'Wrong Password';
         }
        }
        else
        {
         return 'First verified your email address';
        }
     }
    }
    else
    {
     return 'Wrong Email Address';
  }
 }
}

?>