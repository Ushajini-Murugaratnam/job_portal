<?php 
session_start();
include('../database/connect.php');
$email=$_POST['email'];

$password=$_POST['password'];
$confirmpassword=$_POST['confirmpassword'];
$result = mysqli_query($con,"SELECT * FROM tbl_company WHERE email='$email'");
$num_rows = mysqli_num_rows($result);
if ($num_rows) {
	$_SESSION['email_status']= "Email is alredy added";
 	header("location: companyRegister.php"); 
}else if ($password === $confirmpassword) {
	$company_name=$_POST['company_name'];
	$web=$_POST['web'];
	$mobile=trim($_POST['mobile']);
	$mobilec='/^[0-9]{10,10}$/';
	$email=$_POST['email'];
	$password=$_POST['password'];
	$country=$_POST['country'];
	$address=$_POST['address'];
	$create_time=date("Y-m-d H:i:s"); 
	if(preg_match($mobilec,$mobile))
	{
		if(mysqli_query($con,"INSERT INTO tbl_company(company_name,web, mobile,email, password, country, address,create_time)
		VALUES('$company_name','$web','$mobile', '$email', '$password', '$country', '$address','$create_time')"))
		{ 
			$_SESSION['sucess']= "sucess register";
			header("location: companyDetails.php");
		}else{
			$_SESSION['status']= "data not added";
			header("location: companyRegister.php"); 
			}
	}else{
		$_SESSION['mobile_status']= "wrong Mobile vale";	
		header("location: companyRegister.php"); 
		}
	
		}	else{
		$_SESSION['password_status']= "password&conform password check-diffrent vale";
	
		header("location: companyRegister.php"); 
		}
?>
