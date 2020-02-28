
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
          <img src="../talentmania/images/searchpeople.png">
          <h3>Search Candidates</h3>
        </div> 
         <div class="col-6 col-lg-3 px-xsm mb-lg mb-lg-0">
          <img src="../talentmania/images/endorse.png">
          <h3>Approach Talent Pool</h3>
        </div> 
        <div class="col-6 col-lg-3 px-xsm mb-lg mb-lg-0">
          <img src="../talentmania/images/scruitny.png">
          <h3>Scruitnize Candidates</h3>
        </div>
        <div class="col-6 col-lg-3 px-xsm mb-lg mb-lg-0">
          <img src="../talentmania/images/intelligent.png">
          <h3>Get Endorsed People</h3>
        </div>
        <div class="col-6 col-lg-3 px-xsm mb-lg mb-lg-0">
          <img src="../talentmania/images/acquire.png">
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
          <img src="../talentmania/images/profiling.png">
          <h3>Profiling</h3>
        </div> 
         <div class="col-6 col-lg-3 px-xsm mb-lg mb-lg-0">
          <img src="../talentmania/images/rating.png">
          <h3> Skills Rating</h3>
        </div> 
        <div class="col-6 col-lg-3 px-xsm mb-lg mb-lg-0">
          <img src="../talentmania/images/hiring.png">
          <h3>Hiring</h3>
        </div>
        <div class="col-6 col-lg-3 px-xsm mb-lg mb-lg-0">
          <img src="../talentmania/images/training.png">
          <h3>Skills Enhancement</h3>
        </div>
        </div>
    </div>
   </section>
</section>
</section>


<section class="testimonials py-5 text-white px-1 px-md-5 margin-top-xl">
  <img src="https://raw.githubusercontent.com/solodev/testimonial-slider-fullwidth/master/solodev-logo-stacked.png" class="icon-overlay" />
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <h2 class="pt-2 text-center font-weight-bold">Our Customers Are Seeing Big Results</h2>

        <div class="carousel-controls testimonial-carousel-controls">
          <div class="control d-flex align-items-center justify-content-center prev mt-3"><i class="fa fa-chevron-left"></i></div>
          <div class="control d-flex align-items-center justify-content-center next mt-3"><i class="fa fa-chevron-right"></i></div>

          <div class="testimonial-carousel">
            <div class="h5 font-weight-normal one-slide mx-auto">
              <div class="testimonial w-100 px-3 text-center d-flex flex-direction-column justify-content-center flex-wrap align-items-center">
                <div class="message text-center blockquote w-100">"They’ve been consistent throughout the years and grown together with us. Even as they’ve grown, they haven’t lost sight of what they do. Most of their key resources are still with them, which is also a testament to their organization."</div>
                <div class="blockquote-footer w-100 text-white">Ted, WebCorpCo</div>
              </div>
            </div>
            <div class="h5 font-weight-normal one-slide mx-auto">
              <div class="testimonial w-100 px-3 text-center  d-flex flex-direction-column justify-content-center flex-wrap align-items-center">
                <div class="message text-center blockquote w-100">"Our website uses Solodev to craft a website capable of representing its diverse residents. The website features a newsroom with the latest events, an interactive calendar, and a mobile app that puts the resources at a user’s fingertips."</div>
                <div class="blockquote-footer w-100 text-white">Jim Joe, WebCorpCo</div>
              </div>
            </div>
            <div class="h5 font-weight-normal one-slide mx-auto">
              <div class="testimonial w-100 px-3 text-center  d-flex flex-direction-column justify-content-center flex-wrap align-items-center">
                <div class="message text-center blockquote w-100">Solodev is a great company to partner with! We are extremely happy with the software, service, and support.</div>
                <div class="blockquote-footer w-100 text-white">Jim Joe, WebCorpCo</div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<script >
$(document).ready(function() {
  $(".testimonial-carousel").slick({
    infinite: true,
    slidesToShow: 1,
    slidesToScroll: 1,
    autoplay: false,
    arrows: true,
    prevArrow: $(".testimonial-carousel-controls .prev"),
    nextArrow: $(".testimonial-carousel-controls .next")
  });
});
</script>
  
