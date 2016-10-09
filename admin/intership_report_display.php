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
<link rel="stylesheet" href="../style/mytable.css" type="text/css" />
<link rel="stylesheet" type="text/css" href="../style/jquery-foxiblob-0.1.css" />
<script type="text/javascript" src="../jquery/jquery-1.3.2.min.js"></script>
<script type="text/javascript" src="../jquery/jquery-foxiblob-0.1.min.js"></script>
<script type="text/javascript" src="../jquery/jquery.corners.min.js"></script>
<meta charset='utf-8'>
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="styles.css">
   <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
   <script src="script.js"></script>
   <script>
function printFunction() {
    window.print();
}
 </script> 
  
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
          <li><a href="report.php">Back</a></li>
          <li><a href="../index.php">Logout</a></li>
        </ul>
      </div>
    </div>
  </div>
  </div>

<div class="example1">
    <h2> This is Intership report page</h2>
</div>
 <br/>         
    <button onclick="printFunction()" class="submitcss" style="margin-left:70em">Print</button>   
 <br/>
    <form action="?action=intership_report_display" method="post"><br />
     
     
        <h3> Select Types of Intership:
            <div class="dropdown">
                <select name="intership_type" class="dropbtn">
                    <option name="all" class="dropdown-content">All</option>
                  <option name="company" class="dropdown-content">Company</option></li>
                   <option name="startup company" class="dropdown-content">Startup Company</option> 
                   <option name="research project" class="dropdown-content">Research Project</option>
                    <option name="mac project" class="dropdown-content">MAC Project</option>
                    <option name="other" class="dropdown-content">Other</option>      
                </select></h3> 
                </div>    
                    <h3>Company name:&nbsp;&nbsp;<input class="textboxcss" type="text" name="c_name"></h3>
                    <h3>City: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input class="textboxcss" type="text" name="c_city"></h3> 
                    <h3> Country:&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <input class="textboxcss" type="text" name="c_country"></h3>
                        <h3>Intership Status:
           <input type="radio"  name="int_status" value="all"> All
           <input type="radio"  name="int_status" value="available" checked=""> Available
           <input type="radio" name="int_status" value="hired" >Hired </h3><br/> 
         
       
           <input type="submit" name="submit" class="submitcss" value="submit" style="margin-left: 8em">
           <input type="button" name="cancel" value="Cancel" class="cancelcss"onclick="window.location='report.php'" />  
       
       <?php 
        if (isset($_POST["intership_type"]) || isset($_POST["int_status"]))
        {
            $intership_type = $_POST['intership_type'];
            $c_name = $_POST['c_name'];
            $c_city = $_POST['c_city'];
            $c_country = $_POST['c_country'];
            $int_status = $_POST['int_status'];
            
            
            $idetails = fetch_report_of_intership($intership_type,$c_name,$c_city,$c_country,$int_status);
             $int_num_row = fetch_report_of_intership_row_num($intership_type,$c_name,$c_city,$c_country,$int_status);
            
            
           ?>
       <br/>
       <?php
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
           
        
            for ($row = 0; $row <  $int_num_row; $row++) 
                {       ?> <br/><?php
                
                        $myid = $idetails[$row][0];            
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



