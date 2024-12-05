<?php
if($_SERVER["REQUEST_METHOD"] == "POST") {
  $hotel_name = $_POST["hotel_name"];
  $checkin = $_POST["checkin"];
  $checkout = $_POST["checkout"];
  $adults = $_POST["adults"];
  $children = $_POST["children"];
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport" />
    <meta content="IE=edge" http-equiv="X-UA-Compatible" />
    <title>Pathaal Reservation - Uttarakhand Home Stays, Hotels and Resorts</title>
    <meta name="description" content="Book our Home Stays, Resorts & Camps in Exciting Destinations and at amazing locations and let us plan your holidays in Uttarakhand India.">
    <link href="pathaal.com/reservation.php" rel="canonical" />
    <link href="favicon.png" rel="shortcut icon" />
    <!-- OG Tags -->
    <meta content="Reservation - Uttarakhand Home Stays, Hotels & Resorts" property="og:title" />
    <meta property="og:site_name" content="Authors Home">
    <meta content="pathaal.com/reservation.php" property="og:url" />
    <meta property="og:description" content="Book our Home Stays, Resorts & Camps in Exciting Destinations and at amazing locations and let us plan your holidays in Uttarakhand India.">
    <meta property="og:type" content="website">
    <meta content="images/og-image.jpg" property="og:image" />
    <!-- End OG Tags -->
    <!-- Theme Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Titillium+Web:300,400,700" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700" rel="stylesheet" />
    <!-- Theme CSS -->
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <link href="css/animate.css" rel="stylesheet" type="text/css" />
    <link href="css/datepicker.min.css" rel="stylesheet" type="text/css" />
    <link href="css/custom-plugins.css" rel="stylesheet" type="text/css" />
    <link href="css/theme-style.min.css" rel="stylesheet" type="text/css" />

    <style type="text/css">
      header .navbar-nav>li:not(#menuFilterLoc):hover>.dropdown-menu {
      display: block;
      }
    </style>
  </head>
  <body class="parent-hotel for-innerpage">
    <main class="outerpage" id="wrapper">
      <?php include('header.php') ?>
      <div class="inner-page pb-0">
        <div class="header-pills-wrapper">
          <div class="clearfix widget-wrapper header-pills">
            <div class="col-xs-12 col-sm-12">
              <ul class="nav nav-pills nav-stacked">
                <li><a href="index.html" rel="">Home</a></li>
                <li><i class="fa fa-angle-right"></i></li>
                <li>Reservation</li>
              </ul>
            </div>
          </div>
        </div>
        <div class="content_wrapper padd-50 text-left">
          <div class="clearfix widget-wrapper">
            <div class="no-gutter">
              <div class="section-title">
                <h1>Reservation & Bookings</h1>
                <p>Check hotel availability by submitting the form below.</p>
              </div>
              <div class="sep40"></div>
              <div class="widget-wrapper two-col row">
                <div class="col-md-5">
                  <img alt="Authors Home  Authors Home Uttarakhand Logo" class="img-responsive" style="width:150px;" src="img/logo.png" />
                  <div class="text-content">
                    <div class="text-content-wrapper">
                      <p>
                        <span><strong>Head Office:</strong><br/> Dehradun, Uttarakhand - 248006</span>
                        <br/> <span>Phone: (+91) 7900 666 777</span>
                        <br/>
                        <br/> <strong>Call Timings: </strong>
                        <br/> <span>Monday - Saturday: 10 AM - 7 PM<br/> Sunday: 12 PM - 2 PM</span>
                        <br/> <span>Phone:</span> (+91) 7900 666 777
                        <br/>
                        <br/> <span>Email: </span><a href="mailto:info@pathaal.com">info@pathaal.com</a>
                      </p>
                    </div>
                  </div>
                  <div class="sep10"></div>
                  <div class="map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d13784.561306732645!2d78.175538!3d30.2615827!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xf13edc7786e6018b!2sPathaal!5e0!3m2!1sen!2sin!4v1649991090135!5m2!1sen!2sin" width="100%" height="250" frameborder="0" class="border" allowfullscreen=""></iframe>
                  </div>
                </div>
                <div class="col-md-7">
                  <form method="POST" action="reservation-submit.php">
                    <h3 class="text-uppercase">Hotel Information:</h3>
                    <div class="sep10"></div>
                    <div class="form-group">
                      <label>Hotel / Resort Name<span class="error">*</span></label>
                      <select class="form-control" name="hotel_name" required="true"/>
                        <option>Select Location</option>
                        <option value="Pathaal - Dehradun">Pathaal - Dehradun</option>
                        <option value="Authors Home - Pauri">Authors Home - Pauri</option>
                        <option value="Chandola House - Pauri">Chandola House - Pauri</option>
                        <option value="Hans Bhawan - Pauri">Hans Bhawan - Pauri</option>
                      </select>
                    </div>
                    <div class="form-group">
                      <label>Room Type<span class="error">*</span></label>
                      <input class="form-control" name="room_type" placeholder="Standard/Deluxe" required="true"/>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label>Check In Date<span class="error">*</span></label>
                          <input class="form-control datepicker" name="checkin" placeholder="dd-mm-yyyy" required="true" type="text" value="<?php if(isset($_POST['checkin'])){ echo $_POST['checkin'];}?>" />
                        </div>    
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label>Check Out Date<span class="error">*</span></label>
                          <input class="form-control datepicker" name="checkout" placeholder="dd-mm-yyyy" required="true" type="text" value="<?php if(isset($_POST['checkout'])){ echo $_POST['checkout'];}?>"/>
                        </div>    
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label>No. of Adults<span class="error">*</span></label>
                          <input class="form-control" name="adults" placeholder="2" required="true" type="number" min="0" value="<?php if(isset($_POST['adults'])){ echo $_POST['adults'];}?>"/>
                        </div>    
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label>No. of Children<span class="error">*</span></label>
                          <input class="form-control" name="children" placeholder="1" required="true" type="number" min="0" value="<?php if(isset($_POST['children'])){ echo $_POST['children'];}?>"/>
                        </div>    
                      </div>
                    </div>
                    <hr>
                    <h3 class="text-uppercase">Contact Information:</h3>
                    <div class="sep10"></div>
                    <div class="form-group">
                      <label>Name<span class="error">*</span></label>
                      <input class="form-control" name="name" placeholder="Enter your name" required="true" type="text" />
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label>Email<span class="error">*</span></label>
                          <input class="form-control"  name="email" placeholder="Enter a valid email" required="true" type="email" />
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label>Phone</label>
                          <input class="form-control"  name="phone" placeholder="Enter your phone number" type="tel" />
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label>Passport No./Adhaar No.</label>
                          <input class="form-control"  name="identity_no" placeholder="Enter your Passport No./Adhaar No." type="text" />
                        </div>
                      </div>  
                      <div class="col-md-6">
                        <div class="form-group">
                          <label>Reference<span class="error">*</span></label>
                          <input class="form-control"  name="reference" placeholder="Google/Facebook/etc.." type="text" required="true"/>
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label-custom" >Address<span class="error">*</span></label>
                      <textarea class="form-control form-control-custom" name="address" placeholder="Your Address" required="true" rows="3" required="true"></textarea>
                    </div>
                    <div class="form-group">
                      <button class="btn btn-forms btn-full-width" type="submit">Submit</button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <?php include('footer.php'); ?>
    </main>
    <!-- Theme JavaScripts -->
    <script src="js/jquery.min.js" type="text/javascript"></script>
    <script src="js/datepicker.min.js" type="text/javascript"></script>
    <script src="js/custom.js"></script>
  </body>
</html>