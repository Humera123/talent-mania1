
<?php 
   if($this->session->flashdata('true'))
   {
 ?>
   <div class="alert alert-success"> 
     <?php  echo $this->session->flashdata('true'); ?>
<?php    
}
?>
<section class="companydashboardsection">
<div class="button_cont" align="center"><a class="example_a" href="<?php echo site_url('paneldashboard'); ?>" target="_blank" rel="nofollow noopener">Build Your Profile</a>
<a class="example_a" href="<?php echo base_url()?>skillendorsed/getskills" target="_blank" rel="nofollow noopener">Skills Endorsement</a></div>
</section>
	 
<!--<a href="<?php echo site_url('paneldashboard'); ?>" class="panelbutton">Link Title</a> 
<a href="<?php echo base_url()?>skillendorsed/getskills" class="panelbutton">Skills Endorsement</a>-->
 