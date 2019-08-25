<?php
if(isset($_POST['submit'])){
	$Name=$_POST['Name'];
	$Email=$_POST['Email'];
	$Telegram_Id=$_POST['Telegram_Id'];
	$Message=$_POST['Message'];
	$link=mysqli_connect('localhost','Feedback','12345','Feed');
	if($link === false){
		die("Error".mysqli_connect_error());
	}
	$sql="insert into Details values('$Name','$Email','$Telegram_Id','$Message')";
	if(mysqli_query($link,$sql)){
		echo "<center><button>Thanks For Your Time :)</button></center>";
	}
	else{
		echo "Error Adding".mysqli_error($link);
	}
}
mysqli_close($link);
?>