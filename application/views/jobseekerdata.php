<?php 
   if($this->session->flashdata('true'))
   {
 ?>
   <div class="alert alert-success"> 
     <?php  echo $this->session->flashdata('true'); ?>

      <?php
}
if($this->uri->segment(2)=="jobSeeker_data"|| $this->uri->segment(2)=="fiter_jobseeker_data")
{
?>
    <h3 id="mainhead">Jobseeker Data </h3><br />  
             <form class="form-inline" action="<?php echo base_url() . 'Jobseekerdatatable/fiter_jobseeker_data'; ?>" method="post">

<div id= "searchfilterandgocontrols">
                <select class="form-control" name="field" id="filtered">
                  <option selected="selected" disabled="disabled" value="">Filter By</option>
                  <option <?php if (isset($_POST["field"]) && $_POST["field"]=="first_name" && !empty($_POST['search'])) echo "selected"?>  value="first_name"> First Name</option>
                  <option <?php if (isset($_POST["field"]) && $_POST["field"]=="last_name" && !empty($_POST['search'])) echo "selected"?> value="last_name"> Last Name </option>
                  <option  <?php if (isset($_POST["field"]) && $_POST["field"]=="approval" && !empty($_POST['search'])) echo "selected"?>value="approval">Approval </option>
                  <option <?php if (isset($_POST["field"]) && $_POST["field"]=="hiring" && !empty($_POST['search'])) echo "selected"?>value="hiring"> Hiring </option>
                  <option <?php if (isset($_POST["field"]) && $_POST["field"]=="city" && !empty($_POST['search'])) echo "selected"?>value="city"> City </option>
                  <option <?php if (isset($_POST["field"]) && $_POST["field"]=="skill_name" && !empty($_POST['search'])) echo "selected"?>value="skill_name"> Skill</option>
                </select>
                <input class="form-control" type="text" id="search" id="search" name="search" value="<?php echo isset($_POST['search']) ? $_POST['search'] : '' ?>" placeholder="Search...">
            </div>
                <input class="btn btn-default" type="submit" name="filter" value="Go" id="goo">
              </form>
              <br/><br/>
<div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card bootstrap-table">
                                <div class="card-body table-full-width">
              <div class="table-responsive">  
              <table class="table table-hover">  
                <tr>  
                     <th scope="col">CNIC#</th>  
                     <th scope="col">Profile Image</th>  
                     <th scope="col">First Name</th>  
                     <th scope="col">Last Name</th> 
                     <th scope="col">Father Name</th> 
                     <th scope="col">DOB</th>
                     <th scope="col">Nationality</th>
                     <th scope="col">Cell No</th>  
                     <th scope="col">Address</th>  
                     <th scope="col">City</th>  
                     <th scope="col">Country</th>  
                     <th scope="col">Skype ID</th>  
                     <th scope="col">LinkedIn Profile</th>  
                     <th scope="col">Skills</th>  
                     <th scope="col">Experience</th>
                     <th scope="col">Education</th>

                     
                </tr>  
           <?php  
           if($data)  
           {  
             foreach ($data as $row) 
                {  
           ?>  
                <tr>  
                     <td><?php echo "$row->cnic" ?></td> 
                     <td><img src="<?php echo base_url().'uploads/'.$row->pimage?>" width="100"/></td> 
                     <td><?php echo "$row->first_name?"?></td>
                     <td><?php echo "$row->last_name" ?></td>
                     <td><?php echo "$row->father_name" ?></td>
                     <td><?php echo "$row->date_of_birth" ?></td>
                     <td><?php echo "$row->nationality" ?></td>
                     <td><?php echo "$row->mobileno"?></td>
                     <td><?php echo "$row->address"?></td>
                     <td><?php echo "$row->city"?></td>
                     <td><?php echo "$row->country"?></td>
                     <td><?php echo "$row->skype_id"?></td>
                     <td><?php echo "$row->linkdin_profile"?></td>
                     <td><?php echo "$row->skills"?></td>
                     <td><?php echo "$row->exp"?></td>
                     <td><?php echo "$row->edu"?></td>
           <?php       
                }  
           }  
           else  
           {  
           ?>  
                <tr>  
                     <td colspan="15">No Data Found</td>  
                </tr>  
           <?php  
           }  
           ?>  
           </table>  
      </div>
  </div>
</div>
</div>
</div>
</div>
</div>
<?php
}
else 
{
    ?>
    <div class="table-responsive">  
              <table class="table table-bordered">  
                <tr>  Nothing is to  be shown </tr>
           </table>
       </div>
       <?php
}
?>       

                </div>
            </div><!-- .animated -->
        </div><!-- .content -->
