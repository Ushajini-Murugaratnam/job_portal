<?php 
session_start();
include('../database/connect.php');

	$first_name=$_POST['first_name'];
	$last_name=$_POST['last_name'];
	$email=$_POST['email'];
	$message=$_POST['message'];
	$tittle=$_POST['tittle'];  
	$mobile=trim($_POST['mobile']);
	$mobilec='/^[0-9]{10,10}$/';
	if(preg_match($mobilec,$mobile))
	{
		 $insert="INSERT INTO contact_us(first_name,last_name, mobile,email, message,tittle)
		VALUES('$first_name','$last_name','$mobile', '$email', '$message','$tittle')";
		if(mysqli_query($con,$insert))
		{ 
			header("location: ../index.php?remark_login=sucessfull sent message");
		}
		else{
	
		header("location: ../contact.php?remark_login=try again "); 
		
		}
	}else{
	
		header("location: ../contact.php?remark_login=try again "); 
		
		}
	?>