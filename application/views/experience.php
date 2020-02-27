
<div id="exp">
<h3>Experience:</h3><br />  

              <div class="table-responsive">  
              <table class="table table-bordered">  
                <tr>  
                     <th>Experience ID</th>  
                     <th>Job Title</th>  
                     <th>Company Name</th>  
                     <th>location</th> 
                     <th>Start Month</th> 
                     <th>End Month</th>
                     <th>Current Job</th>
                     <th>Delete</th>  
                     <th>Update</th>  
                </tr>  
           <?php  
           if($data)  
           {  
             foreach ($data as $row) 
                {  
           ?>  
                <tr>  
                     <td><?php echo "$row->experience_id" ?></td>  
                     <td><?php echo "$row->job_title" ?></td>
                     <td><?php echo "$row->company_name" ?></td>
                     <td><?php echo "$row->location" ?></td>
                     <td><?php echo "$row->start_month" ?></td>
                     <td><?php echo "$row->end_month" ?></td>
                     <td><?php echo "$row->curent_job"?></td>
                     <td><a href="<?php echo base_url() . "welcome/delete_exp_data/" . $row->experience_id; ?>">Delete</a></td>  
                     <td><a href="<?php echo base_url() . "welcome/edit_exp_data/" . $row->experience_id; ?>">Edit</a></td>  
                </tr>  
           <?php       
                }  
           }  
           else  
           {  
           ?>  
                <tr>  
                     <td colspan="5">No Data Found</td>  
                </tr>  
           <?php  
           }  
           ?>  
           </table>  
      </div>

      <?php
      if($exp)
      {
        foreach ($exp as $row) 
        {
        ?>
         <?php echo form_open('welcome/update_exp_data', array('id' => 'jobseeker_exp')) ?>   
             <p><input placeholder="Job Title..." type="text" name="job_title" class="form-control" value="<?php echo $row->job_title; ?>" />
             <span class="text-danger"><?php echo form_error('job_title'); ?></span></p>
            <p><input placeholder="Company..." type="text" name="company" class="form-control" value="<?php echo $row->company_name; ?>" />
            <span class="text-danger"><?php echo form_error('company'); ?></span></p>
            <p><input placeholder="Location..." type="text" name="location" class="form-control" value="<?php echo $row->location; ?>" />
            <span class="text-danger"><?php echo form_error('location'); ?></span></p>
            <p><label>Start Date: </label>&nbsp&nbsp&nbsp<input placeholder="Start Month..." type="date" name="start_month" class="form-control" value="<?php echo $row->start_month; ?>"/>
            <span class="text-danger"><?php echo form_error('start_month'); ?></span></p>
          <p><label>End Date: </label>&nbsp&nbsp&nbsp<input placeholder="End Month..." type="date" name="end_month" class="form-control" 
          value="<?php echo $row->end_month; ?>" />
          <span class="text-danger"><?php echo form_error('end_month'); ?></span></p>
          <p><input type="checkbox" name="current_job"  class="form-control"> Current Job
          <span   class="text-danger"><?php echo form_error('current_job'); ?></span></p>
          <p><input type="hidden" id="hide" name="did" value="<?php echo $row->experience_id; ?>"></p>
          <input type="submit" name="submit" value="Submit" class="btn btn-info" />
          <?php echo form_close() ?>
        <?php  # code...
        }
      }
      else
      {
        ?>

         <form id="jobseeker_exp">   
    
    <p><input placeholder="Job Title..." type="text" name="job_title" class="form-control" />
    <span class="text-danger"><?php echo form_error('job_title'); ?></span></p>
    <p><input placeholder="Company..." type="text" name="company" class="form-control"  />
    <span class="text-danger"><?php echo form_error('company'); ?></span></p>
    <p><input placeholder="Location..." type="text" name="location" class="form-control" />
    <span class="text-danger"><?php echo form_error('location'); ?></span></p>
    <p><label>Start Date: </label>&nbsp&nbsp&nbsp<input placeholder="Start Month..." type="date" name="start_month" class="form-control"/>
    <span class="text-danger"><?php echo form_error('start_month'); ?></span></p>
    <p><label>End Date: </label>&nbsp&nbsp&nbsp<input placeholder="End Month..." type="date" name="end_month" id="end_month" class="form-control"  />
    <span class="text-danger"><?php echo form_error('end_month'); ?></span></p>
    <p><input type="checkbox" name="current_job" id="current_job" class="form-control"  onclick="myFunction()"> Current Job
    <span class="text-danger"><?php echo form_error('current_job'); ?></span></p>
    <input type="submit" name="submit" value="Add Experience" class="btn btn-info" onclick="submitForm('http://talent-mania.com/welcome/validation_exp')" />
    <input type="submit" name="next" id="next" value="Next" class="btn btn-info"  onclick="submitForm('http://talent-mania.com/welcome/totalexperience')"/>

    
 
</form>


        <?php
      }
      ?>  


</div>
<script>

$(function() {
  $("#jobseeker_exp").on('submit', function(e) {
    
      e.preventDefault();

      var jobseeker_expForm = $(this);
      
      $.ajax({
          url: jobseeker_expForm.attr('action'),
          type: 'post',
          data: jobseeker_expForm.serialize(),

          success: function(response){
           $("#jobseeker_dashboard").html(response);
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

  function myFunction() {
  // Get the checkbox
  var checkBox = document.getElementById("current_job");
  // Get the output text
  var text = document.getElementById("end_month");

  // If the checkbox is checked, display the output text
  if (checkBox.checked == true){
    text.style.display = "none";
  } else {
    text.style.display = "block";
  }


}

function submitForm(action) {
    var form = document.getElementById('jobseeker_exp');
    form.action = action;
    form.submit();
  }
</script>