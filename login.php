
<!DOCTYPE html>
<?php

require 'model/database.php';
require 'model/user_db.php';
session_start();
if (isset($_SESSION["masterdetails"])) 
{
    $masterdetails = $_SESSION["masterdetails"];
    
}
unset($_SESSION["masterdetails"]);
unset($_SESSION["student_details"]);


?>
<html>
<head>
<title>Financial Services</title>
                 <meta charset="utf-8">
		<link href="style/style1.css" rel='stylesheet' type='text/css' />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
		<!--webfonts-->
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text.css'/>
		<!--//webfonts-->
               

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
            
          <li ><a href="index.php">Home</a></li>
          <li><a href="about.php">Know about us</a></li>
          <li><a href="contact.php">Contact</a></li>
          <li class="active"><a href="login.php">Login</a></li>
        </ul>
      </div>
      <!--end menu-->
    </div>
      
    <!--end header-->
  </div>
  <!--end head-->
    
    
        
	<div class="main">
		<form action="?action=login" method="post">
                    <?php
                 if (isset($_SESSION["sessionMessage"]))
						 {
                            echo $_SESSION["sessionMessage"];
                            $_SESSION["sessionMessage"] = null;
                        }
                ?>
    		<h1> <lable> Login </lable> </h1>
  			<div class="inset">
	  			<p>
	    		 <label for="email">EMAIL ADDRESS   </label>
   	 			<input name="email" type="text" size="50" maxlength="50" placeholder="E-mail address" />
				</p>
  				<p>
				    <label for="password">PASSWORD</label>
				    <input name="password" type="password" size="50" maxlength="50" placeholder="Password" />
  				</p>
 			 </div>
 	 
			  <p class="p-container">
			   
			    <input type="submit" value="Login"/>
			  </p>
                          
                          <?php
                    if (isset($_POST["email"]) && isset($_POST["password"])) {

                           $email = $_POST["email"];
                          $password = $_POST["password"];

                               $masterdetails = get_user_by_email($email);

                             if ($masterdetails != null && $masterdetails["password"] == $password)
                                    {
                                        $_SESSION["masterdetails"] = $masterdetails;  
                                   if ($masterdetails["IsAdmin"]) 
                                   {
                                   header("Location: admin/");
                                     }
				 else {
                                     header("Location: user_page.php");
                                            }
                                     } 
                                     else {
                               echo "<span style='color: red; font-family: Calibri; font-size: 16px;'>Invalid username or password</span>";
                                     }
                                   }
								?>
		</form>
	</div>  
			
</body>
</html>