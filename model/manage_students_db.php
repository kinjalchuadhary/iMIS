<?php

function view_students()
        {
    global $db;
    $query = 'SELECT * FROM student_details';
    
         $statement = $db -> prepare($query);
    
    $statement -> execute();
    $ssdetails = $statement -> fetchAll();
    $statement -> closeCursor();
    
    return $ssdetails;
}

function delete_student_in_master($stt_id)
{
    global $db;
 
  $query = 'DELETE FROM Master_Table WHERE master_id =:stt_id';
 
          $statement = $db -> prepare($query);
  
         $statement -> bindValue(':stt_id', $stt_id);
        $deleted_student_status = $statement -> execute();
        $statement -> closeCursor();
        return $deleted_student_status;
    
}
function delete_student_in_cms($stt_id)
{
    global $db;
 
  $query = 'DELETE FROM cms_skills WHERE stu_id =:stt_id';
 
          $statement = $db -> prepare($query);
  
         $statement -> bindValue(':stt_id', $stt_id);
        $statement -> execute();
        $statement -> closeCursor();
   
}

function delete_student_in_education($stt_id)
{
    global $db;
 
  $query = 'DELETE FROM education WHERE stu_id =:stt_id';
 
          $statement = $db -> prepare($query);
  
         $statement -> bindValue(':stt_id', $stt_id);
        $statement -> execute();
        $statement -> closeCursor();
   
}

function delete_student_in_intership($stt_id)
{
    global $db;
 
  $query = 'DELETE FROM intership WHERE stu_id =:stt_id';
 
          $statement = $db -> prepare($query);
  
         $statement -> bindValue(':stt_id', $stt_id);
        $statement -> execute();
        $statement -> closeCursor();
   
}
function delete_student_in_os($stt_id)
{
    global $db;
 
  $query = 'DELETE FROM operating_system_skills WHERE stu_id =:stt_id';
 
          $statement = $db -> prepare($query);
  
         $statement -> bindValue(':stt_id', $stt_id);
        $statement -> execute();
        $statement -> closeCursor();
   
}

function delete_student_in_tech($stt_id)
{
    global $db;
 
  $query = 'DELETE FROM technical_skills WHERE stu_id =:stt_id';
 
          $statement = $db -> prepare($query);
  
         $statement -> bindValue(':stt_id', $stt_id);
        $statement -> execute();
        $statement -> closeCursor();
   
}

function delete_student_in_work($stt_id)
{
    global $db;
 
  $query = 'DELETE FROM work WHERE stu_id =:stt_id';
 
          $statement = $db -> prepare($query);
  
         $statement -> bindValue(':stt_id', $stt_id);
        $statement -> execute();
        $statement -> closeCursor();
   
}
function delete_student_in_student($stt_id)
{
    global $db;
 
  $query = 'DELETE FROM student_details WHERE stu_id =:stt_id';
 
          $statement = $db -> prepare($query);
  
         $statement -> bindValue(':stt_id', $stt_id);
        $statement -> execute();
        $statement -> closeCursor();
   
}

?>
