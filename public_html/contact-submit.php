<?php include("admin/connection.php");?>

<!-- Validation Process -->
<?php 
$check_preg = 1;
if($_SERVER["REQUEST_METHOD"] == "POST") {
	$check_preg = 2;
	$flag_error = "";

	$name = $_POST["name"];
	$email = $_POST["email"];
	$phone = $_POST["phone"];
	$subject = $_POST["subject"];
	$form_message = $_POST["message"];

	if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
	  $flag_error = "Invalid email address*";
	  $check_preg = 0;
	}
	if($check_preg == 2) {

		// Database Insertion
		//$query = mysql_query("INSERT INTO contact_inquiries (name, email, phone, subject, message) VALUES ('$name','$email','$phone','$subject','$form_message')") or die(mysql_error());
		// End Insertion

		// Mail Section
		$to = "info@pathaal.com";
		$subject = "Contact Enquiry - ".$name;

		$message = '<b>Full Name:</b> '.$name.'<br>
			<b>Email:</b> '.$email.'<br>
			<b>Phone:</b> '.$phone.'<br>
			<b>Subject:</b> '.$subject.'<br>
			<b>Message:</b> '.$form_message;

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
		<?php header('Location: contact-success.php');?>
	<?php } else {?>
		<div class="div-success">
			OOPS! Something went wrong. Please <a href="contact-us.php">try again</a>.
		</div>
	<?php } 
}?>	