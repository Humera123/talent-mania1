//login form submit
$(function() {
  $("#loginForm").on('submit', function(e) {
      e.preventDefault();


      var loginForm = $(this);

      $.ajax({
          url: loginForm.attr('action'),
          type: 'post',
                
          data: loginForm.serialize(),
          
          success: function(response){
            
            if(!response.error){
              $("#message").html(response.message);
              location.reload();
            }
            else{
              $("#message").html(response.message);
            } 
          }
      });
  });
});

//jobseeker info form submit

$(function() {
  $("#jobseeker_info").on('submit', function(e) {
    
      e.preventDefault();

      var jobseeker_infoForm = $(this);
      
      $.ajax({
          url: jobseeker_infoForm.attr('action'),
          type: 'post',
          data: jobseeker_infoForm.serialize(),

          success: function(response){
           $("#jobseeker_dashboard").html(response);
            if(response.status == 'success'){
              
              $("#loginFormdiv").load(responce);
            }
            else{
            } 
          }
      });
  });
});

//jobseeker exp form submit

$(function() {
  $("#jobseeker_exp").on('submit', function(e) {
     alert("ssss");
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

//jobseeker info form submit

//for image upload
  
 $(document).ready(function(){
// Prepare the preview for profile picture
    $("#wizard-picture").change(function(){
        readURL(this);
    });
});
function readURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            $('#wizardPicturePreview').attr('src', e.target.result).fadeIn('slow');
        }
        reader.readAsDataURL(input.files[0]);
    }
}