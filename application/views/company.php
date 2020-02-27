
<?php 
   if($this->session->flashdata('true'))
   {
 ?>
   <div class="alert alert-success"> 
     <?php  echo $this->session->flashdata('true'); ?>
<?php    
}
?>

<br>
<a href="<?php echo site_url('companydashboard'); ?>">Build Profile</a> 
<a href="<?php echo site_url('addjob'); ?>">Add Job</a>
<a href="<?php echo site_url('recuriters'); ?>">Recuriters</a>
 