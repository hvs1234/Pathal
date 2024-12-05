<?php

include"api.php";
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
    <link rel="stylesheet" href="assets/css/room-style.css">
</head>

<body>
    <script src="//m.servedby-buysellads.com/monetization.js" type="text/javascript"></script>
  
    <meta name="robots" content="noindex">

    <body>
        <link rel="stylesheet" href="/assests/css/font-awesome.min.css">
        <!-- New toolbar-->
      
      <?php
include"header.php";
      ?>
        <!-- //w3l-header -->
        <section class="w3l-breadcrumb">
            <div class="breadcrum-bg py-sm-5 py-4">
                <div class="container py-lg-3">

                    <h2>Pathal Pauri</h2>
                    <p><a href="./">Home</a> &nbsp; / &nbsp; rooms</p>

                </div>
            </div>
        </section>
       <style type="text/css">   

        .first-letter::first-letter {
        font-size: 2em; /* Adjust the font size as needed */
        float: left;
      
    }
</style> 
<style>
 /* Default styles for larger screens */
.main-container {
    display: flex;
    justify-content: space-between;
    background-color: white;
}

.left-column, .right-column {
    width: 48%;
}

/* Media query for mobile devices */
@media (max-width: 768px) {
    .main-container {
        flex-direction: column; /* Switch to a single column layout */
    }

    .left-column, .right-column {
        width: 100%; /* Full width for single column on mobile */
    }

    /* Additional styles for mobile devices */
    .left-column {
        padding: 10px;
    }

    .right-column {
        padding: 10px;
    }

    /* Adjust font size and line height for better mobile readability */
    p {
        font-size: 16px;
        line-height: 1.5;
    }
}

</style>
<br>
<div class="main-container">
    <div class="left-column">
        <h1>About the Hotel</h1>
        <p>Escape to a Tranquil Haven: The Forest Hotel & Luxury Resort

Nestled in the heart of nature's untouched beauty, The Forest Hotel & Luxury Resort offers an exquisite retreat for the discerning traveler seeking serenity, sophistication, and an unforgettable connection with the great outdoors.

Location and Natural Beauty: Tucked away in a pristine forest, our resort is a sanctuary for those who crave solace in the lap of nature. The lush, emerald-green canopy stretches as far as the eye can see, while the symphony of birdsong and rustling leaves provides a melodic backdrop to your stay.</p>
    </div>
    <div class="right-column">
        <h2>Contact Information</h2>
        <ul>
            <li><strong>Address:</strong> 123 Main Street, City, Country</li>
            <li><strong>Phone:</strong> +1 (123) 456-7890</li>
            <li><strong>Email:</strong> info@hotel.com</li>
            <li><strong>Location:</strong> Latitude: 123.456, Longitude: -78.910</li>
            <!-- Add more contact details as needed -->
        </ul>
    </div>
</div>
    <?php include"./room-details.php"; ?>
       
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