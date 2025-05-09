<?php
	session_start();

	include ("../connect.php");

	$userid = mysqli_escape_string($conn, $_GET['userid']);
    $sql= 'DELETE from customers where userid = '.$userid;

     if ($conn->query($sql) === TRUE){
     	 ?>
		   <script type="text/javascript">
		   alert("You have successfully deleted a User.");
		   window.location="delete-customers.php";
		   </script>
			<?php
			die();

	} else{
		?>
		<script type="text/javascript">
		   alert("an error occured.");
		   window.location="delete-customers.php";
		  </script>
		  <?php
      die();
	}


$conn->close();

?>