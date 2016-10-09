<?php
require 'model/user_db.php';

session_start();

if (isset($_SESSION["sessionMessage"])) 
 {
    echo $_SESSION["sessionMessage"]; 
}
unset($_SESSION["sessionMessage"]);
?>

<html>
  <head>
<title>post job</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="style/style.css" type="text/css" />
<link rel="stylesheet" href="style/table.css" type="text/css" />
<link rel="stylesheet" type="text/css" href="style/jquery-foxiblob-0.1.css" />
<link rel="stylesheet" href="style/mytable.css" type="text/css" />
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
function deleteFunction() {
    alert("Job post deleted successfully");
}
</script>
  </head>
	
<body>
 <div id="wrapper">
  <div id="head">
    <div id="header">
      <div id="menu">  
        <ul id="menu_list">            
            <li><a href="user_page.php">Home</a></li>
          <li><a href="user_page.php">Back</a></li>
          <li><a href="index.php">Logout</a></li>
        </ul>
      </div>
    </div>
  </div>
  </div>

<div class="example1">
    <h2> This is student page</h2>
</div>
  
   
  
  
 <h2 style="margin-left: 3em; font-family:sans-serif"> Welcome: <?php
                    if (isset($_SESSION["masterdetails"])) {
                        $masterdetails = $_SESSION["masterdetails"];
                        echo $masterdetails["first_name"] . " " . $masterdetails["last_name"];
                    }
			?>
  </h2>		
                
		<?php
              if (isset($_SESSION["masterdetails"])) 
              {
                        
               }
           else {
                        $_SESSION["sessionMessage"] = "Session expired";
                        header("Location: login.php");
                    }
		?> 
		<br />
               <img src="images/user_logo.jpg" width="200px" height="200px">
                <h2 style="margin-left: 20em">Change your profile: <a href="user_edit_profile.php" class="submitcss"style="margin-left: 2em">Click here </a> </h2><br/><br/>
                <h2 style="margin-left: 21em">Show Job interest:<a href="user_job_interest.php" class="submitcss"style="margin-left: 2em">Click here </a> </h2>
                      
                
					
					
	</body>
</html>