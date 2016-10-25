<?php
 ob_start();
 session_start();
 include_once 'connect.php';

 $error = false;

 if ( isset($_POST['name']) ) {
  
  // clean user inputs to prevent sql injections
  $name = trim($_POST['name']);
  $name = strip_tags($name);
  $name = htmlspecialchars($name);
  
  $email = trim($_POST['email']);
  $email = strip_tags($email);
  $email = htmlspecialchars($email);
  
  $pass = trim($_POST['pass']);
  $pass = strip_tags($pass);
  $pass = htmlspecialchars($pass);
  
  // basic name validation
  if (empty($name)) {
   $error = true;
   $nameError = "Please enter your full name.";
  } else if (strlen($name) < 3) {
   $error = true;
   $nameError = "Name must have atleat 3 characters.";
  } else if (!preg_match("/^[a-zA-Z ]+$/",$name)) {
   $error = true;
   $nameError = "Name must contain alphabets and space.";
  }
  
  //basic email validation
  if ( !filter_var($email,FILTER_VALIDATE_EMAIL) ) {
   $error = true;
   $emailError = "Please enter valid email address.";
  } else {
   // check email exist or not
   $query = "SELECT userEmail FROM users WHERE userEmail='$email'";
   $result = mysql_query($query);
   $count = mysql_num_rows($result);
   if($count!=0){
    $error = true;
    $emailError = "Provided Email is already in use.";
   }
  }
  // password validation
  if (empty($pass)){
   $error = true;
   $passError = "Please enter password.";
  } else if(strlen($pass) < 6) {
   $error = true;
   $passError = "Password must have atleast 6 characters.";
  }
  
  // password encrypt using SHA256();
  $password = hash('sha256', $pass);
  $phno=$_POST['phno'];
  // if there's no error, continue to signup
  if( !$error ) {
   $query = "INSERT INTO users(userName,userEmail,userPass,phone) VALUES('$name','$email','$password','$phno')";
   $res = mysql_query($query);
    
   if ($res) {
    $errTyp = "success";
    $errMSG = "Successfully registered, you may login now";
    unset($name);
    unset($email);
    unset($pass);
	unset($phno);
    header("Location: login.php");
   } else {
    $errTyp = "danger";
    $errMSG = "Something went wrong, try again later..."; 
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
	<style type="text/css">
    #wrapper {
        width:450px;
        margin:0 auto;
        font-family:Verdana, sans-serif;
    }
    legend {
        color:#0481b1;
        font-size:16px;
        padding:0 10px;
        background:#fff;
        -moz-border-radius:4px;
        box-shadow: 0 1px 5px rgba(4, 129, 177, 0.5);
        padding:5px 10px;
        text-transform:uppercase;
        font-family:Helvetica, sans-serif;
        font-weight:bold;
    }
    fieldset {
        border-radius:4px;
        background: #fff; 
        background: -moz-linear-gradient(#fff, #f9fdff);
        background: -o-linear-gradient(#fff, #f9fdff);
        background: -webkit-gradient(linear, 0% 0%, 0% 100%, from(#fff), to(#f9fdff)); /
        background: -webkit-linear-gradient(#fff, #f9fdff);
        padding:20px;
        border-color:rgba(4, 129, 177, 0.4);
    }
    input,
    textarea {
        color: #373737;
        background: #fff;
        border: 1px solid #CCCCCC;
        color: #aaa;
        font-size: 14px;
        line-height: 1.2em;
        margin-bottom:15px;

        -moz-border-radius:4px;
        -webkit-border-radius:4px;
        border-radius:4px;
        box-shadow: 0 1px 2px rgba(0, 0, 0, 0.1) inset, 0 1px 0 rgba(255, 255, 255, 0.2);
    }
    input[type="text"],
    input[type="password"]{
        padding: 8px 6px;
        height: 22px;
        width:280px;
    }
    input[type="text"]:focus,
    input[type="password"]:focus {
        background:#f5fcfe;
        text-indent: 0;
        z-index: 1;
        color: #373737;
        -webkit-transition-duration: 400ms;
        -webkit-transition-property: width, background;
        -webkit-transition-timing-function: ease;
        -moz-transition-duration: 400ms;
        -moz-transition-property: width, background;
        -moz-transition-timing-function: ease;
        -o-transition-duration: 400ms;
        -o-transition-property: width, background;
        -o-transition-timing-function: ease;
        width: 380px;
        
        border-color:#ccc;
        box-shadow:0 0 5px rgba(4, 129, 177, 0.5);
        opacity:0.6;
    }
    input[type="submit"]{
        background: #222;
        border: none;
        text-shadow: 0 -1px 0 rgba(0,0,0,0.3);
        text-transform:uppercase;
        color: #eee;
        cursor: pointer;
        font-size: 15px;
        margin: 5px 0;
        padding: 5px 22px;
        -moz-border-radius: 4px;
        border-radius: 4px;
        -webkit-border-radius:4px;
        -webkit-box-shadow: 0px 1px 2px rgba(0,0,0,0.3);
        -moz-box-shadow: 0px 1px 2px rgba(0,0,0,0.3);
        box-shadow: 0px 1px 2px rgba(0,0,0,0.3);
    }
    textarea {
        padding:3px;
        width:96%;
        height:100px;
    }
    textarea:focus {
        background:#ebf8fd;
        text-indent: 0;
        z-index: 1;
        color: #373737;
        opacity:0.6;
        box-shadow:0 0 5px rgba(4, 129, 177, 0.5);
        border-color:#ccc;
    }
    .small {
        line-height:14px;
        font-size:12px;
        color:#999898;
        margin-bottom:3px;
    }
	</style>
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
  
   <div id="wrapper">
        <form  method="post">
            <fieldset>
                <legend>Register Form</legend>
                <div>
                    <input type="text" name="name" placeholder="Name"/>
                </div>
                <div>
                    <input type="text" name="email" placeholder="Email"/>
                </div>
				<div>
                    <input type="password" name="pass" placeholder="Password"/>
                </div>
                   <div>
                    <input type="text" name="phno" placeholder="Phone no"/>
                </div>
                <input type="submit" name="submit" value="Send"/>
            </fieldset>    
        </form>
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
