<?php 
session_start();
include("..\database\connect.php");

    //insert record SQL
    if(isset($_POST['registerbtn']))
    {
        $cat_id= $_POST['cat_id'];
        $type_id= $_POST['type_id'];
        $company_id= $_POST['company_id'];
        $job_tittle= $_POST['job_tittle'];
        $job_desc= $_POST['job_desc'];
        $job_salary= $_POST['job_salary'];
        $contact_name= $_POST['contact_name'];
        $email= $_POST['email'];
        $mobile= $_POST['mobile'];
        $post_date= $_POST['post_date'];
        $end_date= $_POST['end_date'];
            
        $insertSql="INSERT INTO `tbl_job` (`cat_id`,`type_id`,`company_id`, `job_tittle`,`job_desc`,`job_salary`,`contact_name`,`email`,`mobile`,`post_date`,`end_date`)
        values('$cat_id','$type_id','$company_id','$job_tittle','$job_desc','$job_salary','$contact_name','$email','$mobile','$post_date','$end_date')";
        $query_run=mysqli_query($con,$insertSql);   
                
                if($query_run)
                {
                   $_SESSION['sucess']=" job sucessfully added";
                    header('Location:job.php');
                }else
                { 
                    $_SESSION['status']= "job is not added";
                    header('Location:job.php');
                }
            
    }   
    




   
       //update record SQL
    if(isset($_POST['updatebtn']))
     {   $id= $_POST['edit_job_id'];
        
        $cat_id= $_POST['edit_cat_id'];
        $type_id= $_POST['edit_type_id'];
        $job_tittle= $_POST['edit_job_tittle'];
        $job_desc= $_POST['edit_job_desc'];
        $contact_name= $_POST['edit_contact_name'];
        $email= $_POST['edit_email'];
        $mobile= $_POST['edit_mobile'];
        $post_date= $_POST['edit_post_date'];
        $end_date= $_POST['edit_end_date'];
        $job_salary= $_POST['edit_job_salary'];
  
        $updateSql="UPDATE `tbl_job` SET `cat_id`='$cat_id',`type_id`='$type_id',`job_tittle`='$job_tittle',
        `job_desc`='$job_desc',`job_salary`='$job_salary',`contact_name`='$contact_name',
        `email`='$email',`mobile`='$mobile',`post_date`='$post_date',`end_date`='$end_date'
         WHERE job_id=$id";
        $query_run=mysqli_query($con,$updateSql);
        if($query_run)
            {           
                $_SESSION['sucess']= "job is Update sucesfully";
                header('Location:job.php');}    
        else
        {
            $_SESSION['status']="job is not update- please check";
            header('Location:job.php');
        }   
    }
