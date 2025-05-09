<?php require_once('../connect.php'); ?>
<?php
//mysql_select_db($database_cn, $cn);

session_start();

if(isset($_POST['update-b'])){
	

$bitcoin = mysqli_escape_string($conn, $_POST['bitcoin']);


// $Save = "<div style=\"font-size:small; background-color:#009D00; color:#FFF; font-weight:600\"> A notification has been sent to " .$fusername." </div>";
// $noSave = "<div style=\"font-size:small; background-color:#F63; color:#FFF; font-weight:600\">Email already in use..</div>";
// $errMsg = "<div style=\"font-size:small; background-color:#F00; color:#FFF; font-weight:600\">Username already in use..phone>";




	
      $sql=" UPDATE wallets SET address='$bitcoin' WHERE userid = 1 ";

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
	alert("Bitcoin Wallet Update was Successful");
	window.location="index.php";
</script>
<?php 
die();


}
}

?>
<?php
//mysql_select_db($database_cn, $cn);


if(isset($_POST['update-e'])){
	

$ethereum = mysqli_escape_string($conn, $_POST['ethereum']);


// $Save = "<div style=\"font-size:small; background-color:#009D00; color:#FFF; font-weight:600\"> A notification has been sent to " .$fusername." </div>";
// $noSave = "<div style=\"font-size:small; background-color:#F63; color:#FFF; font-weight:600\">Email already in use..</div>";
// $errMsg = "<div style=\"font-size:small; background-color:#F00; color:#FFF; font-weight:600\">Username already in use..phone>";




	
      $sql=" UPDATE wallets SET address='$ethereum' WHERE userid = 2 	";

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
	alert("Ethereum Wallet Update was Successful");
	window.location="index.php";
</script>
<?php 
die();


}
}

?>