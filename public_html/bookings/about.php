<?php
include"./api.php";
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title><?php echo $filename; ?></title>

    <link href="//fonts.googleapis.com/css?family=Spartan:400,500,600,700,900&display=swap" rel="stylesheet">

    <!-- Template CSS -->
    <link rel="stylesheet" href="assets/css/style-starter.css">
  </head>
  <body>
<!--w3l-header-->
<?php
include"header.php";
?>
<!-- //w3l-header -->
<section class="w3l-breadcrumb">
    <div class="breadcrum-bg py-sm-5 py-4">
        <div class="container py-lg-3">

            <h2>About Us</h2>
            <p><a href="index">Home</a> &nbsp; / &nbsp; About</p>

        </div>
    </div>
</section>
<div class="w3l-about-us best-rooms py-5">
    <div class="container py-lg-5 py-sm-4">
        <div class="maghny-gd-1">
            <div class="row about-text">
                <div class="col-lg-6">
                    
    <h3 class="title-big">About <?php echo $domain_name; ?> </h3>

                </div>
                <div class="col-lg-6">
                   <?php  echo htmlspecialchars_decode($description); ?></p>
                    
                </div>
            </div>
    <h3 class="title-big">Rooms</h3>

            <div class="row mt-5">
             <?php foreach ($rooms_data as $room) { ?>
                <div class="maghny-gd-1 col-lg-6 col-md-6">
                    <div class="maghny-grid">
                        <figure class="effect-lily border-radius">
                            <img class="img-fluid" src="<?php echo htmlspecialchars($room->image); ?>" alt="" style="width: 600px; height: 300px;">
                            <figcaption class="w3set-hny">
                                <div>
                                    <h4><?php echo htmlspecialchars($room->room_category); ?> </h4>
                                    <!-- <p>Breakfast and Dinner</p> -->
                                </div>

                            </figcaption>
                        </figure>
                    </div>
                </div>
            <?php }?>
               
            </div>
        </div>
    </div>
</div>
<?php /*?>
<section class="w3-about-2" id="features">
    <div class="w3-services-ab py-5">
        <div class="container py-lg-4 py-md-3">
            <div class="title-section">

                <div class="title-line">
                </div>
            </div>
            <div class="row w3-services-grids">
                <div class="col-lg-9 w3-services-right-grid pl-lg-5 mx-auto">
                    <h4 class="mb-md-5 mb-4">Doing the right thing, at the right time</h4>
                    <div class="fea-gd-vv row">
                        <div class="col-md-6">
                            <div class="float-lt feature-gd">
                                <div class="icon"> <span class="fa fa-file-text-o" aria-hidden="true"></span></div>
                                <div class="icon-info">
                                    <h5>Welcome Drink</h5>
                                    <p> Lorem ipsum dolor sit amet, consectetur adipisicingelit, sed eiusmod tempor
                                        incididunt </p>

                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 mt-md-0 mt-4">
                            <div class="float-mid feature-gd">
                                <div class="icon"> <span class="fa fa-trophy" aria-hidden="true"></span></div>
                                <div class="icon-info">
                                    <h5>Bike Rental</h5>
                                    <p> Lorem ipsum dolor sit amet, consectetur adipisicingelit, sed eiusmod tempor
                                        incididunt </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 mt-4 pt-md-2">
                            <div class="float-rt feature-gd">
                                <div class="icon"> <span class="fa fa-clone" aria-hidden="true"></span></div>
                                <div class="icon-info">
                                    <h5>WIFI Areas</h5>
                                    <p> Lorem ipsum dolor sit amet, consectetur adipisicingelit, sed eiusmod tempor
                                        incididunt </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 mt-4 pt-md-2">
                            <div class="float-lt feature-gd">
                                <div class="icon"> <span class="fa fa-bullseye" aria-hidden="true"></span></div>
                                <div class="icon-info">
                                    <h5>Swimming Pool</h5>
                                    <p> Lorem ipsum dolor sit amet, consectetur adipisicingelit, sed eiusmod tempor
                                        incididunt </p>

                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php */?>
<!-- team -->
  <?php  /*?>
<section class="team py-5" id="team">
	<div class="container py-lg-4 py-sm-3">
        <h3 class="title-big text-center mb-md-5 mb-4">Our Team</h3>
		<div class="row inner-sec-w3layouts-w3pvt-lauinfo">
<?php foreach ($team_data as $team) { 
    // Get the team member's data
    $team_name = htmlspecialchars($team->team_name);
    $team_position = htmlspecialchars($team->team_position);
    $team_instagram = htmlspecialchars($team->team_instagram);
    $team_facebook = htmlspecialchars($team->team_facebook);
    $team_youtube = htmlspecialchars($team->team_youtube);
    $team_twitter = htmlspecialchars($team->team_twitter);
    $team_linkedin = htmlspecialchars($team->team_linkedin);
    $team_image = htmlspecialchars($team->team_image);
    ?>
    <div class="col-md-3 col-6">
        <div class="team-grids text-center">
            <img src="<?php echo $team_image; ?>" class="img-fluid" alt="">
            <div class="team-info">
                <div class="caption">
                    <h4><?php echo $team_name; ?></h4>
                    <h6><?php echo $team_position; ?></h6>
                </div>
            </div>
        </div>
        <div class="social-icons-section text-center">
            <?php if (!empty($team_facebook)) { ?>
                <a class="fac" href="<?php echo $team_facebook; ?>" target="_blank">
                    <i class="fa fa-facebook"></i>
                </a>
            <?php } ?>
            <?php if (!empty($team_twitter)) { ?>
                <a class="twitter" href="<?php echo $team_twitter; ?>" target="_blank">
                    <i class="fa fa-twitter"></i>
                </a>
            <?php } ?>
            <?php if (!empty($team_instagram)) { ?>
                <a class="insta" href="<?php echo $team_instagram; ?>" target="_blank">
                    <i class="fa fa-instagram"></i>
                </a>
            <?php } ?>
            <?php if (!empty($team_linkedin)) { ?>
                <a class="linkedin" href="<?php echo $team_linkedin; ?>" target="_blank">
                    <i class="fa fa-linkedin"></i>
                </a>
            <?php } ?>
            <?php if (!empty($team_youtube)) { ?>
                <a class="youtube" href="<?php echo $team_youtube; ?>" target="_blank">
                    <i class="fa fa-youtube"></i>
                </a>
            <?php } ?>
        </div>
    </div>
<?php } ?>


			
					</div>
	</div>

</section>
  <?php  */?>
<!-- team -->
<?php
/*foreach ($section_data as $section_datas) {
    $section = htmlspecialchars($section_datas->section);
    $section_page = htmlspecialchars($section_datas->page);
    $section_heading = htmlspecialchars($section_datas->heading);
    $section_description = htmlspecialchars($section_datas->section_description);
    $section_image1 = htmlspecialchars($section_datas->section_image1);
    $section_image2 = htmlspecialchars($section_datas->section_image2);

    if ($section_page === "about" && $section !== "about-us") {
?>
        <section class="w3l-stats">
            <div class="main-w3 py-5">
                <div class="container py-lg-3">
                    <div class="row align-items-center">
                        <div class="col-lg-12 title">
                            <h3 class="title-big"><?php echo $section_heading; ?></h3>
                            <p class="mt-4"><?php echo $section_description; ?></p>
                        </div>
                         <div class="col-lg-12 main-cont-wthree-fea text-center">
                                    <div class="row">
                                        <div class="col-12 pr-2 mt-4">
                                            <img src="<?php echo $section_image1; ?>" style="height: 300px; width: 100%;" alt="Image 1">
                                        </div>
                                       
                                    </div>
                                </div>
                    </div>
                </div>
            </div>
        </section>
<?php
    }
}
*/
?>
<?php /*?>
<section class="w3l-testimonials">
    <!-- main-slider -->
    <div class="testimonials py-5">
        <div class="container text-center py-lg-3">
            <div class="heading text-center mx-auto">
                <h3 class="title-big text-center">Our Testimonials</h3>
            </div>
            <div class="row">
                <div class="col-lg-10 mx-auto">
                    <div class="owl-testimonial owl-carousel owl-theme">
                        <div class="item">
                            <div class="slider-info mt-lg-4 mt-3">
                                <div class="img-circle">
                                    <img src="assets/images/team1.jpg" class="img-fluid rounded" alt="client image">
                                </div>
                                <div class="message">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea sit id
                                    accusantium
                                    officia quod quasi necessitatibus perspiciatis Harum error provident
                                    quibusdam tenetur.</div>
                                <div class="name">- Johnson</div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="slider-info mt-lg-4 mt-3">
                                <div class="img-circle">
                                    <img src="assets/images/team2.jpg" class="img-fluid rounded" alt="client image">
                                </div>
                                <div class="message">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea sit id
                                    accusantium
                                    officia quod quasi necessitatibus perspiciatis Harum error provident
                                    quibusdam tenetur.</div>
                                <div class="name">- Alexander</div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="slider-info mt-lg-4 mt-3">
                                <div class="img-circle">
                                    <img src="assets/images/team3.jpg" class="img-fluid rounded" alt="client image">
                                </div>
                                <div class="message">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea sit id
                                    accusantium
                                    officia quod quasi necessitatibus perspiciatis Harum error provident
                                    quibusdam tenetur.</div>
                                <div class="name">- Smith roy</div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="slider-info mt-lg-4 mt-3">
                                <div class="img-circle">
                                    <img src="assets/images/team4.jpg" class="img-fluid rounded" alt="client image">
                                </div>
                                <div class="message">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea sit id
                                    accusantium
                                    officia quod quasi necessitatibus perspiciatis Harum error provident
                                    quibusdam tenetur.</div>
                                <div class="name">- Elizabeth</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /main-slider -->
</section>
<?php */?>
    <h3 class="title-big">Our Policy </h3>

<?php

include"room-policy.php";

include"footer.php";
?>
 <!-- move top -->
 <button onclick="topFunction()" id="movetop" title="Go to top">
  &#10548;
</button>
<script>
  // When the user scrolls down 20px from the top of the document, show the button
  window.onscroll = function () {
    scrollFunction()
  };

  function scrollFunction() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
      document.getElementById("movetop").style.display = "block";
    } else {
      document.getElementById("movetop").style.display = "none";
    }
  }

  // When the user clicks on the button, scroll to the top of the document
  function topFunction() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
  }
</script>
<!-- /move top -->
</section>

<!-- Template JavaScript -->
<script src="assets/js/jquery-3.3.1.min.js"></script>

<script src="assets/js/owl.carousel.js"></script>
<!-- script for banner slider-->
<script>
  $(document).ready(function () {
    $('.owl-one').owlCarousel({
      loop: true,
      margin: 0,
      nav: false,
      responsiveClass: true,
      autoplay: false,
      autoplayTimeout: 5000,
      autoplaySpeed: 1000,
      autoplayHoverPause: false,
      responsive: {
        0: {
          items: 1,
          nav: false
        },
        480: {
          items: 1,
          nav: false
        },
        667: {
          items: 1,
          nav: true
        },
        1000: {
          items: 1,
          nav: true
        }
      }
    })
  })
</script>
<!-- //script -->

<!-- script for owlcarousel -->
<script>
  $(document).ready(function () {
    $('.owl-testimonial').owlCarousel({
      loop: true,
      margin: 0,
      nav: true,
      responsiveClass: true,
      autoplay: false,
      autoplayTimeout: 5000,
      autoplaySpeed: 1000,
      autoplayHoverPause: false,
      responsive: {
        0: {
          items: 1,
          nav: false
        },
        480: {
          items: 1,
          nav: false
        },
        667: {
          items: 1,
          nav: true
        },
        1000: {
          items: 1,
          nav: true
        }
      }
    })
  })
</script>
<!-- //script for owlcarousel -->
<script src="assets/js/jquery.magnific-popup.min.js"></script>
<script>
  $(document).ready(function () {
    $('.popup-with-zoom-anim').magnificPopup({
      type: 'inline',

      fixedContentPos: false,
      fixedBgPos: true,

      overflowY: 'auto',

      closeBtnInside: true,
      preloader: false,

      midClick: true,
      removalDelay: 300,
      mainClass: 'my-mfp-zoom-in'
    });

    $('.popup-with-move-anim').magnificPopup({
      type: 'inline',

      fixedContentPos: false,
      fixedBgPos: true,

      overflowY: 'auto',

      closeBtnInside: true,
      preloader: false,

      midClick: true,
      removalDelay: 300,
      mainClass: 'my-mfp-slide-bottom'
    });
  });
</script>


<!-- disable body scroll which navbar is in active -->
<script>
$(function () {
  $('.navbar-toggler').click(function () {
    $('body').toggleClass('noscroll');
  })
});
</script>
<!-- disable body scroll which navbar is in active -->

<script src="assets/js/bootstrap.min.js"></script>

</body>

</html>