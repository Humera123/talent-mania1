


<section class="companydashboardsection">
<div id='companydashboard'>
   <br/><br /><br /><h3 id="mainhead" align="center">Welcome to Talent Mania</h3>
<p id="companytagline" align="center"  >Lets’s build your profile.</p>
<br/>
<div class="card">
  <div class="card-body">
<form action="companydashboard/validation" method="post"    enctype="multipart/form-data" id="company_info")) ?>
   
 <?php 
  if($form['logoimage'])
  {
  ?>
   <p class="float-left"><label>Logo Image :</label>
  <img src="<?php echo base_url().'uploads/'.$form['logoimage'] ?>" name="profileimg" id="profileimg" width="100"  /></p> 
  <input type="hidden" name="image_value" id= "image_value" value="<?php echo set_value('logoimage', $form['logoimage']); ?>"/>
  <?php
}
  else
  {
    ?>
    <p id="ch" class="float-left"><label> Upload logo Image :</label>
 
  <div class="container">
    <div class="picture-container">
    <div class="picture">
    <input type="file" name="logo_image" accept="image/*" onchange="loadimage(event,'logoimg')" />
  <img src="https://lh3.googleusercontent.com/LfmMVU71g-HKXTCP_QWlDOemmWg4Dn1rJjxeEsZKMNaQprgunDTtEuzmcwUBgupKQVTuP0vczT9bH32ywaF7h68mF-osUSBAeM6MxyhvJhG6HKZMTYjgEv3WkWCfLB7czfODidNQPdja99HMb4qhCY1uFS8X0OQOVGeuhdHy8ln7eyr-6MnkCcy64wl6S_S6ep9j7aJIIopZ9wxk7Iqm-gFjmBtg6KJVkBD0IA6BnS-XlIVpbqL5LYi62elCrbDgiaD6Oe8uluucbYeL1i9kgr4c1b_NBSNe6zFwj7vrju4Zdbax-GPHmiuirf2h86eKdRl7A5h8PXGrCDNIYMID-J7_KuHKqaM-I7W5yI00QDpG9x5q5xOQMgCy1bbu3St1paqt9KHrvNS_SCx-QJgBTOIWW6T0DHVlvV_9YF5UZpN7aV5a79xvN1Gdrc7spvSs82v6gta8AJHCgzNSWQw5QUR8EN_-cTPF6S-vifLa2KtRdRAV7q-CQvhMrbBCaEYY73bQcPZFd9XE7HIbHXwXYA=s200-no"  name="logoimg" id="logoimg" width="100" height="100" />
   </div>
    </div>
</div>
  <span class="text-danger"><?php echo form_error('image_value'); ?></span></p>

<?php
  }
  
  ?>
<!--
<div class="container">
    <div class="picture-container">
        <div class="picture">
            <img src="https://lh3.googleusercontent.com/LfmMVU71g-HKXTCP_QWlDOemmWg4Dn1rJjxeEsZKMNaQprgunDTtEuzmcwUBgupKQVTuP0vczT9bH32ywaF7h68mF-osUSBAeM6MxyhvJhG6HKZMTYjgEv3WkWCfLB7czfODidNQPdja99HMb4qhCY1uFS8X0OQOVGeuhdHy8ln7eyr-6MnkCcy64wl6S_S6ep9j7aJIIopZ9wxk7Iqm-gFjmBtg6KJVkBD0IA6BnS-XlIVpbqL5LYi62elCrbDgiaD6Oe8uluucbYeL1i9kgr4c1b_NBSNe6zFwj7vrju4Zdbax-GPHmiuirf2h86eKdRl7A5h8PXGrCDNIYMID-J7_KuHKqaM-I7W5yI00QDpG9x5q5xOQMgCy1bbu3St1paqt9KHrvNS_SCx-QJgBTOIWW6T0DHVlvV_9YF5UZpN7aV5a79xvN1Gdrc7spvSs82v6gta8AJHCgzNSWQw5QUR8EN_-cTPF6S-vifLa2KtRdRAV7q-CQvhMrbBCaEYY73bQcPZFd9XE7HIbHXwXYA=s200-no" name="logoimg" id="logoimg" width="100"  />
            <input type="file" name="logo_image" accept="image/*" onchange="loadimage(event,'logoimg')" />
        </div>
        <br>
         <h6 class="">Upload Logo</h6>

    </div>
</div>
-->




  <p><label for="name_of_organization">Name of Organization</label>
    <input   type="text" name="name_of_organization" id="name_of_organization" class="form-control" value="<?php echo set_value('name_of_organization',$form['name_of_organization']); ?>" />
  <span class="text-danger"><?php echo form_error('name_of_organization'); ?></span></p>
  <p><label for="industry_type">Industry Type</label>
    <input   type="text" name="industry_type" id="industry_type" class="form-control" value="<?php echo set_value('industry_type',$form['industry_type']); ?>" />
  <span class="text-danger"><?php echo form_error('industry_type'); ?></span></p>
  <p><label for="sector">Private or Public sector</label>
    <input type="text" name="sector" id="sector" class="form-control" value="<?php echo set_value('sector',$form['sector']); ?>" />
  <span class="text-danger"><?php echo form_error('sector'); ?></span></p>
  <p><label for="address">Address</label>
    <input type="text" name="address" id="address" class="form-control" value="<?php echo set_value('address',$form['address']); ?>" />
  <span class="text-danger"><?php echo form_error('address'); ?></span></p>
  <p><label for="phoneno">Phone No</label>
    <input  type="text" name="phoneno" id="phoneno" class="form-control" value="<?php echo set_value('phoneno',$form['phoneno']); ?>" />
  <span class="text-danger"><?php echo form_error('phoneno'); ?></span></p>
  <p><label for ="website_link">Website Link</label>
    <input type="text" name="website_link" id="website_link" class="form-control" value="<?php echo set_value('website_link',$form['website_link']); ?>" />
  <span class="text-danger"><?php echo form_error('website_link'); ?></span></p>
  <p><label for="facebook">Facebook Page Link </label>
    <input type="text" name="facebook" id="facebook" class="form-control" value="<?php echo set_value('facebook',$form['facebook']); ?>" />
  <span class="text-danger"><?php echo form_error('facebook'); ?></span></p>
  <p><label for ="ceo_name">Name of CEO</label>
    <input   type="text" name="ceo_name" id="ceo_name" class="form-control" value="<?php echo set_value('ceo_name',$form['ceo_name']); ?>" />
  <span class="text-danger"><?php echo form_error('ceo_name'); ?></span></p>
  <p><label for="email_ceo">Email Address of CEO</label>
    <input  type="text" name="email_ceo" id="email_ceo" class="form-control" value="<?php echo set_value('email_ceo',$form['email_ceo']); ?>" />
  <span class="text-danger"><?php echo form_error('email_ceo'); ?></span></p>
  <p><label for="focal_name" >Focal Person Name</label>
    <input type="text" name="focal_name" id="focal_name" class="form-control" value="<?php echo set_value('focal_name',$form['focal_name']); ?>" />
  <span class="text-danger"><?php echo form_error('focal_name'); ?></span></p>
  <p><label for="focal_email">Email Address of Focal person</label>
    <input  type="text" name="focal_email" id="focal_email" class="form-control" value="<?php echo set_value('focal_email',$form['focal_email']); ?>" />
  <span class="text-danger"><?php echo form_error('focal_email'); ?></span></p>

  <p><label for="mobileno">Mobile no of Focal person</label>
    <input type="tel" name="mobileno" id="mobileno" class="form-control" value="<?php echo set_value('mobileno',$form['mobileno']); ?>" />
  <span class="text-danger"><?php echo form_error('mobileno'); ?></span></p>

  <p><label for="skype_id">Skype ID</label>
    <input  type="text" name="skype_id" id="skype_id" class="form-control" value="<?php echo set_value('skype_id',$form['skype_id']); ?>" />
  <span class="text-danger"><?php echo form_error('skype_id'); ?></span></p>

  <p><label for="ntn_no">NTN No</label>
    <input  type="text" name="ntn_no" id="ntn_no" class="form-control" value="<?php echo set_value('ntn_no',$form['ntn_no']); ?>" />
  <span class="text-danger"><?php echo form_error('ntn_no'); ?></span></p>

  <p><label for ="employee_no">No of employees in organization</label>
    <input type="text" name="employee_no" id="employee_no" class="form-control" value="<?php echo set_value('employee_no',$form['employee_no']); ?>" />
  <span class="text-danger"><?php echo form_error('employee_no'); ?></span></p>
   
  <p><input type="submit" name="Submit"  value="Submit" class="btn btn-info" id="companysubmit" /></p>
  <?php echo form_close() ?>
</div>
 </form>
</div>
</div>
 </section>

<script type="text/javascript">
  function loadimage(event,$id) {
    var output=document.getElementById($id);
    output.src=URL.createObjectURL(event.target.files[0]);
    // body...
  }

  $(function() {
  $("#company_info").on('submit', function(e) {
    
      e.preventDefault();

      var company_infoForm = $(this);
      
      $.ajax({
          url: company_infoForm.attr('action'),
          type: 'post',
          data: company_infoForm.serialize(),

          success: function(response){
           $("#companydashboard").html(response);
            if(response.status == 'success'){
              alert("xxx");
              $("#loginFormdiv").load(responce);
            }
            else{        
                } 
          }
      });
  });

  
});

  
</script>


 