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
<title>Report</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="../style/style.css" type="text/css" />
<link rel="stylesheet" href="../style/table.css" type="text/css" />
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
</head>
<body>
 
   
<div id="wrapper">
  <div id="head">
    <div id="header">
      <div id="menu">  
        <ul id="menu_list">            
          <li><a href="index.php">Home</a></li>
          <li><a href="report.php">Back</a></li>
          <li><a href="../index.php">Logout</a></li>
        </ul>
      </div>
    </div>
  </div>
  </div>

<div class="example1">
    <h2> This is Work Experience report page</h2>
</div>
  <br/>         
    <button onclick="printFunction()" class="submitcss" style="margin-left:70em">Print</button>   
 <br/>
    <form action="?action=work_report_display" method="post"><br />
     
        
        
        <h3>Company name: <input type="text" name="w_cname" class="textboxcss" style="margin-left: 3em"></h3>  
        <h3>  Company location: <input type="text" name="w_cloc"class="textboxcss" style="margin-left: 2em"></h3> 
        <h3>  Date of joining: <input type="text" name="w_jdate"class="textboxcss" style="margin-left: 4em"></h3>
        <h3>  Work position: <input type="text" name="w_pos"class="textboxcss" style="margin-left: 4em"></h3>
            
       <br/><br/><input type="submit" name="submit" value="submit" class="submitcss">
        <input type="button" name="cancel" value="Cancel" class="cancelcss"onclick="window.location='report.php'" />  
       
       <?php 
        if (isset($_POST["w_cname"]))
        {
              $w_cname = $_POST['w_cname'];
            $sdetails = fetch_report_of_work($w_cname);
                $work_row_num = fetch_report_of_work_row_num($w_cname);
            
          
       echo "<table>"; 
       echo "<tr>";
       echo "<th>Student Id</th>";
       echo "<th>First Name</th>";
       echo "<th>Middle Name</th>";
       echo "<th>Last Name</th>";
       echo "<th>Email</th>";
       echo "<th>Telephone</th>";
       echo "<th>Gender</th>";
       echo "<th>Status</th>";
       echo "<th>Registration Sem</th>";
       echo "<th>Registration Year</th>";
          
       echo "</tr>";      
                
                
            for ($row = 0; $row < $work_row_num; $row++) 
                {     
                   ?> <br/><?php
                   
                          $myid = $sdetails[$row][1];
                        
                            $student_det = get_info_by_stu_id($myid);
                   
                        echo "<tr>";
                            echo "<td>" . $student_det["stu_id"] . "</td>"
                                     . "<td>" . $student_det["stu_first_name"]. "</td>"
                                     . "<td>" .$student_det["stu_middle_name"] . "</td>"
                                     . "<td>" . $student_det["stu_last_name"] . "</td>"
                                     ."<td>" . $student_det["stu_email"] . "</td>"
                                     ."<td>" . $student_det["stu_tel"] . "</td>"
                                     ."<td>" . $student_det["stu_gender"] . "</td>"
                                     ."<td>" . $student_det["stu_status"] . "</td>"
                                      ."<td>" . $student_det["stu_reg_sem"] . "</td>"
                                      ."<td>" . $student_det["stu_year"] . "</td>";
                                
                                echo "</tr>";        
                               
                           
   
                    }
                     echo "</table>";
                   
        }
?>

  </form>
</body>
</html>



