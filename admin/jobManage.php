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
        $mobile=trim($_POST['mobile']);
        $mobilec='/^[0-9]{10,10}$/';
        $post_date= $_POST['post_date'];
        $end_date= $_POST['end_date'];
        if(preg_match($mobilec,$mobile))
	{    
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
                }}else{
                    $_SESSION['mobile_status']= "wrong Mobile vale";	
                    header("location: job.php"); 
                    }
            
    }   
    

