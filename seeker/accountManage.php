<?php
session_start();
include('../database/connect.php');

if(isset($_POST['updatebtn']))

{   $id=$_POST['edit_seeker_id'];
$seeker_fname=$_POST['edit_seeker_fname'];
$seeker_lname=$_POST['edit_seeker_lname'];
$mobile=$_POST['edit_mobile'];
$email=$_POST['edit_email'];
$password=$_POST['edit_password'];
       
	$update_time=date("Y-m-d H:i:s");  
    $updateSql="UPDATE `tbl_seeker` SET `seeker_fname`='$seeker_fname',`seeker_lname`='$seeker_lname',`mobile`='$mobile',`email`='$email',`password`='$password' ,`update_time`='$update_time' WHERE seeker_id=$id";
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
    $deleteSql=" DELETE FROM `tbl_seeker` WHERE seeker_id=$id";
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