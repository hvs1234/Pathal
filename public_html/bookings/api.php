
<?php

//ini_set('display_errors', 1);
// Replace 'domain1-api-url' with the actual URL of your API on domain1

$protocol_domain = isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? 'https' : 'http';
$domain = $_SERVER['HTTP_HOST'];

$fullUrl = $protocol_domain . '://' . $domain;

$protocol = isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http";
$domain_name = $_SERVER['HTTP_HOST'];


$slider_url = 'https://krishpada.com/software/api/home-slider.php?domain_name=' . $domain_name; 

$slider_responce = file_get_contents($slider_url);

if ($slider_responce === false) {
    die('home-slider to fetch data from the API.');
}

$slider_data = json_decode($slider_responce);
 
if ($slider_data === null) {
    die('home-slider to decode JSON data from the API.');
}

// Replace 'domain1-api-url' with the actual URL of your API on domain1
$active_hotel_url = 'https://krishpada.com/software/api/actvie_hotels.php?domain_name=' . $domain_name;

$response = file_get_contents($active_hotel_url);

if ($response === false) {
    die('please add hotel_contact, hotel website');
}

$active_hotel_data = json_decode($response);

if ($active_hotel_data === null) {
    die('actvie_hotels to decode JSON data from the API.');
}

// Check if there's data in $active_hotel_data
if (empty($active_hotel_data)) {
    die('please add hotel_contact, hotel website');
}

$hotel_logo = htmlspecialchars($active_hotel_data[0]->logo);
$image_top = htmlspecialchars($active_hotel_data[0]->image_top);
$image_bottom = htmlspecialchars($active_hotel_data[0]->image_bottom);
$description= htmlspecialchars($active_hotel_data[0]->description);
$hotel_name=htmlspecialchars($active_hotel_data[0]->name);
$hotel_cover_image=htmlspecialchars($active_hotel_data[0]->cover_image);
$hotel_address=htmlspecialchars($active_hotel_data[0]->hotel_address);
$hotel_phone=htmlspecialchars($active_hotel_data[0]->phone);
$hotel_email=htmlspecialchars($active_hotel_data[0]->email);
$h_code=htmlspecialchars($active_hotel_data[0]->unique_code);
$booking_url="https://secure-booking-engine.in/booking?url=".$fullUrl.'&h_code='.$h_code;


$hotel_id=htmlspecialchars($active_hotel_data[0]->hotel_id);

$rooms_url = 'https://krishpada.com/software/api/rooms.php?domain_name=' . $domain_name;
$rooms_responce = file_get_contents($rooms_url);

if ($rooms_responce === false) {
    die('Failed to fetch data from the API.');
}

$rooms_data = json_decode($rooms_responce);

if ($rooms_data === null) {
    die('Failed to decode JSON data from the API.');
}

// Check if there's data in $rooms_data
if (empty($rooms_data)) {
    die('please add room details, meal plan, room rate,amenities,room image');
}
 
 $url_for_file = "http://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']; // Get the complete current URL

// section api
 $section_api_url = 'https://krishpada.com/software/api/section_details.php?domain_name=' . $domain_name; 

$section_response = file_get_contents($section_api_url);

if ($section_response === false) {
    die('Failed to fetch data from the API.');
}

$section_data = json_decode($section_response);
 
if ($section_data === null) {
    die('Failed to decode JSON data from the API.');
    echo "error in section_data";
}
$section = htmlspecialchars($section_data[0]->section);
$section_page = htmlspecialchars($section_data[0]->page);

// $section_heading = htmlspecialchars($section_data[0]->heading);
// $section_sub_heading = htmlspecialchars($section_data[0]->sub_heading);
// $section_description = htmlspecialchars($section_data[0]->section_description);
// $section_image1 = htmlspecialchars($section_data[0]->section_image1);

// $section_image2 = htmlspecialchars($section_data[0]->section_image2);

 //section api
//team api
//  $team_api_url = 'https://krishpada.com/software/api/hotel_team.php?domain_name=' . $domain_name; 

// $team_response = file_get_contents($team_api_url);

// if ($team_response === false) {
//     die('Failed to fetch data from the API.');
// }

// $team_data = json_decode($team_response);
 
// if ($team_data === null) {
//     die('Failed to decode JSON data from the API.');
// }

//team api

//api_acess
 $api_access_api_url = 'https://krishpada.com/software/api/api_access.php?domain_name=' . $domain_name; 

$api_access_response = file_get_contents($api_access_api_url);

if ($api_access_response === false) {
    die('Failed to fetch data from the API.');
}

$api_access_data = json_decode($api_access_response);
 
if ($api_access_data === null) {
    die('Failed to decode JSON data from the API.');
}
$primary_color = htmlspecialchars($api_access_data[0]->primary_color);
$button_color = htmlspecialchars($api_access_data[0]->button_color);
$link_color = htmlspecialchars($api_access_data[0]->link_color);
$nav_item_color = htmlspecialchars($api_access_data[0]->nav_item);
$facebook = htmlspecialchars($api_access_data[0]->facebook);
$twitter = htmlspecialchars($api_access_data[0]->twitter);
$instagram = htmlspecialchars($api_access_data[0]->instagram);
$linkedin = htmlspecialchars($api_access_data[0]->linkedin);


//$nav_item = htmlspecialchars($api_access_data[0]->button_color);

//hotels 
//more property

// single room

$path = parse_url($url_for_file, PHP_URL_PATH);
$filename = pathinfo($path, PATHINFO_FILENAME);

//api_acess
//  $hotels_url = 'https://krishpada.com/software/api/hotels.php?domain_name=' . $domain_name; 

// $hotel_responce = file_get_contents($hotels_url);

// if ($hotel_responce === false) {
//     die('Failed to fetch data from the API.');
// }

// $hotel_list_data = json_decode($hotel_responce);
 
// if ($hotel_list_data === null) {
//     die('Failed to decode JSON data from the API.');
// }

// Now $hotel_data is an array of associative arrays containing 'hotel_name' and 'id'

//$nav_item = htmlspecialchars($api_access_data[0]->button_color);

//more-property

 $hotels_url = 'https://krishpada.com/software/api/hotels.php?domain_name=' . $domain_name; 

$hotel_list_responce = file_get_contents($hotels_url);

if ($hotel_list_responce === false) {
    die('Failed to fetch data from the API.');
}

$hotel_list_data = json_decode($hotel_list_responce);
 
if ($hotel_list_data === null) {
    die('Failed to decode JSON data from the API.');
}
/// hotels

?>