<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php
require '../model/database.php';
require '../model/user_db.php';

session_start();

if (isset($_SESSION["sessionMessage"])) 
 {
    echo $_SESSION["sessionMessage"]; 
}
unset($_SESSION["sessionMessage"]);
?>

<html >
<head>
<title>REGISTRATION FORM for Student</title>
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
          <li><a href="../index.php">Logout</a></li>
        </ul>
      </div>
    </div>
  </div>
  </div>

    
    <br/>
    <h2>Welcome <?php
                    if (isset($_SESSION["masterdetails"])) {
                        $masterdetails = $_SESSION["masterdetails"];
                        echo $masterdetails["first_name"] . " " . $masterdetails["last_name"];
                    }
			?>
    </h2>
		<br />	
                <div>
                    <img  src="../images/admin_image.png" align="left" width="200px" height="200px"></img>  
                 </div>
                   
                   <div style="width: 100px; float:left; height:100px; margin:40px">
                       <h3 > See Reports: &nbsp;&nbsp;&nbsp;<br/> </h3>
                       <a href="report.php">
                        <img src="../images/report_image.png" class="btn-social" width="100" height="100">
                    </a></div>
                
                    <div style="width: 100px; float:left; height:100px; margin:30px">
                       <h3> Manage job posting: &nbsp;&nbsp;&nbsp;<br/> </h3>
                       <a href="job_post.php">
                           <img src="../images/job_posting.jpg" class="btn-social" width="100" height="100">
                    </a></div>
                
                <div style="width: 100px; float:left; height:100px; margin:30px">
                       <h3> Manage student details: &nbsp;&nbsp;&nbsp;<br/> </h3>
                       <a href="admin_manage_students.php">
                           <img src="../images/student_image.gif" class="btn-social" width="100" height="100">
                    </a></div>
                
                 <div style="width: 100px; float:left; height:100px; margin:30px">
                       <h3> Post news here: &nbsp;&nbsp;&nbsp;<br/> </h3>
                       <a href="news.php">
                           <img src="../images/news.jpg" class="btn-social" width="100" height="100">
                    </a></div>
 
</body>

</html>