<?php

session_start();
include 'connect.php';

if(isset($_POST['login'])){

$user = $_POST['user'];
$pass = $_POST['pass'];

$extract = mysql_query("SELECT Password FROM people_clients where Email='$user'");
$numrows=mysql_num_rows($extract);

if ($numrows){
echo "hello";
}else{
echo "<script>alert('wrong creden')</script>";
}
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>TMPH00053</title>
<link href="css/style.css" rel="stylesheet" type="text/css" />
<link href='http://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Tienne' rel='stylesheet' type='text/css'>
 <link rel='stylesheet' href='http://codepen.io/assets/libs/fullpage/jquery-ui.css'>

    <link rel="stylesheet" href="css/style1.css" media="screen" type="text/css" />
</head>
<body>
<div class="menu-wrapper">
  <div class="menu">
    <ul>
      <li><a  href="index.html">home</a></li>
      <li><a href="about.html">about</a></li>
      <li><a href="services.html">services</a></li>
      <li><a href="solutions.html">solutions</a></li>
      <li><a href="careers.html">careers</a></li>
      <li><a href="pressroom.html" class="active">press room</a></li>
      <li><a href="clients.html">clients</a></li>
      <li><a href="projects.html">projects</a></li>
      <li><a href="faq.html">faq</a></li>
      <li class="img"><a href="contact.html">contact</a></li>
    </ul>
  </div>
  <div class="clearing"></div>
</div>
<div class="wrapper">
  <div class="header-wrapper">
    <div class="logo">
      <h1>Site<span>name</span></h1>
      <p>Vorem ipsum dolor</p>
    </div>
    <div class="right-panel">
      <div class="leftcontent marRight30">
        <h2>call us</h2>
        <h1>(000) 888 88888</h1>
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
   <div class="login-card">
    <h1>Log-in</h1><br>
  <form method="POST">
    <input type="text" name="user" placeholder="Email">
    <input type="password" name="pass" placeholder="Password">
    <input type="submit" name="login" class="login login-submit" value="login">
  </form>

  <div class="login-help">
    <a href="register.html">Register</a>
  </div>
</div>

<!-- <div id="error"><img src="https://dl.dropboxusercontent.com/u/23299152/Delete-icon.png" /> Your caps-lock is on.</div> -->

  <script src='http://codepen.io/assets/libs/fullpage/jquery_and_jqueryui.js'></script>

  
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
