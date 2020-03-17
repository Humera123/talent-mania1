 <script>
$(document).ready(function(){
    $("header").hide();
});
</script>
 <br>
<div class="container">
          <nav class="navbar navbar-expand-sm navbar-transparent">
            <a class="navbar-brand" href="#">TALENT MANIA</a>
            <a  id="logoutlink" href="<?php echo base_url()?>welcome/logout">Logout</a>  
            <!--<button  id="panalistbtn"  onclick="window.location='<?php echo base_url()?>welcome/logout'">Logout</button>-->
              </nav>
     </div>



<?php 
   if($this->session->flashdata('true'))
   {
 ?>
   <div class="alert alert-success"> 
     <?php  echo $this->session->flashdata('true'); ?>
<?php    
}
?>
<br>
<!--<p align="center"><a href="<?php echo base_url()?>welcome/logout">Logout</a></p>-->

<!--<a href="/enterprise" target="_blank" class="pure-button pure-button-primary">See Solutions</a>-->
 
<button  id="cpjsbtn" onclick="window.location='<?php echo base_url()?>admindashboard/company_data'">Company Data</button>
<button  id="cpjsbtn" onclick="window.location='<?php echo base_url()?>admindashboard/panel_data'">Panel Data</button>
<button  id="cpjsbtn" onclick="window.location='<?php echo base_url()?>admindashboard/jobSeeker_data'">JobSeeker Data</button>
<!--
 <a href= "<?php echo base_url()?>admindashboard/company_data"> Company Data</a>
 <a href="<?php echo base_url()?>admindashboard/panel_data">Panel Data </a> 
<a href="<?php echo base_url()?>admindashboard/jobSeeker_data">JobSeeker Data</a>
-->

<button  id="panalistbtn"type="submit" onclick="window.location='<?php echo base_url()?>admindashboard/assign'">Assign Panalist</button>
<br>
<br>
<br>
<br>
<br>
<br>

<?php
if($this->uri->segment(2)=="company_data" || $this->uri->segment(2)=="company_data_filter")
{
	?>
	<h3 id="mainhead" align="center">Company Data</h3><br />  
              <form class="form-inline" action="<?php echo base_url() . 'admindashboard/company_data_filter'; ?>" method="post">
                <select class="form-control" name="field">
                  <option selected="selected" disabled="disabled" value="">Filter By</option>
                  <option <?php if (isset($_POST["field"]) && $_POST["field"]=="name_of_organization" && !empty($_POST['search'])) echo "selected"?> value="name_of_organization">name_of_organization</option>
                </select>

                <input class="form-control" type="text" id="search" name="search" value="<?php echo isset($_POST['search']) ? $_POST['search'] : '' ?>" placeholder="Search...">
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
              <table class="table table-striped   table-bordered">  
               <thead>
                <tr >  
                     <th  >No#</th>  
                     <th>Logo</th>  
                     <th>Organization</th>  
                     <th>Industry</th> 
                     <th>Sector</th> 
                     <th>Address</th>
                     <th>Phone</th>
                     <th>Mobile</th>  
                     <th>Website</th>  
                     <th>Facebook</th>  
                     <th>CEO</th>  
                     <th>skype</th>  
                     <th>CEO Email</th>  
                     <th>Focal Name</th>  
                     <th>NTN</th>  
                     <th>Employee ID</th>  

                </tr> 
                </thead> 
           <?php  
           if($data)  
           {  
             foreach ($data as $row) 
                {  
           ?>  <tbody>
                <tr>  
                     <td><?php echo "$row->company_no" ?></td> 
                     <td><img src="<?php echo base_url().'uploads/'.$row->logoimage?>" width="50px"/></td> 
                     <td><a href="<?php echo base_url() . "admindashboard/view_company_job/" . $row->company_no; ?>"><?php echo "$row->name_of_organization" ?></a></td>
                     <td><?php echo "$row->industry_type" ?></td>
                     <td><?php echo "$row->sector" ?></td>
                     <td><?php echo "$row->address" ?></td>
                     <td><?php echo "$row->phoneno"?></td>
                     <td><?php echo "$row->mobileno"?></td>
                     <td><?php echo "$row->website_link"?></td>
                     <td><?php echo "$row->facebook"?></td>
                     <td><?php echo "$row->ceo_name"?></td>
                     <td><?php echo "$row->skype_id"?></td>
                     <td><?php echo "$row->email_ceo"?></td>
                     <td><?php echo "$row->focal_name"?></td>
                     <td><?php echo "$row->ntn_no"?></td>
                     <td><?php echo "$row->employee_no"?></td>
                </tr> 
                </tbody> 
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
else if ($this->uri->segment(2)=="panel_data" || $this->uri->segment(2)=="panel_data_filter")
{
	?>
	<h3>Panel Data :</h3><br />  
            <form class="form-inline" action="<?php echo base_url() . 'admindashboard/panel_data_filter'; ?>" method="post">
                <select class="form-control" name="field">
                  <option selected="selected" disabled="disabled" value="">Filter By</option>
                  <option <?php if (isset($_POST["field"]) && $_POST["field"]=="first_name" && !empty($_POST['search'])) echo "selected"?> value="first_name"> first_name </option>
                  <option <?php if (isset($_POST["field"]) && $_POST["field"]=="last_name" && !empty($_POST['search'])) echo "selected"?>value="last_name"> last_name </option>
                  <option <?php if (isset($_POST["field"]) && $_POST["field"]=="pskill_name" && !empty($_POST['search'])) echo "selected"?>value="pskill_name">Skill Name </option>
                </select>
                <input class="form-control" type="text" id="search" name="search" value="<?php echo isset($_POST['search']) ? $_POST['search'] : '' ?>" placeholder="Search...">
                <input class="btn btn-default" type="submit" name="filter" value="Go">
              </form>

              <div class="table-responsive">  
              <table class="table  table-striped">  
                <tr>  
                     <th>Panelid</th>  
                     <th>Profileimage</th>
                     <th>First_name</th>  
                     <th>Last_name</th> 
                     <th>Mobileno</th> 
                     <th>City</th>
                     <th>Country</th>
                     <th>Skype_id</th>  
                     <th>Linkedin_profile</th> 
                     <th>Panel Skills </th>              
                     <th>Panel Experience </th> 
                     <th>Panel Education </th> 
                </tr>  
           <?php  
           if($data)  
           {  
            
             foreach ($data as $row) 
                {  
           ?>  
                <tr>  
                     <td><?php echo "$row->panelid" ?></td> 
                     <td><img src="<?php echo base_url().'uploads/'.$row->pimage?>" width="100"/></td> 
                     <td><?php echo "$row->first_name" ?></td>
                     <td><?php echo "$row->last_name" ?></td>
                     <td><?php echo "$row->mobileno" ?></td>
                     <td><?php echo "$row->city" ?></td>
                     <td><?php echo "$row->country"?></td>
                     <td><?php echo "$row->skype_id"?></td>
                     <td><?php echo "$row->linkdin_profile"?></td>
                     <td><?php echo "$row->skills"?></td>
                     <td><?php echo "$row->exp"?></td>
                     <td><?php echo "$row->edu"?></td>

                </tr>  
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
      <?php
}
else if($this->uri->segment(2)=="jobSeeker_data"|| $this->uri->segment(2)=="fiter_jobseeker_data")
{
?>
	<h3>Jobseeker Data :</h3><br />  
             <form class="form-inline" action="<?php echo base_url() . 'admindashboard/fiter_jobseeker_data'; ?>" method="post">
                <select class="form-control" name="field">
                  <option selected="selected" disabled="disabled" value="">Filter By</option>
                  <option <?php if (isset($_POST["field"]) && $_POST["field"]=="first_name" && !empty($_POST['search'])) echo "selected"?>  value="first_name"> first_name</option>
                  <option <?php if (isset($_POST["field"]) && $_POST["field"]=="last_name" && !empty($_POST['search'])) echo "selected"?> value="last_name"> last_name </option>
                  <option  <?php if (isset($_POST["field"]) && $_POST["field"]=="approval" && !empty($_POST['search'])) echo "selected"?>value="approval">Approval </option>
                  <option <?php if (isset($_POST["field"]) && $_POST["field"]=="hiring" && !empty($_POST['search'])) echo "selected"?>value="hiring"> Hiring </option>
                  <option <?php if (isset($_POST["field"]) && $_POST["field"]=="city" && !empty($_POST['search'])) echo "selected"?>value="city"> City </option>
                  <option <?php if (isset($_POST["field"]) && $_POST["field"]=="skill_name" && !empty($_POST['search'])) echo "selected"?>value="skill_name"> Skill Name</option>
                </select>
                <input class="form-control" type="text" id="search" id="search" name="search" value="<?php echo isset($_POST['search']) ? $_POST['search'] : '' ?>" placeholder="Search...">
                <input class="btn btn-default" type="submit" name="filter" value="Go">
              </form>

              <div class="table-responsive">  
              <table class="table table-striped">  
                <tr>  
                     <th>CNIC</th>  
                     <th>Profile Image</th>  
                     <th>First_name</th>  
                     <th>Last_name</th> 
                     <th>Father_name</th> 
                     <th>DOB</th>
                     <th>Nationality</th>
                     <th>Mobileno</th>  
                     <th>Address</th>  
                     <th>City</th>  
                     <th>Country</th>  
                     <th>Skype_id</th>  
                     <th>Linkedin_Profile</th>  
                     <th>skills</th>  
                     <th>Experience</th>
                     <th>Education</th>

                     
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



