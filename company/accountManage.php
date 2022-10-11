<?php
session_start();
include('../database/connect.php');

if(isset($_POST['updatebtn']))

{   $id=$_POST['edit_company_id'];
      $company_name=$_POST['edit_company_name'];
	$web=$_POST['edit_web'];
	$mobile=$_POST['edit_mobile'];
	$email=$_POST['edit_email'];
	$password=$_POST['edit_password'];
	$country=$_POST['edit_country'];
	$address=$_POST['edit_address'];
	$update_time=date("Y-m-d H:i:s"); 
       
    $updateSql="UPDATE `tbl_company` SET `company_name`='$company_name',`web`='$web',`mobile`='$mobile',`address`='$address',`password`='$password' ,`email`='$email',`country`='$country' ,`update_time`='$update_time' WHERE company_id=$id";
    $query_run=mysqli_query($con,$updateSql);
    if($query_run)
        {    
            $_SESSION['sucess']= "data Update sucesfully";
            header('Location:profile.php');

        }    
    else
    {
        $_SESSION['status']="data not update- please check";
        header('Location:accountUpdate.php');
    }   
}
   //delete record SQL
   if(isset($_POST['deletebtn']))
   {   $id=$_POST['delete_id'];   
    $deleteSql=" DELETE FROM `tbl_company` WHERE company_id=$id";
       $query_run=mysqli_query($con,$deleteSql);
       if($query_run)
           {           
               header('Location:index.php');
           }    
       else
       {
           $_SESSION['status']="data not delete";
           header('Location:profile.php');
       }   
   }
?>
?>