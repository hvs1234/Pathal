<?php
//session_start();
// script.php on domain2


$protocol_domain = isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? 'https' : 'http';
$domain_name = $_SERVER['HTTP_HOST'];
// Make an HTTP request to the API on domain1
$api_url = "https://krishpada.com/software/api/connection.php?secret_key=ja1i5j2a3g4a4n1a7t1ht&domain_name=".$domain_name." "; // Replace with the actual URL to api.php on domain1

$response = file_get_contents($api_url);

if ($response === false) {
    die("Unable to retrieve database connection information.");
}       

$connection_info = json_decode($response, true);

// Use the database connection information
$conn = mysqli_connect(
    $connection_info['hostname'],
    $connection_info['username'],
    $connection_info['password'],
    $connection_info['database']
);

if (!$conn) {
    die("Database connection failed: " . mysqli_connect_error());
}

?>