
<?php
include("..\database\connect.php");

$id = $_GET['ap_id'];
$status=$_GET['status'];

$q="UPDATE tbl_job_application set status=$status where ap_id=$id";
mysqli_query($con,$q);
header('Location:appliedJob.php')
?>