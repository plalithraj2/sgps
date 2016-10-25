<?php
 ob_start();
 session_start();
 include_once 'connect.php';

 if ( isset($_SESSION['user'])!="" ) {
  header("Location: index.php");
  exit;
 }
 
 // it will never let you open index(login) page if session is set
 $error = false;
 
 if( isset($_POST['email']) ) { 
  
  // prevent sql injections/ clear user invalid inputs
  $email = trim($_POST['email']);
  $email = strip_tags($email);
  $email = htmlspecialchars($email);
  
  $pass = trim($_POST['pass']);
  $pass = strip_tags($pass);
  $pass = htmlspecialchars($pass);
  // prevent sql injections / clear user invalid inputs
  
  if(empty($email)){
   $error = true;
   $emailError = "Please enter your email address.";
  } else if ( !filter_var($email,FILTER_VALIDATE_EMAIL) ) {
   $error = true;
   $emailError = "Please enter valid email address.";
  }
  
  if(empty($pass)){
   $error = true;
   $passError = "Please enter your password.";
  }
  
  // if there's no error, continue to login
  if (!$error) {
   
   $password = hash('sha256', $pass); // password hashing using SHA256
  
   $res=mysql_query("SELECT userId, userName, userPass FROM users WHERE userEmail='$email'");
   $row=mysql_fetch_array($res);
   $count = mysql_num_rows($res); // if uname/pass correct it returns must be 1 row
   
   if( $count == 1 && $row['userPass']==$password ) {
    $_SESSION['user'] = $row['userId'];
	$_SESSION['uname']=$row['userName'];
    header("Location: index.php");
   } else {
    $errMSG = "Incorrect Credentials, Try again...";
	echo "<script>alert('wrong credentials')</script>";
   }
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
<li><a class="active" href="index.php">home</a></li>
      <li><a href="about.html">about</a></li>
      <li><a href="services.html">services</a></li>
      <li><a href="login.php">login</a></li>
      <li><a href="clients.html">clients</a></li>
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
    <input type="text" name="email" placeholder="Email">
    <input type="password" name="pass" placeholder="Password">
    <input type="submit" name="login" class="login login-submit" value="login">
  </form>

  <div class="login-help">
    <a href="register.php">Register</a>
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
