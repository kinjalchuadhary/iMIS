<?php
require 'database.php';

function get_user_by_email($emailid) {
    global $db;
    $query = 'SELECT * FROM Master_Table m
              WHERE m.email = :emailid';
    $statement = $db -> prepare($query);
    $statement -> bindValue(":emailid", $emailid);
    
    $statement -> execute();
    $masterdetails = $statement -> fetch();
    $statement -> closeCursor();
    
    return $masterdetails;
}

function insert_first_time_user_by_email($sid,$ufname,$ulname,$uemail, $upassword)
{
    global $db;
    $query = 'INSERT INTO Master_Table
                 (master_id,first_name,last_name,email,password)
              VALUES
                 (:sid,:ufname,:ulname,:uemail, :upassword)';
    
        $statement = $db -> prepare($query);
         $statement -> bindValue(':sid', $sid);
	 $statement -> bindValue(':ufname', $ufname);
	 $statement -> bindValue(':ulname', $ulname);
    $statement -> bindValue(':uemail', $uemail);
    $statement -> bindValue(':upassword', $upassword);
    $status = $statement -> execute();
    $statement -> closeCursor();
    
    return $status;
}

function update_student_details($sid,$sfname,$smname,$slname,$semail,$stel,$gender,$stat,$sem_reg,$syear)
{
    global $db;
    
  $query = 'UPDATE student_details SET
                 stu_first_name=:sfname, stu_middle_name=:smname,stu_last_name=:slname,
                 stu_email=:semail,stu_tel=:stel, 
                    stu_gender=:gender,stu_status=:stat,stu_reg_sem=:sem_reg,stu_year=:syear
                 
              WHERE stu_id = :sid';                
				 
  
  
          $statement = $db -> prepare($query);
           $statement -> bindValue(':sid', $sid);
	 $statement -> bindValue(':sfname', $sfname);
         $statement -> bindValue(':smname', $smname);
         $statement -> bindValue(':slname', $slname);
          $statement -> bindValue(':semail', $semail);
          $statement -> bindValue(':stel', $stel);
         $statement -> bindValue(':gender', $gender);
         $statement -> bindValue(':stat', $stat);
         $statement -> bindValue(':sem_reg', $sem_reg);   
         $statement -> bindValue(':syear', $syear);

     $update_status = $statement -> execute();
        $statement -> closeCursor();
    
    return $update_status;
}

function get_info_by_stu_id($stu_id) {
    global $db;
    $query = 'SELECT * FROM student_details s
              WHERE s.stu_id = :stu_id';
    $statement = $db -> prepare($query);
    $statement -> bindValue(":stu_id", $stu_id);
    
    $statement -> execute();
    $studentdetails = $statement -> fetch();
    $statement -> closeCursor();
    
    return $studentdetails;
}

function get_intership_info_by_stu_id($stu_id) {
    global $db;
    $query = 'SELECT * FROM intership i
              WHERE i.stu_id = :stu_id';
    $statement = $db -> prepare($query);
    $statement -> bindValue(":stu_id", $stu_id);
    
    $statement -> execute();
    $intership_details = $statement -> fetch();
    $statement -> closeCursor();
    
    return $intership_details;
}

function get_job_groups_info_by_stu_id($stu_id) {
    global $db;
    $query = 'SELECT * FROM job_groups j
              WHERE j.stu_id = :stu_id';
    $statement = $db -> prepare($query);
    $statement -> bindValue(":stu_id", $stu_id);
    
    $statement -> execute();
    $job_groups_details = $statement -> fetch();
    $statement -> closeCursor();
    
    return $job_groups_details;
}

function get_education_info_by_stu_id($stu_id) {
    global $db;
    $query = 'SELECT * FROM education i
              WHERE i.stu_id = :stu_id';
    $statement = $db -> prepare($query);
    $statement -> bindValue(":stu_id", $stu_id);
    
    $statement -> execute();
    $education_details = $statement -> fetch();
    $statement -> closeCursor();
    
    return $education_details;
}

function get_work_info_by_stu_id($stu_id) {
    global $db;
    $query = 'SELECT * FROM work w
              WHERE w.stu_id = :stu_id';
    $statement = $db -> prepare($query);
    $statement -> bindValue(":stu_id", $stu_id);
    
    $statement -> execute();
    $work_details = $statement -> fetch();
    $statement -> closeCursor();
    
    return $work_details;
}

function get_tech_skills_info_by_stu_id($stu_id) 
{
    global $db;
    $query = 'SELECT * FROM technical_skills t
              WHERE t.stu_id = :stu_id';
    $statement = $db -> prepare($query);
    $statement -> bindValue(":stu_id", $stu_id);
    
    $statement -> execute();
    $tech_skills_details = $statement -> fetch();
    $statement -> closeCursor();
    
    return $tech_skills_details;
}
function get_cms_skills_info_by_stu_id($stu_id) 
{
    global $db;
    $query = 'SELECT * FROM cms_skills c
              WHERE c.stu_id = :stu_id';
    $statement = $db -> prepare($query);
    $statement -> bindValue(":stu_id", $stu_id);
    
    $statement -> execute();
    $cms_skills_details = $statement -> fetch();
    $statement -> closeCursor();
    
    return $cms_skills_details;
}
function get_os_skills_info_by_stu_id($stu_id) 
{
    global $db;
    $query = 'SELECT * FROM operating_system_skills o
              WHERE o.stu_id = :stu_id';
    $statement = $db -> prepare($query);
    $statement -> bindValue(":stu_id", $stu_id);
    
    $statement -> execute();
    $os_skills_details = $statement -> fetch();
    $statement -> closeCursor();
    
    return $os_skills_details;
}


function insert_first_time_user_info_to_student_details($usid,$ufname,$ulname,$uemail)
{
    global $db;
    $query = 'INSERT INTO student_details
                 (stu_id,stu_first_name,stu_last_name,stu_email)
              VALUES
                 (:usid,:ufname,:ulname,:uemail)';
				 
    $statement = $db -> prepare($query);
        $statement -> bindValue(':usid', $usid);
	 $statement -> bindValue(':ufname', $ufname);
	 $statement -> bindValue(':ulname', $ulname);
    $statement -> bindValue(':uemail', $uemail);
   
    $status = $statement -> execute();
    $statement -> closeCursor();
}

function  insert_first_time_user_info_to_intership($usid)
{
    global $db;
    $query = 'INSERT INTO intership
                 (stu_id) VALUES (:usid)';			 
    $statement = $db -> prepare($query);
        $statement -> bindValue(':usid', $usid);
    $status = $statement -> execute();
    $statement -> closeCursor();
}

function  insert_first_time_user_info_to_job_groups($usid)
{
    global $db;
    $query = 'INSERT INTO job_groups    
                 (stu_id) VALUES (:usid)';			 
    $statement = $db -> prepare($query);
        $statement -> bindValue(':usid', $usid);
    $status = $statement -> execute();
    $statement -> closeCursor();
}

function  insert_first_time_user_info_to_education($usid)
{
    global $db;
    $query = 'INSERT INTO education    
                 (stu_id) VALUES (:usid)';			 
    $statement = $db -> prepare($query);
        $statement -> bindValue(':usid', $usid);
    $status = $statement -> execute();
    $statement -> closeCursor();
}

function  insert_first_time_user_info_to_work($usid)
{
    global $db;
    $query = 'INSERT INTO work    
                 (stu_id) VALUES (:usid)';			 
    $statement = $db -> prepare($query);
        $statement -> bindValue(':usid', $usid);
    $status = $statement -> execute();
    $statement -> closeCursor();
}
function  insert_first_time_user_info_to_tech_skills($usid)
{
    global $db;
    $query = 'INSERT INTO technical_skills    
                 (stu_id) VALUES (:usid)';			 
    $statement = $db -> prepare($query);
        $statement -> bindValue(':usid', $usid);
    $status = $statement -> execute();
    $statement -> closeCursor();
}

function  insert_first_time_user_info_to_cms_skills($usid)
{
    global $db;
    $query = 'INSERT INTO cms_skills    
                 (stu_id) VALUES (:usid)';			 
    $statement = $db -> prepare($query);
        $statement -> bindValue(':usid', $usid);
    $status = $statement -> execute();
    $statement -> closeCursor();
}



function  insert_first_time_user_info_to_os_skills($usid)
{
    global $db;
    $query = 'INSERT INTO operating_system_skills    
                 (stu_id) VALUES (:usid)';			 
    $statement = $db -> prepare($query);
        $statement -> bindValue(':usid', $usid);
    $status = $statement -> execute();
    $statement -> closeCursor();
}

function update_intership_details($sid,$intership_type,$c_name,$c_address,$c_city,$c_postcode,$c_country)
{
    global $db;
 
  $query = 'UPDATE intership SET
      
                 inter_type=:intership_type,inter_company_name=:c_name,inter_address=:c_address,
                 inter_city=:c_city,inter_postal_code=:c_postcode,inter_country=:c_country
                
                       WHERE stu_id = :sid';                

          $statement = $db -> prepare($query);
           $statement -> bindValue(':sid', $sid);
	 $statement -> bindValue(':intership_type',$intership_type);
         $statement -> bindValue(':c_name', $c_name);
         $statement -> bindValue(':c_address', $c_address);
          $statement -> bindValue(':c_city', $c_city);
          $statement -> bindValue(':c_postcode', $c_postcode);
         $statement -> bindValue(':c_country', $c_country);
        

        $update_intership_status = $statement -> execute();
        $statement -> closeCursor();
    
    return $update_intership_status;
}

function update_intership_details1($sid,$c_fname,$c_lname,$c_position,$c_tel,$c_email,$c_website,$notes,$int_status)
{
    global $db;
 
  $query = 'UPDATE intership SET
                
                 contact_person_fn=:c_fname,contact_person_ln=:c_lname,contact_person_position=:c_position,
                 inter_tel=:c_tel,inter_email=:c_email,inter_company_website=:c_website,notes=:notes,inter_status=:int_status
                       WHERE stu_id = :sid';                

          $statement = $db -> prepare($query);
           $statement -> bindValue(':sid', $sid);
	
         $statement -> bindValue(':c_fname', $c_fname);
         $statement -> bindValue(':c_lname', $c_lname);   
         $statement -> bindValue(':c_position', $c_position);
         $statement -> bindValue(':c_tel', $c_tel);
         $statement -> bindValue(':c_email', $c_email);
         $statement -> bindValue(':c_website', $c_website);
         $statement -> bindValue(':notes', $notes);  
         $statement -> bindValue(':int_status', $int_status);

        $update_intership_status1 = $statement -> execute();
        $statement -> closeCursor();
    
    return $update_intership_status1;
}


function update_education_details($sid,$deg_type,$e_major,$e_gpa,$e_uni,$e_loc,$e_cert,$e_cert_body)
{
    global $db;
 
  $query = 'UPDATE education SET
      
                 degree_type=:deg_type,degree_major=:e_major,degree_gpa=:e_gpa,degree_university=:e_uni,
                 degree_university_location=:e_loc,certifications=:e_cert,certifications_body=:e_cert_body
                 
                       WHERE stu_id = :sid';                

          $statement = $db -> prepare($query);
           $statement -> bindValue(':sid', $sid);
	 $statement -> bindValue(':deg_type',$deg_type);
         $statement -> bindValue(':e_major', $e_major);
         $statement -> bindValue(':e_gpa', $e_gpa);
          $statement -> bindValue(':e_uni', $e_uni);
          $statement -> bindValue(':e_loc', $e_loc);
         $statement -> bindValue(':e_cert', $e_cert);
          $statement -> bindValue(':e_cert_body', $e_cert_body);
        

        $update_education_status = $statement -> execute();
        $statement -> closeCursor();
    
    return $update_education_status;
}

function update_work_details($sid,$w_cname,$w_cloc,$w_jdate,$w_pos)
{
    global $db;
 
  $query = 'UPDATE work SET
      
           work_company_name=:w_cname,work_company_location=:w_cloc,work_date_of_joining=:w_jdate,work_position=:w_pos
                 
                       WHERE stu_id = :sid';                

          $statement = $db -> prepare($query);
           $statement -> bindValue(':sid', $sid);
	 $statement -> bindValue(':w_cname',$w_cname);
         $statement -> bindValue(':w_cloc', $w_cloc);
         $statement -> bindValue(':w_jdate', $w_jdate);
          $statement -> bindValue(':w_pos', $w_pos);
        
        $update_work_status = $statement -> execute();
        $statement -> closeCursor();
    
    return $update_work_status;
}

function update_tech_skills_details($sid,$asp,$c1,$cplus,$chash,$flex,$java,$javas,
                      $lisp,$matlab)
{
    global $db;
  $query = 'UPDATE technical_skills SET  
                    asp_net=:asp,c=:c1,cplusplus=:cplus,csharp=:chash,flex=:flex,java=:java,
                    javascript=:javas,lisp=:lisp,matlab=:matlab
                       WHERE stu_id = :sid';                
           
           $statement = $db -> prepare($query);
           $statement -> bindValue(':sid', $sid);
           $statement -> bindValue(':asp', $asp);
           $statement -> bindValue(':c1', $c1);
           $statement -> bindValue(':cplus', $cplus);
           $statement -> bindValue(':chash', $chash);
           $statement -> bindValue(':flex', $flex);
           $statement -> bindValue(':java', $java);
           $statement -> bindValue(':javas', $javas);
           $statement -> bindValue(':lisp', $lisp);
           $statement -> bindValue(':matlab', $matlab);
      
        $update_tech_skills_status = $statement -> execute();
        $statement -> closeCursor();
    
    return $update_tech_skills_status;
}

function update_tech_skills_details1($sid,$pascal,$perl,$php,$prolog,$python,
                                      $r,$ruby,$sqloracle,$tcl,$tsql)
{
    global $db;
  $query = 'UPDATE technical_skills SET  
                    pascal=:pascal,perl=:perl,php=:php,prolog=:prolog,python=:python,
                    r=:r,ruby=:ruby,sql_oracle=:sqloracle,tcl=:tcl,t_sql=:tsql
                       WHERE stu_id = :sid';                
           
           $statement = $db -> prepare($query);
           $statement -> bindValue(':sid', $sid);
           $statement -> bindValue(':pascal', $pascal);
           $statement -> bindValue(':perl', $perl);
           $statement -> bindValue(':php', $php);
           $statement -> bindValue(':prolog', $prolog);
           $statement -> bindValue(':r', $r);
           $statement -> bindValue(':python', $python);
           $statement -> bindValue(':ruby', $ruby);
           $statement -> bindValue(':sqloracle', $sqloracle);
           $statement -> bindValue(':tcl', $tcl);
           $statement -> bindValue(':tsql', $tsql);
          
        $update_tech_skills_status1 = $statement -> execute();
        $statement -> closeCursor();
    
    return $update_tech_skills_status1;
}

function update_tech_skills_details2($sid,$mysql,$objectivec,$vbnet,$tech_other)
{
    global $db;
    
  $query = 'UPDATE technical_skills SET  
                    mysql=:mysql,objective_c=:objectivec,vb_net=:vbnet,tech_other=:tech_other
                       WHERE stu_id = :sid';                
           
           $statement = $db -> prepare($query);
           $statement -> bindValue(':sid', $sid);
          $statement -> bindValue(':mysql', $mysql);
           $statement -> bindValue(':objectivec', $objectivec);
           $statement -> bindValue(':tech_other', $tech_other);
          $statement -> bindValue(':vbnet', $vbnet);
        
        $update_tech_skills_status2 = $statement -> execute();
        $statement -> closeCursor();
    
    return $update_tech_skills_status2;
}

function update_cms_skills_details($sid,$concrete5,$dotnetnuke,$drupal,$joomla,$wordpress,$cms_other)
{
    global $db;
    
  $query = 'UPDATE cms_skills SET  
                    concrete5=:concrete5,dotnetnuke=:dotnetnuke,drupal=:drupal,joomla=:joomla,
                    wordpress=:wordpress,cms_other=:cms_other
                       WHERE stu_id = :sid';                
           
           $statement = $db -> prepare($query);
           $statement -> bindValue(':sid', $sid);
           $statement -> bindValue(':concrete5', $concrete5);
           $statement -> bindValue(':dotnetnuke', $dotnetnuke);
           $statement -> bindValue(':drupal', $drupal);
           $statement -> bindValue(':joomla', $joomla);
           $statement -> bindValue(':wordpress', $wordpress);
             $statement -> bindValue(':cms_other', $cms_other);
   
        $update_cms_skills_status = $statement -> execute();
        $statement -> closeCursor();
    
    return $update_cms_skills_status;
}

function update_os_skills_details($sid,$android,$chrome_os,$ios,$linux,$macos,$unix,$windows,$os_other)
{
    global $db;
    
  $query = 'UPDATE operating_system_skills SET  
                    android=:android,chrome_os=:chrome_os,ios=:ios,linux=:linux,
                    macos=:macos,unix=:unix,windows=:windows,os_other=:os_other
                       WHERE stu_id = :sid';                
           
           $statement = $db -> prepare($query);
           $statement -> bindValue(':sid', $sid);
           $statement -> bindValue(':android', $android);
           $statement -> bindValue(':chrome_os', $chrome_os);
           $statement -> bindValue(':ios', $ios);
           $statement -> bindValue(':linux', $linux);
           $statement -> bindValue(':macos', $macos);
           $statement -> bindValue(':unix', $unix);
           $statement -> bindValue(':windows', $windows);
           $statement -> bindValue(':os_other', $os_other);
           
          
   
        $update_os_skills_status = $statement -> execute();
        $statement -> closeCursor();
    
    return $update_os_skills_status;
}

?>