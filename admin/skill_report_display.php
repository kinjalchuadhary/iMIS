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
    <h2> This is Skill report page</h2>
</div>
 <br/>         
    <button onclick="printFunction()" class="submitcss" style="margin-left:70em">Print</button>   
 <br/>
 
    <form action="?action=skill_report_display" method="post"><br />
     
        
        <h2 style="margin-left: 2em">Technical Skills: </h2>

        <h3 style="margin-left: 10em">Skill name: <input type="text" name="t_name" class="textboxcss" ></h3>
         <h3 style="margin-left: 10em">Skill level: <input type="radio" name="t_level" value="not at all competent"> Not at all competent &nbsp;
                     <input type="radio" name="t_level" value="little competent">Little competent&nbsp;
                     <input type="radio" name="t_level" value="moderately competent">Moderately competent&nbsp;
                     <input type="radio" name="t_level" value="extremely competent">Extremely competent</h3>
        
          <h2 style="margin-left: 2em" >CMS Skills: </h2>

          <h3 style="margin-left: 10em">Skill name: <input type="text" name="cms_name" class="textboxcss"></h3>
         <h3 style="margin-left: 10em">Skill level: <input type="radio" name="cms_level" value="not at all competent"> Not at all competent &nbsp;
                     <input type="radio" name="cms_level" value="little competent">Little competent&nbsp;
                     <input type="radio" name="cms_level" value="moderately competent">Moderately competent&nbsp;
                     <input type="radio" name="cms_level" value="extremely competent">Extremely competent</h3>  
        
                     
          <h2 style="margin-left: 2em">Operating Systems:</h2>

         <h3 style="margin-left: 10em">Skill name: <input type="text" name="os_name" class="textboxcss"></h3>
         <h3 style="margin-left: 10em">Skill level: <input type="radio" name="os_level" value="not at all competent"> Not at all competent &nbsp;
                     <input type="radio" name="os_level" value="little competent">Little competent&nbsp;
                     <input type="radio" name="os_level" value="moderately competent">Moderately competent&nbsp;
                     <input type="radio" name="os_level" value="extremely competent">Extremely competent</h3> 
                     
       
            
         <br/><br/><input type="submit" name="submit" value="submit" class="submitcss" style="margin-left: 8em">
        <input type="button" name="cancel" value="Cancel" class="cancelcss"onclick="window.location='report.php'" />  
       
       <?php 
        if (isset($_POST["t_level"]))
        {
         
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
 
            
              $t_level = $_POST['t_level'];

            $sdetails = fetch_report_of_skill($t_level);
            $sk_row_num = fetch_report_of_skill_row_num($t_level);
            
            for ($row = 0; $row <  $sk_row_num; $row++) 
                {       ?> <br/><?php
                        
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

</html>



