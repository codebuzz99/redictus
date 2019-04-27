<?php 
$null = '';
$myemail = 'onefahadone@gmail.com';
$ismailsent = false;
if(isset($_POST['submit'])){
    if(empty($_POST['name']) || empty($_POST['email'])){
            $null .= "\n Error: This field is required";
    }

    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];  
    $message = $_POST['message'];

    if(empty($null)){
        $to = $myemail; 
        $email_subject = "Email from Redictus Contact us page";
        $email_body = "You have received a new message. "." 
                                    Here are the details:\n 
                                    Name : $name \n 
                                    Email Address: : $email \n 
                                    Subject : $subject \n 
                                    Your message : $message \n";
        $headers = 'Email from: '.$email;
        mail($to,$email_subject,$email_body,$headers);
        $ismailsent = true;
    }
}
?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Redictus | Contact</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcut icon" href="img/fev.png">

		<!-- google font -->
		<link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,700,800,900" rel="stylesheet">

        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
         <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
		<link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">

        
        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/animate.css">
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/owl.carousel.min.css">
        <link rel="stylesheet" href="css/owl.theme.default.min.css">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/responsive.css">
        <script src="js/vendor/modernizr-2.6.2.min.js"></script>
		
		<!--[if IE]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->



        <!-- HEADER AREA MARKUP STARTS -->
        <header id="header">
        	<div class="container">
        		<div class="header-wrapper">
        			<a href="https://www.redictus.com/" class="logo"><img src="img/logo.png" alt=""></a>
                    <!-- menu trigger -->
                    <div class="menu-toggler">
                        <span class="toggle-icon"></span>
                    </div>
                    <!-- menu items -->
        			<div class="header-wrapper-items">
        				<nav>
        					<ul>
        						<li><a href="#">Home</a></li>
        						<li><a href="https://www.redictus.com/blank">Rewards and Promos</a></li>
        						<li><a href="https://www.redictus.com/contact">Contact</a></li>
        					</ul>
        				</nav>
    					<div class="buttons">
    						<button class="site-btn red-btn" data-toggle="modal" data-target="#myModal">Login</button>
    						<a href="http://stats.redictus.com/signup" class="site-btn red-btn">Register</a>
    					</div>
        			</div> <!-- .header-wrapper-items ends -->
        		</div> <!-- .header-wrapper ends -->
        	</div> <!-- .container ends -->
        </header>
        <!-- HEADER AREA MARKUP ENDS -->



        
        <!-- MODAL AREA STARTS HERE -->
        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><i class="material-icons">clear</i></button>
                    <div class="login-form-holder-content">
                        <form action="http://phoenixcash.hasoffers.com/" method="post"> 
                            <img src="img/logo.png" alt="">
                            <input name="_method" type="hidden" value="POST" />
                            <input name="data[User][email]" type="text" value="" placeholder="Username or email">
                            <input name="data[User][password]" type="password" value="" placeholder="Password">
                            <button type="submit">LOGIN</button>
                            <div class="login-form-info">
                                <div class="dropdown">
                                  <a href="#" class="dropdown-toggle" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                    Register
                                    <span class="caret"></span>
                                  </a>
                                  <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                                    <li><a href="http://stats.redictus.com/signup">Become an Affiliate</a></li>
                                    <li><a href="http://stats.redictus.com/advertiser_signup">Become an Advertiser</a></li>
                                  </ul>
                                </div>
                                <a href="http://stats.redictus.com/users/forgot_password">Forgot Your Password</a>
                            </div>
                            <a href="https://www.redictus.com/"><i class="fas fa-arrow-left"></i> Back to redictuse</a>
                        </form>
                    </div>
                </div>
            </div>
          </div>
        </div>
        <!-- MODAL AREA ENDS HERE -->



        
        <!-- BANNER AREA MARKUP STARTS -->
        <section class="banner contact-banner">
        	<div class="container">
        		<div class="banner-wrapper">
        			<h1 class="wow fadeIn" data-wow-duration="1s" data-wow-delay=".3s">CONTACT US</h1>
        		</div>
        	</div> <!-- container ends -->
        </section>
        <!-- BANNER AREA MARKUP ENDS -->




        
        <section class="contact-area">
            <div class="container">
                <div class="contact-form-info">
                    <form action="" method="POST">
                        <label for="name" id="">Name <span>*</span></label>
                        <input type="text" name="name" id="name" required>
                        <label for="email" id="">Email <span>*</span></label>
                        <input type="email" name="email" id="email" required>
                        <label for="subject" id="">Subject</label>
                        <input type="text" name="subject" id="subject">
                        <label for="message" id="">Message</label>
                        <textarea name="message" id="message" cols="20" rows="7"></textarea>
                        <div class="text-right">
                            <button class="site-btn blue-btn" type="submit" name="submit">SEND</button>
                        </div>
                    </form>
                    <?php if ($ismailsent == true) { ?>
                        <p class="thankyou">Success! Message received.</p>
                    <?php } ?>
                    
                </div>
            </div>
        </section>



        
        <!-- FOOTER MARKUP STARTS HERE -->
        <footer>
            <div class="container">
                <div class="footer-wrapper">
                    <!-- <span><i class="fas fa-location-arrow"></i></span> -->
                    <h2 class="blue wow fadeInUp" data-wow-duration="1s" data-wow-delay=".3s">Need more details? Contact us</h2>
                    <p>We are here to assist. Contact us by phone, email or via our social media channels.</p>
                    <a href="https://www.redictus.com/contact" class="site-btn blue-btn">Contact Us</a>
                </div> <!-- .footer-wrapper ends -->
                <div class="copy-wright-twxt">
                    <p>&copy; All Rights Reserved - Redictus - 2018</p>
                    <p> Designed by KuthiDevs</p>
                </div> <!-- .copy-wright-twxt ends -->
            </div> <!-- .container ends -->
        </footer>
        <!-- FOOTER MARKUP ENDS HERE -->






        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.10.2.min.js"><\/script>')</script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/plugins.js"></script>
        <script defer src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
        <script src="js/owl.carousel.js"></script>
        <script src="js/owl.autoplay.js"></script>
        <script src="js/owl.navigation.js"></script>
        <script src="js/move-top.js"></script>
        <script src="js/wow.min.js"></script>
        <script src="js/typed.min.js"></script>
        <script src="js/main.js"></script>
        <script>
            new WOW().init();
        </script>
        <script>
          var typed = new Typed('#typed-strings', {
              strings: ["Freelancing &amp; Outsourcing."],
              typeSpeed: 60
            });
        </script>
    </body>
</html>
