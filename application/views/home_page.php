<!-- Header -->
<?php $this->load->view('template/header.php'); ?>
<!-- End Header -->

<!-- Nav -->
<?php  $this->load->view('template/nav.php') ?>
<!-- End Nav -->

<!-- Body -->
<header id="first">
    <div class="header-content">
      <img id="profile-pic" class="img-responsive center-block img-circle" src="<?php echo base_url('assets/img/profile.jpg'); ?>" alt="">
        <div class="inner wow bounceInDown">
            <h1>Hello, I'm Troy Nguyen</h1>
            <hr>
            <h3>
              <span>Software Engineer | Full Stack Developer | San Jose State Graduating Senior</span>
            </h3>
        </div>
    </div>
</header>
<section id="summary">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-lg-offset-3 col-md-8 col-md-offset-2 text-center">
                <h2>Summary</h2>
                <br>
                <p>
                    BLorem ipsum dolor sit amet, consectetur adipiscing elit. Sed dapibus odio augue, vel placerat sem tempus quis.
                    Aliquam erat volutpat. Curabitur commodo, risus sed dictum viverra, enim tortor blandit sem, vel lacinia urna nulla vitae eros.
                     Mauris auctor, risus non pulvinar aliquet, urna ante venenatis nibh, vel vestibulum leo nibh et lectus. Sed ornare tincidunt erat, finibus mollis arcu tempor et.
                     Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Ut volutpat felis sit amet porttitor euismod.
                </p>
                <a href="#resume" class="btn btn-default btn-xl page-scroll">Learn More</a>
            </div>
        </div>
    </div>
</section>
<section class="container-fluid" id="resume">
    <div class="row">
        <div class="col-xs-10 col-xs-offset-1 col-sm-6 col-sm-offset-3 col-md-4 col-md-offset-4">
            <center><h2>Features</h2></center>
            <hr>
            <div class="media wow fadeInRight">
                <h3>Simple</h3>
                <div class="media-body media-middle">
                    <p>What could be easier? Get started fast with this landing page starter theme.</p>
                </div>
                <div class="media-right">
                    <i class="icon-lg ion-ios-bolt-outline"></i>
                </div>
            </div>
            <hr>
            <div class="media wow fadeIn">
                <h3>Free</h3>
                <div class="media-left">
                    <a href="#alertModal" data-toggle="modal" data-target="#alertModal"><i class="icon-lg ion-ios-cloud-download-outline"></i></a>
                </div>
                <div class="media-body media-middle">
                    <p>Yes, please. Grab it for yourself, and make something awesome with this.</p>
                </div>
            </div>
            <hr>
            <div class="media wow fadeInRight">
                <h3>Unique</h3>
                <div class="media-body media-middle">
                    <p>Because you don't want your Bootstrap site, to look like a Bootstrap site.</p>
                </div>
                <div class="media-right">
                    <i class="icon-lg ion-ios-snowy"></i>
                </div>
            </div>
            <hr>
            <div class="media wow fadeIn">
                <h3>Popular</h3>
                <div class="media-left">
                    <i class="icon-lg ion-ios-heart-outline"></i>
                </div>
                <div class="media-body media-middle">
                    <p>There's good reason why Bootstrap is the most used frontend framework in the world.</p>
                </div>
            </div>
            <hr>
            <div class="media wow fadeInRight">
                <h3>Tested</h3>
                <div class="media-body media-middle">
                    <p>Bootstrap is matured and well-tested. It's a stable codebase that provides consistency.</p>
                </div>
                <div class="media-right">
                    <i class="icon-lg ion-ios-flask-outline"></i>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="skills">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2>Flexible Layouts</h2>
                <hr class="primary">
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-4 text-center">
                <div class="feature">
                    <i class="icon-lg ion-android-laptop wow fadeIn" data-wow-delay=".3s"></i>
                    <h3>Responsive</h3>
                    <p class="text-muted">Your site looks good everywhere</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 text-center">
                <div class="feature">
                    <i class="icon-lg ion-social-sass wow fadeInUp" data-wow-delay=".2s"></i>
                    <h3>Customizable</h3>
                    <p class="text-muted">Easy to theme and customize with SASS</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 text-center">
                <div class="feature">
                    <i class="icon-lg ion-ios-star-outline wow fadeIn" data-wow-delay=".3s"></i>
                    <h3>Consistent</h3>
                    <p class="text-muted">A mature, well-tested, stable codebase</p>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="portfolio" class="no-padding">
    <div class="container-fluid">
        <div class="row no-gutter">
            <div class="col-lg-3 col-sm-6">
              <div class="hovereffect">
                   <img class="img-responsive" src="http://dreamworksol.com/images/html5_css3_javascript.jpg" alt="">
                   <div class="overlay">
                      <h2>Sample Project</h2>
                      <a class="info" href="#">View Code</a>
                   </div>
               </div>
            </div>

            <div class="col-lg-3 col-sm-6">
              <div class="hovereffect">
                   <img class="img-responsive" src="https://eladnava.com/content/images/2016/07/aws.jpg" alt="">
                   <div class="overlay">
                      <h2>Sample Project</h2>
                      <a class="info" href="#">View Code</a>
                   </div>
               </div>
            </div>

            <div class="col-lg-3 col-sm-6">
              <div class="hovereffect">
                   <img class="img-responsive" src="http://historicflight.co.za/wp-content/uploads/2015/04/bootstrap-4.jpg" alt="">
                   <div class="overlay">
                      <h2>Sample Project</h2>
                      <a class="info" href="#">View Code</a>
                   </div>
               </div>
            </div>

            <div class="col-lg-3 col-sm-6">
              <div class="hovereffect">
                   <img class="img-responsive" src="http://www.inspiringwallpapers.net/content/uploads/download-1920x1080/java-logo-orange.png" alt="">
                   <div class="overlay">
                      <h2>Sample Project</h2>
                      <a class="info" href="#">View Code</a>
                   </div>
               </div>
            </div>


            <div class="col-lg-3 col-sm-6">
              <div class="hovereffect">
                   <img class="img-responsive" src="https://wallpaperscraft.com/image/ios_siri_icon_psd_103030_1920x1080.jpg" alt="">
                   <div class="overlay">
                      <h2>Sample Project</h2>
                      <a class="info" href="#">View Code</a>
                   </div>
               </div>
            </div>
            <div class="col-lg-3 col-sm-6">
              <div class="hovereffect">
                   <img class="img-responsive" src="http://codehints.in/wp-content/uploads/2016/05/jQuery-debouncing-events.jpg" alt="">
                   <div class="overlay">
                      <h2>Sample Project</h2>
                      <a class="info" href="#">View Code</a>
                   </div>
               </div>
            </div>
            <div class="col-lg-3 col-sm-6">
              <div class="hovereffect">
                   <img class="img-responsive" src="https://blog.myriadtruths.com/content/images/2016/01/maxresdefault-1--2.jpg" alt="">
                   <div class="overlay">
                      <h2>Sample Project</h2>
                      <a class="info" href="#">View Code</a>
                   </div>
               </div>
            </div>
            <div class="col-lg-3 col-sm-6">
              <div class="hovereffect">
                   <img class="img-responsive" src="http://i.imgur.com/k4XqFTv.png" alt="">
                   <div class="overlay">
                      <h2>Sample Project</h2>
                      <a class="info" href="#">View Code</a>
                   </div>
               </div>
            </div>

        </div>
    </div>
</section>
<aside>
    <div class="container text-center">
        <div class="call-to-action">
            <h2>Get Started</h2>
            <a href="http://www.bootstrapzero.com/bootstrap-template/landing-zero" target="ext" class="btn btn-default btn-lg wow flipInX">Free Download</a>
        </div>
        <br>
        <hr/>
        <br>
        <div class="row">
            <div class="col-lg-10 col-lg-offset-1">
                <div class="row">
                    <h6 class="wide-space text-center">BOOTSTRAP IS BASED ON THESE STANDARDS</h6>
                    <div class="col-sm-3 col-xs-6 text-center">
                        <i class="icon-lg ion-social-html5-outline" title="html 5"></i>
                    </div>
                    <div class="col-sm-3 col-xs-6 text-center">
                        <i class="icon-lg ion-social-sass" title="sass"></i>
                    </div>
                    <div class="col-sm-3 col-xs-6 text-center">
                        <i class="icon-lg ion-social-javascript-outline" title="javascript"></i>
                    </div>
                    <div class="col-sm-3 col-xs-6 text-center">
                        <i class="icon-lg ion-social-css3-outline" title="css 3"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</aside>

<section id="contact">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 text-center">
                <h2 class="margin-top-0 wow fadeIn themed1">Contact</h2>
                <hr class="primary">
                <p>Opportunity Available? Email Me.</p>
            </div>
            <div class="col-lg-10 col-lg-offset-1 text-center">
                <form class="contact-form row">
                    <div class="col-md-6">
                        <label></label>
                        <input type="text" class="form-control" placeholder="Name">
                    </div>
                    <div class="col-md-6">
                        <label></label>
                        <input type="text" class="form-control" placeholder="Email">
                    </div>
                    <div class="col-md-12">
                        <label></label>
                        <textarea class="form-control" rows="9" placeholder="Your message here.."></textarea>
                    </div>
                    <div class="col-md-4 col-md-offset-4">
                        <label></label>
                        <button type="button" class="btn btn-default btn-block btn-lg wow flipInX">Send <i class="ion-android-arrow-forward"></i></button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<!-- End Body -->
<script>
$(".page-scroll").on("click", function(event) {
      var $ele = $(this);
      $('html, body').stop().animate({
          scrollTop: ($($ele.attr('href')).offset().top - 60)
      }, 1450, 'easeInOutExpo');
      event.preventDefault();
});
$('#topNav').affix({
    offset: {
        top: 200
    }
});
new WOW().init();
$('.navbar-collapse ul li a').click(function() {
    /* always close responsive nav after click */
    $('.navbar-toggle:visible').click();
});

</script>

<!-- Footer -->
<?php $this->load->view('template/footer.php'); ?>
<!-- End Footer -->
