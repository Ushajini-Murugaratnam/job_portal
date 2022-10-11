jobManage.php
job.php
jobEdit.php<?php 
session_start();
include("..\database\connect.php");

    //insert record SQL
    if(isset($_POST['registerbtn']))
    {
        $job_type= $_POST['job_type']; 
        $result = mysqli_query($con,"SELECT * FROM tbl_job_type WHERE job_type='$job_type'");
        $num_rows = mysqli_num_rows($result);
        if ($num_rows) {
            $_SESSION['type_status']= "category is alredy added";
             header("location: jobType.php"); 
        }else{
        $job_type= $_POST['job_type']; 
        $insertSql="INSERT INTO `tbl_job_type` (`job_type`)values('$job_type')";
        $query_run=mysqli_query($con,$insertSql);   
                
                if($query_run)
                {
                   $_SESSION['sucess']=" job type sucessfully added";
                    header('Location:jobType.php');
                }else
                { 
                    $_SESSION['status']= "job type is not added";
                    header('Location:jobType.php');
                }
            
    }   }
       //


       //update record SQL
    if(isset($_POST['updatebtn']))
    {   $id=$_POST['edit_type_id'];
        $job_type = $_POST['edit_job_type'];
    
        
        $updateSql="UPDATE `tbl_job_type` SET `job_type`='$job_type' WHERE type_id=$id";
        $query_run=mysqli_query($con,$updateSql);
        if($query_run)
            {           
                $_SESSION['sucess']= "job type is Update sucesfully";
                header('Location:jobType.php');
    
            }    
        else
        {
            $_SESSION['status']="job type is not update- please check";
            header('Location:jobType.php');
        }   
    }
   //delete record SQL
    if(isset($_POST['deletebtn']))
    {   $id=$_POST['delete_id'];   
        $deleteSql=" DELETE FROM `tbl_job_type` WHERE type_id=$id";
        $query_run=mysqli_query($con,$deleteSql);
        if($query_run)
            {           
                $_SESSION['sucess']= "job type deleted";
                header('Location:jobType.php');
            }    
        else
        {
            $_SESSION['status']="job type is not delete";
            header('Location:jobType.php');
        }   
    }

