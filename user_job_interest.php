<?php
require 'model/database.php';
require 'model/user_db.php';
require 'model/job_post_db.php';

session_start();

if (isset($_SESSION["sessionMessage"])) 
 {
    echo $_SESSION["sessionMessage"]; 
}
unset($_SESSION["sessionMessage"]);
?>

<html>
  <head>
<title>Job interest</title>
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
<script>
function myAlert() {
    alert("Job interest is upddated successfully.Enjoy !!");
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
    <h2> Show your job interest here</h2>
</div>
 		<?php
              if (isset($_SESSION["masterdetails"])) 
              {
                        
               }
           else {
                        $_SESSION["sessionMessage"] = "Session expired";
                        header("Location: login.php");
                    }
		?> 

                <form action="?action=user_job_interest" method="post">
     <?php 
     
        echo "<table>"; 
       echo "<tr>";
       echo "<th>Job Id</th>";
       echo "<th>Job group</th>";
       echo "<th>Job position</th>";
       echo "<th>Job Descriptions</th>";
       echo "<th>Job Responsibilities</th>";
       echo "<th>Job Requirements</th>";
       echo "<th>Job Salary</th>";
       echo "<th>Job Interest</th>";
       
      
        echo "<tr>";
        
        
            $jobdetails = view_job_posted();
        
             $job_num_row= get_job_group_row_num();

           
            
            for ($row = 0; $row < $job_num_row; $row++) 
                {    ?> <br/><?php
                    echo "<tr>";
                      for ($col = 0; $col < 7; $col++)
                            {
                                echo "<td>".$jobdetails[$row][$col]."</td>";  
                            
                             }
                      for ($col = 0; $col < 1; $col++)
                            {
                          echo "<td>";
                           $interest_id = $jobdetails[$row][$col]; 
                          
                           
                             $int_status = check_interest_in_job_show($interest_id);
                             
                             $int_st = $int_status["interest_status"];
                          ?><input type="checkbox" name="myinterest" value="interested" <?php echo ($int_st=='interested')?'checked':'' ?>> Interested<?php 
                          echo "</td>";
                            
                             }
                    echo "</tr>";
                    }
            echo "</table>"; 

       
   
    ?>
     <br/><br/><br/>
     
     <input type="submit" name="submit" value="Submit" onclick="myAlert();"style="margin-left: 5em"class="submitcss"></h2>
    <input type="button" name="cancel" value="Cancel" class="cancelcss" onclick="window.location='user_page.php'" />
    
  <?php   
  
        if (isset($_POST["submit"]))
            {
                $myinterest = "interested";
                $job_id = 101;
                    
               $status = insert_my_interest_status($myinterest,$job_id);
               header("Location: user_page.php");
               
            }
    
 ?>   
   </form>                           
	<br/><br/><br/>				
</body>
</html>