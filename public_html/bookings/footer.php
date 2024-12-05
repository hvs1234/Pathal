<section class="w3l-footer-29-main">
  <div class="footer-29 py-5">
    <div class="container py-lg-4">
      <div class="row footer-top-29">
        <div class="col-lg-3 col-md-6 col-sm-8 footer-list-29 footer-1">
          <h6 class="footer-title-29">Contact Us</h6>
          <ul>
            <li>
              <p><span class="fa fa-map-marker"></span><?php echo $hotel_address; ?></p>
            </li>
            <li><a href="#"><span class="fa fa-phone"></span>  <?php 
$phone_numbers = explode(",", $hotel_phone);

foreach ($phone_numbers as $phone) {
    $phone = trim($phone); // Remove leading/trailing whitespace
    echo '<a href="tel:' . str_replace(' ', '', $phone) . '">' . $phone . '</a><br>';
}
             ?></a></li>
            <li>
              <a href="#"><span class="fa fa-envelope"></span>  <?php 
$hotel_emails = explode(",", $hotel_email);

foreach ($hotel_emails as $conact_email) {
    $conact_email = trim($conact_email); // Remove leading/trailing whitespace
    echo '<a href="tel:' . str_replace(' ', '', $conact_email) . '">' . $conact_email . '</a><br>';
}
             ?></a>

            </li>
          </ul>
        </div>
        <div class="col-lg-2 col-md-6 col-sm-4 footer-list-29 footer-2 mt-sm-0 mt-5">

          <ul>
            <h6 class="footer-title-29">Useful Links</h6>
            <li><a href="index">Home</a></li>
            <li><a href="about">About hotels</a></li>
            <li><a href="./contact">Contact us</a></li>
          </ul>
        </div>
        <div class="col-lg-2 col-md-6 col-sm-4 footer-list-29 footer-2 mt-sm-0 mt-5">

          <ul>
            <h6 class="footer-title-29">Booking Process</h6>
            <li><a href="#">Choose Date</a></li>
            <li><a href="#">Guest details</a></li>
            <li><a href="#">Pay Now</a></li>

            <li><a href="#">receive Confirmation</a></li>
          </ul>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-7 footer-list-29 footer-4 mt-lg-0 mt-5">
          <h6 class="footer-title-29">Newsletter </h6>
          <p>Enter your email and receive the latest news from us.
           We'll never share your email address</p>

          <form action="" class="subscribe" id="subscribe"  method="post">
            <input type="hidden" name="name" id="name" value=" subscribed user">
            <input type="hidden" name="phone" id="phone">
            <input type="hidden" name="message" id="message">
            <input type="hidden" name="hotel_id" id="hotel_id" value="<?php echo$hotel_id ?>">

            <input type="email" name="email" placeholder="Your Email Address" required="">
            <button type="submit" id="submit_message" name="submit_message"><span class="fa fa-envelope"></span></button>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>


<section class="w3l-footer-29-main w3l-copyright">
  <div class="container">
    <div class="row bottom-copies">
      <p class="col-lg-8 copy-footer-29">© <?php echo date("Y"); ?> <?php echo $domain_name; ?>. All rights reserved | Designed by <a
          href="http://krishpada.com/" target="_blank">krishpada.com</a></p>

      <div class="col-lg-4 main-social-footer-29">
       <?php if(!empty($facebook)) {?> <a href="<?php echo$facebook; ?>" target="_blank" class="facebook"><span class="fa fa-facebook"></span></a><?php }?>
       <?php if(!empty($twitter)) {?> <a href="<?php echo$twitter; ?>" target="_blank" class="twitter"><span class="fa fa-twitter"></span></a><?php }?>
       <?php if(!empty($instagram)) {?> <a href="<?php echo$instagram; ?>" target="_blank" class="instagram"><span class="fa fa-instagram"></span></a><?php }?>
       <?php if(!empty($linkedin)) {?> <a href="<?php echo$linkedin; ?>" target="_blank" class=""><span class="fa fa-linkedin"></span></a><?php }?>
       <?php if(!empty($youtube)) {?> <a href="<?php echo$youtube; ?>" target="_blank" class=""><span class="fa fa-youtube"></span></a><?php }?>

      </div>

    </div>
  </div>
  <?php

if (isset($_POST['submit_message'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];
    $hotel_id = $_POST['hotel_id'];

    // Set up the data to be sent as an associative array
    $data = [
        'name' => $name,
        'email' => $email,
        'phone' => $phone,
        'message' => $message,
        'hotel_id' => $hotel_id,
    ];

    // Convert the data to JSON format
    $data_json = json_encode($data);

    // Set the URL of the Domain 1 API endpoint
    $api_url = 'https://krishpada.com/software/api/insert_contact_us.php';

    // Initialize cURL session
    $ch = curl_init($api_url);

    // Set cURL options
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data_json); // Send JSON data
    curl_setopt($ch, CURLOPT_HTTPHEADER, ['Content-Type: application/json']);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    // Execute cURL session and get the response
    $response = curl_exec($ch);

    // Close cURL session
    curl_close($ch);
echo $data_json; // Debugging line

    // Process the API response (e.g., display a success message)
    $result = json_decode($response, true);

    if ($result['status'] === 'success') {
//        echo 'Message sent successfully!';
        echo "<script>alert(' ".$filename." thanks for contacting us')</script>";
   echo "<script>window.location.href = '$filename';</script>";

    } else {
        echo "<script>alert('there is some technical issue please contact via call ')</script>";
   echo "<script>window.location.href = '$filename';</script>";

      //  echo 'Failed to send message. Please try again later.';
    }
}
?>

