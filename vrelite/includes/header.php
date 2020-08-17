<?php  
    $curPageName = substr($_SERVER["SCRIPT_NAME"],strrpos($_SERVER["SCRIPT_NAME"],"/")+1);  
  ?>   
  
<!DOCTYPE html>
<html lang="en">
  <head>

    <title>VRElite Logistics</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,700,900|Display+Playfair:200,300,400,700"> 
    <link rel="stylesheet" href="fonts/icomoon/style.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">
    <link rel="stylesheet" href="css/aos.css">
    <link rel="stylesheet" href="css/style.css">
	<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="icon" href="images/favicon.ico" type="image/x-icon">  
	<!--Start of Tawk.to Script-->
	<script type="text/javascript">
	var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
	(function(){
	var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
	s1.async=true;
	s1.src='https://embed.tawk.to/5eac669710362a7578be2719/default';
	s1.charset='UTF-8';
	s1.setAttribute('crossorigin','*');
	s0.parentNode.insertBefore(s1,s0);
	})();
	</script>
	<!--End of Tawk.to Script-->

  </head>
  <body>
  
  <div class="site-wrap">

    <div class="site-mobile-menu">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>
    
    <header class="site-navbar py-3" role="banner">

      <div class="container">
        <div class="row align-items-center">
          
          <div class="col-11 col-xl-2">
            <h1 class="mb-0"><a href="index.php" class="text-white h2 mb-0">
              <img src="images/logo.png"  alt="logo">
            </a></h1>
          </div>
          <div class="col-12 col-md-10 d-none d-xl-block">
            <nav class="site-navigation position-relative text-right" role="navigation">

              <ul class="site-menu js-clone-nav mx-auto d-none d-lg-block">
                <li class="<?php if($curPageName =='index.php'){ echo 'active'; } ?>"><a href="index.php">Home</a></li>
                <li class="<?php if($curPageName =='about.php'){ echo 'active'; } ?>"><a href="about.php">About Us</a></li>
                <li class="has-children <?php if($curPageName =='services.php'){ echo 'active'; } ?>">
                  <a href="services.php">Services</a>
<ul class=dropdown style="background-color:grey;">
<li><a href="fashion.php">FASHION LIFESTYLE & RETAIL</a></li>
<li><a  href="ecommerce.php">ECOMMERCE</a></li>
<li><a href="fmcg.php">FMCG</a></li>
<li><a href="consumer.php">CONSUMER DURABLES,HOME & HI TECH</a></li>
<li><a href="autometive.php">AUTOMETIVE</a></li>
<li><a href="industrial.php">INDUSTRIAL & ENGINEERING</a></li>
<li><a href="pharma.php">PHARMA & HEALTHCARE</a></li>
<li><a href="qsr.php">QSR,RESTAURANTS & PROCESSED FOOD</a></li>


</ul>
                  
 


                </li>
                <li class="<?php if($curPageName =='industries.php'){ echo 'active'; } ?>"><a href="industries.php">Industries</a></li>
				<li class="<?php if($curPageName =='career.php'){ echo 'active'; } ?>"><a href="career.php">Career</a></li>
                <li class="<?php if($curPageName =='contact.php'){ echo 'active'; } ?>"><a href="contact.php">Contact</a></li>
              </ul>
            </nav>
          </div>


          <div class="d-inline-block d-xl-none ml-md-0 mr-auto py-3" style="position: relative; top: 3px;"><a href="#" class="site-menu-toggle js-menu-toggle text-white"><span class="icon-menu h3"></span></a></div>

          </div>

        </div>
      </div>
      
    </header>