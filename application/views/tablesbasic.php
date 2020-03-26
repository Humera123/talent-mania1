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
    <h3 id="mainhead">Company Data</h3><br />  <br/>
              <form class="form-inline" action="<?php echo base_url() . 'Datatables/company_data_filter'; ?>" method="post">
                <div id= "searchfilterandgocontrols">
                <select class="form-control" name="field" id="filtered">
                  <option selected="selected" disabled="disabled"  value="">Filter By</option>
                  <option <?php if (isset($_POST["field"]) && $_POST["field"]=="name_of_organization" && !empty($_POST['search'])) echo "selected"?> value="name_of_organization">Name of Organization</option>
                </select>

                <input class="form-control" type="text" id="search" name="search" value="<?php echo isset($_POST['search']) ? $_POST['search'] : '' ?>" placeholder="Search...">
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
              <table class="table table-hover"  >  
               <thead>
                <tr  >  
                       
                     <th scope="col" >#</th>
                       
                     <th scope="col">Logo</th>  
                     <th scope="col">Organization</th>  
                     <th scope="col">Industry</th> 
                     <th scope="col">Sector</th> 
                     <th scope="col">Address</th>
                     <th scope="col">Phone</th>
                     <th scope="col">Mobile</th>  
                     <th scope="col">Website</th>  
                     <th scope="col">Facebook</th>  
                     <th scope="col">CEO</th>  
                     <th scope="col">skype</th>  
                     <th scope="col">CEO Email</th>  
                     <th scope="col">Focal Name</th>  
                     <th scope="col">NTN</th>  
                     <th scope="col">Employee ID</th>  

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
