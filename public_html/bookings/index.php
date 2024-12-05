<?php
include"api.php";
    ?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Home</title>

    <link href="//fonts.googleapis.com/css?family=Spartan:400,500,600,700,900&display=swap" rel="stylesheet">

    <!-- Template CSS -->
<!--     <link rel="stylesheet" href="assets/css/style-starter.css"> -->
 <link rel="stylesheet" href="assets/css/room-style.css">
<?php /*?>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
  <!-- Owl Carousel CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
<?php */?>
    <!-- jQuery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
$(document).ready(function() {
    $(".owl-one").owlCarousel({
        items: 1, // Number of items to display
        loop: true, // Infinite loop
        autoplay: true, // Autoplay the carousel
        autoplayTimeout: 2000, // Autoplay interval in milliseconds
        autoplayHoverPause: true, // Pause on hover
        nav: true, // Show navigation arrows
        dots: true, // Show dots navigation
    });
});
</script>

<style>
 
</style>

  </head>
  <body>
    <?php 
include"header.php";
    ?>
</head>
<body>
<?php /*?>
<section class="w3l-main-banner">
    <div class="banner-content">
        <div class="container">
            <div class="banner-info">
                <h2>Your Heading</h2>
                <p>Your subheading or description goes here.</p>
                <a class="btn btn-style transparent-btn mt-sm-5 mt-4" href="services.html">Our Services</a>
            </div>
        </div>
    </div>

    <!-- Replace 'your-banner.gif' with the actual path to your .gif image -->
    <div class="banner-image" style="background: url('./banner.gif') no-repeat center; background-size: cover;"></div>
</section>

<?php */?>
<?php

//include"slider/index.php";
?><!-- Add these CSS styles -->
<style type="text/css">
    /* Style the left arrow */
    #left-arrow {
        position: absolute;
        top: 283px;
        left: 33px;
        transform: translate(-50%, 50%);
        font-size: 20px;
        color: white; /* Customize arrow color */
        cursor: pointer; /* Add cursor style for clickability */
    }

    /* Style the right arrow */
    #right-arrow {
        position: absolute;
        top: 283px;
        right: 33px;
        transform: translate(50%, 50%);
        font-size: 20px;
        color: white; /* Customize arrow color */
        cursor: pointer; /* Add cursor style for clickability */
    }
    /* Media query for smaller screens (adjust the max-width as needed) */
@media screen and (max-width: 768px) {
    #left-arrow,
    #right-arrow {
        display: block; /* Display arrows for smaller screens */
        top: 1px;
        bottom: 20px; /* Adjust the position from the bottom as needed */
    }
}

</style>


<script>
    // Existing JavaScript code
    document.addEventListener('DOMContentLoaded', function () {
        const sliderImages = document.getElementById('slider-images');
        const slides = document.querySelectorAll('[name="slides"]');
        const leftArrow = document.getElementById('left-arrow');
        const rightArrow = document.getElementById('right-arrow');

        // Track the current slide index
        let currentSlide = 0;

        // Function to show the current slide
        const showSlide = () => {
            slides.forEach((slide, index) => {
                slide.checked = index === currentSlide;
            });
        };

        // Handle left arrow click
        leftArrow.addEventListener('click', () => {
            currentSlide = currentSlide > 0 ? currentSlide - 1 : slides.length - 1;
            showSlide();
        });

        // Handle right arrow click
        rightArrow.addEventListener('click', () => {
            currentSlide = (currentSlide + 1) % slides.length;
            showSlide();
        });

        // Initialize by showing the first slide
        showSlide();

        // Automatically cycle through the slides every 5 seconds
        setInterval(() => {
            currentSlide = (currentSlide + 1) % slides.length;
            showSlide();
        }, 5000); // Change image every 5 seconds
    });
</script>


<section class="room-single-block">
    <div class="">
        <div class="content-photo-12 d-grid">
            <div class="content-photo-right">
                <div class="csslider infinity" id="slider1">
                    <?php
                    $i = 1;
                    foreach ($slider_data as $image) {
                        $is_checked = $i === 1 ? 'checked="checked"' : ''; // Set the first image as checked
                        echo '<input type="radio" name="slides" ' . $is_checked . ' id="slides_' . $i . '" />' . PHP_EOL;
                        $i++;
                    }
                    ?>
                    <ul class="banner_slide_bg">
                        <?php
                        $i = 1;
                        foreach ($slider_data as $image) {
                            echo '<li>' . PHP_EOL;
                            echo '<span class="fa fa-arrow-left" id="left-arrow"></span>';
                            echo '<img class="img" src="' . $image->slider_image . '" alt="Image ' . $i . '">' . PHP_EOL;
                            echo '<span class="fa fa-arrow-right" id="right-arrow"></span>';
                            echo '</li>' . PHP_EOL;
                            $i++;
                        }
                        ?>
                    </ul>
                    <div class="arrows">
                        <?php
                        $i = 1;
                        foreach ($slider_data as $image) {
                            echo '<label for="slides_' . $i . '"></label>' . PHP_EOL;
                            $i++;
                        }
                        ?>
                    </div>
                    <div class="navigation">
                        <div>
                            <?php
                            $i = 1;
                            foreach ($slider_data as $image) {
                                echo '<label for="slides_' . $i . '"></label>' . PHP_EOL;
                                $i++;
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php /*?>
<section class="room-single-block">

        <div class="content-photo-12 d-grid">
            <div class="content-photo-right">
                <div class="csslider infinity" id="slider1">
                    <?php
                    $i = 1;
                    foreach ($slider_data as $image) {
                        $is_checked = $i === 1 ? 'checked="checked"' : ''; // Set the first image as checked
                        echo '<input type="radio" name="slides" ' . $is_checked . ' id="slides_' . $i . '" />' . PHP_EOL;
                        $i++;
                    }
                    ?>
                    <ul class="banner_slide_bg">
                        <?php
                        $i = 1;
                        foreach ($slider_data as $image) {
                            echo '<li>' . PHP_EOL;
                            echo '<img class="img" src="' . $image->slider_image . '" alt="Image ' . $i . '">' . PHP_EOL;
                           // echo '<span class="fa fa-arrow-left" id="left-arrow"></span>';
                            //echo '<span class="fa fa-arrow-right" id="right-arrow"></span>';
                            echo '</li>' . PHP_EOL;
                            $i++;
                        }
                        ?>
                    </ul>
                    <div class="arrows">
                        <?php
                        $i = 1;
                        foreach ($slider_data as $image) {
                            echo '<label for="slides_' . $i . '"></label>' . PHP_EOL;
                            $i++;
                        }
                        ?>
                    </div>
                    <div class="navigation">
                        <div>
                            <?php
                            $i = 1;
                            foreach ($slider_data as $image) {
                                echo '<label for="slides_' . $i . '"></label>' . PHP_EOL;
                                $i++;
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
   
</section>

<?php* /?>
<?php /*?>
<section class="w3l-main-slider" id="home">
     <div class="companies20-content">
         <div class="owl-one owl-carousel owl-theme">
 <?php foreach ($data as $item) { ?>
           
       
             <div class="item">
                 <li>
                     <div class="slider-info  bg bg2" style="  
    background: url(<?php echo htmlspecialchars($item); ?>) no-repeat center;
    background-size: cover;
    min-height: 700px;
    position: relative;
    z-index: 0;
    display: grid;
    align-items: center;




 
    
  ">
                         <div class="banner-info">
                             <div class="container">
                                 <div class="banner-info-bg">
                                     <h5>
                                        heading
                                     </h5>
                                     <a class="btn btn-style transparent-btn mt-sm-5 mt-4" href="services.html"> Our
                                         Services</a>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </li>
             </div>
 <?php } ?>
          
 </section>
 <?php */ ?>
<!--new room section started-->

<!--new room section closed-->

<section class="w3l-availability-form" id="booking">
    <!-- /w3l-availability-form-section -->
    <div class="w3l-availability-form-main py-5">
        <div class="container pt-lg-3 pb-lg-5">
            <div class="forms-top">
                <div class="form-right">

                        <h3 class="title-small">Check Availability  </h3>
                        <form action="" method="POST" class="signin-form">
                            <div class="row book-form">
                                <div class="form-input col-md-4 col-sm-6 mt-3">
                                    <label>Check-in Date</label>
                                    <input type="date" id="start_date" name="start_date" placeholder="Date" required="">
                                </div>
                                <div class="form-input col-md-4 col-sm-6 mt-3">
                                    <label>Check-out Date</label>
                                    <input type="date" name="end_date" id="end_date" placeholder="Date" required="">
                                </div>
                                <div class="form-input col-md-4 col-sm-6 mt-3">
                                     <label>Check availability </label>
                                    <button class="btn btn-style btn-primary w-100 px-2" name="check_availability">Check Availability</button>

                                </div>
                               
                            </div>
                        </form>
                        <?php

if (isset($_POST['check_availability'])) {
    # code...
    $start_date=$_POST['start_date'];
    $end_date=$_POST['end_date'];
    $redirect_url="https://secure-booking-engine.in/booking?url=".$domain_name.'&h_code='.$h_code.'&start_date='.$start_date.'&end_date='.$end_date;

echo '<script>window.open("' . $redirect_url . '", "_blank");</script>';


}
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
  <!-- //w3l-header -->
<?php include"room-details.php"; ?>
<?php /* ?>

<div class="best-rooms py-5">
    <div class="container py-lg-5 py-sm-4">
        <h3 class="title-big text-center">Best Rooms</h3>
        <h5 class="text-center">sub heading</h5>
        <p class="text-center">dfdshsdf sdfdfs sdf sdsdfdfs</p>
        <div class="ban-content-inf row py-lg-3">
        <?php foreach ($rooms_data as $room) { ?>
            <!-- Room 1 -->
            <div class="col-lg-6 col-md-6 col-sm-12">
                <div class="maghny-grid">
                    <figure class="effect-lily">
                       <!--  <img class="img-fluid" src="<?php echo htmlspecialchars($room->image);  ?>" alt=""> -->
                       <img class="img-fluid" src="<?php echo htmlspecialchars($room->image); ?>" alt="" style="width: 600px; height: 300px;">

                        <figcaption class="w3set-hny">
                            <div>
                                <h4 class="top-text"><span> <?php echo htmlspecialchars($room->room_category); ?>
                                   </span></h4>
                                <p> extra adult <?php echo htmlspecialchars($room->extra_adult); ?></p>
                            </div>
                        </figcaption>
                    </figure>
                    <div class="room-info">
                      <!--  <h3 class="room-title"><a href="room-single.html"><?php echo htmlspecialchars($room->room_category); ?></a></h3> -->
                        <ul class="mb-3">
                            <li><span class="fa fa-user"></span> <?php echo htmlspecialchars($room->base_occupancy); ?> Guests</li>
                           
                            <li><span class="fa fa-bed"></span> total room  <?php echo htmlspecialchars($room->total_room); ?></li>
                            <!--  <li><span class="fa fa-users"></span> extra adult <?php echo htmlspecialchars($room->extra_adult); ?> </li> -->
                        </ul>
                        <ul class="mb-3" style="text-align: right;">
                            <li class="title-big" style="font-size: 20px; font-weight: bold;  "><span class="fa fa-rupee" ></span> 20000</li>
                           
                            <p style="font-size: 12px;"> For  Today</p>
                            <!--  <li><span class="fa fa-users"></span> extra adult <?php echo htmlspecialchars($room->extra_adult); ?> </li> -->
                        </ul>
                        <!-- <p><?php echo htmlspecialchars($room->description); ?></p> -->
                        <a href="<?php echo$booking_url; ?>" target="_blank"  class="btn btn-style btn-primary mt-sm-4 mt-3">Book Now</a>
                    </div>
                </div>
            </div>
<?php } ?>
           
        </div>
    </div>
</div>

<?php */?>
<!-- //w3l-availability-form-section -->
<?PHP /*?>
<?php if (!empty($description) ) { ?>
<section class="w3l-about py-5">
    <div class="container py-sm-4">
        <div class="row">
            <div class="col-lg-6 about-left mb-md-0 mb-5">
               <h3 class="title-big">More about us</h3>
          <!--   <h >We make the best for all our customers.</h3> -->
                <p class="mt-3"><?php 
                if (strlen($description) > 300) {
    $short_description = substr($description, 0, 300) . "...";
} else {
    $short_description = $description;
}

echo htmlspecialchars_decode($short_description);
 ?></p>
                <a href="./about" class="btn btn-style btn-primary mt-sm-5 mt-4">Learn About Us</a>
            </div>
            <div class="col-lg-6 about-right position-relative mt-lg-0 mt-5">
                <img src="<?php echo$image_top; ?>" alt="" class="img-fluid img-border mt-4" />
                <img src="<?php echo$image_top; ?>" alt="" class="img-fluid position-absolute img-position" />
            </div>
        </div>
    </div>
</section>
<?php } ?>
<?PHP */?>
   <?php foreach ($rooms_data as $room) { ?>
<section class="w3l-about py-5">
    <div class="container py-sm-4">
        <div class="row">
            <div class="col-lg-6 about-left mb-md-0 mb-5">
               <h3 class="title-big"><?php  echo htmlspecialchars($room->room_category); ?></h3>
            <!-- <h ><?php  echo htmlspecialchars($room->room_category); ?>.</h3> -->
                <p class="mt-3"><?php 
//                 if (strlen($description) > 300) {
//     $short_description = substr($description, 0, 300) . "...";
// } else {
//     $short_description = $description;
// }

// echo htmlspecialchars_decode($short_description);
                echo htmlspecialchars_decode($room->description);
 ?></p>
                <a href="./room?room_id=<?php  echo htmlspecialchars($room->room_id); ?>" class="btn btn-style btn-primary mt-sm-5 mt-4">Read more</a>
            </div>
            <div class="col-lg-6 about-right position-relative mt-lg-0 mt-5">
                <img src="<?php echo htmlspecialchars($room->image); ?>" alt="" class="img-fluid img-border mt-4" />
               <!--  <img src="<?php echo$image_bottom; ?>" alt="" class="img-fluid position-absolute img-position" /> -->
            </div>
        </div>
    </div>
</section>
<?php } ?>

<?php /*if ($section=="about-us" ) { ?>
<section class="w3l-about py-5">
	<div class="container py-sm-4">
		<div class="row">
			<div class="col-lg-6 about-left mb-md-0 mb-5">
				<?php if(!empty($heading)) { ?><h3 class="title-big"><?php echo $heading; ?></h3><?php }else{ ?><h3 class="title-big">More about us</h3><?php } ?>
				
                <?php if(!empty($sub_heading)) { ?><h5 ><?php echo $sub_heading; ?></h5><?php }else{ ?><h >We make the best for all our customers.</h3><?php } ?>
				<p class="mt-3"><?php 
                if (strlen($description) > 400) {
    $short_description = substr($description, 0, 300) . "...";
} else {
    $short_description = $description;
}

echo $short_description; ?></p>
				<a href="./about" class="btn btn-style btn-primary mt-sm-5 mt-4">Learn About Us</a>
			</div>
			<div class="col-lg-6 about-right position-relative mt-lg-0 mt-5">
				<img src="<?php echo$image_top; ?>" alt="" class="img-fluid img-border mt-4" />
				<img src="<?php echo$image_bottom; ?>" alt="" class="img-fluid position-absolute img-position" />
			</div>
		</div>
	</div>
</section>
<?php } */?>
    <!-- main-slider ->
<section class="w3l-testimonials">

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
    <! /main-slider -->
</section>
<!-- //about ->
<div class="best-rooms py-5">
    <div class="container py-lg-5 py-sm-4">
        <h3 class="title-big text-center">Best Rooms</h3>
        <div class="ban-content-inf row py-lg-3">
            <div class="maghny-gd-1 col-lg-6">
                <div class="maghny-grid">
                    <figure class="effect-lily">
                        <img class="img-fluid" src="assets/images/room1.jpg" alt="">
                        <figcaption class="w3set-hny">
                            <div>
                                <h4 class="top-text">Luxury Hotel and Best Resort
                                    <span>Peaceful Place to stay</span></h4>
                                <p>From 20$ </p>
                            </div>
                        </figcaption>
                    </figure>
                    <div class="room-info">
                        <h3 class="room-title"><a href="room-single.html">Luxury Hotel</a></h3>
                        <ul class="mb-3">
                            <li><span class="fa fa-users"></span> 2 Guests</li>
                            <li><span class="fa fa-bed"></span> Double bed</li>
                            <li><span class="fa fa-bed"></span> 15sqft</li>
                        </ul>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. A recusandae, illum sequi numquam
                            tempora voluptates?</p>
                        <a href="#book" class="btn btn-style btn-primary mt-sm-4 mt-3">Book Now</a>
                    </div>
                </div>
            </div>
            <div class="maghny-gd-1 col-lg-6 mt-lg-0 mt-4">
                <div class="row">
                    <div class="maghny-gd-1 col-6">
                        <div class="maghny-grid">
                            <figure class="effect-lily border-radius">
                                <img class="img-fluid" src="assets/images/room2.jpg" alt="" />
                                <figcaption>
                                    <div>
                                        <h4>Family Rooms <span> Resort</span></h4>
                                        <p>From 20$ </p>
                                    </div>

                                </figcaption>
                            </figure>
                        </div>
                    </div>
                    <div class="maghny-gd-1 col-6">
                        <div class="maghny-grid">
                            <figure class="effect-lily border-radius">
                                <img class="img-fluid" src="assets/images/room3.jpg" alt="" />
                                <figcaption>
                                    <div>
                                        <h4>Double Rooms <span> Resort</span></h4>
                                        <p>From 20$ </p>
                                    </div>

                                </figcaption>
                            </figure>
                        </div>
                    </div>
                    <div class="maghny-gd-1 col-6 mt-4">
                        <div class="maghny-grid">
                            <figure class="effect-lily border-radius">
                                <img class="img-fluid" src="assets/images/room4.jpg" alt="" />
                                <figcaption>
                                    <div>
                                        <h4>Luxury Rooms <span> Resort</span></h4>
                                        <p>From 20$ </p>
                                    </div>

                                </figcaption>
                            </figure>
                        </div>
                    </div>
                    <div class="maghny-gd-1 col-6 mt-4">
                        <div class="maghny-grid">
                            <figure class="effect-lily border-radius">
                                <img class="img-fluid" src="assets/images/room5.jpg" alt="" />
                                <figcaption>
                                    <div>
                                        <h4>Resort Rooms <span> Resort</span></h4>
                                        <p>From 20$ </p>
                                    </div>

                                </figcaption>
                            </figure>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<-oldroom data closed-->
</div></div></section>
<?php /*?>
<section class="w3l-index3">
    <div class="midd-w3 py-5">
        <div class="container py-lg-5 py-md-3">
            <div class="row">
                <div class="col-lg-6 left-wthree-img text-righ">
                    <div class="position-relative">
                        <img src="<?php echo$hotel_cover_image; ?>" alt="" class="img-fluid" />
                        <a href="#small-dialog" class="popup-with-zoom-anim play-view text-center position-absolute">
                            <span class="video-play-icon">
                                <span class="fa fa-play"></span>
                            </span>
                        </a>
                      
                        <div id="small-dialog" class="zoom-anim-dialog mfp-hide">
    <iframe src="https://www.youtube.com/embed/4K6Sh1tsAW4" allow="autoplay; fullscreen" allowfullscreen></iframe>
</div>

                    </div>
                </div>
                <div class="col-lg-6 mt-lg-0 mt-5 about-right-faq align-self">
                    <h6>Discover our Locations</h6>
                    <h3 class="title-big">20 Years of Hotels and Resort Experience</h3>
                    <p class="mt-3">Lorem ipsum viverra feugiat. Pellen tesque libero ut justo,
                        ultrices in ligula. Semper at tempufddfel.</p>
                   
                    <!-- <a href="about.html" class="btn btn-style btn-primary mt-4">Check all packages</a> -->
                </div>
            </div>
        </div>
    </div>
</section>
<?php */?>
<!-- quotation -->
<?php /*
if ( !empty($hotel_cover_image)) {
   # code...
?>
<style type="text/css">
    .quotation {
  background: url(<?php echo $hotel_cover_image; ?>) no-repeat top;
  background-size: cover;
  -webkit-background-size: cover;
  -o-background-size: cover;
  -moz-background-size: cover;
  -ms-background-size: cover;
  position: relative;
  z-index: 1; }

.quotation:before {
  content: "";
  background: rgba(0, 0, 0, 0.55);
  position: absolute;
  top: 0;
  min-height: 100%;
  left: 0;
  right: 0;
  z-index: -1; }
</style>

<div class="quotation py-5">
    <div class="container py-xl-5 py-lg-3">
        <div class="welcome-left text-center py-md-5 py-3">
            <h3>Enjoy a Amazing experience. Discover our locaions.</h3>
            <a href="<?php echo$booking_url; ?>" target="_blank" class="btn btn-style transparent-btn mt-sm-5 mt-4 mr-2">Book Now</a>
           <!--  <a href="" class="btn btn-style btn-primary mt-sm-5 mt-4">Contact Us</a> -->
        </div>
    </div>
</div>
<!-- //quotation -->
<?php } */
?>
 <!-- <section class="w3l-logos py-5">
    <div class="container py-lg-3">
<div class="row">
    <center>
            <div class="col-lg-4 col-md-2 ">
                <img src="./payments.png" alt="company-logo" class="img-fluid" />
            </div>
            </center>
           <div class="col-lg-2 col-md-3 col-sm-4 col-6 logo-view">
                <img src="assets/images/logo2.jpg" alt="company-logo" class="img-fluid" />
            </div>
            <div class="col-lg-2 col-md-3 col-sm-4 col-6 logo-view mt-sm-0 mt-4">
                <img src="assets/images/logo3.jpg" alt="company-logo" class="img-fluid" />
            </div>
            <div class="col-lg-2 col-md-3 col-sm-4 col-6 logo-view mt-md-0 mt-4">
                <img src="assets/images/logo4.jpg" alt="company-logo" class="img-fluid" />
            </div>
            <div class="col-lg-2 col-md-3 col-sm-4 col-6 logo-view mt-lg-0 mt-4">
                <img src="assets/images/logo2.jpg" alt="company-logo" class="img-fluid" />
            </div>
            <div class="col-lg-2 col-md-3 col-sm-4 col-6 logo-view mt-lg-0 mt-4">
                <img src="assets/images/logo1.jpg" alt="company-logo" class="img-fluid" />
            </div> 
        </div>
    </div>
</section>-->
<br>
<?php include"footer.php"; ?>
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
<script>
document.addEventListener("DOMContentLoaded", function() {
    // Get references to the date input fields
    var startDateInput = document.getElementById("start_date");
    var endDateInput = document.getElementById("end_date");

    // Add an event listener to the start_date input field
    startDateInput.addEventListener("change", function() {
        // Parse the selected date from the start_date input
        var startDate = new Date(startDateInput.value);
        
        // Calculate the next day and set it as the min date for end_date
        var nextDay = new Date(startDate);
        nextDay.setDate(startDate.getDate() + 1);
        var minEndDate = nextDay.toISOString().split('T')[0];

        // Update the min attribute of the end_date input
        endDateInput.min = minEndDate;

        // Check if end_date is less than start_date
        if (endDateInput.value < minEndDate) {
            endDateInput.value = minEndDate;
        }
    });

    // Add an event listener to the end_date input field
    endDateInput.addEventListener("change", function() {
        // Parse the selected dates
        var startDate = new Date(startDateInput.value);
        var endDate = new Date(endDateInput.value);

        // Check if end_date is equal to start_date
        if (startDate.getTime() === endDate.getTime()) {
            // Set end_date to the next day
            endDate.setDate(startDate.getDate() + 1);
            endDateInput.value = endDate.toISOString().split('T')[0];
        }
    });
});
</script>
</html><script>
    var imageUrls = [<?php foreach ($slider_data as $item) { echo "'" . $item['slider_image'] . "',"; } ?>];

    var imageObjects = [];
    var currentIndex = 0;

    function preloadImages() {
        if (currentIndex >= imageUrls.length) {
            currentIndex = 0;
        }

        var image = new Image();
        image.src = imageUrls[currentIndex];
        image.onload = function () {
            // Once the image is loaded, display it
            displayImage(currentIndex);
            currentIndex++;
            setTimeout(preloadImages, 5000); // Change slide every 5 seconds
        };
    }

    function displayImage(index) {
        var slides = document.getElementsByClassName("img");
        for (var i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
        }
        slides[index].style.display = "block";
    }

    // Start preloading and displaying images
    preloadImages();
</script>