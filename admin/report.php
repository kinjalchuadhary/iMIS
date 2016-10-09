

<?php
require '../model/database.php';
require '../model/user_db.php';
require '../model/report_db.php';

session_start();

if (isset($_SESSION["sessionMessage"])) 
 {
    echo $_SESSION["sessionMessage"]; 
}
unset($_SESSION["sessionMessage"]);
?>

<html>
<head>
<title>Report></title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="../style/style.css" type="text/css" />
<link rel="stylesheet" type="text/css" href="../style/jquery-foxiblob-0.1.css" />
<script type="text/javascript" src="../jquery/jquery-1.3.2.min.js"></script>
<script type="text/javascript" src="../jquery/jquery-foxiblob-0.1.min.js"></script>
<script type="text/javascript" src="../jquery/jquery.corners.min.js"></script>

</head>
<body>
    <script type="text/javascript">$(document).ready(function(){ $('#menu_list').foxiblob({opacity:0.6}); });</script>
<script>$(document).ready( function(){ $('.rounded').corners("10px"); });</script>
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
	
    &nbsp;&nbsp;&nbsp; <h2><a href="intership_report_display.php" style="margin-left: 5em"class="linkclass">Report by Intership</a><br /><br /></h2>
                
    &nbsp;&nbsp;&nbsp; <h2><a href="student_report_display.php" style="margin-left: 5em"class="linkclass">Report by Student details</a><br /><br /></h2>
  
    &nbsp;&nbsp;&nbsp; <h2><a href="education_report_display.php" style="margin-left: 5em"class="linkclass">Report by Education details</a><br /><br /></h2>
   
    &nbsp;&nbsp;&nbsp; <h2><a href="work_report_display.php" style="margin-left: 5em"class="linkclass">Report by Work details</a><br /><br /></h2>
             
    &nbsp;&nbsp;&nbsp; <h2><a href="skill_report_display.php" style="margin-left: 5em"class="linkclass">Report by Skills details</a><br /><br /></h2>
		
    &nbsp;&nbsp;&nbsp; <h2><a href="advance_report_display.php" style="margin-left: 5em"class="linkclass">Advanced Report</a><br /><br /></h2>

</body>

</html>