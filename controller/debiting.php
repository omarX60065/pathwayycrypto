<?php require_once('../connect.php'); ?>
<?php
//mysql_select_db($database_cn, $cn);

session_start();

if(isset($_POST['debit'])){
$balance = mysqli_escape_string($conn, $_POST['balance']);
$userid = mysqli_escape_string($conn, $_POST['userid']);
	

      $sql = "UPDATE customers SET balance =balance-$balance WHERE userid ='$userid' ";
         if ($conn->query($sql) === TRUE) {

     ?>
<script type="text/javascript">
	alert("Debit was Successful");
	window.location="earnings.php";
</script>
<?php 
die();

}}?>



