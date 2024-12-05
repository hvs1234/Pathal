<?php

include"api.php";?>
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
<?php include"header.php"; ?>
<!-- //w3l-header -->

<section class="w3l-breadcrumb">
    <div class="breadcrum-bg py-sm-5 py-4">

        <div class="container py-lg-3">
            <h2>Contact Us</h2>
            <p><a href="index">Home</a> &nbsp; / &nbsp; Contact</p>

        </div>
    </div>
</section>
<!-- contact1 -->
<section class="w3l-contact-1 py-5">
    <div class="contacts-9 py-lg-5 py-sm-4">
        <div class="container">
        <?php
foreach ($section_data as $section_datas) {
    $section = htmlspecialchars($section_datas->section);
    $section_page = htmlspecialchars($section_datas->page);
    $section_heading = htmlspecialchars($section_datas->heading);
    $section_description = htmlspecialchars($section_datas->section_description);
    $section_image1 = htmlspecialchars($section_datas->section_image1);
    $section_image2 = htmlspecialchars($section_datas->section_image2);

    if ($section_page === $filename && $section !== "".$filename."1 ") {
?>
            <div class="d-grid contact-view">
                <div class="cont-details">
                    <p>Get in touch</p>
                    <h3 class="title-big"><?php echo "contact us" ?></h3>
                </div>
                <div class="map-content-9">
                    <p><?php echo htmlspecialchars_decode($section_description); ?></p>
                </div>
            </div>
            <?php  } } ?>
            <br><hr><br>
             <div class="d-grid contact-view">
                <div class="cont-details">
                    <div class="cont-top">
                        <div class="cont-left text-center">
                            <span class="fa fa-phone text-primary"></span>
                        </div>
                        <div class="cont-right">
                            <h6>Call Us</h6>
                            <p></span><?php 
$phone_numbers = explode(",", $hotel_phone);

foreach ($phone_numbers as $phone) {
    $phone = trim($phone); // Remove leading/trailing whitespace
    echo '<a href="tel:' . str_replace(' ', '', $phone) . '">' . $phone . '</a><br>';
}
             ?></p>
                        </div>
                    </div>
                    <div class="cont-top margin-up">
                        <div class="cont-left text-center">
                            <span class="fa fa-envelope-o text-primary"></span>
                        </div>
                        <div class="cont-right">
                            <h6>Email Us</h6>
                            <p><a href="mailto:<?php echo $hotel_email; ?>" class="mail"><?php echo $hotel_email; ?></a></p>
                        </div>
                    </div>
                    <div class="cont-top margin-up">
                        <div class="cont-left text-center">
                            <span class="fa fa-map-marker text-primary"></span>
                        </div>
                        <div class="cont-right">
                            <h6>Address</h6>
                            <p><?php echo $hotel_address; ?></p>
                        </div>
                    </div>
                </div>
                <div class="map-content-9 mt-lg-0 mt-4">
                    <form action="" method="post">
                        <div class="twice-two">
                            <input type="text" class="form-control" name="name" id="name" placeholder="Name"
                                required="">
                            <input type="email" class="form-control" name="email" id="email" placeholder="Email"
                                required="">
                        </div>
                        <div class="twice">
                            <input type="number" class="form-control" name="phone" id="phone"
                                placeholder="phone" required="">
                        </div>
                        <input type="hidden" name="hotel_id" id="hotel_id" value="<?php echo$hotel_id; ?>">
                        <textarea name="message" class="form-control" id="message" placeholder="Message"
                            required=""></textarea>
                        <button type="submit" name="submit_message" id="submit_message" class="btn btn-contact">Send Message</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
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