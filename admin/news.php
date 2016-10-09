<?php
require '../model/database.php';
require '../model/user_db.php';
require '../model/report_db.php';
require '../model/job_post_db.php';

session_start();

if (isset($_SESSION["sessionMessage"])) 
 {
    echo $_SESSION["sessionMessage"]; 
}
unset($_SESSION["sessionMessage"]);
?>

<html>
    <head>
<title>Report</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="../style/style.css" type="text/css" />
<link rel="stylesheet" href="../style/table.css" type="text/css" />
<link rel="stylesheet" href="../style/contact.css" type="text/css" />  
<link rel="stylesheet" type="text/css" href="../style/jquery-foxiblob-0.1.css" />
<!--<script type="text/javascript" src="../jquery/jquery-1.3.2.min.js"></script>
<script type="text/javascript" src="../jquery/jquery-foxiblob-0.1.min.js"></script>
<script type="text/javascript" src="../jquery/jquery.corners.min.js"></script>-->
<meta charset='utf-8'>
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="styles.css">
   <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
   <script src="script.js"></script>
   
   <script type="text/javascript">$(document).ready(function(){ $('#menu_list').foxiblob({opacity:0.6}); });</script>
<script>$(document).ready( function(){ $('.rounded').corners("10px"); });</script>
<script>
function printFunction() {
    window.print();
}
 </script> 
 <script>
function myAlert() {
    alert("News has been posted");
}
 </script> 
</head>
<body>
 
   
<div id="wrapper">
  <div id="head">
    <div id="header">
      <div id="menu">  
        <ul id="menu_list">            
          <li><a href="index.php">Home</a></li>
          <li><a href="index.php">Back</a></li>
          <li><a href="../index.php">Logout</a></li>
        </ul>
      </div>
    </div>
  </div>
  </div>


  <br/>    
  
     
        <div id="form-main">
  <div id="form-div">
    <form class="form" id="form1" action="?action=news" method="post">
      
      <p class="name">
          <input type="text" name="mysub" required="" class="feedback-input" placeholder="Subject" id="name" />
      </p>
     
      
      <p class="text">
          <textarea  name="mymsg" class="feedback-input" required="" id="comment" placeholder="Message"></textarea>
      </p>
      
      
      <div class="submit">
          <input type="submit" value="Submit" onclick="myAlert();" id="button-blue"/>
        <div class="ease"></div>
      </div>
  
      <?php
       if (isset($_POST["mysub"]))
       {
           $mysub= $_POST["mysub"];
           $mymsg= $_POST["mymsg"];
           $id = 1;
           
         
          $status= insert_news($mysub,$mymsg,$id);
                    
                
       }
      
      ?>
      
    </form>
  </div>
        </div>
  
  
</body>
</html>