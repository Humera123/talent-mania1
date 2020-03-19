<html>
    <head>
        <title>Talent Mania</title>
         <meta charset="utf-8">
   
       
      
        <link rel = "stylesheet" type = "text/css" href = "<?php echo base_url(); ?>css/bootstrap.min.css">        

        <link rel = "stylesheet" type = "text/css" href = "<?php echo base_url(); ?>css/custom_style.css">
        <link rel = "stylesheet" type = "text/css" href = "<?php echo base_url(); ?>js/autocomplete/easy-autocomplete.min.css">
        <!-- Latest compiled and minified CSS -->
  
       <!-- Optional theme -->
       <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384- 
       rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous"> 
        
        <!-- Latest compiled and minified JavaScript -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <script src="https://kit.fontawesome.com/1c7cfa9683.js" crossorigin="anonymous"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
         <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
           <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
          <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js">
          </script>        
        <script type = 'text/javascript' src = "<?php echo base_url(); ?>js/autocomplete/jquery.easy-autocomplete.min.js"></script>
        <script type = 'text/javascript' src = "<?php echo base_url(); ?>js/system.js"></script>
           <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="keywords" content="footer, address, phone, icons" />

  <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-160652991-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-160652991-1');
</script>

          </head>

  <body>
    <header>
      
      <div class="container">
          <nav class="navbar navbar-expand-sm navbar-transparent">
            <a class="navbar-brand" href="#">TALENT MANIA</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class="navbar-nav ml-auto">
                      <li class="nav-item active">
                        <a class="nav-link" href="#"> <i class="fas fa-home"></i> </a> <span class="sr-only">(current)</span></a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#"><i class="fas fa-user"></i></a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#"> <i class="fas fa-envelope"></i></a>
                      </li>
                  </ul>
                  <form class="form-inline my-2 my-lg-0">
                    <button   type="button" id="myBtn"  data-toggle="modal" data-target="#myModal" class="btn  my-2 my-sm-0">Sign In</button>
                  </form>    
            <div  class="modal" id="myModal">
                           <!--Login Form -->
            <div class="modal-dialog" >
                     
              <div class="modal-content">
                  <div class="modal-title"> 
                    <button type="button"  id="dismissbutton" class="close" data-dismiss="modal">&times;</button>
                    Log In to get instant access to millions of jobs
                  </div>
                   <p class="mt-xsm mb-0 legalText">By continuing, you agree to our <a href="#" target="_blank" rel=" " class="link">Terms of Use</a> and <a href="#" target="_blank" rel="" class="link">Privacy Policy</a>.</p>

                    <div class="modal-body" id="loginFormdiv">
                         <div>
                            <div class="mt-xsm social">
                              <div class="center">
                                <div>
                                   <button class="defaultButton facebook gd-btn center">
                                    <span class="label">Continue with Facebook</span>
                                 </button> 
                                </div>
                                <div>
                                  <button class="google gd-btn">
                                    <span class="label">Continue with Google</span>
                                </div>
                                <div class="orSeparator d-flex align-items-center ">
                                      <div class="borderTop w-100pct my-std">
                                      </div>
                                      <div class="orText px-xsm strong">
                                      or
                                    </div>
                                    <div class="borderTop w-100pct my-std">
                                    </div>
                              </div>
                              </div>
                            </div>
                         </div>
                      <div id="message"></div>
                      <div class="signinform">

                      <?php echo form_open('login/validation', array('id' => 'loginForm')) ?>

                                <div class="form-group">     
                                   <input type="text" id="user_email" placeholder="Email Address" name="user_email" class="form-control" value="<?php echo set_value('user_email'); ?>" />
                                   <span class="text-danger"><?php echo form_error('user_email'); ?></span> 
                                </div>
                                          
                                <div class="form-group">
                                  <input type="password" id="user_password"
                                   placeholder="Password" name="user_password" class="form-control" value="<?php echo set_value('user_password'); ?>" />
                                  <span class="text-danger"><?php echo form_error('user_password'); ?>
                                  </span>
                                </div>
                              <input  type="submit" id="Loginsubmit" name="login" value="Sign In"/>
                              <div class="mt-xsm">
                                <span class="link">Forgot Password</span>
                              </div>
                            </div>
                       </div>
                    
                            <div class="modal-footer">
                                  <!--<a type="submit" class="btn btn-primary" data-toggle="modal" href="#myModal">Submit</a>-->
                                  <div class="signuplink">
                                   Dont have an account?<a href="<?php echo base_url(); ?>home">Sign Up</a>
                                  </div>
                            </div>

             <?php echo form_close() ?>

                    </div>
            </div>
        </div>
                     
                        <script>
                        var modal = document.getElementById("myModal");

                        // Get the button that opens the modal
                        var btn = document.getElementById("myBtn");

                        // Get the <span> element that closes the modal

                        // When the user clicks on the button, open the modal 
                        btn.onclick = function() {
                        modal.style.display = "block";}

                        </script>
            </div> 
          </nav>
     </div>
     
     <!--<script src ='<?php base_url();?> http://localhost/talentmania.com/welcome.php'>
      document.getElementById('navbarSupportedContent').style.display = 'none';-->
  
 

    </header>

        