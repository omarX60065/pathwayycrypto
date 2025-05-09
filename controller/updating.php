<?php require_once('../connect.php'); ?>
<?php
//mysql_select_db($database_cn, $cn);

session_start();

if(isset($_POST['update'])){
	

$fname = mysqli_escape_string($conn, $_POST['fname']);
$email = mysqli_escape_string($conn, $_POST['email']);
$phone = mysqli_escape_string($conn, $_POST['phone']);
$balance = mysqli_escape_string($conn, $_POST['balance']);
$level = mysqli_escape_string($conn, $_POST['level']);
$password = mysqli_escape_string($conn, $_POST['password']);
$userid = mysqli_escape_string($conn, $_POST['userid']);


// $Save = "<div style=\"font-size:small; background-color:#009D00; color:#FFF; font-weight:600\"> A notification has been sent to " .$fusername." </div>";
// $noSave = "<div style=\"font-size:small; background-color:#F63; color:#FFF; font-weight:600\">Email already in use..</div>";
// $errMsg = "<div style=\"font-size:small; background-color:#F00; color:#FFF; font-weight:600\">Username already in use..phone>";




	
      $sql=" UPDATE customers SET fullname='$fname', email='$email', phone='$phone', balance='$balance', acc_level='$level', password='$password' WHERE userid ='$userid'  ";

     if ($conn->query($sql) === TRUE) {

		
	// 	// logging admin login time for future reference
	// 	$sql2 = "insert into timelog (mid,narration, timing) values ('$userid', 'ADDED A NEW ADMIN', now() )";
 //        $result2 = $conn->query($sql2);
 //       		if ($result){
		
	// 	echo $Save;
		
		
	// 		}
		
		
	// }
 


?>

<script type="text/javascript">
	alert("Update was Successful");
	window.location="index.php";
</script>
<?php 
die();


}
}

?>