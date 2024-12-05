<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport" />
    <meta content="IE=edge" http-equiv="X-UA-Compatible" />
    <link href="https://fonts.googleapis.com/css?family=Titillium+Web:300,400,700" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700" rel="stylesheet" />

    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <link href="css/animate.css" rel="stylesheet" type="text/css" />
    <link href="css/custom-plugins.css" rel="stylesheet" type="text/css" />
    <link href="css/theme-style.min.css" rel="stylesheet" type="text/css" />
    
    <title>Contact Us - Pathaal</title>
    <meta content="website" property="og:type" />
    <meta content="https://pathaal.com/contact-us.php" property="og:url" />
    <link href="contact-us.html" rel="canonical" />
    <link href="favicon.png" rel="shortcut icon" />
    
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
                <li>Contact Us</li>
              </ul>
            </div>
          </div>
        </div>
        <div class="content_wrapper padd-50 text-left">
          <div class="clearfix widget-wrapper">
            <div class="no-gutter">
              <div class="section-title">
                <h1>Get In Touch</h1>
                <p>Feel free to contact us anytime. We are always there to assist you.</p>
              </div>
              <div class="sep40"></div>
              <div class="widget-wrapper two-col row">
                <div class="col-md-5">
                  <img alt="Pathaal Authors Home  Pathaal Authors Home Uttarakhand Logo" class="img-responsive" style="width:150px;" src="img/logo.png" />
                  <div class="text-content">
                    <div class="text-content-wrapper">
                      <p>
                        <span><strong>Head Office:</strong><br/> Dehradun, Uttarakhand India - 248006</span>
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
                </div>
                <div class="col-md-7">
                  <div class="text-left">
                    <h3 class="text-uppercase">Submit your Query Here:</h3>
                  </div>
                  <div class="sep10"></div>
                  <form method="POST" action="contact-submit.php">
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="control-label-custom">Name<span class="error">*</span></label>
                          <input class="form-control form-control-custom" name="name" placeholder="Enter your name" required="true" type="text" />
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="control-label-custom">Email<span class="error">*</span></label>
                          <input class="form-control form-control-custom"  name="email" placeholder="Enter a valid email" required="true" type="email" />
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="control-label-custom">Phone</label>
                          <input class="form-control form-control-custom"  name="phone" placeholder="Enter your phone number" type="tel" />
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="control-label-custom">Subject<span class="error">*</span></label>
                          <input class="form-control form-control-custom"  name="subject" placeholder="Enter your Subject" type="text" required="true"/>
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label-custom" >Message<span class="error">*</span></label>
                      <textarea class="form-control form-control-custom" name="message" placeholder="Your query here ..." required="true" rows="5"></textarea>
                    </div>
                    <div class="form-group">
                      <button class="btn btn-forms btn-full-width" type="submit">Submit</button>
                    </div>
                  </form>
                </div>
              </div>
              <div class="sep40"></div>
              <div class="widget-wrapper">
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d13784.561306732645!2d78.175538!3d30.2615827!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xf13edc7786e6018b!2sPathaal!5e0!3m2!1sen!2sin!4v1649991090135!5m2!1sen!2sin" width="100%" height="350" frameborder="0" class="border" allowfullscreen=""></iframe>
              </div>
            </div>
          </div>
        </div>
      </div>
      <?php include('footer.php'); ?>
    </main>
    <!-- Theme JavaScripts -->
    <script src="js/jquery.min.js" type="text/javascript"></script>
    <script src="js/custom.js"></script>
  </body>
</html>