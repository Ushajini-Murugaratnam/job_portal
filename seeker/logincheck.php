<?php
include("../database/connect.php");
session_start();
if($_SERVER["REQUEST_METHOD"] == "POST") {
	$email=mysqli_real_escape_string($con,$_POST['email']);
	$password=mysqli_real_escape_string($con,$_POST['password']);
	$result = mysqli_query($con,"SELECT * FROM tbl_seeker");
	$c_rows = mysqli_num_rows($result);
	if ($c_rows!=$email) {
		header("location: index.php?remark_login=failed");
	}
	$sql="SELECT seeker_id FROM tbl_seeker WHERE email='$email' and password='$password'";
	$result=mysqli_query($con,$sql);
	$row=mysqli_fetch_array($result);
	$active=$row['active'];
	$count=mysqli_num_rows($result);
	if($count==1) {
		$_SESSION['login_user']=$email;
		header("location: dashboard.php");
	}
}
?>