<?php
require '../model/database.php';
require '../model/user_db.php';
require '../model/job_post_db.php';

//session_start();
//
//if (isset($_SESSION["sessionMessage"])) 
// {
//    echo $_SESSION["sessionMessage"]; 
//}
//unset($_SESSION["sessionMessage"]);
ob_start();
?>

<html>
   <head>
<title>post job</title>
<!--<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />-->
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
function updateFunction() {
    alert("Job post updated successfully");
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
    <h2> Update job post here</h2>
</div>
    
   <?php  $upj_id= $_GET['jb_id1']; ?>
  <?php 

               $update_status = get_info_job_groups_by_id($upj_id);
              
  
  ?>
 
 <h2 style="margin-left: 2em" >Update job:</h2>
    <form action="?action=update_job_post" method="post">
     
        <h3 style="margin-left: 7em">Job id: <input type="text" name="j_id" required="" value="<?php echo  $update_status["job_id"]?>" class="textboxcss" style="margin-left: 10em"></h3>
      <h3 style="margin-left: 7em">Job Group: 
          <div class="dropdown">
             <?php $curr = $update_status["jgroup"];?>
                <select name="job_type" class="dropbtn" style="margin-left: 5em">
                                 <option value="web development" class="dropdown-content" <?php if($curr=="web development") echo 'selected="selected"'; ?>>Web Development</option>
                                  <option value="mobile development"class="dropdown-content" <?php if($curr=="mobile development") echo 'selected="selected"'; ?>>Mobile Development</option> 
                                  <option value="system development" class="dropdown-content" <?php if($curr=="system development") echo 'selected="selected"'; ?>>System Development</option> 
                                  <option value="technical support" class="dropdown-content" <?php if($curr=="technical support") echo 'selected="selected"'; ?>>Technical Support</option> 
                                 <option value="networking" class="dropdown-content" <?php if($curr=="networking") echo 'selected="selected"'; ?>>Networking</option> 
                                 <option value="data analysis" class="dropdown-content" <?php if($curr=="data analysis") echo 'selected="selected"'; ?>>Data Analysis</option> 
                                  <option value="testing" class="dropdown-content" <?php if($curr=="testing") echo 'selected="selected"'; ?>>Testing</option> 
                                  <option value="security" class="dropdown-content" <?php if($curr=="security") echo 'selected="selected"'; ?>>Security</option> 
                                  <option value="data management" class="dropdown-content" <?php if($curr=="data management") echo 'selected="selected"'; ?>>Data Management</option> 
                                  <option value="other" class="dropdown-content" <?php if($curr=="other") echo 'selected="selected"'; ?>>Other</option>                                 
                                 </select> </div></h3>
                                 
        <h3 style="margin-left: 7em">Job Position: <input type="text" name="j_pos" value="<?php echo  $update_status["job_position"]?>" class="textboxcss" style="margin-left: 6em"></h3>
           <h3 style="margin-left: 7em">Job Description: <input type="text" name="j_des" value="<?php echo  $update_status["job_description"]?>" class="textboxcss" style="margin-left: 4em"></h3>
         <h3 style="margin-left: 7em">  Job Responsibilities: <input type="text" name="j_resp" value="<?php echo  $update_status["job_responsibilities"]?>" class="textboxcss" style="margin-left: 2em"></h3>
          <h3 style="margin-left: 7em"> Job Requirements: <input type="text" name="j_req" value="<?php echo  $update_status["job_requirements"]?>" class="textboxcss" style="margin-left: 3em"></h3>
          <h3 style="margin-left: 7em"> Salary: <input type="text" name="j_sal" value="<?php echo  $update_status["job_salary"]?>" class="textboxcss" style="margin-left: 9em"></h3>
 
          <br/><br/><input type="submit" name="submit"  onclick="updateFunction();" value="Update" class="submitcss" style="margin-left: 7em"/>
          
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
        
               $update_job_post_status = update_post_by_id($j_id,$job_type,$j_pos,$j_des,$j_resp,$j_req,$j_sal);
           
            if($update_job_post_status)
                {
                    header("Location: job_post.php");       
                 } 
            
         
        }
      ?>
 </form>
 
</body>
</html>



