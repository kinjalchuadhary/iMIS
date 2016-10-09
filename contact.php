<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>About</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="style/style.css" type="text/css" />
<link rel="stylesheet" type="text/css" href="style/jquery-foxiblob-0.1.css" />
<link rel="stylesheet" href="style/contact.css" type="text/css" />
<script type="text/javascript" src="jquery/jquery-1.3.2.min.js"></script>
<script type="text/javascript" src="jquery/jquery-foxiblob-0.1.min.js"></script>
<script type="text/javascript" src="jquery/jquery.corners.min.js"></script>
</head>
<body>
<script type="text/javascript">$(document).ready(function(){ $('#menu_list').foxiblob({opacity:0.6}); });</script>
<script>$(document).ready( function(){ $('.rounded').corners("10px"); });</script>
<div id="wrapper">
  <div id="head">
    <div id="header">

      <!--end logo-->
      <div id="menu">
         
        <ul id="menu_list">
            
          <li ><a href="index.php">Home</a></li>
          <li ><a href="about.php">Know about us</a></li>
          <li class="active"><a href="contact.php">Contact</a></li>
          <li><a href="login.php">Login</a></li>
        </ul>
      </div>
      <!--end menu-->
    </div>
      
    <!--end header-->
  </div>
  <!--end head-->
  
  <div id="container">
      
    <div id="top">
      <div id="main">
         
       
        
        <div id="form-main">
  <div id="form-div">
    <form class="form" id="form1">
      
      <p class="name">
        <input name="name" type="text" class="validate[required,custom[onlyLetter],length[0,100]] feedback-input" placeholder="Name" id="name" />
      </p>
      
      <p class="email">
        <input name="email" type="text" class="validate[required,custom[email]] feedback-input" id="email" placeholder="Email" />
      </p>
      
      <p class="text">
        <textarea name="text" class="validate[required,length[6,300]] feedback-input" id="comment" placeholder="Message"></textarea>
      </p>
      
      
      <div class="submit">
        <input type="submit" value="SEND" id="button-blue"/>
        <div class="ease"></div>
      </div>
    </form>
  </div>
            
            
      
      </div>
    </div>
  </div>
</body>
</html>
