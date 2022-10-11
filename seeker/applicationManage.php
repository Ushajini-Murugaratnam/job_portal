<?php 
session_start();
include("..\database\connect.php");

    //insert record SQL
    if(isset($_POST['register_btn']))
    {
        $seeker_id= $_POST['seeker_id'];
        $job_id= $_POST['job_id'];
        $job_tittle=$_POST['job_tittle'];
        $seeker_fname= $_POST['seeker_fname'];
        $seeker_lname= $_POST['seeker_lname'];
        $email= $_POST['email'];
        $mobile= $_POST['mobile'];
        $company_email=$_POST['company_email'];

            
        $insertSql="INSERT INTO `tbl_job_application`(`seeker_id`,`job_id`,`job_tittle`,`seeker_fname`, `seeker_lname`,`email`,`company_email`,`mobile`)
        values('$seeker_id','$job_id','$job_tittle','$seeker_fname','$seeker_lname','$email','$company_email','$mobile')";
        $query_run=mysqli_query($con,$insertSql);   
                
                if($query_run){
                   $_SESSION['sucess']="sucessfully added";
                   header("Location:appliedJob.php");
                }}               
   

        ?>