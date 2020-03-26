      
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

    <link rel="apple-touch-icon" href="<?php echo base_url(); ?>assets/apple-icon.png">
    <link rel="shortcut icon" href="<?php echo base_url(); ?>assets/favicon.ico">

 
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendors/bootstrap/dist/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendors/font-awesome/css/font-awesome.min.css"/>
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendors/themify-icons/css/themify-icons.css"/>
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendors/flag-icon-css/css/flag-icon.min.css"/>
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendors/selectFX/css/cs-skin-elastic.css"/>
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendors/jqvmap/dist/jqvmap.min.css"/>


    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

</head>

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
                        <a href="" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-table"></i>Tables</a>
                        <ul class="sub-menu children dropdown-menu">

                                   <li><i class="fa fa-table"></i>
                               <a href="<?php echo base_url()?>Datatables/company_data">Company Data</a>
                            <li><i class="fa fa-table"></i><a href="<?php echo base_url()?>Paneldatatable/panel_data">Panel Data</a></li>
                             <li><i class="fa fa-table"></i><a href="<?php echo base_url()?>Jobseekerdatatable/jobSeeker_data">Jobseeker Data</a></li>
                              <li><i class="fa fa-table"></i><a href="<?php echo base_url()?>admindashboard/assign">Assign Panelist</a></li>
                              
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

<?php
 defined('BASEPATH') OR exit('No direct script access allowed');?>
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
    </div><!-- /#right-panel -->

    <!-- Right Panel -->
    <script src=  "<?php echo base_url(); ?>assets/vendors/jquery/dist/jquery.min.js"></script>
    <script src=  "<?php echo base_url(); ?>assets/vendors/popper.js/dist/umd/popper.min.js"></script>
    <script src=  "<?php echo base_url(); ?>assets/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src=  "<?php echo base_url(); ?>assets/js/main.js"></script>
    </body>
</html>