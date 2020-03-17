<br/><br/><br /><br /><h3 id="mainhead" align="center">Welcome to Talent Mania</h3>
<p align="center">Lets’s start your profile, personalize your job listings and find companies you’ll love.</p>
<p align="center"><a href="<?php echo base_url()?>welcome/logout">Logout</a></p>

<div id='panel_dashboard'>
<form action="<?php echo base_url();?>paneldashboard/validation" id="panel_info" method="post" enctype="multipart/form-data">
  <!-- 
<?php 
  if($form['pimage'])
  {
  ?>
   <p class="float-left"><label>Profile Image :</label>
  <img src="<?php echo base_url().'uploads/'.$form['pimage'] ?>" name="profileimg" id="profileimg" width="100"alt="Profile Image" /></p>
  <input type="hidden" name="image_value" id= "image_value" value="<?php echo set_value('pimage', $form['pimage']); ?>"/>
  <?php
}
  else
  {
    ?>
    <p id="ch" class="float-left"><label> Upload Profile Image :</label>
  <input type="file" name="profile_image" accept="image/*" onchange="loadimage(event,'profileimg')" /> 
  <img name="profileimg" id="profileimg" width="100"alt="Profile Image" />
  <span class="text-danger"><?php echo form_error('image_value'); ?></span></p>
<?php
  }
  ?>-->
<div class="container">
    <div class="picture-container">
        <div class="picture">
            <img src="https://lh3.googleusercontent.com/LfmMVU71g-HKXTCP_QWlDOemmWg4Dn1rJjxeEsZKMNaQprgunDTtEuzmcwUBgupKQVTuP0vczT9bH32ywaF7h68mF-osUSBAeM6MxyhvJhG6HKZMTYjgEv3WkWCfLB7czfODidNQPdja99HMb4qhCY1uFS8X0OQOVGeuhdHy8ln7eyr-6MnkCcy64wl6S_S6ep9j7aJIIopZ9wxk7Iqm-gFjmBtg6KJVkBD0IA6BnS-XlIVpbqL5LYi62elCrbDgiaD6Oe8uluucbYeL1i9kgr4c1b_NBSNe6zFwj7vrju4Zdbax-GPHmiuirf2h86eKdRl7A5h8PXGrCDNIYMID-J7_KuHKqaM-I7W5yI00QDpG9x5q5xOQMgCy1bbu3St1paqt9KHrvNS_SCx-QJgBTOIWW6T0DHVlvV_9YF5UZpN7aV5a79xvN1Gdrc7spvSs82v6gta8AJHCgzNSWQw5QUR8EN_-cTPF6S-vifLa2KtRdRAV7q-CQvhMrbBCaEYY73bQcPZFd9XE7HIbHXwXYA=s200-no" name="profileimg" id="profileimg" width="100"  />
            <input type="file" name="profile_image" accept="image/*" onchange="loadimage(event,'profileimg')" />
        </div>
        <br>
         <h6 class="">Upload Image</h6>

    </div>
</div>


  <br> 
  <p><label for="first_name">First Name</label>
    <input type="text" name="first_name" id="first_name" class="form-control" value="<?php echo set_value('first_name',$form['first_name']); ?>" />
  <span class="text-danger"><?php echo form_error('first_name'); ?></span>
 </p>
  <p> <label for="last_name">Last Name </label>
    <input   type="text" name="last_name" id="last_name" class="form-control" value="<?php echo set_value('last_name',$form['last_name']); ?>" />
  <span class="text-danger"><?php echo form_error('last_name'); ?></span></p>
  <p><label for="mobileno">Mobile No</label>
    <input   type="text" name="mobileno" id="mobileno" class="form-control" value="<?php echo set_value('mobileno',$form['mobileno']); ?>" />
  <span class="text-danger"><?php echo form_error('mobileno'); ?></span></p>
  <p><label for="city">City</label>
    <input   type="text" name="city" id="city" class="form-control" value="<?php echo set_value('city',$form['city']); ?>" />
  <span class="text-danger"><?php echo form_error('city'); ?></span></p>
  <p>
    <label for="country">Country</label>
    <input  type="text" name="country" id="country" class="form-control" value="<?php echo set_value('country',$form['country']); ?>" />
  <span class="text-danger"><?php echo form_error('country'); ?></span></p>
  <p>
    <label for="skype_id">Skype ID</label>
    <input   type="text" name="skype_id" id="skype_id" class="form-control" value="<?php echo set_value('skype_id',$form['skype_id']); ?>" />
  <span class="text-danger"><?php echo form_error('skype_id'); ?></span></p>
  <p><label for="linkdin_profile">LinkedIn Profile</label>
    <input   type="text" name="linkdin_profile" id="linkdin_profile" class="form-control" value="<?php echo set_value('linkdin_profile',$form['linkdin_profile']); ?>" />
  <span class="text-danger"><?php echo form_error('linkdin_profile'); ?></span></p>
   
  <p><input type="submit" name="Submit"  value="Submit" class="btn btn-info" id="panelsubmit"/></p>
  <?php echo form_close() ?>
</div>

<script>
 function loadimage(event,$id) {
    var output=document.getElementById($id);
    output.src=URL.createObjectURL(event.target.files[0]);
    document.getElementById("image_value").value = event.target.files[0]['name'];
    // body...
  }

   $(function() {
  $("#panel_info").on('submit', function(e) {
    
      e.preventDefault();

      var panel_infoForm = $(this);
      
      $.ajax({
          url: panel_infoForm.attr('action'),
          type: 'post',
          data: panel_infoForm.serialize(),

          success: function(response){
           $("#panel_dashboard").html(response);
            if(response.status == 'success'){
              
              $("#loginFormdiv").load(responce);
            }
            else{
            } 
          }
      });
  });
});


</script>

<script>
$(document).ready(function(){
    $("header").hide();
});
</script>