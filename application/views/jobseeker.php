
<?php 
   if($this->session->flashdata('true'))
   {
 ?>
   <div class="alert alert-success"> 
     <?php  echo $this->session->flashdata('true'); ?>
<?php    
}
?>
 
<div class="profiletag">
 <p id="profilepara">	
Building out your profile on Talent Mania helps us to better customize job opportunities for you, share relevant company review and salary information, and allows you to be discovered by employers.
</p>
</div>
<a href="<?php echo site_url('welcome'); ?>" class="button" id ="bplink"> Build Your Profile</a>
<!--<a id="buildyourprofile" href="<?php echo site_url('welcome'); ?>">Build your Profile</a> -->

<!-- <?php if($getApproval['approval'] > 0): ?>
<a href="<?php echo site_url('skillendorsed'); ?>">Skill Endorsement</a>
<a href="<?php echo site_url('followcompany'); ?>">Follow Company</a> 
<?php endif; ?>
<?php if($getApproval['hired'] == 1):?>
    <img src="<?php echo base_url(); ?>images/hired.png" alt="Hired">
<?php endif; ?>
<?php if($getApproval['approval'] == 1):?>
    <img src="<?php echo base_url(); ?>images/gold_seal.jpg" alt="gold">
<?php elseif($getApproval['approval'] == 2):?>
    <img src="<?php echo base_url(); ?>images/silver_seal.jpg" alt="silver">
<?php elseif($getApproval['approval'] == 3):?>
    <img src="<?php echo base_url(); ?>images/bronze_seal.jpg" alt="bronze">
<?php endif; ?> -->

 
    
     