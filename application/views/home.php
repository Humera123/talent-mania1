
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
                          <div class="form-group1" >
                              <input type="submit" name="register" value="Continue with Email" class="btn btn-info" />
                          </div>
                      </form>
               </div>
           </div>
         
        </div> 
  </div>
</section>
<section class="homepagehighlight" style="display: block;">
  <section class="center py-xl valueProps"> 
     <div>
       <h2 class="htmwfyou"> How Talent Mania Works for Companies</h2>
        <div class="row mx-0 mt-std mb-sm">

        <div class="col-6 col-lg-3 px-xsm mb-lg mb-lg-0">
          <img src="../images/searchpeople.png">
          <h3>Search Candidates</h3>
        </div> 
         <div class="col-6 col-lg-3 px-xsm mb-lg mb-lg-0">
          <img src="../images/endorse.png">
          <h3>Approach Talent Pool</h3>
        </div> 
        <div class="col-6 col-lg-3 px-xsm mb-lg mb-lg-0">
          <img src="../images/scruitny.png">
          <h3>Scruitnize Candidates</h3>
        </div>
        <div class="col-6 col-lg-3 px-xsm mb-lg mb-lg-0">
          <img src="../images/intelligent.png">
          <h3>Get Endorsed People</h3>
        </div>
        <div class="col-6 col-lg-3 px-xsm mb-lg mb-lg-0">
          <img src="../images/acquire.png">
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
          <img src="../images/profiling.png">
          <h3>Profiling</h3>
        </div> 
         <div class="col-6 col-lg-3 px-xsm mb-lg mb-lg-0">
          <img src="../images/rating.png">
          <h3> Skills Rating</h3>
        </div> 
        <div class="col-6 col-lg-3 px-xsm mb-lg mb-lg-0">
          <img src="../images/hiring.png">
          <h3>Hiring</h3>
        </div>
        <div class="col-6 col-lg-3 px-xsm mb-lg mb-lg-0">
          <img src="../images/training.png">
          <h3>Skills Enhancement</h3>
        </div>
        </div>
    </div>
   </section>
</section>
  <section id="testimonials">
    <div id="testimonials-cover">
      <h3 calss="text-center">What Our Customers Say</h3>
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div id="customers-testimonials" class="text-center owl-carousel owl-theme">
                <div class="testimonials">
                  <img src="../images/avatar-1.jpg" class="img-responsive img-circle alt="">
                  <blockquote class="text-center">
                    <p>
                      Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                      tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                      quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                      consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                      cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                      proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                    </p>
                  </blockquote>
                  <div class="testimonial-author">
                    <p>
                      <strong> Daniel Arthur</strong>
                      <span> CEO & Founder - Digital Concepts</span>
                    </p>
                  </div>
                </div>
                 

                 <div class="testimonials">
                  <img src="../images/avatar-2.jpg" class="img-responsive img-circle alt="">
                  <blockquote class="text-center">
                    <p>
                      Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                      tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                      quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                      consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                      cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                      proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                    </p>
                  </blockquote>
                  <div class="testimonial-author">
                    <p>
                      <strong> Daniel Arthur</strong>
                      <span> CEO & Founder - Digital Concepts</span>
                    </p>
                  </div>
                </div>




                <div class="testimonials">
                  <img src="../images/avatar-3.jpg" class="img-responsive img-circle alt="">
                  <blockquote class="text-center">
                    <p>
                      Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                      tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                      quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                      consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                      cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                      proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                    </p>
                  </blockquote>
                  <div class="testimonial-author">
                    <p>
                      <strong> Daniel Arthur</strong>
                      <span> CEO & Founder - Digital Concepts</span>
                    </p>
                  </div>
                </div>


              </div>
            </div>
          </div>
        </div>

    </div>
  </section>

<script>
  $(function(){
    $("#customers-testimonials").owlCarousel({
      items:1;
      autoplay:true;
      smartSpeed:700;
      look:true;
      autoplayHoverPause:true;
    });
  });
</script>
 

