<?php
$output ="";
if(count($data) > 0){
    foreach($data as $row){
        $color = '';
        $rating = $row->rating;
        $output .= '<h3 class="text-primary">'.$row->skill_name.'</h3>
                    <ul class="list-inline" data-rating="'.$rating.'" title="Average Rating - '.$rating.'">
                    ';
        for($count = 1; $count <= 5; $count++)
        {
            if($count <= $rating)
            {
            $color = 'color:#ffcc00;';
            }
            else
            {
            $color = 'color:#ccc;';
            }
            $output .= '<li title="'.$count.'" id="'.$row->skillid. '-'.$count.'" data-skill="'.$row->skillid.'" data-index="'.$count.'"  data-rating="'.$rating.'" class="rating" style="cursor:pointer; '.$color.' font-size:24px;">&#9733;</li>';
        }
   $output .= '</ul>';
    }
    echo $output;
}
else{
    echo "No data found";
}
?>

<script>
$(document).ready(function()
{
  
  $(document).on('mouseenter', '.rating', function()
  {
  var index = $(this).data('index');
  var skillid = $(this).data('skill');
  remove_background(skillid);
  for(var count = 1; count <= index; count++)
  {
   $('#'+skillid+'-'+count).css('color', '#ffcc00');
  }
 });

  function remove_background(skillid)
 {
  for(var count = 1; count <= 5; count++)
  {
   $('#'+skillid+'-'+count).css('color', '#ccc');
  }
 }

 $(document).on('click', '.rating', function(){
  var index = $(this).data('index');
  var skillid = $(this).data('skill');
  $.ajax({
   url:"<?php echo base_url(); ?>skillendorsed/insert",
   method:"POST",
   data:{index:index, skillid:skillid},
   success:function(data)
   {
    
    alert("You have rate "+index +" out of 5");
    location.reload(true);
   }
  })
 });

 $(document).on('mouseleave', '.rating', function(){
  var index = $(this).data('index');
  var skillid = $(this).data('skill');
  var rating = $(this).data('rating');
  remove_background(skillid);
  for(var count = 1; count <= rating; count++)
  {
   $('#'+skillid+'-'+count).css('color', '#ffcc00');
  }
 });

});
</script>