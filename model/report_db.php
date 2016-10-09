<?php
require 'database.php';


function fetch_report_of_intership($intership_type,$c_name,$c_city,$c_country,$int_status)
        {
    global $db;
    $query = 'SELECT * FROM intership i
              WHERE (i.inter_type =:intership_type and i.inter_company_name=:c_name and i.inter_city=:c_city
                      and i.inter_country=:c_country and i.inter_status=:int_status)';
    
         $statement = $db -> prepare($query);
    
	 $statement -> bindValue(':intership_type',$intership_type);
         $statement -> bindValue(':c_name', $c_name);    
          $statement -> bindValue(':c_city', $c_city);     
         $statement -> bindValue(':c_country', $c_country);
         $statement -> bindValue(':int_status', $int_status);
  
    $statement -> execute();
    $idetails = $statement -> fetchAll();
    $statement -> closeCursor();
    
    return $idetails;
}

function fetch_report_of_intership_row_num($intership_type,$c_name,$c_city,$c_country,$int_status)
        {
    global $db;
    $query = 'SELECT * FROM intership i
              WHERE (i.inter_type =:intership_type and i.inter_company_name=:c_name and i.inter_city=:c_city
                      and i.inter_country=:c_country and i.inter_status=:int_status)';
    
         $statement = $db -> prepare($query);
    
	 $statement -> bindValue(':intership_type',$intership_type);
         $statement -> bindValue(':c_name', $c_name);    
          $statement -> bindValue(':c_city', $c_city);     
         $statement -> bindValue(':c_country', $c_country);
         $statement -> bindValue(':int_status', $int_status);
  
    $statement -> execute();
    $irow_count = $statement->rowCount();
    $statement -> closeCursor();
    
    return $irow_count;
}

function fetch_report_of_students($gender,$stat,$sem_reg)
        {
    global $db;
    $query = 'SELECT * FROM student_details s
              WHERE (s.stu_gender =:gender and s.stu_status=:stat and s.stu_reg_sem=:sem_reg)';
    
         $statement = $db -> prepare($query);
    
	 $statement -> bindValue(':gender',$gender);
         $statement -> bindValue(':stat',$stat);
         $statement -> bindValue(':sem_reg',$sem_reg);
    
    $statement -> execute();
    $sdetails = $statement -> fetchAll();
    $statement -> closeCursor();
    
    return $sdetails;
}
function fetch_report_of_students_row_num($gender,$stat,$sem_reg)
        {
    global $db;
    $query = 'SELECT * FROM student_details s
              WHERE (s.stu_gender =:gender and s.stu_status=:stat and s.stu_reg_sem=:sem_reg)';
    
         $statement = $db -> prepare($query);
    
	 $statement -> bindValue(':gender',$gender);
         $statement -> bindValue(':stat',$stat);
         $statement -> bindValue(':sem_reg',$sem_reg);
    
    $statement -> execute();
     $srow_count = $statement->rowCount();
    $statement -> closeCursor();
    
    return $srow_count;
}

function fetch_report_of_education($deg_type,$e_major,$e_cert)
        {
    global $db;
    $query = 'SELECT * FROM education e
              WHERE (e.degree_type =:deg_type and e.degree_major=:e_major and e.certifications=:e_cert)';
    
         $statement = $db -> prepare($query);
    
	 $statement -> bindValue(':deg_type',$deg_type);
         $statement -> bindValue(':e_major',$e_major);
         $statement -> bindValue(':e_cert',$e_cert);
    
    $statement -> execute();
    $edetails = $statement -> fetchAll();
    $statement -> closeCursor();
    
    return $edetails;
}

function fetch_report_of_education_row_num($deg_type,$e_major,$e_cert)
        {
    global $db;
    $query = 'SELECT * FROM education e
              WHERE (e.degree_type =:deg_type and e.degree_major=:e_major and e.certifications=:e_cert)';
    
         $statement = $db -> prepare($query);
    
	 $statement -> bindValue(':deg_type',$deg_type);
         $statement -> bindValue(':e_major',$e_major);
         $statement -> bindValue(':e_cert',$e_cert);
    
    $statement -> execute();
   $erow_count = $statement->rowCount();
    $statement -> closeCursor();
    
    return $erow_count;
}


function fetch_report_of_work($w_cname)
        {
    global $db;
    $query = 'SELECT * FROM work w
              WHERE (w.work_company_name =:w_cname)';
    
         $statement = $db -> prepare($query);
    
	 $statement -> bindValue(':w_cname',$w_cname);
        
    
    $statement -> execute();
    $wdetails = $statement -> fetchAll();
    $statement -> closeCursor();
    
    return $wdetails;
}

function fetch_report_of_work_row_num($w_cname)
        {
    global $db;
    $query = 'SELECT * FROM work w
              WHERE (w.work_company_name =:w_cname)';
    
         $statement = $db -> prepare($query);
    
	 $statement -> bindValue(':w_cname',$w_cname);
        
    
    $statement -> execute();
    $wrow_count = $statement->rowCount();
    $statement -> closeCursor();
    
    return $wrow_count;
}

function fetch_report_of_skill($t_level)
        {
    global $db;
    $query = 'SELECT * FROM technical_skills t
              WHERE (t.java =:t_level)';
    
         $statement = $db -> prepare($query);
    
	 $statement -> bindValue(':t_level',$t_level);
        
    
    $statement -> execute();
    $tdetails = $statement -> fetchAll();
    $statement -> closeCursor();
    
    return $tdetails;
}

function fetch_report_of_skill_row_num($t_level)
        {
    global $db;
    $query = 'SELECT * FROM technical_skills t
              WHERE (t.java =:t_level)';
    
         $statement = $db -> prepare($query);
    
	 $statement -> bindValue(':t_level',$t_level);
        
    
    $statement -> execute();
   $sk_count = $statement->rowCount();
    $statement -> closeCursor();
    
    return $sk_count;
}

function get_intership_row_num()
        {
    global $db;
    $query = 'SELECT * FROM intership';
    
    $statement = $db -> prepare($query);
   
    $statement -> execute();
    $row_count = $statement->rowCount();
    $statement -> closeCursor();
    
    return $row_count;
}

function get_skill_row_num()
        {
    global $db;
    $query = 'SELECT * FROM technical_skills';
    
    $statement = $db -> prepare($query);
   
    $statement -> execute();
      $row_count = $statement->rowCount();
    $statement -> closeCursor();
    
    return $row_count;
}
function get_student_row_num()
        {
    global $db;
    $query = 'SELECT * FROM student_details';
    
    $statement = $db -> prepare($query);
   
    $statement -> execute();
     $row_count = $statement->rowCount();
    $statement -> closeCursor();
    
    return $row_count;
}

function get_work_row_num()
        {
    global $db;
    $query = 'SELECT * FROM work';
    
    $statement = $db -> prepare($query);
   
    $statement -> execute();
     $row_count = $statement->rowCount();
    $statement -> closeCursor();
    
    return $row_count;
}
?>