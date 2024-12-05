
<!DOCTYPE html>
<html>
<head>
	<title></title>
   

</head>
<body>
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
                            echo '<span class="fa fa-arrow-left" id="left-arrow"></span>';
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
   
</section>

<script>
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

	 <!--  <section class="room-single-block">
            <div class="">
               
                    <div class="content-photo-12 d-grid">
                        
                        <div class="content-photo-right">
                            <div class="csslider infinity" id="slider1">
                                <input type="radio" name="slides" checked="checked" id="slides_1" />
                                <input type="radio" name="slides" id="slides_2" />
                                <input type="radio" name="slides" id="slides_3" />
                                <input type="radio" name="slides" id="slides_4" />
                                <ul class="banner_slide_bg">
                                    <li>
                                        <img class="img" src="assets/images/slide1.jpg" alt="">
                                    </li>
                                    <li>
                                        <img class="img" src="assets/images/slide4.jpg" alt="">
                                    </li>
                                    <li>
                                        <img class="img" src="assets/images/slide2.jpg" alt="">
                                    </li>
                                    <li>
                                        <img class="img" src="assets/images/slide3.jpg" alt="">
                                    </li>
                                </ul>
                                <div class="arrows">
                                    <label for="slides_1"></label>
                                    <label for="slides_2"></label>
                                    <label for="slides_3"></label>
                                    <label for="slides_4"></label>
                                </div>
                                <div class="navigation">
                                    <div>
                                        <label for="slides_1"></label>
                                        <label for="slides_2"></label>
                                        <label for="slides_3"></label>
                                        <label for="slides_4"></label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                
            </div>
        </section>
     -->
<?php /*?>

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
                            echo '<img class="img" src="' . $image->slider_image . '" alt="Image ' . $i . '">' . PHP_EOL;
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
<?php */?>
</body>
</html>