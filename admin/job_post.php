<?php
require '../model/database.php';
require '../model/user_db.php';
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
<script>
function deleteFunction() {
    alert("Job post deleted successfully");
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
    <h2> You can manage job post here</h2>
</div>
  
    <br/>         
    <button onclick="printFunction()" class="submitcss" style="margin-left:70em">Print</button>   
 <br/>
 
 <h2 style="margin-left: 2em" >Post new job:</h2>
    <form action="?action=job_post" method="post">
     
        <h3 style="margin-left: 7em">Job id(*): <input type="text" name="j_id" placeholder="Enter job id between 100 to 999" maxlength="3" pattern="\d{3}" required="" class="textboxcss" style="margin-left: 10em" onkeypress="return isNumber(event)" title="Please enter exactly 3 digits from 100 to 999"></h3>
      <h3 style="margin-left: 7em">Job Group: 
          <div class="dropdown">
                <select name="job_type" class="dropbtn" style="margin-left: 5em">
                                 <option value="web development" class="dropdown-content">Web Development</option>
                                  <option value="mobile development"class="dropdown-content">Mobile Development</option> 
                                  <option value="system development" class="dropdown-content">System Development</option> 
                                  <option value="technical support" class="dropdown-content">Technical Support</option> 
                                 <option value="networking" class="dropdown-content">Networking</option> 
                                 <option value="data analysis" class="dropdown-content">Data Analysis</option> 
                                  <option value="testing" class="dropdown-content">Testing</option> 
                                  <option value="security" class="dropdown-content">Security</option> 
                                  <option value="data management" class="dropdown-content">Data Management</option> 
                                  <option value="other" class="dropdown-content">Other</option>                                 
                                 </select> </div></h3>
                                 
        <h3 style="margin-left: 7em">Job Position: <input type="text" name="j_pos" class="textboxcss" style="margin-left: 6em"></h3>
           <h3 style="margin-left: 7em">Job Description: <input type="text" name="j_des" class="textboxcss" style="margin-left: 4em"></h3>
         <h3 style="margin-left: 7em">  Job Responsibilities: <input type="text" name="j_resp" class="textboxcss" style="margin-left: 2em"></h3>
          <h3 style="margin-left: 7em"> Job Requirements: <input type="text" name="j_req" class="textboxcss" style="margin-left: 3em"></h3>
          <h3 style="margin-left: 7em"> Salary: <input type="text" name="j_sal"onkeypress="return isNumber(event)"  class="textboxcss" style="margin-left: 9em"></h3>
 
          <br/><br/><input type="submit" name="submit" value="submit" class="submitcss" style="margin-left: 7em">
            <button type="reset" value="Reset" class="submitcss">Reset</button>
    <input type="button" name="cancel" value="Cancel" class="cancelcss"onclick="window.location='index.php'" />  
       
        <?php 
        if (isset($_POST["job_type"]))
        {  
            $j_id = $_POST['j_id'];
             $job_type = $_POST['job_type'];
             $j_pos = $_POST['j_pos'];
             $j_des = $_POST['j_des'];
             $j_resp = $_POST['j_resp'];
             $j_req = $_POST['j_req'];
             $j_sal = $_POST['j_sal'];
        
             
            $insert_job_post_status = admin_insert_job_groups_details($j_id,$job_type,$j_pos,$j_des,$j_resp,$j_req,$j_sal);
                                       admin_insert_job_job_show($j_id);
            if($insert_job_post_status)
                {
 
                     $_SESSION["sessionMessage"] = "Job posted successfully";                   
                 } 
            
         
        }
      ?>
          </form>
 
 <br/><br/>
 
  
 <form action="?action=job_post" method="post">
     <h2 style="margin-left: 2em" >Delete job post:</h2>
     <h3 style="margin-left: 7em"> Enter job Id to delete job post: <input type="text" onkeypress="return isNumber(event)" name="jb_id" required="" class="textboxcss"> 
         <input type="submit" name="submit" value="Delete" class="submitcss"></h3>
    
   <?php 
            
        if(isset($_POST["jb_id"]))
        {
            $jb_id = $_POST["jb_id"];
            $deleted_post_status=delete_post_by_id($jb_id);
                                    
                                  delete_job_post_in_job_show($jb_id);
                                  
                        
            if($deleted_post_status)
            {
               $_SESSION["sessionMessage"] = "Job post deleted successfully";
                
                

            }
         else {                echo "Job post is not yet deleted";}
                 }
   ?>
 </form>
 
 <form action="update_job_post.php" method="get">
     <h2 style="margin-left: 2em" >Update job post:</h2>
     <h3 style="margin-left: 7em"> Enter job Id to update job post: <input type="text" onkeypress="return isNumber(event)"  name="jb_id1" required="" class="textboxcss"> 
  
         <input type="submit" name="submit" value="Update" class="submitcss"></h3>
         
         <a href='update_job_post.php?"$jb_id1"'></a>
 </form>
 <br/>
 

 
 
 <h2 style="margin-left: 2em" >View job interested Students: <a href="view_job_interested_students.php" class="submitcss"> Click here</a> </h2>
 <br/>

  <form action="?action=job_post" method="post">
      <h2 style="margin-left: 2em" >View Posted Jobs:
          <input type="submit" name="submit" value="view" class="submitcss" style="margin-left: 7em"></h2>
            
    <?php 
    if (isset($_POST["submit"]))
   {
        
        echo "<table>"; 
       echo "<tr>";
       echo "<th>Job Id</th>";
       echo "<th>Job group</th>";
       echo "<th>Job position</th>";
       echo "<th>Job Descriptions</th>";
       echo "<th>Job Responsibilities</th>";
       echo "<th>Job Requirements</th>";
       echo "<th>Job Salary</th>";
       
      
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
                    echo "</tr>";
                    }
        echo "</table>"; 




    }
    ?>
  </form>
 <br/><br/>
</body>
</html>



