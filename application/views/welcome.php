 <br /><br /><h3 id="mainhead" align="center">Welcome to Talent Mania</h2>
 <p align="center">Lets’s start your profile, personalize your job listings and find companies you’ll love.</p>
<div id='jobseeker_dashboard'>
<form action="<?php echo base_url();?>welcome/validation" id="jobseeker_info" method="post" enctype="multipart/form-data">
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
  <input type="file" name="proimage" accept="image/*" onchange="loadimage(event,'profileimg')" />
  <img name="profileimg" id="profileimg" width="100"alt="Profile Image" />
  <span class="text-danger"><?php echo form_error('image_value'); ?></span></p>
<?php
  }
  
  ?>   -->


<div class="container">
    <div class="picture-container">
        <div class="picture">
            <img src="https://lh3.googleusercontent.com/LfmMVU71g-HKXTCP_QWlDOemmWg4Dn1rJjxeEsZKMNaQprgunDTtEuzmcwUBgupKQVTuP0vczT9bH32ywaF7h68mF-osUSBAeM6MxyhvJhG6HKZMTYjgEv3WkWCfLB7czfODidNQPdja99HMb4qhCY1uFS8X0OQOVGeuhdHy8ln7eyr-6MnkCcy64wl6S_S6ep9j7aJIIopZ9wxk7Iqm-gFjmBtg6KJVkBD0IA6BnS-XlIVpbqL5LYi62elCrbDgiaD6Oe8uluucbYeL1i9kgr4c1b_NBSNe6zFwj7vrju4Zdbax-GPHmiuirf2h86eKdRl7A5h8PXGrCDNIYMID-J7_KuHKqaM-I7W5yI00QDpG9x5q5xOQMgCy1bbu3St1paqt9KHrvNS_SCx-QJgBTOIWW6T0DHVlvV_9YF5UZpN7aV5a79xvN1Gdrc7spvSs82v6gta8AJHCgzNSWQw5QUR8EN_-cTPF6S-vifLa2KtRdRAV7q-CQvhMrbBCaEYY73bQcPZFd9XE7HIbHXwXYA=s200-no" class="picture-src" id="wizardPicturePreview" title="">
            <input type="file" id="wizard-picture" class="">
        </div>
        <br>
         <h6 class="">Upload Image</h6>

    </div>
</div></br>
  <p>
     <label for="first_name">First Name</label>
     <input  type="text" name="first_name" id="first_name" class="form-control" value="<?php echo set_value('first_name', $form['first_name']); ?>" />
      <span class="text-danger"><?php echo form_error('first_name'); ?></span>
    </p>

  <p> <label for="last_name">Last Name</label><input   type="text" name="last_name" id="last_name" class="form-control" value="<?php echo set_value('last_name', $form['last_name']); ?>" />
  <span class="text-danger"><?php echo form_error('last_name'); ?></span>
 </p>

  <p> <label for="father_name">Father Name</label><input type="text" name="father_name" id="father_name" class="form-control" value="<?php echo set_value('father_name',$form['father_name']); ?>" />
  <span class="text-danger"><?php echo form_error('father_name'); ?></span>
</p>

   
  <p>
    <label for="date_of_birth">Date of Birth</label>
    <input  type="date" name="date_of_birth" id="date_of_birth" class="form-control" value="<?php echo set_value('date_of_birth',$form['date_of_birth']); ?>" />
  <span class="text-danger"><?php echo form_error('date_of_birth'); ?></span>
</p>

  <p>
    <label for="nationality">Nationality</label>
    <input   type="text" name="nationality" id="nationality" class="form-control" value="<?php echo set_value('nationality',$form['nationality']); ?>" />
  <span class="text-danger"><?php echo form_error('nationality'); ?></span>
 </p>

  <p>
    <label for="mobileno">Mobile No</label>
    <input type="text" name="mobileno" id="mobileno" class="form-control" value="<?php echo set_value('mobileno',$form['mobileno']); ?>" />
  <span class="text-danger"><?php echo form_error('mobileno'); ?></span>
 </p>

  <p>
     <label for="address">Address</label>
     <input type="text" name="address" id="address" class="form-control" value="<?php echo set_value('address',$form['address']); ?>" />
  <span class="text-danger"><?php echo form_error('address'); ?></span>
 </p>
  
  <p>
    <label for="city">City</label>
    <input  type="text" name="city" id="city" class="form-control" value="<?php echo set_value('city',$form['city']); ?>" />
  <span class="text-danger"><?php echo form_error('city'); ?></span>
 </p>

  <p>
    <label for="country">Country</label>
    <input  type="text" name="country" id="country" class="form-control" value="<?php echo set_value('country',$form['country']); ?>" />
  <span class="text-danger"><?php echo form_error('country'); ?></span>
 </p>

  <p>
      <label for="skype_id">Skype ID</label>
    <input   type="text" name="skype_id" id="skype_id" class="form-control" value="<?php echo set_value('skype_id',$form['skype_id']); ?>" />
  <span class="text-danger"><?php echo form_error('skype_id'); ?></span>
</p>

  <p>
    <label for="linkdin_profile">LinkedIn Profile</label>
    <input  type="text" name="linkdin_profile" id="linkdin_profile" class="form-control" value="<?php echo set_value('linkdin_profile',$form['linkdin_profile']); ?>" />
  <span class="text-danger"><?php echo form_error('linkdin_profile'); ?></span>
</p>

  <p>
     <label for="gender">Gender</label>
    <select name="gender" id="gender" class="form-control" value="<?php echo set_value('gender'); ?>">
      <option value="1">Female</option>
      <option value="2">Male</option>
      <option value="3">Not Specified</option>
    </select>
    <span class="text-danger"><?php echo form_error('gender'); ?></span>
  </p>

<br>
<!for cnic front image upload-->

<main class="main_full">
  <div class="container">
    <div class="panel">
      <div class="button_outer">
        <div class="btn_upload">
          <input type="file" id="upload_file" name="">
          Upload front CNIC Image
        </div>
        <div class="processing_bar"></div>
        <div class="success_box"></div>
      </div>
    </div>
    <div class="error_msg"></div>
    <div class="uploaded_file_view" id="uploaded_view">
      <span class="file_remove">X</span>
    </div>
  </div>
</main>


<script>
var btnUpload = $("#upload_file"),
    btnOuter = $(".button_outer");
  btnUpload.on("change", function(e){
    var ext = btnUpload.val().split('.').pop().toLowerCase();
    if($.inArray(ext, ['gif','png','jpg','jpeg']) == -1) {
      $(".error_msg").text("Not an Image...");
    } else {
      $(".error_msg").text("");
      btnOuter.addClass("file_uploading");
      setTimeout(function(){
        btnOuter.addClass("file_uploaded");
      },3000);
      var uploadedFile = URL.createObjectURL(e.target.files[0]);
      setTimeout(function(){
        $("#uploaded_view").append('<img src="'+uploadedFile+'" />').addClass("show");
      },3500);
    }
  });
  $(".file_remove").on("click", function(e){
    $("#uploaded_view").removeClass("show");
    $("#uploaded_view").find("img").remove();
    btnOuter.removeClass("file_uploading");
    btnOuter.removeClass("file_uploaded");
  });
</script>

<?php 
  if($form['cnic_front'])
  {
  ?>
   <p><label>CNIC Front Image :</label>
   <img src="<?php echo base_url().'uploads/'.$form['cnic_front'] ?>" name="fcnicimage" id="fcnicimage" width="100"alt="Front CNIC image" /></p>
  <input type="hidden" name="cnic_front_value" id= "cnic_front_value" value="<?php echo set_value('cnic_front', $form['cnic_front']); ?>"/>
  <br>
  <?php
}

  else
  {
    ?>
   <p>
    <label> Upload CNIC Front Image :</label>
    <!-- <img name="fcnicimage" id="fcnicimage" width="100" alt="Front CNIC image" /></p>-->
  <input type="file" name="cnic_front" id="cnic_front" accept="image/gif, image/jpeg, image/png" onchange="loadimage(event,'fcnicimage')">
  <p><span class="text-danger"><?php echo form_error('cnic_front'); ?></span></p>
<?php
  }
  
  ?> 

<br>
<?php 
  if($form['cnic_back'])
  {
  ?>
   <p class="float-left"><label>CNIC Back Image :</label>
   <img src="<?php echo base_url().'uploads/'.$form['cnic_back'] ?>" name="bcnicimage" id="bcnicimage" width="100"alt="Front CNIC image" /></p>
  <input type="hidden" name="cnic_back_value" id= "cnic_back_value" value="<?php echo set_value('cnic_back', $form['cnic_back']); ?>"/>
  <?php
}
  else
  {
    ?>
   <p>
    <label> Upload CNIC Back Image   :</label>
    <!--<img name="bcnicimage" id="bcnicimage" width="100"alt="Back CNIC image" /></p>-->
  <input type="file" name="cnic_back" id="cnic_back" accept="image/gif, image/jpeg, image/png" onchange="loadimage(event,'bcnicimage')">
  
  <p><span class="text-danger"><?php echo form_error('cnic_back'); ?></span></p>
<?php
  }
  
  ?>




<br>
 <?php 
  if($form['last_degree'])
  {
  ?>
   <p class="float-left"><label>Last Degree Image:</label>
   <img src="<?php echo base_url().'uploads/'.$form['last_degree'] ?>" name="lastdegreeimg" id="lastdegreeimg" width="100"alt="Latest degree image" />
  <input type="hidden" name="last_degree_value" id= "last_degree_value" value="<?php echo set_value('last_degree', $form['last_degree']); ?>"/></p>
  <?php
}
  else
  {
    ?>
   <p>
    <label> Upload Last Degree Image:</label>
     <!--<img name="lastdegreeimg" id="lastdegreeimg" width="100"alt=" Latest Degree Image"/>-->
  <input type="file" name="last_degree" id="last_degree" accept="image/gif, image/jpeg, image/png" onchange="loadimage(event,'lastdegreeimg')">
 </p>
  <p><span class="text-danger"><?php echo form_error('last_degree'); ?></span></p>
<?php
  }
  
  ?>
  <input type="submit" name="Submit" value="Submit" id="formsubmit"/>
  <input type="button" class="btn btn-link"> <a href="<?php echo base_url()?>welcome/logout">Logout</a></p>
  <?php echo form_close()?>
</div>
</form>

<script type="text/javascript">
  function loadimage(event,$id) {
    var output=document.getElementById($id);
    output.src=URL.createObjectURL(event.target.files[0]);
    document.getElementById("image_value").value = event.target.files[0]['name'];
    // body...
  }
</script>

 