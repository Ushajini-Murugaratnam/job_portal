<?php 
session_start();
include("..\database\connect.php");

if(isset($_POST['registerbtn']))
{
    $category_name= $_POST['category_name']; 
    $result = mysqli_query($con,"SELECT * FROM tbl_job_cat WHERE  category_name='$category_name'");
    $num_rows = mysqli_num_rows($result);
    if ($num_rows) {
        $_SESSION['cat_status']= "category is alredy added";
         header("location: jobCategory.php"); 
    }else{
        $category_name= $_POST['category_name']; 
        $insertSql="INSERT INTO `tbl_job_cat` (`category_name`)values('$category_name')";
        $query_run=mysqli_query($con,$insertSql);   
                
                if($query_run)
                {
                   $_SESSION['sucess']=" job category sucessfully added";
                    header('Location:jobCategory.php');
                }else
                { 
                    $_SESSION['status']= "job category is not added";
                    header('Location:jobCategory.php');
                }
            
    }   }
       //


       //update record SQL
    if(isset($_POST['updatebtn']))
    {   $id=$_POST['edit_cat_id'];
        $category_name = $_POST['edit_category_name'];
    
        
        $updateSql="UPDATE `tbl_job_cat` SET `category_name`='$category_name' WHERE cat_id=$id";
        $query_run=mysqli_query($con,$updateSql);
        if($query_run)
            {           
                $_SESSION['sucess']= "job category is Update sucesfully";
                header('Location:jobCategory.php');
    
            }    
        else
        {
            $_SESSION['status']="job category is not update- please check";
            header('Location:jobCategory.php');
        }   
    }
   //delete record SQL
    if(isset($_POST['deletebtn']))
    {   $id=$_POST['delete_id'];   
        $deleteSql=" DELETE FROM `tbl_job_cat` WHERE cat_id=$id";
        $query_run=mysqli_query($con,$deleteSql);
        if($query_run)
            {           
                $_SESSION['sucess']= "job category deleted";
                header('Location:jobCategory.php');
            }    
        else
        {
            $_SESSION['status']="job category is not delete";
            header('Location:jobCategory.php');
        }   
    }

