
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
 
	 
<a href="<?php echo site_url('paneldashboard'); ?>" class="panelbutton">Link Title</a> 
 
<a href="<?php echo base_url()?>skillendorsed/getskills" class="panelbutton">Skills Endorsement</a> 
 