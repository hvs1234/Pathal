<?php
include"api.php";
 $single_room_api_url = 'https://krishpada.com/software/api/single-rooms.php?domain_name=' . $domain_name.'&room_id='.$_GET['room_id'].'&hotel_id='.$_GET['hotel_id']; 

$single_room_response = file_get_contents($single_room_api_url);

if ($single_room_response === false) {
    die('ROOM DATA ERROR .');
}

$single_room_data = json_decode($single_room_response);
 
if ($single_room_data === null) {
    die('Failed to decode JSON data from the API.');
}
 $single_room_category = htmlspecialchars($single_room_data[0]->room_category);
 $single_base_price = htmlspecialchars($single_room_data[0]->base_price);
 $single_meal_description=htmlspecialchars($single_room_data[0]->meal_description);
 $single_room_description=htmlspecialchars($single_room_data[0]->room_description);
$filename=$filename.'?room_id='.$_GET['room_id'];
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title><?php echo "room"; ?></title>

    <link href="//fonts.googleapis.com/css?family=Spartan:400,500,600,700,900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="assets/css/room-style.css">

</head>

<body>
    

    <body>
        <link rel="stylesheet" href="/assests/css/font-awesome.min.css">
        <!-- New toolbar-->
        
    <?php include"header.php";

?>
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

<?php


$room_slider_url = 'https://krishpada.com/software/api/room-images.php?domain_name=' . $domain_name.'&room_id='.$_GET['room_id']; 

$room_slider_responce = file_get_contents($room_slider_url);

if ($room_slider_responce === false) {
    die('Failed to fetch data from the API.');
}

$room_slider = json_decode($room_slider_responce);
 
if ($room_slider === null) {
    die('Failed to decode JSON data from the API.');
}
?>
<section class="room-single-block">
    <div class="">
        <div class="content-photo-12 d-grid">
            <div class="content-photo-right">
                <div class="csslider infinity" id="slider1">
                    <?php
                    $i = 1;
                    foreach ($room_slider as $image) {
                        $is_checked = $i === 1 ? 'checked="checked"' : ''; // Set the first image as checked
                        echo '<input type="radio" name="slides" ' . $is_checked . ' id="slides_' . $i . '" />' . PHP_EOL;
                        $i++;
                    }
                    ?>
                    <ul class="banner_slide_bg">
                        <?php
                        $i = 1;
                        foreach ($room_slider as $image) {
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
                        foreach ($room_slider as $image) {
                            echo '<label for="slides_' . $i . '"></label>' . PHP_EOL;
                            $i++;
                        }
                        ?>
                    </div>
                    <div class="navigation">
                        <div>
                            <?php
                            $i = 1;
                            foreach ($room_slider as $image) {
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

 <!-- room-single-block -->
        <section class="room-single-block">
            <div class="content-with-slider">
                <div class="container">
                    <div class="content-photo-1 d-grid">
                        <div class="content-photo-left text-center">
                            <h4><?php echo $hotel_name; ?></h4>
                            <h6><?php echo $single_room_category; ?></h6>
                            <div class="border-line">
                                <div class="bg">
                                    <span class="price">&#8377; <?php echo $single_base_price; ?></span>
                                    <p> Per night</p>
                                    <p><b>Including</b><br> <?php echo $single_meal_description; ?></p>
                                </div>
                                <div class="book-btn px-2">
                                    <a href="<?php echo$booking_url; ?>" class="btn btn-style btn-secondary mt-3">Book Now</a>
                                </div>
                            </div>
                            <!-- <ul class="room-amenities">
                                <li><?php echo $single_meal_description; ?></li>
                            
                            </ul> -->
                            <a href="./rooms" class="back"> <span class="fa fa-long-arrow-left"></span> Back to all rooms</a>
                        </div>
                        <div class="content-photo-right">
                            <div class="col-lg-12 roomsingle mt-lg-0 mt-12">
                        <h3 class="title-small">The Room</h3>
                        <p class="roomsingle mt-3"><?php echo $single_room_description; ?></p>
                    </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- //room-single-block ->
        <section class="w3l-roomsingleblock1 py-5">
            <div class="container py-sm-4">
                <div class="row">
                    <div class="col-lg-3 col-md-4 col-6">
                        <img src="assets/images/rs1.jpg" alt="" class="img-fluid">
                    </div>
                    <div class="col-lg-3 col-md-4 col-6">
                        <img src="assets/images/rs2.jpg" alt="" class="img-fluid">
                    </div>
                    <div class="col-lg-6 roomsingle mt-lg-0 mt-4">
                        <h3 class="title-small">The Room</h3>
                        <p class="roomsingle mt-3">Duis nisi sapien, elementum finibus fermentum eget, aliquet leo. Mauris hendrerit vel ex. Quisque vitae luctus massa. Phasellus sed aliquam leo. Vestibulum ullamcorper a massa eu fringilla. Integer ultrices finibus sed nisi. in
                            convallis felis dapibus sit amet.</p>
                    </div>
                </div>
            </div>
        </section>-->
<?php

// aminties data
$amenities_api_url = 'https://krishpada.com/software/api/room-aminities.php?domain_name=' . $domain_name.'&room_id='.$_GET['room_id']; 

$amenities_response = file_get_contents($amenities_api_url);

if ($amenities_response === false) {
    die('Failed to fetch data from the API.');
}

$amenities_data = json_decode($amenities_response);
 
if ($amenities_data === null) {
    die('Failed to decode JSON data from the API.');
}
$amenities = htmlspecialchars($amenities_data[0]->amenities);
$amenities_page = htmlspecialchars($amenities_data[0]->page);

//aminties data
?>

        <section class="w3l-roomsingleblock1 py-5">
            <div class="container py-sm-4">
                <div class="row">
                    <div class="col-lg-7 roomsingle">
                        <h3 class="title-small">Amenities provided by our hotel</h3>
                        <ul class="w3l-right-book mt-4">
    <?php
    foreach ($amenities_data as $amenities_datas) {
        $amenities_name = htmlspecialchars($amenities_datas->amenities_name);
        $amenities_icon = $amenities_datas->amenities_icon; // No need to use htmlspecialchars here

        ?>
        <li><a hef="#"><!-- <span class="fa fa-check" aria-hidden="true"></span> -->
            <?php
            echo $amenities_icon.' &nbsp;'.$amenities_name;
            // Render the HTML content for the image
         //   echo $amenities_icon;
            ?>
        </a></li>
        <?php
    }
    ?>
</ul>

                    </div>
                    <div class="col-lg-5 mt-lg-0 mt-4">
                   <?php
include"gallery.php";
?>
                        <!-- <img src="assets/images/facilities.jpg" alt="" class="img-fluid"> -->
                    </div>
                </div>
            </div>
        </section>
<!-- policy -->
 <?php
include"room-policy.php";
 ?>
<!-- policy -->

      <?php include"footer.php"; ?>

            <!-- move top -->
            <button onclick="topFunction()" id="movetop" title="Go to top">
  &#10548;
</button>
            <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
            <script>
                // When the user scrolls down 20px from the top of the document, show the button
                window.onscroll = function() {
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
            $(document).ready(function() {
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
            $(document).ready(function() {
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
            $(document).ready(function() {
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
            $(function() {
                $('.navbar-toggler').click(function() {
                    $('body').toggleClass('noscroll');
                })
            });
        </script>
        <!-- disable body scroll which navbar is in active -->

        <script src="assets/js/bootstrap.min.js"></script>


    </body>

</html>