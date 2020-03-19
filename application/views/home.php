 
<script>
  function statusChangeCallback(response) {  // Called with the results from FB.getLoginStatus().
    console.log('statusChangeCallback');
    console.log(response);                   // The current login status of the person.
    if (response.status === 'connected') {   // Logged into your webpage and Facebook.
      testAPI();  
    } else {                                 // Not logged into your webpage or we are unable to tell.
      document.getElementById('status').innerHTML = 'Please log ' +
        'into this webpage.';
    }
  }

  function checkLoginState() {               // Called when a person is finished with the Login Button.
    FB.getLoginStatus(function(response) {   // See the onlogin handler
      statusChangeCallback(response);
    });
  }
</script>
<div id="fb-root"></div>
  <!--- facebook code --->

  <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v6.0&appId=132652444702292&autoLogAppEvents=1"></script>

  <script>

FB.getLoginStatus(function(response) {   // Called after the JS SDK has been initialized.
      statusChangeCallback(response);        // Returns the login status.
    });
 

  
  (function(d, s, id) {                      // Load the SDK asynchronously
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = "https://connect.facebook.net/en_US/sdk.js";
    fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));

 
  function testAPI() {                      // Testing Graph API after login.  See statusChangeCallback() for when this call is made.
    console.log('Welcome!  Fetching your information.... ');
    FB.api('/me', function(response) {
      console.log(response);
      email  = response.email;
        alert(response.email);                        
      $.ajax({
          url: '<?php echo base_url()?>'  + 'home/fbvalidation',
          type:  "POST",        
          dataType: "json",
          data: { email: email},
          success: function(response){
            
            if(response.message == "success"){
              $("#message").html(response.message);
              location.reload();
            }
            else{
              $("#message").html(response.message);
            } 
          }        });   
    });
  }
</script>
<section class="sectionone">
  <div class="bannerImage">
      <div class="signup   align-items-center justify-content-center">
          <h1 class="tagline"> Find The Job That Fits Your Life</h1>
             <!--  Registration F0orm -->
          <div class="panel">
              <div class="panelbody">
                <p class="legaltext1">
                  By continuing, you agree to our <a href="#" target="_blank" rel=" " class="link">Terms of Use</a> and <a href="#" target="_blank" rel="" class="link">Privacy Policy</a>.</p>
                                  <div>
                                  <!-- <fb:login-button scope="public_profile,email" onlogin="checkLoginState()"></fb:login-button>
                                  <div id="status"></div> -->
                                  <button class="inlinefacebook">
                                    <span class="label">Continue with Facebook</span>
                                 </button>
                                  <button class="inlinegoogle">
                                    <span class="label">Continue with Google</span>
                                  </button>
                                  </div>
                                   <div class="orSeparator d-flex align-items-center ">
                                      <div class="borderTop w-100pct my-std">
                                      </div>
                                      <div class="orText1 px-xsm strong">
                                      or
                                    </div>
                                    <div class="borderTop w-100pct my-std">
                                    </div>
                              </div>

                      <form method="post" action="<?php echo base_url(); ?>home/validation">
                          <div class="form-group" style="height: 48px">
                              <!--<label>Enter Your Valid Email Address</label>-->
                              <div class="input-icons"> 
                              <i class="far fa-envelope icon"></i>      
                                <input type="email"  id="userEmail" name="user_email" class="form-control" placeholder="Create account with Email" value="<?php echo set_value('user_email'); ?>" />
                              <span class="text-danger"><?php echo form_error('user_email'); ?></span>
                              </div> 
                          </div>
                          <div class="form-group" style="height: 48px">
                              <!--<label>Enter Password</label>-->
                              <div class="input-icons"> 
                              <i class="fas fa-lock"></i>
                              <input type="password"  name="user_password" class="form-control" placeholder="Password" value="<?php echo set_value('user_password'); ?>" />
                              <span class="text-danger"><?php echo form_error('user_password'); ?></span>
                              </div> 
                          </div>
                          <div class="form-group">
                              <!--<label>Type</label>-->
                              <select name="user_type" class="form-control" style="height: 48px">
                                  <option value="1">Job Seeker</option>
                                  <option value="2">Company</option>
                                  <option value="3">Panel</option></br></br></br>
                              </select>
                              <span class="text-danger"><?php echo form_error('user_type'); ?></span>
                          </div>
                              <input type="submit" name="register" value="Continue with Email"  class="btn"/>
                          
                      </form>
               </div>
           </div>
         
        </div> 
  </div>
</section>
<section class="jobseekerandcompany" style="display: block;">

<section class="homepagehighlight" style="display: block;">
  <section class="center py-xl valueProps"> 
     <div>
       <h2 class="htmwfyou"> How Talent Mania Works for Companies</h2>
        <div class="row mx-0 mt-std mb-sm">

        <div class="col-6 col-lg-3 px-xsm mb-lg mb-lg-0">
          <img src="<?php echo base_url(); ?>/images/searchpeople.png">
          <h3>Search Candidates</h3>
        </div> 
         <div class="col-6 col-lg-3 px-xsm mb-lg mb-lg-0">
          <img src="<?php echo base_url(); ?>/images/endorse.png">
          <h3>Approach Talent Pool</h3>
        </div> 
        <div class="col-6 col-lg-3 px-xsm mb-lg mb-lg-0">
          <img src="<?php echo base_url(); ?>/images/scruitny.png">
          <h3>Scruitnize Candidates</h3>
        </div>
        <div class="col-6 col-lg-3 px-xsm mb-lg mb-lg-0">
          <img src="<?php echo base_url(); ?>/images/intelligent.png">
          <h3>Get Endorsed People</h3>
        </div>
        <div class="col-6 col-lg-3 px-xsm mb-lg mb-lg-0">
          <img src="<?php echo base_url(); ?>/images/acquire.png">
          <h3>Acquire Candidate</h3>
        </div>
        </div>
     </div>
  </section>
</section>
<section class="jobseekersection" style="display: block;" >
   <section class="center py-xl valueProps">
    <div>
       <h2 class="htmwfjs"> How Talent Mania Works for Job Seekers</h2>
       <div class="row mx-0 mt-std mb-sm">

        <div class="col-6 col-lg-3 px-xsm mb-lg mb-lg-0">
          <img src="<?php echo base_url(); ?>/images/profiling.png">
          <h3>Profiling</h3>
        </div> 
         <div class="col-6 col-lg-3 px-xsm mb-lg mb-lg-0">
          <img src="<?php echo base_url(); ?>/images/rating.png">
          <h3> Skills Rating</h3>
        </div> 
        <div class="col-6 col-lg-3 px-xsm mb-lg mb-lg-0">
          <img src="<?php echo base_url(); ?>/images/hiring.png">
          <h3>Hiring</h3>
        </div>
        <div class="col-6 col-lg-3 px-xsm mb-lg mb-lg-0">
          <img src="<?php echo base_url(); ?>/images/training.png">
          <h3>Skills Enhancement</h3>
        </div>
        </div>
    </div>
   </section>
</section>
</section>
 
<section class="testimonialcarousel">
<div class="container">
  <div class="row">
    <div class="col-md-8 col-center m-auto">
      <h2 class="headingcontent">What Our Clients Say</h2>
      <div id="myCarousel" class="carousel slide" data-ride="carousel">
         <!--Carousel indicators -->
        <ol class="carousel-indicators">
          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
          <li data-target="#myCarousel" data-slide-to="1"></li>
          <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>   
        <!--Wrapper for carousel items -->
        <div class="carousel-inner">
          <div class="item carousel-item active">
            <div class="img-box"><img src="<?php echo base_url(); ?>/images/client1.jpg"></div>
            <p class="testimonial">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam eu sem tempor, varius quam at, luctus dui. Mauris magna metus, dapibus nec turpis vel, semper malesuada ante. Idac bibendum scelerisque non non purus. Suspendisse varius nibh non aliquet.</p>
            <p class="overview"><b>Paula Wilson</b>, Media Analyst</p>
          </div>
          <div class="item carousel-item">
            <div class="img-box"><img src="<?php echo base_url(); ?>/images/client2.jpg"></div>
            <p class="testimonial">Vestibulum quis quam ut magna consequat faucibus. Pellentesque eget nisi a mi suscipit tincidunt. Utmtc tempus dictum risus. Pellentesque viverra sagittis quam at mattis. Suspendisse potenti. Aliquam sit amet gravida nibh, facilisis gravida odio.</p>
            <p class="overview"><b>Antonio Moreno</b>, Web Developer</p>
          </div>
          <div class="item carousel-item">
            <div class="img-box"><img src="<?php echo base_url(); ?>/images/client3.jpg" alt=""></div>
            <p class="testimonial">Phasellus vitae suscipit justo. Mauris pharetra feugiat ante id lacinia. Etiam faucibus mauris id tempor egestas. Duis luctus turpis at accumsan tincidunt. Phasellus risus risus, volutpat vel tellus ac, tincidunt fringilla massa. Etiam hendrerit dolor eget rutrum.</p>
            <p class="overview"><b>Michael Holz</b>, Seo Analyst</p>
          </div>
        </div>
        <!-- Carousel controls -->
        <a class="carousel-control left carousel-control-prev" href="#myCarousel" data-slide="prev">
          <i class="fa fa-angle-left"></i>
        </a>
        <a class="carousel-control right carousel-control-next" href="#myCarousel" data-slide="next">
          <i class="fa fa-angle-right"></i>
        </a>
      </div>
    </div>
  </div>
</div>                                                           
</section>