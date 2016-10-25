<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>TMPH00053</title>
<link href="css/style.css" rel="stylesheet" type="text/css" />
<link href='http://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Tienne' rel='stylesheet' type='text/css'>
</head>
<body>
  <p style="text-align:right;">
    <em>HELLO</em>
	<?php
	 session_start();
	  if(isset($_SESSION['user'])!="") {
	  echo $_SESSION['uname'];
	  }
	  
	?>
  </p>
<div class="menu-wrapper">
  <div class="menu">
    <ul>
      <li><a class="active" href="index.php">home</a></li>
      <li><a href="about.html">about</a></li>
      <li><a href="services.html">services</a></li>
      <li><a href="login.php">login</a></li>
      <li><a href="clients.html">clients</a></li>
      <li class="img"><a href="contact.html">contact</a></li>
	  <?php
	  if(isset($_SESSION['user'])!="") {
	  echo '<li><a href="logout.php">logout</a></li>';
	  }
	  ?>
    </ul>
  </div>
  <div class="clearing"></div>
</div>
<div class="wrapper">
  <div class="header-wrapper">
    <div class="logo">
      <h1>SG <span>PS</span></h1>
      
    </div>
    <div class="right-panel">
      <div class="leftcontent marRight30">
        <h2>Call us</h2>
        <h1>(040) 651 44459</h1>
      </div>
      <div class="search-panel">
        <h2>search here</h2>
        <div class="search">
          <div class="search-input">
            <input type="text" class="search-text-field" value="" />
            <div class="search-button"><a href="#"><img src="images/icon-search.png" /></a></div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="clearing"></div>
  <div class="banner-wrapper">
    <div class="banner"> <img src="images/img-1.png" /> </div>
    <div class="banner-content">
      <h1>Innovating life</h1>
      <h2>In a smarter way.</h2>
      <a href="about.html">Know more</a> </div>
    <div class="clearing"></div>
  </div>
  <div class="panel-wrapper">
        <h1>OUR BRANDS:</h1>
        <h2></h2>
      </div>
  <div class="panel-wrapper">
    <div class="panel marRight30">
      <div class="title">
        <h1>Power  Master</h1>
        <h2></h2>
      </div>
      <div class="content">
        <p>Nam vestibulum porttitor massa, quis ultricies felis porta eget. Praesent imperdiet venenatis ligula, non laoreet quam imper lorem ipsum. </p>
        <div class="button-link"> <a href="pm.html">products ></a> </div>
      </div>
    </div>
    <div class="panel marRight30">
      <div class="title">
        <h1>Powernica</h1>
        <h2></h2>
      </div>
      <div class="content">
        <p>Vim vestibulum porttitor massa, quis ultricies felis porta eget. Praesent imperdiet venenatis ligula, non laoreet quam imper lorem ipsum. </p>
        <div class="button-link"> <a href="pn.html">products ></a> </div>
      </div>
    </div>
    <div class="panel">
      <div class="title">
        <h1>Lightronix</h1>
        <h2></h2>
      </div>
      <div class="content">
        <p>Stibulum porttitor massa, quis ultricies felis porta eget. Praesent imperdiet venenatis ligula, non laoreet quam imper lorem ipsum. </p>
        <div class="button-link"> <a href="light.html">products ></a> </div>
      </div>
    </div>
  </div>
  <div class="panel-wrapper">
    <div class="midpanelleft marRight30">
      <div class="title">
        <h1>Integersit</h1>
        <h2>Proin lacinia lorem</h2>
      </div>
      <div class="content">
        <ul>
          <li><a href="#">Nunc tincidunt libero sed sapien pos</a></li>
          <li><a href="#">Duis fermentum massa eget dolor sit</a></li>
          <li><a href="#">Proin ultrices mauris id neque lorem</a></li>
          <li class="borderNone"><a href="#">Maecenas eu ante dolor sitamet unit</a></li>
        </ul>
      </div>
    </div>
    <div class="midpanelright">
      <div class="panel marRight30">
        <div class="content"> <img src="images/k.jpg"/> </div>
        <div class="contentbox">
          <h1>Krishna </h1>
        </div>
      </div>
      <div class="panel marRight30">
        <div class="content"> <img src="images/img-3.jpg"/> </div>
        <div class="contentbox">
          <h1>Donec etpurus</h1>
        </div>
      </div>
      <div class="panel">
        <div class="content"> <img src="images/img-4.jpg"/> </div>
        <div class="contentbox">
          <h1>Sed interdum</h1>
        </div>
      </div>
    </div>
  </div>
  
<div class="footer-wrapper">
  <div class="footer">
    <ul>
      <li><a href="index.html">home</a></li>
      <li><a href="about.html">about</a></li>
      <li><a href="services.html">services</a></li>
      <li><a href="solutions.html">solutions</a></li>
      <li class="img"><a href="contact.html">contact</a></li>
    </ul>
  </div>
</div>
<div class="bottom">
  <div class="content">
    <p>Designed By :<a href="http://www.alltemplateneeds.com">www.alltemplateneeds.com</a></p>
    <p>Images  From :<a href="http://www.photorack.net"> photorack.net</a></p>
  </div>
</div>
</body>
</html>
