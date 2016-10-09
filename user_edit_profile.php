<?php
require 'model/user_db.php';
session_start();
ob_start();
?>

<?php
              if (isset($_SESSION["masterdetails"])) 
              {
                     $masterdetails = $_SESSION["masterdetails"];
                     
                        
                        $stu_id = $masterdetails["master_id"]; 
                  
                         $student_details = get_info_by_stu_id($stu_id);
                        $intership_details = get_intership_info_by_stu_id($stu_id);
                       
                        $education_details = get_education_info_by_stu_id($stu_id);
                         $work_details =  get_work_info_by_stu_id($stu_id);
                        $tech_skills_details = get_tech_skills_info_by_stu_id($stu_id);
                       $cms_skills_details= get_cms_skills_info_by_stu_id($stu_id); 
                        $os_skills_details = get_os_skills_info_by_stu_id($stu_id);
                        
                       
               }
	   else {
                     $_SESSION["sessionMessage"] = "Session expired";
                      header("Location: login.php");
                    }
		?> 
<html>

     <head>
<title>post job</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="style/style.css" type="text/css" />
<link rel="stylesheet" href="style/table.css" type="text/css" />
<link rel="stylesheet" type="text/css" href="style/jquery-foxiblob-0.1.css" />
<link rel="stylesheet" href="style/mytable.css" type="text/css" />
<script type="text/javascript" src="jquery/jquery-1.3.2.min.js"></script>
<script type="text/javascript" src="jquery/jquery-foxiblob-0.1.min.js"></script>
<script type="text/javascript" src="jquery/jquery.corners.min.js"></script>
<meta charset='utf-8'>
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="styles.css">
   <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
   <script src="script.js"></script>
   
   <script type="text/javascript">$(document).ready(function(){ $('#menu_list').foxiblob({opacity:0.6}); });</script>
<script>$(document).ready( function(){ $('.rounded').corners("10px"); });</script>
<script>
function myAlert() {
    alert("Your update has been saved.Enjoy !!");
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
    <h2> You can edit profile here</h2><br/>
</div>
<br/>
	<h2 style="margin-left: 2em; color: blue" >Basic Information:</h2>
    <form action="?action=user_edit_profile" method="post"><br />
            
        <h3 style="margin-left: 7em"> Student Id: <input type="text" name="sid" class="textboxcss" style="margin-left: 7em"readonly="" value="<?php echo $student_details["stu_id"]?>"></h3>
        <h3 style="margin-left: 7em"> First Name: <input type="text" name="sfname" class="textboxcss" style="margin-left: 7em" value=<?php echo $student_details["stu_first_name"]?>></h3>
        <h3 style="margin-left: 7em"> Middle Name: <input type="text" name="smname" class="textboxcss" style="margin-left: 6em" value="<?php echo $student_details["stu_middle_name"]?>"></h3>
        <h3 style="margin-left: 7em">  Last Name: <input type="text" name="slname"  class="textboxcss" style="margin-left: 7em" value="<?php echo $student_details["stu_last_name"]?>"></h3>
        <h3 style="margin-left: 7em"> Email: <input type="text" name="semail" style="margin-left: 10em"  class="textboxcss" value="<?php echo $student_details["stu_email"]?>"></h3>
        <h3 style="margin-left: 7em"> Telephone : <input type="text" name="stel" style="margin-left: 7em" class="textboxcss" value="<?php echo $student_details["stu_tel"]?>"></h3>
            <?php $sex = $student_details["stu_gender"]; ?>
        <h3 style="margin-left: 7em">  Gender: &nbsp; <input type="radio" style="margin-left: 8em" name="gender" value="male" <?php echo ($sex=='male')?'checked':'' ?>> Male
                    <input type="radio" name="gender" value="female" <?php echo ($sex=='female')?'checked':'' ?>>Female
                    <input type="radio" name="gender" value="other" <?php echo ($sex=='other')?'checked':'' ?>> Other </h3>
             
             <?php $curr_sta = $student_details["stu_status"]; ?>
          <h3 style="margin-left: 7em">  Status: <input type="radio" style="margin-left: 9em" name="stat" value="international" <?php echo ($curr_sta=='international')?'checked':'' ?>> International
              <input type="radio" name="stat" value="permanent resident/citizen" <?php echo ($curr_sta=='permanent resident/citizen')?'checked':'' ?>>Permanent Resident/Citizen</h3>
                  
              <?php $sem = $student_details["stu_reg_sem"]; ?>      
          <h3 style="margin-left: 7em">  Semester Registered: <div class="dropdown"><select name="sem_reg" class="dropbtn"> 
                                 <option value="fall" class="dropdown-content" <?php if($sem=="fall") echo 'selected="selected"'; ?> >Fall</option>
                                 <option value="winter" class="dropdown-content" <?php if($sem=="winter") echo 'selected="selected"'; ?> >Winter</option>
                  </select> </div></h3>
        <h3 style="margin-left: 7em">  Year of Registration:&nbsp; &nbsp;<input id="text" name= "syear" class="textboxcss"  value="<?php echo $student_details["stu_year"]?>" /></h3><br/>
            
  <?php echo "--------------------------------------------------------------------------------------"; ?><br/><br/>
            
           <h2 style="margin-left: 2em;color: blue" >Intership Information:</h2><br/>
              <?php $inter_type = $intership_details["inter_type"]; ?>   
  <h3 style="margin-left: 7em">  Intership Type:  <div class="dropdown"><select name="intership_type" style="margin-left: 7em"class="dropbtn">
                                 <option value="company" class="dropdown-content"  <?php if($inter_type=="company") echo 'selected="selected"'; ?> >Company</option>
                                  <option value="startup company"class="dropdown-content" <?php if($inter_type=="startup company") echo 'selected="selected"'; ?> >Startup Company</option> 
                                  <option value="research project"class="dropdown-content" <?php if($inter_type=="research project") echo 'selected="selected"'; ?> >Research Project</option> 
                                  <option value="mac project"class="dropdown-content" <?php if($inter_type=="mac project") echo 'selected="selected"'; ?> >MAC Project</option> 
                                 <option value="other" class="dropdown-content"<?php if($inter_type=="other") echo 'selected="selected"'; ?> >Other</option> 
                                 
                 </select></div></h3>
  <h3 style="margin-left: 7em"> Company name: <input type="text" name="c_name" style="margin-left: 10em" class="textboxcss" value="<?php echo $intership_details["inter_company_name"]?>"></h3>
  <h3 style="margin-left: 7em"> Address: <input type="text" name="c_address" class="textboxcss"style="margin-left: 14em" value="<?php echo $intership_details["inter_address"]?>"></h3>
  <h3 style="margin-left: 7em">  City: <input type="text" name="c_city" class="textboxcss" style="margin-left: 16em" value="<?php echo $intership_details["inter_city"]?>"></h3>
  <h3 style="margin-left: 7em">  Postal Code <input type="text" name="c_postcode" class="textboxcss" style="margin-left:12em" value="<?php echo $intership_details["inter_postal_code"]?>"></h3>
  <h3 style="margin-left: 7em">   Country<input type="text" name="c_country" class="textboxcss"style="margin-left: 14em" value="<?php echo $intership_details["inter_country"]?>"></h3>
  <h3 style="margin-left: 7em"> First Name(Contact Person) <input type="text"  class="textboxcss"style="margin-left: 3em" name="c_fname"value="<?php echo $intership_details["contact_person_fn"]?>"></h3>
  <h3 style="margin-left: 7em"> Last Name(Contact Person) <input type="text"  class="textboxcss" style="margin-left: 3em" name="c_lname"value="<?php echo $intership_details["contact_person_ln"]?>"></h3>
  <h3 style="margin-left: 7em">  Position(Contact Person) <input type="text" class="textboxcss" style="margin-left: 4em" name="c_position"value="<?php echo $intership_details["contact_person_position"]?>"></h3>
  <h3 style="margin-left: 7em">  Telephone <input type="int" name="c_tel" class="textboxcss"style="margin-left: 12em" value="<?php echo $intership_details["inter_tel"]?>"></h3>
  <h3 style="margin-left: 7em">    Email <input type="text" name="c_email" class="textboxcss" style="margin-left: 15em" value="<?php echo $intership_details["inter_email"]?>"></h3>
  <h3 style="margin-left: 7em">  Company Website <input type="text" class="textboxcss" style="margin-left: 8em" name="c_website"value="<?php echo $intership_details["inter_company_website"]?>"></h3>
  <h3 style="margin-left: 7em">  Notes:<br/><textarea name="notes" class="textboxcss"  style="width: 200px; height: 60px; margin-left: 18em"> <?php echo $intership_details["notes"]?> </textarea></h3>
          
         <?php $inter_st = $intership_details["inter_status"]; ?>  
       <h3 style="margin-left: 7em">  Intership Status: <input type="radio" name="int_status" style="margin-left: 8em" value="available" <?php echo ($inter_st=='available')?'checked':'' ?> > Available
           <input type="radio" name="int_status" value="hired" <?php echo ($inter_st=='hired')?'checked':'' ?>>Hired</h3>
            
                           
                           
        
                           
         
           
           <?php echo "--------------------------------------------------------------------------------------"; ?><br/><br/>                   
            
           <h2 style="margin-left: 2em;color: blue" >Education Information:</h2><br/>
           <?php $d_type = $education_details["degree_type"]; ?>  
        <h3 style="margin-left: 7em">   Most recent Degree Type: <input type="radio" name="deg_type" style="margin-left: 3em" value="undergraduate" <?php echo ($d_type=='undergraduate')?'checked':'' ?> > Undergraduate
            <input type="radio" name="deg_type" value="graduate" <?php echo ($d_type=='graduate')?'checked':'' ?>>Graduate</h3>
           <h3 style="margin-left: 7em">   Major: <input type="text" name="e_major" style="margin-left: 14em" class="textboxcss" value="<?php echo $education_details["degree_major"]?>"></h3>  
                           
           <h3 style="margin-left: 7em"> Degree GPA: <input type="text" name="e_gpa" style="margin-left: 11em" class="textboxcss" value="<?php echo $education_details["degree_gpa"]?>"></h3>   
           <h3 style="margin-left: 7em">  Degrees University: <input type="text" name="e_uni" style="margin-left: 7em" class="textboxcss" value="<?php echo $education_details["degree_university"]?>"></h3> 
           <h3 style="margin-left: 7em">  Degrees University(Country): <input type="text"style="margin-left: 1em" class="textboxcss" name="e_loc" value="<?php echo $education_details["degree_university_location"]?>"></h3> 
           <h3 style="margin-left: 7em">  Certifications(Title): <input type="text" style="margin-left: 6em" name="e_cert"class="textboxcss" value="<?php echo $education_details["certifications"]?>"></h3>                   
           <h3 style="margin-left: 7em"> Certification Body: <input type="text" style="margin-left: 7em" name="e_cert_body" class="textboxcss" value="<?php echo $education_details["certifications_body"]?>"></h3>                
          
          <?php echo "--------------------------------------------------------------------------------------"; ?><br/><br/>
         
          <h2 style="margin-left: 2em;color: blue" >Work Experience:</h2><br/><br/>
         
          <h3 style="margin-left: 7em">  Company name: <input type="text" style="margin-left: 8em" name="w_cname" class="textboxcss" value="<?php echo $work_details["work_company_name"]?>"></h3>  
          <h3 style="margin-left: 7em">  Company location: <input type="text"style="margin-left: 6em" name="w_cloc" class="textboxcss" value="<?php echo $work_details["work_company_location"]?>"></h3> 
          <h3 style="margin-left: 7em">  Date of joining: <input type="text" name="w_jdate" style="margin-left: 8em" class="textboxcss"  value="<?php echo $work_details["work_date_of_joining"]?>"></h3>
          <h3 style="margin-left: 7em">  Work position: <input type="text" name="w_pos" style="margin-left: 8em" class="textboxcss" value="<?php echo $work_details["work_position"]?>"></h3>
        
        <?php echo "--------------------------------------------------------------------------------------"; ?><br/><br/>
        
     <h2 style="margin-left: 2em;color: blue" >Technical skills:</h2>
     <table style="margin-left:3em">
         <tr>
          <th> Skills</th>
         <th> Not at all competent</th>
         <th> Little competent</th>
         <th> Moderately competent</th>
         <th> Extremely competent</th>
         </tr>
         
         
     
           <?php $a = $tech_skills_details["asp_net"]; ?>  
         <tr>   <td>ASP.NET:</td> <td><input type="radio" name="asp" value="not at all competent" <?php echo ($a =='not at all competent')?'checked':'' ?>>  </td>
             <td>  <input type="radio" name="asp" value="little competent" <?php echo ($a=='little competent')?'checked':'' ?>></td>
             <td>  <input type="radio" name="asp" value="moderately competent" <?php echo ($a=='moderately competent')?'checked':'' ?>></td>
             <td> <input type="radio" name="asp" value="extremely competent" <?php echo ($a=='extremely competent')?'checked':'' ?>></td>
     </tr>
   
         <?php $c = $tech_skills_details["c"]; ?>  
     <tr>    <td>C:</td> <td><input type="radio" name="c1" value="not at all competent" <?php echo ($c=='not at all competent')?'checked':'' ?>> </td>
         <td> <input type="radio" name="c1" value="little competent" <?php echo ($c =='little competent')?'checked':'' ?>></td>
         <td>  <input type="radio" name="c1" value="moderately competent" <?php echo ($c =='moderately competent')?'checked':'' ?>></td>
         <td><input type="radio" name="c1" value="extremely competent" <?php echo ($c =='extremely competent')?'checked':'' ?>> </td>
     </tr>     
           <?php $k = $tech_skills_details["cplusplus"]; ?>          
      <tr>  <td>C++: </td><td><input type="radio" name="cplus" value="not at all competent" <?php echo ($k=='not at all competent')?'checked':'' ?>> </td>
                          <td> <input type="radio" name="cplus" value="little competent" <?php echo ($k=='little competent')?'checked':'' ?>></td>
                     <td><input type="radio" name="cplus" value="moderately competent" <?php echo ($k=='moderately competent')?'checked':'' ?>></td>
                    <td> <input type="radio" name="cplus" value="extremely competent" <?php echo ($k=='extremely competent')?'checked':'' ?>></td> 
     </tr>
            <?php $p = $tech_skills_details["csharp"]; ?>
     <tr>    <td> C#: </td><td><input type="radio" name="chash" value="not at all competent" <?php echo ($p=='not at all competent')?'checked':'' ?>> </td>
                     <td><input type="radio" name="chash" value="little competent" <?php echo ($p=='little competent')?'checked':'' ?>></td>
                   <td>  <input type="radio" name="chash" value="moderately competent" <?php echo ($p=='moderately competent')?'checked':'' ?>></td>
                    <td> <input type="radio" name="chash" value="extremely competent" <?php echo ($p=='extremely competent')?'checked':'' ?>></td></h3> 
     </tr>                
             <?php $f = $tech_skills_details["flex"]; ?>          
     <tr>  <td> Flex:</td> <td><input type="radio" name="flex" value="not at all competent" <?php echo ($f=='not at all competent')?'checked':'' ?>>  </td>
                     <td><input type="radio" name="flex" value="little competent" <?php echo ($f=='little competent')?'checked':'' ?>></td>
                   <td>  <input type="radio" name="flex" value="moderately competent" <?php echo ($f=='moderately competent')?'checked':'' ?>></td>
                    <td> <input type="radio" name="flex" value="extremely competent" <?php echo ($f=='extremely competent')?'checked':'' ?>></td></h3>             
     </tr>      
             <?php $j = $tech_skills_details["java"]; ?>         
     <tr> <td> JAVA:</td> <td><input type="radio" name="java" value="not at all competent" <?php echo ($j=='not at all competent')?'checked':'' ?>>  </td>
                    <td> <input type="radio" name="java" value="little competent" <?php echo ($j=='little competent')?'checked':'' ?>></td>
                    <td> <input type="radio" name="java" value="moderately competent" <?php echo ($j=='moderately competent')?'checked':'' ?>></td>
                    <td> <input type="radio" name="java" value="extremely competent" <?php echo ($j=='extremely competent')?'checked':'' ?>></td><br>              
          </tr>
                           
                <?php $js = $tech_skills_details["javascript"]; ?>
      <tr>  <td> JAVA Script:</td><td> <input type="radio" name="javas" value="not at all competent" <?php echo ($js=='not at all competent')?'checked':'' ?>> </td>
                    <td> <input type="radio" name="javas" value="little competent" <?php echo ($js=='little competent')?'checked':'' ?>></td>
                   <td>  <input type="radio" name="javas" value="moderately competent" <?php echo ($js=='moderately competent')?'checked':'' ?>></td>
                   <td>  <input type="radio" name="javas" value="extremely competent" <?php echo ($js=='extremely competent')?'checked':'' ?>></td>        
       </tr>      
               <?php $l = $tech_skills_details["lisp"]; ?>      
   <tr>     <td> LISP: </td><td><input type="radio" name="lisp" value="not at all competent" <?php echo ($l=='not at all competent')?'checked':'' ?>> </td>
                    <td> <input type="radio" name="lisp" value="little competent" <?php echo ($l=='little competent')?'checked':'' ?>></td>
                    <td> <input type="radio" name="lisp" value="moderately competent" <?php echo ($l=='moderately competent')?'checked':'' ?>></td>
                    <td> <input type="radio" name="lisp" value="extremely competent" <?php echo ($l=='extremely competent')?'checked':'' ?>></td>             
       </tr>       
                 <?php $m = $tech_skills_details["matlab"]; ?>       
    <tr>     <td>MatLab:</td><td> <input type="radio" name="matlab" value="not at all competent" <?php echo ($m=='not at all competent')?'checked':'' ?>>  </td>
                    <td> <input type="radio" name="matlab" value="little competent" <?php echo ($m=='little competent')?'checked':'' ?>></td>
                    <td> <input type="radio" name="matlab" value="moderately competent" <?php echo ($m=='moderately competent')?'checked':'' ?>></td>
                    <td> <input type="radio" name="matlab" value="extremely competent" <?php echo ($m=='extremely competent')?'checked':'' ?>></td>           
        </tr>             
          <?php $ms = $tech_skills_details["mysql"]; ?> 
   <tr>    <td> MySQL: </td><td><input type="radio" name="mysql" value="not at all competent" <?php echo ($ms=='not at all competent')?'checked':'' ?>> </td>
                   <td>  <input type="radio" name="mysql" value="little competent" <?php echo ($ms=='little competent')?'checked':'' ?>></td>
                    <td> <input type="radio" name="mysql" value="moderately competent" <?php echo ($ms=='moderately competent')?'checked':'' ?>></td>
                    <td> <input type="radio" name="mysql" value="extremely competent" <?php echo ($ms=='extremely competent')?'checked':'' ?>></td>           
         </tr>                       
          <?php $oc = $tech_skills_details["objective_c"]; ?> 
    <tr>    <td>Objective-C:</td><td> <input type="radio" name="objectivec" value="not at all competent" <?php echo ($oc=='not at all competent')?'checked':'' ?>>  </td>
                     <td><input type="radio" name="objectivec" value="little competent" <?php echo ($oc=='little competent')?'checked':'' ?>></td>;
                    <td> <input type="radio" name="objectivec" value="moderately competent" <?php echo ($oc=='moderately competent')?'checked':'' ?>></td>
                   <td>  <input type="radio" name="objectivec" value="extremely competent" <?php echo ($oc=='extremely competent')?'checked':'' ?>></td>           
           </tr>                       
              <?php $pa = $tech_skills_details["pascal"]; ?>        
     <tr>   <td>Pascal: </td><td><input type="radio" name="pascal" value="not at all competent" <?php echo ($pa=='not at all competent')?'checked':'' ?>> </td>
                     <td><input type="radio" name="pascal" value="little competent" <?php echo ($pa=='little competent')?'checked':'' ?>></td>
                    <td> <input type="radio" name="pascal" value="moderately competent" <?php echo ($pa=='moderately competent')?'checked':'' ?>></td>
                     <td><input type="radio" name="pascal" value="extremely competent" <?php echo ($pa=='extremely competent')?'checked':'' ?>></td>      
           </tr>                                     
              <?php $pl = $tech_skills_details["perl"]; ?>        
   <tr>    <td> Perl: </td><td><input type="radio" name="perl" value="not at all competent" <?php echo ($pl=='not at all competent')?'checked':'' ?>>  </td>
                    <td> <input type="radio" name="perl" value="little competent" <?php echo ($pl=='little competent')?'checked':'' ?>></td>
                    <td> <input type="radio" name="perl" value="moderately competent" <?php echo ($pl=='moderately competent')?'checked':'' ?>></td>
                    <td> <input type="radio" name="perl" value="extremely competent" <?php echo ($pl=='extremely competent')?'checked':'' ?>></td>          
         </tr>                                       
                <?php $ph = $tech_skills_details["php"]; ?>                   
    <tr>     <td> PHP: </td><td><input type="radio" name="php" value="not at all competent" <?php echo ($ph=='not at all competent')?'checked':'' ?>>  </td>
                    <td> <input type="radio" name="php" value="little competent" <?php echo ($ph=='little competent')?'checked':'' ?>></td>
                    <td> <input type="radio" name="php" value="moderately competent" <?php echo ($ph=='moderately competent')?'checked':'' ?>></td>
                    <td> <input type="radio" name="php" value="extremely competent" <?php echo ($ph=='extremely competent')?'checked':'' ?>></td>      
                 
                    <?php $pr = $tech_skills_details["prolog"]; ?> 
   <tr>     <td>Prolog:</td><td> <input type="radio" name="prolog" value="not at all competent" <?php echo ($pr=='not at all competent')?'checked':'' ?>>  </td>
                    <td> <input type="radio" name="prolog" value="little competent" <?php echo ($pr=='little competent')?'checked':'' ?>></td>
                     <td><input type="radio" name="prolog" value="moderately competent" <?php echo ($pr=='moderately competent')?'checked':'' ?>></td>
                    <td> <input type="radio" name="prolog" value="extremely competent" <?php echo ($pr=='extremely competent')?'checked':'' ?>></td>             
            </tr>    
                     <?php $py = $tech_skills_details["python"]; ?> 
   <tr>    <td> Python: </td><td><input type="radio" name="python" value="not at all competent" <?php echo ($py=='not at all competent')?'checked':'' ?>>  </td>
                     <td><input type="radio" name="python" value="little competent" <?php echo ($py=='little competent')?'checked':'' ?>></td>
                    <td> <input type="radio" name="python" value="moderately competent" <?php echo ($py=='moderately competent')?'checked':'' ?>></td>
                     <td><input type="radio" name="python" value="extremely competent" <?php echo ($py=='extremely competent')?'checked':'' ?>></td>            
            </tr>     
                     <?php $rr = $tech_skills_details["r"]; ?> 
  <tr>     <td>R: </td><td><input type="radio" name="r" value="not at all competent" <?php echo ($rr=='not at all competent')?'checked':'' ?>>  </td>
                     <td><input type="radio" name="r" value="little competent" <?php echo ($rr=='little competent')?'checked':'' ?>></td>
                    <td> <input type="radio" name="r" value="moderately competent" <?php echo ($rr=='moderately competent')?'checked':'' ?>></td>
                    <td> <input type="radio" name="r" value="extremely competent" <?php echo ($rr=='extremely competent')?'checked':'' ?>></td>            
         </tr>
                     <?php $rb = $tech_skills_details["ruby"]; ?> 
  <tr>    <td> Ruby: </td><td><input type="radio" name="ruby" value="not at all competent" <?php echo ($rb=='not at all competent')?'checked':'' ?>>  </td>
                    <td> <input type="radio" name="ruby" value="little competent" <?php echo ($rb=='little competent')?'checked':'' ?>></td>
                   <td>  <input type="radio" name="ruby" value="moderately competent" <?php echo ($rb=='moderately competent')?'checked':'' ?>></td>
                    <td> <input type="radio" name="ruby" value="extremely competent" <?php echo ($rb=='extremely competent')?'checked':'' ?>></td>             
         </tr>           
                     <?php $so = $tech_skills_details["sql_oracle"]; ?> 
     <tr>   <td>SQL-Oracle:</td> <td><input type="radio" name="sqloracle" value="not at all competent" <?php echo ($so=='not at all competent')?'checked':'' ?>>  </td>
                    <td> <input type="radio" name="sqloracle" value="little competent" <?php echo ($so=='little competent')?'checked':'' ?>></td>
                    <td> <input type="radio" name="sqloracle" value="moderately competent" <?php echo ($so=='moderately competent')?'checked':'' ?>></td>
                     <td><input type="radio" name="sqloracle" value="extremely competent" <?php echo ($so=='extremely competent')?'checked':'' ?>></td>            
                     
                     <?php $tc = $tech_skills_details["tcl"]; ?> 
    <tr>   <td> Tcl: </td><td><input type="radio" name="tcl" value="not at all competent" <?php echo ($tc=='not at all competent')?'checked':'' ?>>  </td>
                    <td> <input type="radio" name="tcl" value="little competent" <?php echo ($tc=='little competent')?'checked':'' ?>></td>
                    <td> <input type="radio" name="tcl" value="moderately competent" <?php echo ($tc=='moderately competent')?'checked':'' ?>></td>
                    <td> <input type="radio" name="tcl" value="extremely competent" <?php echo ($tc=='extremely competent')?'checked':'' ?>></td>             
         </tr>           
                     <?php $ts = $tech_skills_details["t_sql"]; ?> 
    <tr>  <td> T-SQL: </td><td><input type="radio" name="tsql" value="not at all competent" <?php echo ($ts=='not at all competent')?'checked':'' ?>>  </td>
                    <td> <input type="radio" name="tsql" value="little competent" <?php echo ($ts=='little competent')?'checked':'' ?>></td>
                     <td><input type="radio" name="tsql" value="moderately competent" <?php echo ($ts=='moderately competent')?'checked':'' ?>></td>
                     <td><input type="radio" name="tsql" value="extremely competent" <?php echo ($ts=='extremely competent')?'checked':'' ?>></td>          
         </tr>
                     <?php $vb = $tech_skills_details["vb_net"]; ?> 
     <tr>  <td> VB.NET: </td><td><input type="radio" name="vbnet" value="not at all competent" <?php echo ($vb=='not at all competent')?'checked':'' ?>>  </td>
                   <td>  <input type="radio" name="vbnet" value="little competent" <?php echo ($vb=='little competent')?'checked':'' ?>></td>
                    <td> <input type="radio" name="vbnet" value="moderately competent" <?php echo ($vb=='moderately competent')?'checked':'' ?>></td>
                    <td> <input type="radio" name="vbnet" value="extremely competent" <?php echo ($vb=='extremely competent')?'checked':'' ?>></td>      
          </tr>         
                     <?php $to = $tech_skills_details["tech_other"]; ?> 
  <tr>      <td>Other:</td> <td><input type="radio" name="tech_other" value="not at all competent" <?php echo ($to=='not at all competent')?'checked':'' ?>>  </td>
                   <td>  <input type="radio" name="tech_other" value="little competent" <?php echo ($to=='little competent')?'checked':'' ?>></td>
                   <td>  <input type="radio" name="tech_other" value="moderately competent" <?php echo ($to=='moderately competent')?'checked':'' ?>></td>
                   <td><input type="radio" name="tech_other" value="extremely competent" <?php echo ($to=='extremely competent')?'checked':'' ?>></td>           
 </tr>
       </table>   
                     
       <br/><br/>
     <h2 style="margin-left: 2em; color: blue" >CMS skills:</h2><br/>
       <table style="margin-left:3em">
         <tr>
          <th> Skills</th>
         <th> Not at all competent</th>
         <th> Little competent</th>
         <th> Moderately competent</th>
         <th> Extremely competent</th>
         </tr>             
                    <?php $con = $cms_skills_details["concrete5"];?>
         <tr><td>  Concrete5: </td><td><input type="radio" name="concrete5" value="not at all competent" <?php echo ($con=='not at all competent')?'checked':'' ?>>  </td>
                   <td>  <input type="radio" name="concrete5" value="little competent" <?php echo ($con=='little competent')?'checked':'' ?>></td>
                   <td>  <input type="radio" name="concrete5" value="moderately competent" <?php echo ($con=='moderately competent')?'checked':'' ?>></td>
                   <td>  <input type="radio" name="concrete5" value="extremely competent" <?php echo ($con=='extremely competent')?'checked':'' ?>></td>             
        </tr>             
                     <?php $dot = $cms_skills_details["dotnetnuke"];?>
    <tr>   <td> DotNetNuke:</td><td> <input type="radio" name="dotnetnuke" value="not at all competent" <?php echo ($dot=='not at all competent')?'checked':'' ?>>  </td>
                  <td>   <input type="radio" name="dotnetnuke" value="little competent" <?php echo ($dot=='little competent')?'checked':'' ?>></td>
                   <td>  <input type="radio" name="dotnetnuke" value="moderately competent" <?php echo ($dot=='moderately competent')?'checked':'' ?>></td>
                   <td>  <input type="radio" name="dotnetnuke" value="extremely competent" <?php echo ($dot=='extremely competent')?'checked':'' ?>>  </td>         
      </tr>               
                     <?php $dru = $cms_skills_details["drupal"];?>
      <tr> <td> Drupal:</td><td> <input type="radio" name="drupal" value="not at all competent" <?php echo ($dru=='not at all competent')?'checked':'' ?>>  </td>
                   <td>  <input type="radio" name="drupal" value="little competent" <?php echo ($dru=='little competent')?'checked':'' ?>></td>
                   <td>  <input type="radio" name="drupal" value="moderately competent" <?php echo ($dru=='moderately competent')?'checked':'' ?>></td>
                   <td>  <input type="radio" name="drupal" value="extremely competent" <?php echo ($dru=='extremely competent')?'checked':'' ?>></td>  
        </tr>              
                     <?php $jom = $cms_skills_details["joomla"];?>
     <tr>  <td>Joomla: </td><td><input type="radio" name="joomla" value="not at all competent" <?php echo ($jom=='not at all competent')?'checked':'' ?>>  </td>
                   <td>  <input type="radio" name="joomla" value="little competent" <?php echo ($jom=='little competent')?'checked':'' ?>></td>
                   <td>  <input type="radio" name="joomla" value="moderately competent" <?php echo ($jom=='moderately competent')?'checked':'' ?>></td>
                   <td>  <input type="radio" name="joomla" value="extremely competent" <?php echo ($jom=='extremely competent')?'checked':'' ?>>      </td>    
       </tr>   
                     <?php $word = $cms_skills_details["wordpress"];?>
    <tr>   <td> Wordpress:</td><td> <input type="radio" name="wordpress" value="not at all competent" <?php echo ($word=='not at all competent')?'checked':'' ?>> </td>
                  <td>   <input type="radio" name="wordpress" value="little competent" <?php echo ($word=='little competent')?'checked':'' ?>></td>
                    <td> <input type="radio" name="wordpress" value="moderately competent" <?php echo ($word=='moderately competent')?'checked':'' ?>></td>
                    <td> <input type="radio" name="wordpress" value="extremely competent" <?php echo ($word=='extremely competent')?'checked':'' ?>>  </td> 
         </tr>              
                     <?php $cmo = $cms_skills_details["cms_other"];?>
      <tr>  <td> Other: </td><td><input type="radio" name="cms_other" value="not at all competent" <?php echo ($cmo=='not at all competent')?'checked':'' ?>>  </td>
                  <td>   <input type="radio" name="cms_other" value="little competent" <?php echo ($cmo=='little competent')?'checked':'' ?>></td>
                   <td>  <input type="radio" name="cms_other" value="moderately competent" <?php echo ($cmo=='moderately competent')?'checked':'' ?>></td>
                   <td>  <input type="radio" name="cms_other" value="extremely competent" <?php echo ($cmo=='extremely competent')?'checked':'' ?>>   </td>     
      </tr>
       </table>
         <br/><br/>
        
     <h2 style="margin-left: 2em; color: blue" >Operating System skills:</h2><br/>                
      <table style="margin-left:3em">
         <tr>
          <th> Skills</th>
         <th> Not at all competent</th>
         <th> Little competent</th>
         <th> Moderately competent</th>
         <th> Extremely competent</th>
         </tr>
         
                     <?php $an = $os_skills_details["android"];?>
         <tr> <td>Android: </td><td><input type="radio" name="android" value="not at all competent" <?php echo ($an=='not at all competent')?'checked':'' ?>>  </td>
                 <td>    <input type="radio" name="android" value="little competent" <?php echo ($an=='little competent')?'checked':'' ?>></td>
                 <td>    <input type="radio" name="android" value="moderately competent" <?php echo ($an=='moderately competent')?'checked':'' ?>></td>
                  <td>   <input type="radio" name="android" value="extremely competent" <?php echo ($an=='extremely competent')?'checked':'' ?>>  </td>          
       <tr>
                     <?php $cho = $os_skills_details["chrome_os"];?>
    <tr><td> Chrome OS:</td> <td><input type="radio" name="chrome_os" value="not at all competent" <?php echo ($cho=='not at all competent')?'checked':'' ?>>  </td>
                  <td>   <input type="radio" name="chrome_os" value="little competent" <?php echo ($cho=='little competent')?'checked':'' ?>></td>
                   <td>  <input type="radio" name="chrome_os" value="moderately competent" <?php echo ($cho=='moderately competent')?'checked':'' ?>></td>
                   <td>  <input type="radio" name="chrome_os" value="extremely competent" <?php echo ($cho=='extremely competent')?'checked':'' ?>></td>
       <tr>
                     <?php $io = $os_skills_details["ios"];?>
    <tr>  <td>iOS:</td><td> <input type="radio" name="ios" value="not at all competent" <?php echo ($io=='not at all competent')?'checked':'' ?>>  </td>
                  <td>   <input type="radio" name="ios" value="little competent" <?php echo ($io=='little competent')?'checked':'' ?>></td>
                  <td>   <input type="radio" name="ios" value="moderately competent" <?php echo ($io=='moderately competent')?'checked':'' ?>></td>
                  <td>   <input type="radio" name="ios" value="extremely competent" <?php echo ($io=='extremely competent')?'checked':'' ?>> </td>           
       <tr>
                     <?php $lx = $os_skills_details["linux"];?>
     <tr> <td>Linux:</td><td> <input type="radio" name="linux" value="not at all competent" <?php echo ($lx=='not at all competent')?'checked':'' ?>>  </td>
               <td>      <input type="radio" name="linux" value="little competent" <?php echo ($lx=='little competent')?'checked':'' ?>></td>
                <td>     <input type="radio" name="linux" value="moderately competent" <?php echo ($lx=='moderately competent')?'checked':'' ?>></td>
                <td>     <input type="radio" name="linux" value="extremely competent" <?php echo ($lx=='extremely competent')?'checked':'' ?>>   </td>         
       <tr>
                     <?php $mos = $os_skills_details["macos"];?>
   <tr> <td> MAC OS:</td><td> <input type="radio" name="macos" value="not at all competent" <?php echo ($mos=='not at all competent')?'checked':'' ?>>  </td>
                   <td>  <input type="radio" name="macos" value="little competent" <?php echo ($mos=='little competent')?'checked':'' ?>></td>
                   <td>  <input type="radio" name="macos" value="moderately competent" <?php echo ($mos=='moderately competent')?'checked':'' ?>></td>
                   <td> <input type="radio" name="macos" value="extremely competent" <?php echo ($mos=='extremely competent')?'checked':'' ?>>  </td>        
       <tr>
                     <?php $ux = $os_skills_details["unix"];?>
 <tr>  <td> Unix: </td><td><input type="radio" name="unix" value="not at all competent" <?php echo ($ux=='not at all competent')?'checked':'' ?>>  </td>
                  <td>   <input type="radio" name="unix" value="little competent" <?php echo ($ux=='little competent')?'checked':'' ?>></td>
                  <td>   <input type="radio" name="unix" value="moderately competent" <?php echo ($ux=='moderately competent')?'checked':'' ?>></td>
                  <td>   <input type="radio" name="unix" value="extremely competent" <?php echo ($ux=='extremely competent')?'checked':'' ?>>     </td> 
      <tr>               
                     <?php $win = $os_skills_details["windows"];?>
  <tr>   <td>Windows: </td><td><input type="radio" name="windows" value="not at all competent" <?php echo ($win=='not at all competent')?'checked':'' ?>>  </td>
                    <td> <input type="radio" name="windows" value="little competent" <?php echo ($win=='little competent')?'checked':'' ?>></td>
                   <td>  <input type="radio" name="windows" value="moderately competent" <?php echo ($win=='moderately competent')?'checked':'' ?>></td>
                    <td> <input type="radio" name="windows" value="extremely competent" <?php echo ($win=='extremely competent')?'checked':'' ?>>    </td>       
           <tr>          
                     <?php $oo = $os_skills_details["os_other"];?>
  <tr>  <td> Other: </td><td><input type="radio" name="os_other" value="not at all competent" <?php echo ($oo=='not at all competent')?'checked':'' ?>>  </td>
                    <td> <input type="radio" name="os_other" value="little competent" <?php echo ($oo=='little competent')?'checked':'' ?>></td>
                    <td> <input type="radio" name="os_other" value="moderately competent" <?php echo ($oo=='moderately competent')?'checked':'' ?>></td>
                    <td> <input type="radio" name="os_other" value="extremely competent" <?php echo ($oo=='extremely competent')?'checked':'' ?>></td>         
            <tr>           
      </table>
        <br/><br/>             
        <input type="submit" name="submit" value="submit" onclick="myAlert()" style="margin-left:5em"class="submitcss"> &nbsp; &nbsp;  
        <input type="button" name="cancel" value="Cancel"  class="cancelcss" onclick="window.location='user_page.php'" />    
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
            
           
   ////////////////////////////////////////////////////////////
            $intership_type = $_POST['intership_type'];
            $c_name = $_POST['c_name'];
            $c_address = $_POST['c_address'];
            $c_city = $_POST['c_city'];
            $c_postcode = $_POST['c_postcode'];
            $c_country = $_POST['c_country'];
            $c_fname = $_POST['c_fname'];
            $c_lname = $_POST['c_lname'];
            $c_position = $_POST['c_position'];
            $c_tel = $_POST['c_tel'];
            $c_email = $_POST['c_email'];
            $c_website = $_POST['c_website'];
            $notes = $_POST['notes'];
            $int_status = $_POST['int_status'];
 ////////////////////////////////////////////////////
          
           
 ///////////////////////////////////////////////////////
              $deg_type = $_POST['deg_type'];
              $e_major = $_POST['e_major'];
              $e_gpa = $_POST['e_gpa'];
              $e_uni = $_POST['e_uni'];
              $e_loc = $_POST['e_loc'];
              $e_cert = $_POST['e_cert'];
              $e_cert_body = $_POST['e_cert_body'];
      ////////////////////////////////////////////////////
              $w_cname = $_POST['w_cname'];
              $w_cloc = $_POST['w_cloc'];
              $w_jdate = $_POST['w_jdate'];
              $w_pos = $_POST['w_pos'];
              
            
 ////////////////////////////////////////////
             
               $asp = $_POST['asp'];
               $c1 = $_POST['c1'];
               $cplus = $_POST['cplus'];
               $chash = $_POST['chash'];
               $flex = $_POST['flex'];
               $java = $_POST['java'];
               $javas = $_POST['javas'];
               $lisp = $_POST['lisp'];
               $matlab = $_POST['matlab'];
               
               
               
               $pascal = $_POST['pascal'];
               $perl = $_POST['perl'];
               $php = $_POST['php'];
               $prolog = $_POST['prolog'];
               $python = $_POST['python'];
               $r = $_POST['r'];
               $ruby = $_POST['ruby'];
               $sqloracle = $_POST['sqloracle'];
               $tcl = $_POST['tcl'];
               $tsql = $_POST['tsql'];
               
               
               $mysql = $_POST['mysql'];
               $objectivec = $_POST['objectivec'];
               $vbnet = $_POST['vbnet'];
               $tech_other = $_POST['tech_other'];
               
                /////////////////////////////////////////////
              $concrete5 = $_POST['concrete5'];
              $dotnetnuke = $_POST['dotnetnuke'];
              $drupal = $_POST['drupal'];
              $joomla = $_POST['joomla'];
              $wordpress = $_POST['wordpress'];
              $cms_other = $_POST['cms_other'];
    
              ////////////////////////////////////////////
              $android = $_POST['android'];
              $chrome_os = $_POST['chrome_os'];
              $ios = $_POST['ios'];
              $linux = $_POST['linux'];
              $macos = $_POST['macos'];
              $unix = $_POST['unix'];
              $windows = $_POST['windows'];
              $os_other = $_POST['os_other'];
         //////////////////////////////////////

         
            $update_status = update_student_details($sid,$sfname,$smname,$slname,$semail,$stel,$gender,$stat,$sem_reg,$syear);
           
            $update_intership_status = update_intership_details($sid,$intership_type,$c_name,$c_address,$c_city,$c_postcode,$c_country);
            
            $update_intership_status1 = update_intership_details1($sid,$c_fname,$c_lname,$c_position,$c_tel,$c_email,$c_website,$notes,$int_status);
            
            
            
            $update_education_status = update_education_details($sid,$deg_type,$e_major,$e_gpa,$e_uni,$e_loc,$e_cert,$e_cert_body);       
            
            $update_work_status = update_work_details($sid,$w_cname,$w_cloc,$w_jdate,$w_pos);  
            
            $update_tech_skills_status = update_tech_skills_details($sid,$asp,$c1,$cplus,$chash,$flex,$java,$javas,
                      $lisp,$matlab);
            
           $update_tech_skills_status1 = update_tech_skills_details1($sid,$pascal,$perl,$php,$prolog,$python,
                                                                     $r,$ruby,$sqloracle,$tcl,$tsql);
            
            $update_tech_skills_status2 = update_tech_skills_details2($sid,$mysql,$objectivec,$vbnet,$tech_other);
            
             $update_cms_skills_status = update_cms_skills_details($sid,$concrete5,$dotnetnuke,$drupal,$joomla,$wordpress,$cms_other);
            
           $update_os_skills_status = update_os_skills_details($sid,$android,$chrome_os,$ios,$linux,$macos,$unix,$windows,$os_other);
            
            
            
            
         if ($update_status || $update_intership_status || $update_intership_status1
                 || $update_education_status || $update_work_status || $update_tech_skills_status ||
                 $update_tech_skills_status1 || $update_tech_skills_status2 || $update_cms_skills_status
                 || $update_os_skills_status) 
              {
 
//                     $_SESSION["sessionMessage"] = "User updated successfully";
                     header("Location: user_page.php");
                 } 
            else {
                    echo "Fail to update user";
                 }
 
           
            }
            
            ?>
           
          <br/><br/>
                
          
  
    </form>
    
    

</body>
</html>

