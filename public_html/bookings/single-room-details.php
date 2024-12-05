    <style type="text/css">
      .price-and-booking {
    display: flex;
    align-items: center;
}

.room-price {
    margin-left: 125px; /* Add some margin for spacing */
}


.additional-info {
    font-size: 11px;
    font-weight: bold;
    margin-left: 0px; /* Add some margin for spacing */
    color: #999; /* Adjust the color as needed */
}

     .guest-and-room {
    display: flex;color: #999;
    align-items: center;
    font-size: 14px;
}

.total_room {
    margin-left: 89px; /* Add some margin for spacing */
}

    </style>
    <?php

$single_rooms_url = 'https://krishpada.com/software/api/single-hotel-rooms.php?hotel_id='.$_GET['hotel_id'].'&domain_name=' . $domain_name;
$single_rooms_responce = file_get_contents($single_rooms_url);

if ($single_rooms_responce === false) {
    die('Failed to fetch data from the API.');
}

$single_hotel_rooms_data = json_decode($single_rooms_responce);

if ($single_hotel_rooms_data === null) {
    die('Failed to decode JSON data from the API.');
}

// Check if there's data in $single_hotel_rooms_data
if (empty($single_hotel_rooms_data)) {
    die('No data available in $rooms_data.');
}
    ?>
<div class="best-rooms w3l-blog py-5">
    <div class="container py-lg-5 py-sm-4">
        <div class="ban-content-inf row">
            <?php foreach ($single_hotel_rooms_data as $room) { ?>

            <div class="maghny-gd-1 col-lg-4 col-md-6 mt-md-0 mt-4">
                <div class="maghny-grid">
                    <figure class="effect-lily">
                        <img class="img-fluid" src="<?php echo htmlspecialchars($room->image); ?>" alt="">
                        <figcaption>
                            <div>
                               <!--  <h4 class="top-text"><?php echo htmlspecialchars($room->room_category); ?></h4> -->
                            </div>
                        </figcaption>
                    </figure>
                    <div class="room-info">
                        <h4 class="room-title"><?php echo htmlspecialchars($room->room_category); ?></h4>
                       
<div class="guest-and-room">
                          <span class="fa fa-users"></span> <?php echo htmlspecialchars($room->base_occupancy); ?> Guests
                            <p  class="total_room">
                               <span class="fa fa-bed"></span> <?php echo htmlspecialchars($room->no_of_room); ?> Total room
                            </p>
                        </div>
                       <!--  <ul class="mb-3" style="font-size: 14px;">
                            <li><span class="fa fa-users"></span> <?php echo htmlspecialchars($room->base_occupancy); ?> Guests</li>
                            <li><span class="fa fa-bed"></span> <?php echo htmlspecialchars($room->total_room); ?> Total room</li>
                        </ul> -->
                        <!-- Rest of your room information code -->
                        <br>
                        <div class="price-and-booking">
                            <a href="<?php echo $booking_url; ?>" class="btn mt-sm-4 mt-3">Book Now</a>
                            <a  class="room-price">
                                 <?php echo htmlspecialchars($room->base_price); ?> &#8377;<br>
                                <span class="additional-info">For <?php echo date("d-M"); ?></span>
                            </a>
                        </div>
                        <center>
                            <span style="color: #999; font-size: 12px;"><?php echo htmlspecialchars($room->meal_description); ?></span>
                        </center>
                        
                        <div class="room-info-bottom">
                            <ul class="room-amenities">
                                 <?php
                                $amenities_icons = $room->amenities_icons; // Correct the variable name
                                // Limit the icons to the first 4 elements
                                $icons_to_display = array_slice($amenities_icons, 0, 4);
                                foreach ($icons_to_display as $icon) {
                                    echo '<li>' . $icon . '</li>';
                                }
                                ?>
                            </ul>
                            <a href="./room?room_id=<?php echo htmlspecialchars($room->room_id); ?>" class="btn view">Full Info →</a>
                        </div>
                    </div>
                </div>
            </div>

            <?php } ?>
        </div>
    </div>
</div>


               <!--  <nav aria-label="Page navigation example">
                    <ul class="pagination justify-content-center mt-5 mb-0">
                        <li class="page-item disabled">
                            <a class="page-link page-prev" href="#previous" tabindex="-1">Previous</a>
                        </li>
                        <li class="page-item"><a class="page-link page-number" href="#1">1</a></li>
                        <li class="page-item active"><a class="page-link page-number" href="#2">2</a></li>
                        <li class="page-item"><a class="page-link page-number" href="#3">3</a></li>
                        <li class="page-item"><a class="page-link page-next" href="#next">→</a></li>
                    </ul>
                </nav> -->
            </div>