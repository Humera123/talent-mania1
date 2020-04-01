<?php 
   if($this->session->flashdata('true'))
   {
 ?>
   <div class="alert alert-success"> 
     <?php  echo $this->session->flashdata('true'); ?>

 
<?php    
}
?>

<?php
if($this->uri->segment(2)=="company_data" || $this->uri->segment(2)=="company_data_filter")
{
    ?>
    <h3 id="mainhead">Company Data</h3><br />  
              <form class="form-inline" action="<?php echo base_url() . 'Datatables/company_data_filter'; ?>" method="post">
                 
                <select class="form-control" name="field" id="filtered">
                  <option selected="selected" disabled="disabled"  value="">Filter By</option>
                  <option <?php if (isset($_POST["field"]) && $_POST["field"]=="name_of_organization" && !empty($_POST['search'])) echo "selected"?> value="name_of_organization">Name of Organization</option>
                </select>
                 <br/>
                <input class="form-control" type="text" id="search" name="search" value="<?php echo isset($_POST['search']) ? $_POST['search'] : '' ?>" placeholder="Search...">
                 
                <input class="btn btn-default" type="submit" name="filter" value="Go" id="goo">
          
              </form>
<br/><br/> 
<div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card bootstrap-table">
                                <div class="card-body   ">
              <div class="table-responsive">  
              <table class="table table-hover"  >  
               <thead>
                <tr> 
                 <div class="row">
                       <div class="col">
                        
                     <th>#</th>
                 
                       </div>
                       <div class="col">

                     <th >Logo</th>  
                   </div>
                   <div class="col">
                     <th  >Organization</th> 
                     </div> 
                     <div class="col">
                     <th >Industry</th> 
                   </div>
                   <div class="col">
                     <th >Sector</th> 
                   </div>
                   <div class="col">
                     <th>Address</th>
                   </div>
                   <div class="col">
                     <th>Phone</th>
                   </div>
                   <div class="col">
                     <th>Mobile</th>  
                   </div>
                   <div class="col">
                     <th >Website</th> 
                     </div>
                     <div class="col"> 
                     <th  >Facebook</th> 
                     </div>
                     <div class="col"> 
                     <th >CEO</th>  
                   </div>
                   <div class="col">
                     <th >skype</th>  
                   </div>
                   <div class="col">
                     <th >CEO Email</th> 
                     </div>
                     <div class="col"> 
                     <th >Focal Name</th> 
                     </div>
                     <div class="col"> 
                     <th >NTN</th>  
                   </div>
                   <div class="col">
                     <th >Employee ID</th> 
                     </div> 
</div>
                </tr> 
                </thead> 
           <?php  
           if($data)  
           {  
             foreach ($data as $row) 
                {  
           ?>  <tbody>
                <tr>  
                     <td scope="row"><?php echo "$row->company_no" ?></td> 
                     <td scope="row" ><img src="<?php echo base_url().'uploads/'.$row->logoimage?>" width="50px"/></td> 
                     <td scope="row"> <a href="<?php echo base_url() . "admindashboard/view_company_job/" . $row->company_no; ?>"><?php echo "$row->name_of_organization" ?></a></td>
                     <td scope="row"><?php echo "$row->industry_type" ?></td>
                     <td scope="row"><?php echo "$row->sector" ?></td>
                     <td scope="row"><?php echo "$row->address" ?></td>
                     <td scope="row"><?php echo "$row->phoneno"?></td>
                     <td scope="row"><?php echo "$row->mobileno"?></td>
                     <td scope="row"><?php echo "$row->website_link"?></td>
                     <td scope="row"><?php echo "$row->facebook"?></td>
                     <td scope="row"><?php echo "$row->ceo_name"?></td>
                     <td scope="row"><?php echo "$row->skype_id"?></td>
                     <td scope="row"><?php echo "$row->email_ceo"?></td>
                     <td scope="row"><?php echo "$row->focal_name"?></td>
                     <td scope="row"><?php echo "$row->ntn_no"?></td>
                     <td scope="row"><?php echo "$row->employee_no"?></td>
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
