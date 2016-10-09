
<?php
require '../model/database.php';
require '../model/user_db.php';
require '../model/report_db.php';

session_start();
ob_start();

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
function updateFunction() {
    alert("student details have been updated successfully");
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
          <li><a href="admin_manage_students.php">Back</a></li>
          <li><a href="../index.php">Logout</a></li>
        </ul>
      </div>
    </div>
  </div>
  </div>

<div class="example1">
    <h2> Update student details here</h2>
</div>
 
 <br/>
 
 
                    <?php
                         $stu_id= $_GET['st_id1']; 
                      
                  
                         $student_details = get_info_by_stu_id($stu_id);
             
                    ?> 
 
    
 <h2 style="margin-left: 2em; color: blue" >Basic Information:</h2>
    <form action="" method="post"><br />
            
        <h3 style="margin-left: 7em"> Student Id: <input type="text" name="sid" class="textboxcss" style="margin-left: 7em"readonly="" value="<?php echo $student_details["stu_id"]?>"></h3>
        <h3 style="margin-left: 7em"> First Name: <input type="text" name="sfname" class="textboxcss" style="margin-left: 7em" value=<?php echo $student_details["stu_first_name"]?>></h3>
        <h3 style="margin-left: 7em"> Middle Name: <input type="text" name="smname" class="textboxcss" style="margin-left: 6em" value="<?php echo $student_details["stu_middle_name"]?>"></h3>
        <h3 style="margin-left: 7em">  Last Name: <input type="text" name="slname"  class="textboxcss" style="margin-left: 7em" value="<?php echo $student_details["stu_last_name"]?>"></h3>
        <h3 style="margin-left: 7em"> Email: <input type="text" name="semail" style="margin-left: 10em"  class="textboxcss" value="<?php echo $student_details["stu_email"]?>"></h3>
        <h3 style="margin-left: 7em"> Telephone : <input type="tel" name="stel" style="margin-left: 7em" class="textboxcss" value="<?php echo $student_details["stu_tel"]?>"></h3>
            <?php $sex = $student_details["stu_gender"]; ?>
        <h3 style="margin-left: 7em">  Gender: &nbsp; <input type="radio" style="margin-left: 8em" name="gender" value="male" <?php echo ($sex=='male')?'checked':'' ?>> Male
                    <input type="radio" name="gender" value="female" <?php echo ($sex=='female')?'checked':'' ?>>Female
                    <input type="radio" name="gender" value="other" <?php echo ($sex=='other')?'checked':'' ?>> Other </h3>
             
             <?php $curr_sta = $student_details["stu_status"]; ?>
          <h3 style="margin-left: 7em">  Status: <input type="radio" style="margin-left: 9em" name="stat" value="international" <?php echo ($curr_sta=='international')?'checked':'' ?>> International
              <input type="radio" name="stat" value="permanent resident/citizen" <?php echo ($curr_sta=='permanent resident/citizen')?'checked':'' ?>>Permanent Resident/Citizen</h3>
                  
              <?php $sem = $student_details["stu_reg_sem"]; ?>      
          <h3 style="margin-left: 7em"> Semester Registered: <div class="dropdown"><select name="sem_reg" class="dropbtn"> 
                                 <option value="fall" class="dropdown-content" <?php if($sem=="fall") echo 'selected="selected"'; ?> >Fall</option>
                                 <option value="winter" class="dropdown-content" <?php if($sem=="winter") echo 'selected="selected"'; ?> >Winter</option>
                  </select> </div></h3>
        <h3 style="margin-left: 7em">  Year of Registration:&nbsp; &nbsp;<input id="text" name= "syear" class="textboxcss"  value="<?php echo $student_details["stu_year"]?>" /></h3><br/>
        
        
         <br/><br/><input type="submit" name="submit"  onclick="updateFunction();" value="Update" class="submitcss" style="margin-left: 7em"/>
          
        <input type="button" name="cancel" value="Cancel" class="cancelcss"onclick="window.location='admin_manage_students.php'" />  
          <?php
            if(isset($_POST['sid']) && isset($_POST['sfname'])&& isset($_POST['slname']))
         {
            $sid = $_POST['sid'];
            $sfname = $_POST['sfname'];   
            $smname = $_POST['smname'];
            $slname = $_POST['slname'];
            $semail = $_POST['semail'];
            $stel = $_POST['stel'];
            $gender = $_POST['gender'];
            $stat = $_POST['stat'];
            $sem_reg = $_POST['sem_reg'];
            $syear = $_POST['syear'];
        
            $update_status = update_student_details($sid,$sfname,$smname,$slname,$semail,$stel,$gender,$stat,$sem_reg,$syear);
                
            if($update_status)
            {
                header("Location: admin_manage_students.php");
            }
            
            
         }
            ?>
        
</body>
</html>



