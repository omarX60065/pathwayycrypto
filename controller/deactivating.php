<?php
	session_start();

	include ("../connect.php");

	$verified = 'notverified';

	$userid = mysqli_escape_string($conn, $_GET['userid']);
     $sql=" UPDATE customers SET verified='$verified'
       
      where userid ='$userid'  ";

     if ($conn->query($sql) === TRUE){
     	 ?>
		   <script type="text/javascript">
		   alert("You have successfully deactivated an old user.");
		   window.location="activate-customers.php";
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