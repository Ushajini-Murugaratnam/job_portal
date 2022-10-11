<?php
session_start();
include('../database/connect.php');

//insert
if(isset ($_POST['submit']))
{
$seeker_fname=$_POST['seeker_fname'];
$seeker_lname=$_POST['seeker_lname'];
$email=$_POST['email'];
$create_time=date("Y-m-d H:i:s");  
$mobile=trim($_POST['mobile']);
$mobilec='/^[0-9]{10,10}$/';
$password=$_POST['password'];
$confirmpassword=$_POST['confirmpassword'];  
$fileName = $_FILES['file']['name'];
$fileTmpName = $_FILES['file']['tmp_name'];
$path = "../files/".$fileName;
$result = mysqli_query($con,"SELECT * FROM tbl_seeker WHERE email='$email'");
$num_rows = mysqli_num_rows($result);
if ($num_rows) {
    $_SESSION['email_status']= "alredy added email, try new one";
    header("location: seekerDetails.php"); 
}elseif($password === $confirmpassword)
    {
    if(preg_match($mobilec,$mobile))
        {
            $insertSql="INSERT INTO tbl_seeker(seeker_fname, seeker_lname, mobile,email, password,fileName,create_time)
	VALUES('$seeker_fname', '$seeker_lname','$mobile', '$email', '$password','$fileName','$create_time')";
            $query_run=mysqli_query($con,$insertSql);          
            if($query_run){  
				move_uploaded_file($fileTmpName,$path);
				$_SESSION['sucess']= "candidate sucessfully added";
				header("location: SeekerDetails.php");
            }else{
                $_SESSION['status']="please check database";
                header('Location:SeekerDetails.php');
            }
        }else
        {
            $_SESSION['mobile_status']="mobile wrong please check";
            header('Location:SeekerDetails.php');
        }}else
        {
            $_SESSION['password_status']="password wrong please check";
            header('Location:SeekerDetails.php');
        }
    
}

?>