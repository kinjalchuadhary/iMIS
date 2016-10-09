<?php
require 'database.php';

function admin_insert_job_groups_details($j_id,$job_type,$j_pos,$j_des,$j_resp,$j_req,$j_sal)
{
    global $db;
 
  $query = 'insert into job_groups
                (job_id,jgroup,job_position,job_description,job_responsibilities,job_requirements,job_salary)
                VALUES
                (:j_id,:job_type,:j_pos,:j_des,:j_resp,:j_req,:j_sal)';
             
          $statement = $db -> prepare($query);
           $statement -> bindValue(':j_id',$j_id);
	 $statement -> bindValue(':job_type',$job_type);
         $statement -> bindValue(':j_pos', $j_pos);
         $statement -> bindValue(':j_des', $j_des);
          $statement -> bindValue(':j_resp', $j_resp);
          $statement -> bindValue(':j_req', $j_req);
         $statement -> bindValue(':j_sal', $j_sal);
       
        $admin_update_job_groups_status = $statement -> execute();
        $statement -> closeCursor();
    
    return $admin_update_job_groups_status;
}

function view_job_posted()
        {
    global $db;
    $query = 'SELECT * FROM job_groups';
    
         $statement = $db -> prepare($query);
    
    
    $statement -> execute();
    $jdetails = $statement -> fetchAll();
    $statement -> closeCursor();
    
    return $jdetails;
}
function get_job_group_row_num()
        {
    global $db;
    $query = 'SELECT * FROM job_groups';
    
    $statement = $db -> prepare($query);
   
    $statement -> execute();
    $row_count = $statement->rowCount();
    $statement -> closeCursor();
    
    return $row_count;
}
function delete_post_by_id($jb_id)
{
    global $db;
 
  $query = 'DELETE FROM job_groups WHERE job_id =:jb_id';
             
          $statement = $db -> prepare($query);
         $statement -> bindValue(':jb_id', $jb_id);
        $deleted_post_status = $statement -> execute();
        $statement -> closeCursor();
        return $deleted_post_status;
    
}


function admin_insert_job_job_show($j_id)
{
    global $db;
 
  $query = 'insert into job_show
                (job_id)
                VALUES
                (:j_id)';
             
          $statement = $db -> prepare($query);
           $statement -> bindValue(':j_id',$j_id);
           
        $statement -> execute();
        $statement -> closeCursor();
    
}
function check_interest_in_job_show($interest_id)
{
    
 
 global $db;
    $query = 'SELECT interest_status FROM job_show j
              WHERE j.job_id = :interest_id';
    $statement = $db -> prepare($query);
    $statement -> bindValue(":interest_id", $interest_id);
    
    $statement -> execute();
    $int_status = $statement -> fetch();
    $statement -> closeCursor();
    
    return $int_status;
}


function insert_my_interest_status($myinterest,$j_id)
{
    global $db;
 
    $query = 'UPDATE job_show SET
                 interest_status=:myinterest
                 
              WHERE job_id = :j_id';                
				 

             
          $statement = $db -> prepare($query);
           $statement -> bindValue(':j_id',$j_id);
	 $statement -> bindValue(':myinterest',$myinterest);
        
       
        $status = $statement -> execute();
        $statement -> closeCursor();
    
    return $status;
}

function delete_job_post_in_job_show($jb_id)
{
    global $db;
 
  $query = 'DELETE FROM job_show WHERE job_id =:jb_id';
             
          $statement = $db -> prepare($query);
         $statement -> bindValue(':jb_id', $jb_id);
        $statement -> execute();
        $statement -> closeCursor();
        
    
}

function get_info_job_groups_by_id($upj_id)
{
   
 global $db;
    $query = 'SELECT * FROM job_groups j
              WHERE j.job_id = :upj_id';
    $statement = $db -> prepare($query);
    $statement -> bindValue(":upj_id", $upj_id);
    
    $statement -> execute();
    $status = $statement -> fetch();
    $statement -> closeCursor();
    
    return $status;
}

function update_post_by_id($j_id,$job_type,$j_pos,$j_des,$j_resp,$j_req,$j_sal)
{
    global $db;
 
    $query = 'UPDATE job_groups SET
                 jgroup=:job_type,job_position=:j_pos,job_description=:j_des,
                 job_responsibilities=:j_resp,job_requirements=:j_req,job_salary=:j_sal
                 
              WHERE job_id = :j_id';                
				 

             
          $statement = $db -> prepare($query);
           $statement -> bindValue(':j_id',$j_id);
           $statement -> bindValue(':job_type',$job_type);
           $statement -> bindValue(':j_pos',$j_pos);
           $statement -> bindValue(':j_des',$j_des);
           $statement -> bindValue(':j_resp',$j_resp);
           $statement -> bindValue(':j_req',$j_req);
           $statement -> bindValue(':j_sal',$j_sal);
    
        $status = $statement -> execute();
        $statement -> closeCursor();
    
    return $status;
}

function get_job_id_by_stu_id_in_job_show($student_id)
{
   
 global $db;
    $query = 'SELECT job_id FROM job_show j
              WHERE (j.stu_id = :student_id and j.interest_status = "interested"';
    $statement = $db -> prepare($query);
    $statement -> bindValue(":student_id", $student_id);
    
    $statement -> execute();
    $status = $statement -> fetchAll();
    $statement -> closeCursor();
    
    return $status;
}

function get_news()
        {
    global $db;
    $query = 'SELECT subject,news FROM news';
         $statement = $db -> prepare($query);
    
    
    $statement -> execute();
    $ndetails = $statement -> fetch();
    $statement -> closeCursor();
    
    return $ndetails;
}

function insert_news($mysub,$mymsg,$id)
        {
    global $db;
   $query = 'UPDATE news SET
                 subject=:mysub,news=:mymsg
                 
              WHERE news_id =:id';  
     $statement = $db -> prepare($query);
    
    $statement -> bindValue(":mysub", $mysub);
    $statement -> bindValue(":mymsg", $mymsg);
    $statement -> bindValue(":id", $id);
    $statement -> execute();
    $ndetails = $statement -> fetch();
    $statement -> closeCursor();
    
    return $ndetails;
}
?>