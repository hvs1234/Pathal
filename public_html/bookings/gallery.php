<!DOCTYPE html>
<html lang="en">
<?php
include "api.php";
?>
<head>
    <script>
       let modalVisible = false;

function openModal(img) {
    var modal = document.getElementById("myModal");
    var modalImg = document.getElementById("modalImage");

    if (!modalVisible) {
        modal.style.display = "flex";
        modalImg.src = img;
        modalVisible = true;
    }
}

function closeModal() {
    document.getElementById("myModal").style.display = "none";
    modalVisible = false;
}

// Set modalVisible to false on page load
window.onload = function () {
    modalVisible = false;
};

    </script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        .image-container {
            display: inline-block;
            margin: 5px;
            position: relative;
            cursor: pointer;
        }

        .image-container img {
            width: 100px;
            height: 100px;
            object-fit: cover;
        }

        .modal {
         
            position: fixed;
            z-index: 1;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.9);
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .modal-content {
          max-width: 70%;
    max-height:70%; /* Set the max height to the viewport height */
    display: block;
    margin: 0 auto;

        }

        .modal-content img {
            max-width: 100%;
            max-height: 100%;
            display: block;
          
        }

        .modal-background {
            width: 100%;
            height: 100%;
            position: absolute;
            cursor: pointer;
        }

        .close {
            color: #fff;
            position: absolute;
            top: 10px;
            right: 25px;
            font-size: 35px;
            font-weight: bold;
            transition: 0.3s;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <?php
    $room_slider_url = 'https://krishpada.com/software/api/room-images.php?domain_name=' . $domain_name . '&room_id=' . $_GET['room_id'];

    $room_slider_responce = file_get_contents($room_slider_url);

    if ($room_slider_responce === false) {
        die('Failed to fetch data from the API.');
    }

    $room_slider = json_decode($room_slider_responce);

    if ($room_slider === null) {
        die('Failed to decode JSON data from the API.');
    }
    ?>

    <!-- Repeat the following 12 div blocks with the respective image URLs -->
    <?php
    foreach ($room_slider as $room_sliders) {
        $slider_image = htmlspecialchars($room_sliders->slider_image);
        ?>
        <div class="image-container" onclick="openModal('<?php echo $slider_image ?>')">
            <img src="<?php echo $slider_image ?>" alt="Image 1">
        </div>
    <?php } ?>
    <div id="myModal" class="modal" style="display: none;" >
        <span class="modal-background" onclick="closeModal()"></span>
        <div class="modal-content">
            <span class="close" onclick="closeModal()">&times;</span>
            <img id="modalImage" src="" alt="Modal Image">
        </div>
    </div>
</body>
</html>
