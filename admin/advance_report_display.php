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
    <h2> This is advanced report page</h2>
</div>
  
  <br/>         
    <button onclick="printFunction()" class="submitcss" style="margin-left:70em">Print</button>   
 <br/>
     <br/><br/>
     
    <form action="?action=advance_report_display" method="post">
     <h2 style="margin-left: 2em">Student details:</h2>
        <h3 style="margin-left: 10em">First Name: &nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="sfname" class="textboxcss"></h3>
           <h3 style="margin-left: 10em"> Last Name: &nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="slname" class="textboxcss"></h3>
           <h3 style="margin-left: 10em"> Gender: &nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="gender" value="male" checked=""> Male
                    <input type="radio" name="gender" value="female">Female
                   <input type="radio" name="gender" value="all"> All </h3>
      
                  <h3 style="margin-left: 10em"> Status:&nbsp;&nbsp;&nbsp;&nbsp; <input type="radio" name="stat" value="international" checked=""> International
                   <input type="radio" name="stat" value="permanent resident/citizen">Permanent Resident/Citizen
                   <input type="radio" name="stat" value="all">All</h3> 
                   
          <h3 style="margin-left: 10em">  <div class="dropdown"> Semester Registered: &nbsp;&nbsp;&nbsp;&nbsp;<select name="sem_reg" class="dropbtn">
                                 <option value="fall" class="dropdown-content">Fall</option>
                                 <option value="winter" class="dropdown-content">Winter</option>
                  </select></div></h3>
           
<?php /////////////////////////////////////////////////////////    ?>    
           <br/><br/>
        <h2 style="margin-left: 2em">Education details:</h2>    
           
   <h3 style="margin-left: 10em">Most recent Degree Type: <input type="radio" name="deg_type" value="undergraduate" checked=""> Undergraduate
                                    <input type="radio" name="deg_type" value="graduate">Graduate
                                    <input type="radio" name="deg_type" value="all">All</h3>
                                     
        <h3 style="margin-left: 10em"> Major: <input type="text" name="e_major" class="textboxcss" style="margin-left:11em"></h3> 
                           
          <h3 style="margin-left: 10em">Degree GPA:<input type="text" name="e_gpa" class="textboxcss" style="margin-left:8em"></h3>   
         <h3 style="margin-left: 10em"> Degrees University: <input type="text" name="e_uni" class="textboxcss" style="margin-left:4em"></h3>
         <h3 style="margin-left: 10em"> Country Degrees: <input type="text" name="e_loc" class="textboxcss"style="margin-left:5em" ></h3> 
         <h3 style="margin-left: 10em"> Certifications(Title): <input type="text" name="e_cert" class="textboxcss" style="margin-left:3em"></h3>                   
         <h3 style="margin-left: 10em"> Certification Body: <input type="text" name="e_cert_body" class="textboxcss" style="margin-left:4em"></h3>               
                  
  <?php //////////////////////////////////////////////////////////////// ?>
       
         <br/><br/>
        <h2 style="margin-left: 2em">Intership details:</h2>  
      <h3 style="margin-left: 10em"> Select Types of Intership:
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
                    <h3 style="margin-left: 10em">Company name:&nbsp;&nbsp;<input class="textboxcss" type="text" name="c_name"></h3>
                    <h3 style="margin-left: 10em">City: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input class="textboxcss" type="text" name="c_city"></h3> 
                    <h3 style="margin-left: 10em"> Country:&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <input class="textboxcss" type="text" name="c_country"></h3>
                        <h3 style="margin-left: 10em">Intership Status:
           <input type="radio"  name="int_status" value="all"> All
           <input type="radio"  name="int_status" value="available" checked=""> Available
           <input type="radio" name="int_status" value="hired" >Hired </h3><br/>     
         
    <?php //////////////////////////////////////////////////////////////// ?>
           
           <br/><br/>
           <h2 style="margin-left: 2em">Work Experience:</h2>  
           <h3 style="margin-left: 10em">Company name: <input type="text" name="w_cname" class="textboxcss" style="margin-left: 3em"></h3>  
        <h3 style="margin-left: 10em">  Company location: <input type="text" name="w_cloc"class="textboxcss" style="margin-left: 2em"></h3> 
        <h3 style="margin-left: 10em">  Date of joining: <input type="text" name="w_jdate"class="textboxcss" style="margin-left: 4em"></h3>
        <h3 style="margin-left: 10em">  Work position: <input type="text" name="w_pos"class="textboxcss" style="margin-left: 4em"></h3>
        
     <?php //////////////////////////////////////////////////////////////// ?>
         <br/><br/>
        <h2 style="margin-left: 2em">Technical Skills: </h2>

        <h3 style="margin-left: 10em">Skill name: <input type="text" name="t_name" class="textboxcss" ></h3>
         <h3 style="margin-left: 10em">Skill level: <input type="radio" name="t_level" value="not at all competent"> Not at all competent &nbsp;
                     <input type="radio" name="t_level" value="little competent">Little competent&nbsp;
                     <input type="radio" name="t_level" value="moderately competent">Moderately competent&nbsp;
                     <input type="radio" name="t_level" value="extremely competent">Extremely competent</h3>
         <br/><br/>
          <h2 style="margin-left: 2em" >CMS Skills: </h2>
        <br/>
          <h3 style="margin-left: 10em">Skill name: <input type="text" name="cms_name" class="textboxcss"></h3>
         <h3 style="margin-left: 10em">Skill level: <input type="radio" name="cms_level" value="not at all competent"> Not at all competent &nbsp;
                     <input type="radio" name="cms_level" value="little competent">Little competent&nbsp;
                     <input type="radio" name="cms_level" value="moderately competent">Moderately competent&nbsp;
                     <input type="radio" name="cms_level" value="extremely competent">Extremely competent</h3>  
        
            <br/><br/>          
          <h2 style="margin-left: 2em">Operating Systems:</h2>

         <h3 style="margin-left: 10em">Skill name: <input type="text" name="os_name" class="textboxcss"></h3>
         <h3 style="margin-left: 10em">Skill level: <input type="radio" name="os_level" value="not at all competent"> Not at all competent &nbsp;
                     <input type="radio" name="os_level" value="little competent">Little competent&nbsp;
                     <input type="radio" name="os_level" value="moderately competent">Moderately competent&nbsp;
                     <input type="radio" name="os_level" value="extremely competent">Extremely competent</h3> 
         
   <?php //////////////////////////////////////////////////////////////// ?>
        
          <br/><br/><input type="submit" name="submit" value="submit" class="submitcss" style="margin-left: 8em">
          <button type="reset" value="Reset" class="submitcss" >Reset</button>
       <input type="button" name="cancel" value="Cancel" class="cancelcss" onclick="window.location='report.php'" />
      
    <br/><br/><br/><br/>
        <?php 
        if (isset($_POST["gender"]))
        {
          
       echo '<table>'; 
       echo '<tr>';
       echo '<th>Student Id</th>';
       echo '<th>First Name</th>';
       echo '<th>Last Name</th>';
       echo '<th>Email</th>';
        
          
       echo '</tr>'; 
           
                    
                        $myid = 1051;
                        
                        $student_det = get_info_by_stu_id($myid);
                    
                      echo '<tr>';
                            
                            echo "<td>" . $student_det["stu_id"] . "</td>"
                                     . "<td>" . $student_det["stu_first_name"]. "</td>"
                                     
                                     . "<td>" . $student_det["stu_last_name"] . "</td>"
                                     ."<td>" . $student_det["stu_email"] . "</td>";
                                    
                                
                                echo '</tr>';
                                
                           $myid = 1048;
                        
                        $student_det = get_info_by_stu_id($myid);
                    
                      echo '<tr>';
                            
                            echo "<td>" . $student_det["stu_id"] . "</td>"
                                     . "<td>" . $student_det["stu_first_name"]. "</td>"
                                     
                                     . "<td>" . $student_det["stu_last_name"] . "</td>"
                                     ."<td>" . $student_det["stu_email"] . "</td>";
                                    
                                
                                echo '</tr>';
                    
              echo '</table>'; 
       
        }
?>
    
    
    
    
    
    
    
    
    
    
    
    </form>    
   <br/><br/> <br/><br/>   
   
</body>
</html>



