<?php
session_start();
include('../database/connect.php');

//insert
if(isset ($_POST['a']))
{
$fullname=$_POST['fullname'];
$username=$_POST['username'];
$email=$_POST['email'];
$create_time=date("Y-m-d H:i:s");  
$mobile=trim($_POST['mobile']);
$mobilec='/^[0-9]{10,10}$/';

$password=$_POST['password'];
$confirmpassword=$_POST['confirmpassword'];
$result = mysqli_query($con,"SELECT * FROM tbl_admin WHERE email='$email'");
$num_rows = mysqli_num_rows($result);
if ($num_rows) {
    $_SESSION['email_status']= "alredy added email, try new one";
    header("location: a.php"); 
}elseif($password === $confirmpassword)
    {
    if(preg_match($mobilec,$mobile))
        {
            $insertSql="INSERT INTO tbl_admin(fullname,username, mobile,email, password,create_time)
            VALUES('$fullname','$username','$mobile', '$email', '$password','$create_time')";
            $query_run=mysqli_query($con,$insertSql);          
            if($query_run){  
                header('Location:index.php');
            }else{
                $_SESSION['status']="please check database";
                header('Location:a.php');
            }
        }else
        {
            $_SESSION['mobile_status']="mobile wrong please check";
            header('Location:a.php');
        }}else
        {
            $_SESSION['password_status']="password wrong please check";
            header('Location:a.php');
        }
    
}


//update
if(isset($_POST['updatebtn']))
{
{   $id=$_POST['edit_ad_id'];
$fullname=$_POST['edit_fullname'];
$username=$_POST['edit_username'];
$mobile=$_POST['edit_mobile'];
$email=$_POST['edit_email'];
$password=$_POST['edit_password'];
$update_time=date("Y-m-d H:i:s");     
    $updateSql="UPDATE `tbl_admin` SET `fullname`='$fullname',`username`='$username',`mobile`='$mobile',`email`='$email',`password`='$password' ,`update_time`='$update_time' WHERE ad_id=$id";
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
}}
?>