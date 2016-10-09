<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<?php
require 'model/database.php';
require 'model/user_db.php';
require 'model/job_post_db.php';


?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Index main page</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="style/style.css" type="text/css" />
<link rel="stylesheet" type="text/css" href="style/jquery-foxiblob-0.1.css" />
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
            
          <li class="active"><a href="index.php">Home</a></li>
          <li><a href="about.php">Know about us</a></li>
          <li><a href="contact.php">Contact</a></li>
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
          <img src="images/main_image.png" alt="" width="600" height="400" />
          
          <h2 style="color: blue">Welcome to Intership Management Information System(iMIS)</h2>
        <p>iMIS has continued to be recognized for its job search matching technology that joins job seekers with job opportunities.</p>
        
      </div>
      <div id="sidebar" class="rounded">
        <h2>News &amp; Events</h2>
        <div class="scroll-up">
            <p> <h3>
                
                <?php 
                $news_status = get_news();
         ?> Title:<br/> <?php        echo $news_status["subject"]; ?> <br/><br/> <?php 
           ?> Message:<br/> <?php      echo $news_status["news"];
                
          
                 ?> 
                
                
                
                </h3></p>
          
            
            
<!--        <p><h3>In order to enroll in the Internship for the MAC program you must obtain a work permit<br/><br/> 
            So, please check your email for further details.</h3></p>-->
        </div>
        
      </div>
    </div>
    </div>
    <!--end bottom-->
  </div>
  <!--end container-->
  <div id="footer">
    <div id="footer-container">
      <div id="address">
       
      </div>
      <div id="menu-bottom">
        
        <p>Design by Jay &amp; Rj</p>
      </div>
    </div>
  </div>
  <!--end footer-->
</div>
<!--end wrapper-->
</body>
</html>
