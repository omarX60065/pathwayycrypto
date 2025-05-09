<?php
	session_start();

	include ("../connect.php");



	$verified = 'verified';


	$userid = mysqli_escape_string($conn, $_GET['userid']);
     $sql=" UPDATE customers SET verified='$verified'
       
      where userid ='$userid'  ";

     if ($conn->query($sql) === TRUE){
     	 ?>
		   <script type="text/javascript">
		   alert("You have successfully activated a new user.");
		   window.location="activate-customers.php";
		   </script>
			<?php
			die();

	} else{
		?>
		<script type="text/javascript">
		   alert("an error occured.");
		   window.location="activate-customers.php";
		  </script>
		  <?php
      die();
	}


$conn->close();

?>