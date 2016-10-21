<!-- Header -->
<?php $this->load->view('template/header.php'); ?>
<!-- End Header -->


<!-- Body -->
<header id="first">
    <div class="header-content">
        <div class="inner">
            <h1 class="cursive">Welcome to Campfire <img id="transparentLogo" src="<?php echo base_url("assets/img/ionicons_bonfire.png");?>"></h1>
            <h4>Connect with others by simply searching for events or groups</h4>
            <hr>
            <a id = 'search_events' href="<?php echo base_url(); ?>index.php/event/search" class="btn btn-primary btn-xl">Search Events</a> &nbsp;
            <a id = 'search_groups' href="<?php echo base_url(); ?>index.php/group/search" class="btn btn-primary btn-xl page-scroll">Search Groups</a>
        </div>
    </div>
    <video autoplay="" loop="" class="fillWidth fadeIn wow collapse in" data-wow-delay="0.5s" poster="<?php echo base_url("assets/img/Campfire.png"); ?>" id="video-background">
        <source src="<?php echo base_url("assets/video/Campfire.mp4"); ?>" type="video/mp4">Your browser does not support the video tag. I suggest you upgrade your browser.
    </video>
</header>
<section class="bg-primary" id="intro">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-lg-offset-3 col-md-8 col-md-offset-2 text-center">
                <h2 class="margin-top-0 text-primary">Built On The Bootstrap Grid</h2>
                <br>
                <p class="text-faded">
                    Bootstrap's responsive grid comes in 4 sizes or "breakpoints": tiny (xs), small(sm), medium(md) and large(lg). These 4 grid sizes enable you create responsive layouts that behave accordingly on different devices.
                </p>
                <a href="#three" class="btn btn-default btn-xl page-scroll">Learn More</a>
            </div>
        </div>
    </div>
</section>
<section id="highlights">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="margin-top-0 text-primary">Flexible Layouts</h2>
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
<section id="gallery" class="no-padding">
    <div class="container-fluid">
        <div class="row no-gutter">
            <div class="col-lg-4 col-sm-6">
                <a href="#galleryModal" class="gallery-box" data-toggle="modal" data-src="http://splashbase.s3.amazonaws.com/unsplash/regular/photo-1430916273432-273c2db881a0%3Fq%3D75%26fm%3Djpg%26w%3D1080%26fit%3Dmax%26s%3Df047e8284d2fdc1df0fd57a5d294614d">
                    <img src="http://splashbase.s3.amazonaws.com/unsplash/regular/photo-1430916273432-273c2db881a0%3Fq%3D75%26fm%3Djpg%26w%3D1080%26fit%3Dmax%26s%3Df047e8284d2fdc1df0fd57a5d294614d" class="img-responsive" alt="Image 1">
                    <div class="gallery-box-caption">
                        <div class="gallery-box-content">
                            <div>
                                <i class="icon-lg ion-ios-search"></i>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-4 col-sm-6">
                <a href="#galleryModal" class="gallery-box" data-toggle="modal" data-src="http://splashbase.s3.amazonaws.com/getrefe/regular/tumblr_nqune4OGHl1slhhf0o1_1280.jpg">
                    <img src="http://splashbase.s3.amazonaws.com/getrefe/regular/tumblr_nqune4OGHl1slhhf0o1_1280.jpg" class="img-responsive" alt="Image 2">
                    <div class="gallery-box-caption">
                        <div class="gallery-box-content">
                            <div>
                                <i class="icon-lg ion-ios-search"></i>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-4 col-sm-6">
                <a href="#galleryModal" class="gallery-box" data-toggle="modal" data-src="http://splashbase.s3.amazonaws.com/unsplash/regular/photo-1433959352364-9314c5b6eb0b%3Fq%3D75%26fm%3Djpg%26w%3D1080%26fit%3Dmax%26s%3D3b9bc6caa190332e91472b6828a120a4">
                    <img src="http://splashbase.s3.amazonaws.com/unsplash/regular/photo-1433959352364-9314c5b6eb0b%3Fq%3D75%26fm%3Djpg%26w%3D1080%26fit%3Dmax%26s%3D3b9bc6caa190332e91472b6828a120a4" class="img-responsive" alt="Image 3">
                    <div class="gallery-box-caption">
                        <div class="gallery-box-content">
                            <div>
                                <i class="icon-lg ion-ios-search"></i>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-4 col-sm-6">
                <a href="#galleryModal" class="gallery-box" data-toggle="modal" data-src="http://splashbase.s3.amazonaws.com/lifeofpix/regular/Life-of-Pix-free-stock-photos-moto-drawing-illusion-nabeel-1440x960.jpg">
                    <img src="http://splashbase.s3.amazonaws.com/lifeofpix/regular/Life-of-Pix-free-stock-photos-moto-drawing-illusion-nabeel-1440x960.jpg" class="img-responsive" alt="Image 4">
                    <div class="gallery-box-caption">
                        <div class="gallery-box-content">
                            <div>
                                <i class="icon-lg ion-ios-search"></i>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-4 col-sm-6">
                <a href="#galleryModal" class="gallery-box" data-toggle="modal" data-src="http://splashbase.s3.amazonaws.com/lifeofpix/regular/Life-of-Pix-free-stock-photos-new-york-crosswalk-nabeel-1440x960.jpg">
                    <img src="http://splashbase.s3.amazonaws.com/lifeofpix/regular/Life-of-Pix-free-stock-photos-new-york-crosswalk-nabeel-1440x960.jpg" class="img-responsive" alt="Image 5">
                    <div class="gallery-box-caption">
                        <div class="gallery-box-content">
                            <div>
                                <i class="icon-lg ion-ios-search"></i>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-4 col-sm-6">
                <a href="#galleryModal" class="gallery-box" data-toggle="modal" data-src="http://splashbase.s3.amazonaws.com/lifeofpix/regular/Life-of-Pix-free-stock-photos-clothes-exotic-travel-nabeel-1440x960.jpg">
                    <img src="http://splashbase.s3.amazonaws.com/lifeofpix/regular/Life-of-Pix-free-stock-photos-clothes-exotic-travel-nabeel-1440x960.jpg" class="img-responsive" alt="Image 6">
                    <div class="gallery-box-caption">
                        <div class="gallery-box-content">
                            <div>
                                <i class="icon-lg ion-ios-search"></i>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
</section>
<section class="container-fluid" id="features">
    <div class="row">
        <div class="col-xs-10 col-xs-offset-1 col-sm-6 col-sm-offset-3 col-md-4 col-md-offset-4">
            <h2 class="text-center text-primary">Features</h2>
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
<aside class="bg-dark">
    <div class="container text-center">
        <div class="call-to-action">
            <h2 class="text-primary">Get Started</h2>
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


<div id="galleryModal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-body">
        <img src="//placehold.it/1200x700/222?text=..." id="galleryImage" class="img-responsive" />
        <p>
            <br/>
            <button class="btn btn-primary btn-lg center-block" data-dismiss="modal" aria-hidden="true">Close <i class="ion-android-close"></i></button>
        </p>
      </div>
    </div>
    </div>
</div>
<div id="aboutModal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-body">
        <h2 class="text-center">Landing Zero Theme</h2>
        <h5 class="text-center">
            A free, responsive landing page theme built by BootstrapZero.
        </h5>
        <p class="text-justify">
            This is a single-page Bootstrap template with a sleek dark/grey color scheme, accent color and smooth scrolling.
            There are vertical content sections with subtle animations that are activated when scrolled into view using the jQuery WOW plugin. There is also a gallery with modals
            that work nicely to showcase your work portfolio. Other features include a contact form, email subscribe form, multi-column footer. Uses Questrial Google Font and Ionicons.
        </p>
        <p class="text-center"><a href="http://www.bootstrapzero.com">Download at BootstrapZero</a></p>
        <br/>
        <button class="btn btn-primary btn-lg center-block" data-dismiss="modal" aria-hidden="true"> OK </button>
      </div>
    </div>
    </div>
</div>
<div id="alertModal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-sm">
    <div class="modal-content">
      <div class="modal-body">
        <h2 class="text-center">Nice Job!</h2>
        <p class="text-center">You clicked the button, but it doesn't actually go anywhere because this is only a demo.</p>
        <p class="text-center"><a href="http://www.bootstrapzero.com">Learn more at BootstrapZero</a></p>
        <br/>
        <button class="btn btn-primary btn-lg center-block" data-dismiss="modal" aria-hidden="true">OK <i class="ion-android-close"></i></button>
      </div>
    </div>
    </div>
</div>
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
$('#galleryModal').on('show.bs.modal', function (e) {
   $('#galleryImage').attr("src",$(e.relatedTarget).data("src"));
});
</script>

<!-- Footer -->
<?php $this->load->view('template/footer.php'); ?>
<!-- End Footer -->
