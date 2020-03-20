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


 <?php
 defined('BASEPATH') OR exit('No direct script access allowed');?>
  <!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="en">
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Talent MANIA- Dahboard</title>
    <meta name="description" content="Sufee Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="favicon.ico">
 
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendors/bootstrap/dist/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendors/font-awesome/css/font-awesome.min.css"/>
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendors/themify-icons/css/themify-icons.css"/>
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendors/flag-icon-css/css/flag-icon.min.css"/>
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendors/selectFX/css/cs-skin-elastic.css"/>
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendors/jqvmap/dist/jqvmap.min.css"/>


    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

</head>

<body>


    <!-- Left Panel -->

    <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">

            <div class="navbar-header">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand"  href="./"> TALENT MANIA<!--<img src="<?php echo base_url(); ?>assets/images/logo.png" alt="Logo">--></a>
                <a class="navbar-brand hidden" href="./">TM<!--<img src="<?php echo base_url(); ?>assets/images/logo2.png" alt="Logo">--></a>
            </div>

            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="active">
                        <a href="<?php echo base_url(); ?>assets/index.html"> <i class="menu-icon fa fa-dashboard"></i>Dashboard </a>
                    </li>
                    <h3 class="menu-title">UI elements</h3><!-- /.menu-title -->
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-laptop"></i>Components</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="fa fa-puzzle-piece"></i><a href="<?php echo base_url(); ?>assets/ui-buttons.html">Buttons</a></li>

                            <li><i class="fa fa-id-badge"></i><a href="<?php echo base_url(); ?>assets/ui-badges.html">Badges</a></li>

                            <li><i class="fa fa-bars"></i><a href="<?php echo base_url(); ?>assets/ui-tabs.html">Tabs</a></li>

                            <li><i class="fa fa-share-square-o"></i><a href="<?php echo base_url(); ?>assets/ui-social-buttons.html">Social Buttons</a></li>

                            <li><i class="fa fa-id-card-o"></i><a href="<?php echo base_url(); ?>assets/ui-cards.html">Cards</a></li>
                            <li><i class="fa fa-exclamation-triangle"></i><a href="<?php echo base_url(); ?>assets/ui-alerts.html">Alerts</a></li>
                            <li><i class="fa fa-spinner"></i><a href="<?php echo base_url(); ?>assets/ui-progressbar.html">Progress Bars</a></li>
                            <li><i class="fa fa-fire"></i><a href="<?php echo base_url(); ?>assets/ui-modals.html">Modals</a></li>
                            <li><i class="fa fa-book"></i><a href="<?php echo base_url(); ?>assets/ui-switches.html">Switches</a></li>
                            <li><i class="fa fa-th"></i><a href="<?php echo base_url(); ?>assets/ui-grids.html">Grids</a></li>
                            <li><i class="fa fa-file-word-o"></i><a href="<?php echo base_url(); ?>assets/ui-typgraphy.html">Typography</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-table"></i>Tables</a>
                        <ul class="sub-menu children dropdown-menu">
 
                            <li><i class="fa fa-table"></i>
                              <a href="<?php echo base_url("Datatables");?>"> Basic Table</a></li>


                            <li><i class="fa fa-table"></i><a href="<?php echo base_url(); ?>assets/tables-data.html">Data Table</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-th"></i>Forms</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="menu-icon fa fa-th"></i><a href="<?php echo base_url(); ?>assets/forms-basic.html">Basic Form</a></li>
                            <li><i class="menu-icon fa fa-th"></i><a href="<?php echo base_url(); ?>assets/forms-advanced.html">Advanced Form</a></li>
                        </ul>
                    </li>

                    <h3 class="menu-title">Icons</h3><!-- /.menu-title -->

                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-tasks"></i>Icons</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="menu-icon fa fa-fort-awesome"></i><a href="<?php echo base_url(); ?>assets/font-fontawesome.html">Font Awesome</a></li>
                            <li><i class="menu-icon ti-themify-logo"></i><a href="<?php echo base_url(); ?>assets/font-themify.html">Themefy Icons</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="widgets.html"> <i class="menu-icon ti-email"></i>Widgets </a>
                    </li>
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-bar-chart"></i>Charts</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="menu-icon fa fa-line-chart"></i><a href="<?php echo base_url(); ?>assets/charts-chartjs.html">Chart JS</a></li>
                            <li><i class="menu-icon fa fa-area-chart"></i><a href="<?php echo base_url(); ?>assets/charts-flot.html">Flot Chart</a></li>
                            <li><i class="menu-icon fa fa-pie-chart"></i><a href="<?php echo base_url(); ?>assets/charts-peity.html">Peity Chart</a></li>
                        </ul>
                    </li>

                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-area-chart"></i>Maps</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="menu-icon fa fa-map-o"></i><a href="<?php echo base_url(); ?>assets/maps-gmap.html">Google Maps</a></li>
                            <li><i class="menu-icon fa fa-street-view"></i><a href="<?php echo base_url(); ?>assets/maps-vector.html">Vector Maps</a></li>
                        </ul>
                    </li>
                    <h3 class="menu-title">Extras</h3><!-- /.menu-title -->
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-glass"></i>Pages</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="menu-icon fa fa-sign-in"></i><a href="<?php echo base_url(); ?>assets/page-login.html">Login</a></li>
                            <li><i class="menu-icon fa fa-sign-in"></i><a href="<?php echo base_url(); ?>assets/page-register.html">Register</a></li>
                            <li><i class="menu-icon fa fa-paper-plane"></i><a href="<?php echo base_url(); ?>assets/pages-forget.html">Forget Pass</a></li>
                        </ul>
                    </li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    </aside><!-- /#left-panel -->

    <!-- Left Panel -->

    <!-- Right Panel -->

    <div id="right-panel" class="right-panel">

        <!-- Header-->
        <header id="header" class="header">

            <div class="header-menu">

                <div class="col-sm-7">
                    <a id="menuToggle" class="menutoggle pull-left"><i class="fa fa fa-tasks"></i></a>
                    <div class="header-left">
                        <button class="search-trigger"><i class="fa fa-search"></i></button>
                        <div class="form-inline">
                            <form class="search-form">
                                <input class="form-control mr-sm-2" type="text" placeholder="Search ..." aria-label="Search">
                                <button class="search-close" type="submit"><i class="fa fa-close"></i></button>
                            </form>
                        </div>

                        <div class="dropdown for-notification">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="notification" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fa fa-bell"></i>
                                <span class="count bg-danger">5</span>
                            </button>
                            <div class="dropdown-menu" aria-labelledby="notification">
                                <p class="red">You have 3 Notification</p>
                                <a class="dropdown-item media bg-flat-color-1" href="#">
                                <i class="fa fa-check"></i>
                                <p>Server #1 overloaded.</p>
                            </a>
                                <a class="dropdown-item media bg-flat-color-4" href="#">
                                <i class="fa fa-info"></i>
                                <p>Server #2 overloaded.</p>
                            </a>
                                <a class="dropdown-item media bg-flat-color-5" href="#">
                                <i class="fa fa-warning"></i>
                                <p>Server #3 overloaded.</p>
                            </a>
                            </div>
                        </div>

                        <div class="dropdown for-message">
                            <button class="btn btn-secondary dropdown-toggle" type="button"
                                id="message"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="ti-email"></i>
                                <span class="count bg-primary">9</span>
                            </button>
                            <div class="dropdown-menu" aria-labelledby="message">
                                <p class="red">You have 4 Mails</p>
                                <a class="dropdown-item media bg-flat-color-1" href="#">
                                <span class="photo media-left"><img alt="avatar" src="<?php echo base_url(); ?>assets/images/avatar/1.jpg"></span>
                                <span class="message media-body">
                                    <span class="name float-left">Jonathan Smith</span>
                                    <span class="time float-right">Just now</span>
                                        <p>Hello, this is an example msg</p>
                                </span>
                            </a>
                                <a class="dropdown-item media bg-flat-color-4" href="#">
                                <span class="photo media-left"><img alt="avatar" src="<?php echo base_url(); ?>assets/images/avatar/2.jpg"></span>
                                <span class="message media-body">
                                    <span class="name float-left">Jack Sanders</span>
                                    <span class="time float-right">5 minutes ago</span>
                                        <p>Lorem ipsum dolor sit amet, consectetur</p>
                                </span>
                            </a>
                                <a class="dropdown-item media bg-flat-color-5" href="#">
                                <span class="photo media-left"><img alt="avatar"   src="<?php echo base_url(); ?>assets/images/avatar/3.jpg"></span>
                                <span class="message media-body">
                                    <span class="name float-left">Cheryl Wheeler</span>
                                    <span class="time float-right">10 minutes ago</span>
                                        <p>Hello, this is an example msg</p>
                                </span>
                            </a>
                                <a class="dropdown-item media bg-flat-color-3" href="#">
                                <span class="photo media-left"><img alt="avatar"  src="<?php echo base_url(); ?>assets/images/avatar/4.jpg"></span>
                                <span class="message media-body">
                                    <span class="name float-left">Rachel Santos</span>
                                    <span class="time float-right">15 minutes ago</span>
                                        <p>Lorem ipsum dolor sit amet, consectetur</p>
                                </span>
                            </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-5">
                    <div class="user-area dropdown float-right">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img class="user-avatar rounded-circle" src="<?php echo base_url(); ?>assets/images/admin.jpg" alt="User Avatar">
                        </a>

                        <div class="user-menu dropdown-menu">
                            <a class="nav-link" href="#"><i class="fa fa-user"></i> My Profile</a>

                            <a class="nav-link" href="#"><i class="fa fa-user"></i> Notifications <span class="count">13</span></a>

                            <a class="nav-link" href="#"><i class="fa fa-cog"></i> Settings</a>

                            <a class="nav-link" href="#"><i class="fa fa-power-off"></i> Logout</a>
                        </div>
                    </div>

                    <div class="language-select dropdown" id="language-select">
                        <a class="dropdown-toggle" href="#" data-toggle="dropdown"  id="language" aria-haspopup="true" aria-expanded="true">
                            <i class="flag-icon flag-icon-us"></i>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="language">
                            <div class="dropdown-item">
                                <span class="flag-icon flag-icon-fr"></span>
                            </div>
                            <div class="dropdown-item">
                                <i class="flag-icon flag-icon-es"></i>
                            </div>
                            <div class="dropdown-item">
                                <i class="flag-icon flag-icon-us"></i>
                            </div>
                            <div class="dropdown-item">
                                <i class="flag-icon flag-icon-it"></i>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </header><!-- /header -->
        <!-- Header-->

        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Dashboard</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li class="active">Dashboard</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <div class="content mt-3">

            <div class="col-sm-12">
                <div class="alert  alert-success alert-dismissible fade show" role="alert">
                    <span class="badge badge-pill badge-success">Success</span> You successfully read this important alert message.
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            </div>


            <div class="col-sm-6 col-lg-3">
                <div class="card text-white bg-flat-color-1">
                    <div class="card-body pb-0">
                        <div class="dropdown float-right">
                            <button class="btn bg-transparent dropdown-toggle theme-toggle text-light" type="button" id="dropdownMenuButton1" data-toggle="dropdown">
                                <i class="fa fa-cog"></i>
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                <div class="dropdown-menu-content">
                                    <a class="dropdown-item" href="#">Action</a>
                                    <a class="dropdown-item" href="#">Another action</a>
                                    <a class="dropdown-item" href="#">Something else here</a>
                                </div>
                            </div>
                        </div>
                        <h4 class="mb-0">
                            <span class="count">10468</span>
                        </h4>
                        <p class="text-light">Members online</p>

                        <div class="chart-wrapper px-0" style="height:70px;" height="70">
                            <canvas id="widgetChart1"></canvas>
                        </div>

                    </div>

                </div>
            </div>
            <!--/.col-->

            <div class="col-sm-6 col-lg-3">
                <div class="card text-white bg-flat-color-2">
                    <div class="card-body pb-0">
                        <div class="dropdown float-right">
                            <button class="btn bg-transparent dropdown-toggle theme-toggle text-light" type="button" id="dropdownMenuButton2" data-toggle="dropdown">
                                <i class="fa fa-cog"></i>
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton2">
                                <div class="dropdown-menu-content">
                                    <a class="dropdown-item" href="#">Action</a>
                                    <a class="dropdown-item" href="#">Another action</a>
                                    <a class="dropdown-item" href="#">Something else here</a>
                                </div>
                            </div>
                        </div>
                        <h4 class="mb-0">
                            <span class="count">10468</span>
                        </h4>
                        <p class="text-light">Members online</p>

                        <div class="chart-wrapper px-0" style="height:70px;" height="70">
                            <canvas id="widgetChart2"></canvas>
                        </div>

                    </div>
                </div>
            </div>
            <!--/.col-->

            <div class="col-sm-6 col-lg-3">
                <div class="card text-white bg-flat-color-3">
                    <div class="card-body pb-0">
                        <div class="dropdown float-right">
                            <button class="btn bg-transparent dropdown-toggle theme-toggle text-light" type="button" id="dropdownMenuButton3" data-toggle="dropdown">
                                <i class="fa fa-cog"></i>
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton3">
                                <div class="dropdown-menu-content">
                                    <a class="dropdown-item" href="#">Action</a>
                                    <a class="dropdown-item" href="#">Another action</a>
                                    <a class="dropdown-item" href="#">Something else here</a>
                                </div>
                            </div>
                        </div>
                        <h4 class="mb-0">
                            <span class="count">10468</span>
                        </h4>
                        <p class="text-light">Members online</p>

                    </div>

                    <div class="chart-wrapper px-0" style="height:70px;" height="70">
                        <canvas id="widgetChart3"></canvas>
                    </div>
                </div>
            </div>
            <!--/.col-->

            <div class="col-sm-6 col-lg-3">
                <div class="card text-white bg-flat-color-4">
                    <div class="card-body pb-0">
                        <div class="dropdown float-right">
                            <button class="btn bg-transparent dropdown-toggle theme-toggle text-light" type="button" id="dropdownMenuButton4" data-toggle="dropdown">
                                <i class="fa fa-cog"></i>
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton4">
                                <div class="dropdown-menu-content">
                                    <a class="dropdown-item" href="#">Action</a>
                                    <a class="dropdown-item" href="#">Another action</a>
                                    <a class="dropdown-item" href="#">Something else here</a>
                                </div>
                            </div>
                        </div>
                        <h4 class="mb-0">
                            <span class="count">10468</span>
                        </h4>
                        <p class="text-light">Members online</p>

                        <div class="chart-wrapper px-3" style="height:70px;" height="70">
                            <canvas id="widgetChart4"></canvas>
                        </div>

                    </div>
                </div>
            </div>
            <!--/.col-->

            <div class="col-lg-3 col-md-6">
                <div class="social-box facebook">
                    <i class="fa fa-facebook"></i>
                    <ul>
                        <li>
                            <span class="count">40</span> k
                            <span>friends</span>
                        </li>
                        <li>
                            <span class="count">450</span>
                            <span>feeds</span>
                        </li>
                    </ul>
                </div>
                <!--/social-box-->
            </div>
            <!--/.col-->


            <div class="col-lg-3 col-md-6">
                <div class="social-box twitter">
                    <i class="fa fa-twitter"></i>
                    <ul>
                        <li>
                            <span class="count">30</span> k
                            <span>friends</span>
                        </li>
                        <li>
                            <span class="count">450</span>
                            <span>tweets</span>
                        </li>
                    </ul>
                </div>
                <!--/social-box-->
            </div>
            <!--/.col-->


            <div class="col-lg-3 col-md-6">
                <div class="social-box linkedin">
                    <i class="fa fa-linkedin"></i>
                    <ul>
                        <li>
                            <span class="count">40</span> +
                            <span>contacts</span>
                        </li>
                        <li>
                            <span class="count">250</span>
                            <span>feeds</span>
                        </li>
                    </ul>
                </div>
                <!--/social-box-->
            </div>
            <!--/.col-->


            <div class="col-lg-3 col-md-6">
                <div class="social-box google-plus">
                    <i class="fa fa-google-plus"></i>
                    <ul>
                        <li>
                            <span class="count">94</span> k
                            <span>followers</span>
                        </li>
                        <li>
                            <span class="count">92</span>
                            <span>circles</span>
                        </li>
                    </ul>
                </div>
                <!--/social-box-->
            </div>
            <!--/.col-->

            <div class="col-xl-6">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-4">
                                <h4 class="card-title mb-0">Traffic</h4>
                                <div class="small text-muted">October 2017</div>
                            </div>
                            <!--/.col-->
                            <div class="col-sm-8 hidden-sm-down">
                                <button type="button" class="btn btn-primary float-right bg-flat-color-1"><i class="fa fa-cloud-download"></i></button>
                                <div class="btn-toolbar float-right" role="toolbar" aria-label="Toolbar with button groups">
                                    <div class="btn-group mr-3" data-toggle="buttons" aria-label="First group">
                                        <label class="btn btn-outline-secondary">
                                            <input type="radio" name="options" id="option1"> Day
                                        </label>
                                        <label class="btn btn-outline-secondary active">
                                            <input type="radio" name="options" id="option2" checked=""> Month
                                        </label>
                                        <label class="btn btn-outline-secondary">
                                            <input type="radio" name="options" id="option3"> Year
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <!--/.col-->


                        </div>
                        <!--/.row-->
                        <div class="chart-wrapper mt-4">
                            <canvas id="trafficChart" style="height:200px;" height="200"></canvas>
                        </div>

                    </div>
                    <div class="card-footer">
                        <ul>
                            <li>
                                <div class="text-muted">Visits</div>
                                <strong>29.703 Users (40%)</strong>
                                <div class="progress progress-xs mt-2" style="height: 5px;">
                                    <div class="progress-bar bg-success" role="progressbar" style="width: 40%;" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </li>
                            <li class="hidden-sm-down">
                                <div class="text-muted">Unique</div>
                                <strong>24.093 Users (20%)</strong>
                                <div class="progress progress-xs mt-2" style="height: 5px;">
                                    <div class="progress-bar bg-info" role="progressbar" style="width: 20%;" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </li>
                            <li>
                                <div class="text-muted">Pageviews</div>
                                <strong>78.706 Views (60%)</strong>
                                <div class="progress progress-xs mt-2" style="height: 5px;">
                                    <div class="progress-bar bg-warning" role="progressbar" style="width: 60%;" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </li>
                            <li class="hidden-sm-down">
                                <div class="text-muted">New Users</div>
                                <strong>22.123 Users (80%)</strong>
                                <div class="progress progress-xs mt-2" style="height: 5px;">
                                    <div class="progress-bar bg-danger" role="progressbar" style="width: 80%;" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </li>
                            <li class="hidden-sm-down">
                                <div class="text-muted">Bounce Rate</div>
                                <strong>40.15%</strong>
                                <div class="progress progress-xs mt-2" style="height: 5px;">
                                    <div class="progress-bar" role="progressbar" style="width: 40%;" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-lg-6">
                <section class="card">
                    <!--<div class="twt-feed blue-bg">
                        <div class="corner-ribon black-ribon">
                            <i class="fa fa-twitter"></i>
                        </div>
                        <div class="fa fa-twitter wtt-mark"></div>

                        <div class="media">
                            <a href="#">
                                <img class="align-self-center rounded-circle mr-3" style="width:85px; height:85px;" alt="" src="<?php echo base_url(); ?>assets/images/admin.jpg">
                            </a>
                            <div class="media-body">
                                <h2 class="text-white display-6">Jim Doe</h2>
                                <p class="text-light">Project Manager</p>
                            </div>
                        </div>
                    </div>
                    <div class="weather-category twt-category">
                        <ul>
                            <li class="active">
                                <h5>750</h5>
                                Tweets
                            </li>
                            <li>
                                <h5>865</h5>
                                Following
                            </li>
                            <li>
                                <h5>3645</h5>
                                Followers
                            </li>
                        </ul>
                    </div>
                    <div class="twt-write col-sm-12">
                        <textarea placeholder="Write your Tweet and Enter" rows="1" class="form-control t-text-area"></textarea>
                    </div>
                    <footer class="twt-footer">
                        <a href="#"><i class="fa fa-camera"></i></a>
                        <a href="#"><i class="fa fa-map-marker"></i></a>
                        New Castle, UK
                        <span class="pull-right">
                            32
                        </span>
                    </footer>-->
                    <a class="twitter-timeline" data-height="350" data-theme="light" href="https://twitter.com/womentechouse?ref_src=twsrc%5Etfw">Tweets by womentechouse</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
                </section>
            </div>


            <div class="col-xl-3 col-lg-6">
                <div class="card">
                    <div class="card-body">
                        <div class="stat-widget-one">
                            <div class="stat-icon dib"><i class="ti-money text-success border-success"></i></div>
                            <div class="stat-content dib">
                                <div class="stat-text">Total Profit</div>
                                <div class="stat-digit">1,012</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-xl-3 col-lg-6">
                <div class="card">
                    <div class="card-body">
                        <div class="stat-widget-one">
                            <div class="stat-icon dib"><i class="ti-user text-primary border-primary"></i></div>
                            <div class="stat-content dib">
                                <div class="stat-text">New Customer</div>
                                <div class="stat-digit">961</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-lg-6">
                <div class="card">
                    <div class="card-body">
                        <div class="stat-widget-one">
                            <div class="stat-icon dib"><i class="ti-layout-grid2 text-warning border-warning"></i></div>
                            <div class="stat-content dib">
                                <div class="stat-text">Active Projects</div>
                                <div class="stat-digit">770</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-6">
                <div class="card">
                    <div class="card-header">
                        <h4>World</h4>
                    </div>
                    <div class="Vector-map-js">
                        <div id="vmap" class="vmap" style="height: 265px;"></div>
                    </div>
                </div>
                <!-- /# card -->
            </div>


        </div> <!-- .content -->
    </div><!-- /#right-panel -->

    <!-- Right Panel -->
    <script src="<?php echo base_url(); ?>assets/vendors/jquery/dist/jquery.min.js"> </script>
    <script src="<?php echo base_url(); ?>assets/vendors/popper.js/dist/umd/popper.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/main.js"></script>


    <script src="<?php echo base_url(); ?>assets/vendors/chart.js/dist/Chart.bundle.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/dashboard.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/widgets.js"></script>
    <script src="<?php echo base_url(); ?>assets/vendors/jqvmap/dist/jquery.vmap.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"></script>
    <script src="<?php echo base_url(); ?>assets/vendors/jqvmap/dist/maps/jquery.vmap.world.js"></script>
    <script>
        (function($) {
            "use strict";

            jQuery('#vmap').vectorMap({
                map: 'world_en',
                backgroundColor: null,
                color: '#ffffff',
                hoverOpacity: 0.7,
                selectedColor: '#1de9b6',
                enableZoom: true,
                showTooltip: true,
                values: sample_data,
                scaleColors: ['#1de9b6', '#03a9f5'],
                normalizeFunction: 'polynomial'
            });
        })(jQuery);
    </script>

</body>

</html>
