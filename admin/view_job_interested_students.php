<?php
require '../model/database.php';
require '../model/user_db.php';
require '../model/job_post_db.php';
require '../model/manage_students_db.php';
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
<title>post job</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="../style/style.css" type="text/css" />
<link rel="stylesheet" href="../style/table.css" type="text/css" />
<link rel="stylesheet" type="text/css" href="../style/jquery-foxiblob-0.1.css" />
<link rel="stylesheet" href="../style/mytable.css" type="text/css" />
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
          <li><a href="job_post.php">Back</a></li>
          <li><a href="../index.php">Logout</a></li>
        </ul>
      </div>
    </div>
  </div>
  </div>

<div class="example1">
    <h2> Job interested students details</h2>
</div>
  
    <br/>         
    <button onclick="printFunction()" class="submitcss" style="margin-left:70em">Print</button>   
 <br/><br/><br/><br/><br/><br/>
 
 <?php 
    if (1)
    {
       echo "<table>"; 
       echo "<tr>";
       echo "<th>Student Id</th>";
       echo "<th>First Name</th>";
       echo "<th>Last Name</th>";
      echo "<th>Email</th>"; 
      
       echo "<th>Job Id</th>";
       echo "<th>Job group</th>";
       echo "<th>Job position</th>";
     
          
       echo "</tr>";
       

             
          
       ?> <br/><?php
                
                         
                         $myid=1045;
                        $student_det = get_info_by_stu_id($myid);
                           echo "<tr>";
                            echo "<td>" . $student_det["stu_id"] . "</td>"
                                     . "<td>" . $student_det["stu_first_name"]. "</td>"                                    
                                     . "<td>" . $student_det["stu_last_name"] . "</td>"
                                     ."<td>" . $student_det["stu_email"] . "</td>" 
                                    ?> <td> 101 </td> <?php 
                                    ?> <td> web development </td> <?php
                                    ?> <td>  web designer </td> <?php ;                                             ;                                                                             
                                echo "</tr>";
                              
                           echo "<tr>";
                            echo "<td>" . $student_det["stu_id"] . "</td>"
                                     . "<td>" . $student_det["stu_first_name"]. "</td>"                                    
                                     . "<td>" . $student_det["stu_last_name"] . "</td>"
                                     ."<td>" . $student_det["stu_email"] . "</td>" 
                                    ?> <td> 103 </td> <?php 
                                    ?> <td> mobile development </td> <?php
                                    ?> <td>  ios developer </td> <?php ;                                             ;                                                                             
                                echo "</tr>";     
                                
                         $myid=1046;
                        $student_det = get_info_by_stu_id($myid);   
                                echo "<tr>";
                            echo "<td>" . $student_det["stu_id"] . "</td>"
                                     . "<td>" . $student_det["stu_first_name"]. "</td>"                                    
                                     . "<td>" . $student_det["stu_last_name"] . "</td>"
                                     ."<td>" . $student_det["stu_email"] . "</td>" 
                                    ?> <td> 102 </td> <?php 
                                    ?> <td> testing </td> <?php
                                    ?> <td>  senior engineer </td> <?php ;                                             ;                                                                             
                                echo "</tr>"; 
                                
                            $myid=1050;
                        $student_det = get_info_by_stu_id($myid);   
                                echo "<tr>";
                            echo "<td>" . $student_det["stu_id"] . "</td>"
                                     . "<td>" . $student_det["stu_first_name"]. "</td>"                                    
                                     . "<td>" . $student_det["stu_last_name"] . "</td>"
                                     ."<td>" . $student_det["stu_email"] . "</td>" 
                                    ?> <td> 102 </td> <?php 
                                    ?> <td> testing </td> <?php
                                    ?> <td>  senior engineer </td> <?php ;                                             ;                                                                             
                                echo "</tr>";      
                               

            
     
           echo "</table>"; 
    }
   
    
    ?>
 
</body>
</html>