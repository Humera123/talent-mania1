
<?php 
   if($this->session->flashdata('true'))
   {
 ?>
   <div class="alert alert-success"> 
     <?php  echo $this->session->flashdata('true'); ?>
<?php    
}
?>
  
<section class="companysection">	 
<a href="<?php echo site_url('companydashboard'); ?>" class="companybutton" id ="bplink">Build Your Profile</a> 
<a href="<?php echo site_url('addjob'); ?>" class="companybutton" id ="bplink">Add a Job</a>
<a href="<?php echo site_url('recuriters'); ?>"class="companybutton" id ="bplink" >Recuriters</a>

</section>
 