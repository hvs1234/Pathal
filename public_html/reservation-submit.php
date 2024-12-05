<?php include("admin/connection.php");?>

<!-- Validation Process -->
<?php 
$check_preg = 1;
if($_SERVER["REQUEST_METHOD"] == "POST") {
	$check_preg = 2;
	$flag_error = "";

	$hotel_name = $_POST["hotel_name"];
	$room_type = $_POST["room_type"];
	$checkin = date('Y-m-d',strtotime($_POST["checkin"]));
  	$checkout = date('Y-m-d',strtotime($_POST["checkout"]));
	$adults = $_POST["adults"];
	$children = $_POST["children"];
	$name = $_POST["name"];
	$email = $_POST["email"];
	$phone = $_POST["phone"];
	$identity_no = $_POST["identity_no"];
	$reference = $_POST["reference"];

	if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
	  $flag_error = "Invalid email address*";
	  $check_preg = 0;
	}
	if($check_preg == 2) {
		// Database Insertion
		//$query = mysql_query("INSERT INTO hotel_inquiries (hotel_name, room_type, checkin, checkout, adults, children, name, email, phone, identity_no, address, reference) VALUES ('$hotel_name','$room_type','$checkin','$checkout','$adults','$children','$name','$email','$phone','$identity_no','$address','$reference')") or die(mysql_error());
		// End Insertion

		// Mail Section
		$to = "info@pathaal.com";
		$subject = "Reservation Enquiry - ".$hotel_name." - ".$name;

		$message = '<b>Hotel Name:</b> '.$hotel_name.'<br>
			<b>Room Type:</b> '.$room_type.'<br>
			<b>CheckIn Date:</b> '.$checkin.'<br>
			<b>Check Out Date:</b> '.$checkout.'<br>
			<b>No. of Adults:</b> '.$adults.'<br>
			<b>No. of Children:</b> '.$children.'<br>
			<b>Full Name:</b> '.$name.'<br>
			<b>Email:</b> '.$email.'<br>
			<b>Phone:</b> '.$phone.'<br>
			<b>Passport No./Adhaar No.:</b> '.$identity_no.'<br>
			<b>Address:</b> '.$Address.'<br>
			<b>Reference:</b> '.$reference;
		// Always set Content-Type when sending HTML email

		$headers = "From: Pathaal <info@pathaal.com>" . PHP_EOL . "MIME-Version: 1.0" . PHP_EOL . "Content-Type:text/html;charset=UTF-8" . PHP_EOL . 'Reply-To: info@pathaal.com';

		mail($to, $subject, $message, $headers);
		// End Mail Section
	}
}
?>
<!-- End -->

<?php if(isset($check_preg)) { 
	if($check_preg == 2) {
	?>
		<?php header('Location: reservation-success.php');?>
	<?php } else {?>
		<div class="div-success">
			OOPS! Something went wrong. Please <a href="contact-us.html">try again</a>.
		</div>
	<?php } 
}?>	