<div id="skill"><label>Skills</label>&nbsp&nbsp&nbsp
    
<input id="basics"  />

<?php echo form_open('welcome/validation_skill', array('id' => 'skills_info')) ?>
<div id="skill_set"></div>
<p><input type="submit" name="Submit"  value="Submit" class="btn btn-info" /></p>
<p id="total_skills"></p>
<?php echo form_close() ?> 
</div>
<script>
var i=0;
var items;
 var options = {
	url: "<?php echo base_url()?>js/skillsset.json",
   getValue: "name",
   list: {
        match: {
            enabled: true
        }
    },

    theme: "plate-dark"

};

$("#basics").easyAutocomplete(options);

function getValuebasic() { 
      
   var inputVal = document.getElementById("basics").value;
   i=i+1;
   $("#skill_set").append("<span class='circle' id='skillvalue"+i+"'>"+inputVal+"<a href='#'  onclick = 'getskills()'class='cross'>X</a><input type='hidden' id='skill"+i+"' name='skill"+i+"' value='"+inputVal+"'/></span>");
   $("#total_skills").html("<input value='"+i+"' type='hidden' name='tskill'/>")
   $("#basics").val("");
   items = document.getElementsByClassName('cross');

} 

function getskills(){
   
   for(var i = 0; i < items.length; i++)
   {
      item = items[i];
      item.onclick = function(e)
         {
            e.target.parentNode.remove();
         };
   }
}


$(function() {
  $("#skills_info").on('submit', function(e) {
     
      e.preventDefault();

      var jobseeker_skillForm = $(this);
      
      $.ajax({
          url: jobseeker_skillForm.attr('action'),
          type: 'post',
          data: jobseeker_skillForm.serialize(),

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

</script>