<?php
include('session.php');
?>
<!DOCTYPE html>
<html>
<head>
</head>
<body>
<div id="contentbox" >
<script type="text/javascript">
function countdown() {
	var i = document.getElementById('timecount');
	if (parseInt(i.innerHTML)<=1) {
		location.href = 'index.php';
	}
	i.innerHTML = parseInt(i.innerHTML)-1;
}
setInterval(function(){ countdown(); },1000);
</script>
<?php
$id=$loggedin_id;
$sql="DELETE FROM tbl_admin WHERE ad_id='$id'";
$result=mysqli_query($con,$sql);
if($result){
	header("Location: index.php");
} elseif(!isset($loggedin_session) || $loggedin_session==NULL) {
	header("Location: index.php");
} else {
	echo "Unable to delete Your Account";
}
?>
</div>
</body>
</html>
</div>