<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<h1>hello</h1>
<?php
$protocol_domain = isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? 'https' : 'http';
$domain = $_SERVER['HTTP_HOST'];

$fullUrl = $protocol_domain . '://' . $domain;

$protocol = isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http";
echo $domain_name = $_SERVER['HTTP_HOST'];

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
$slider_url = 'https://krishpada.com/software/api/home-slider.php?domain_name=' . $domain_name; 

$slider_responce = file_get_contents($slider_url);

if ($slider_responce === false) {
    die('home-slider to fetch data from the API.');
}

 $slider_data = json_decode($slider_responce);
 
if ($slider_data === null) {
    die('home-slider to decode JSON data from the API.');
}
echo  '<br>'.htmlspecialchars($slider_data[0]->slider_image);
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

echo  '<br>'.htmlspecialchars($rooms_data[0]->room_category);

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
echo '<br>'. htmlspecialchars($section_data[0]->page);
$api_access_api_url = 'https://krishpada.com/software/api/api_access.php?domain_name=' . $domain_name; 

$api_access_response = file_get_contents($api_access_api_url);

if ($api_access_response === false) {
    die('Failed to fetch data from the API.');
}

$api_access_data = json_decode($api_access_response);
 
if ($api_access_data === null) {
    die('Failed to decode JSON data from the API.');
}
echo '<br>'.$primary_color = htmlspecialchars($api_access_data[0]->primary_color);
$hotels_url = 'https://krishpada.com/software/api/hotels.php?domain_name=' . $domain_name; 

$hotel_list_responce = file_get_contents($hotels_url);

if ($hotel_list_responce === false) {
    die('Failed to fetch data from the API.');
}

$hotel_list_data = json_decode($hotel_list_responce);
 
if ($hotel_list_data === null) {
    die('Failed to decode JSON data from the API.');
}
echo '<br>'. htmlspecialchars($hotel_list_data[0]->name);

?>
<img src="<?php echo$hotel_logo; ?>">
</body>
</html>