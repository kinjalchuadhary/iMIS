<?php
require '../model/database.php';
require '../model/user_db.php';
require '../model/report_db.php';
require '../model/manage_students_db.php';

session_start();

if (isset($_SESSION["sessionMessage"])) 
 {
    echo $_SESSION["sessionMessage"]; 
}
unset($_SESSION["sessionMessage"]);
?>

<html>
 <head>
<title>manage student</title>
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
<script>
function insertFunction() {
    alert("student details have been entered successfully");
}
</script>
<script>
       function isNumber(evt) {
    evt = (evt) ? evt : window.event;
    var charCode = (evt.which) ? evt.which : evt.keyCode;
    if (charCode > 31 && (charCode < 48 || charCode > 57)) {
        return false;
    }
    return true;
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

<div class="example1">
    <h2> You can manage student's details here</h2>
</div>
          
     
  
  
     <br/>         
    <button onclick="printFunction()" class="submitcss" style="margin-left:70em">Print</button>             
    <form action="?action=index" method="post"><br />
         
      
        
        <h2 style="margin-left: 2em" >Enter new User Information: </h2><br />
        <h3 style="margin-left: 7em">Student Id(*): <input type="text" maxlength="4" pattern="\d{4}" name="usid" required="" placeholder="Enter student id between 1000 to 9999"class="textboxcss" id="extra7" onkeypress="return isNumber(event)" title="Please enter exactly 4 digits from 1000 to 2000"></h3>
        <h3 style="margin-left: 7em">First Name: <input type="text" name="ufname" placeholder="Enter first name"required="" class="textboxcss"></h3>
        <h3 style="margin-left: 7em"> Last Name: <input type="text" name="ulname"placeholder="enter last name" required="" class="textboxcss"></h3>
        <h3 style="margin-left: 7em">Email Id: &nbsp;<input type="email" name="uemail" placeholder="enter email"required="" class="textboxcss"></h3>
        <h3 style="margin-left: 7em">Password:<input type="password" name="upassword" placeholder="enter password"required="" class="textboxcss"></h3>

 <br/>
 <input type="submit" name="submit" value="submit" style="margin-left: 5em"class="submitcss">
    <button type="reset" value="Reset" class="submitcss">Reset</button>
    <input type="button" name="cancel" value="Cancel" class="cancelcss"onclick="window.location='index.php'" />  

<?php
      if ((isset($_POST["usid"])) && (isset($_POST["uemail"])) && isset($_POST["upassword"]) && isset($_POST["ufname"]) && isset($_POST["ulname"])) 
      {
                 $usid = $_POST["usid"]; 
                 $ufname = $_POST["ufname"];
		$ulname = $_POST["ulname"];
                 $uemail = $_POST["uemail"];
		$upassword = $_POST["upassword"];
                     
        
                $status = insert_first_time_user_by_email($usid,$ufname,$ulname,$uemail, $upassword);
                
                insert_first_time_user_info_to_student_details($usid,$ufname,$ulname,$uemail);
                insert_first_time_user_info_to_intership($usid);
                insert_first_time_user_info_to_education($usid);
                insert_first_time_user_info_to_work($usid);
                insert_first_time_user_info_to_tech_skills($usid);
                insert_first_time_user_info_to_cms_skills($usid);
                insert_first_time_user_info_to_os_skills($usid);
		
		if ($status) 
                {
                     $_SESSION["sessionMessage"] = "User's basic details enterd successfully";
                     
                     header("Location: index.php");
                         } 
                 else {
                    echo "Fail to update user";
                   }
	  }
          
 

 ?>
</form>
    
     <form action="?action=admin_manage_students" method="post"><br />
     
         <h2 style="margin-left: 2em" >Delete student's information:</h2><br />
         <h3 style="margin-left: 7em">Enter Student Id for deletion: <input type="text" name="stt_id" required="" class="textboxcss">
             <input type="submit" name="submit" value="Delete" class="submitcss"> &nbsp;
   <button type="reset" value="Reset" class="submitcss">Reset</button></h3>
    
   <?php 
            
        if(isset($_POST["stt_id"]))
        {
            $stt_id = $_POST["stt_id"];
            $deleted_student_status=delete_student_in_master($stt_id);
            delete_student_in_cms($stt_id);
           delete_student_in_education($stt_id);
            delete_student_in_intership($stt_id);
           delete_student_in_os($stt_id);
            delete_student_in_tech($stt_id);
           delete_student_in_work($stt_id);
            delete_student_in_student($stt_id);
            
            if($deleted_student_status)
            {
                $_SESSION["sessionMessage"] = "student details have been deleted successfully";
                     header("Location: index.php");
            }
         else
             { 
                 echo "student detail is not yet deleted";
             }
        
         }
   ?>
 </form>
<br/>

<form action="update_students.php" method="get">
     <h2 style="margin-left: 2em" >Update Student details:</h2>
     <h3 style="margin-left: 7em"> Enter Student Id to update details: <input type="text" onkeypress="return isNumber(event)"  name="st_id1" required="" class="textboxcss"> 
  
         <input type="submit" name="submit" value="Update" class="submitcss"></h3>
         
         <a href='update_students.php?"$st_id1"'></a>
 </form>

 <br/>
    
     
  <form action="?action=admin_manage_students" method="post" >
      <h2 style="margin-left: 2em" >View student details:
    <input type="submit" name="submit" value="view" class="submitcss"></h2>
    <br/><br/><br/>
     
       
      
       
    <?php 
    if (isset($_POST["submit"]))
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
       
            $ssdetails= view_students();
             $ssrow_count= get_student_row_num();
            
            
        
            for ($row = 0; $row <  $ssrow_count; $row++) 
                {       ?> <br/><?php
                
                          $myid = $ssdetails[$row][0];
                     
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
   <br/><br/><br/>
</body>

</html>

