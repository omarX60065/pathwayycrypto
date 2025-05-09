<?php
session_start();
include ("../connect.php");
if(isset($_POST['login'])){
	
$username = mysqli_escape_string($conn, $_POST['username']);
$password = mysqli_escape_string($conn, $_POST['password']);

#$password=md5($password);


$sql = "SELECT * from admin where username = '$username' and password= '$password' ";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
  
   while($row = mysqli_fetch_assoc($result)) {

// Anytime you see a $row['whatever'] it refers to a field in your table on your database.

    $_SESSION['admin_userid']=$row['userid'];  
    $_SESSION['admin_fname']=$row['firstname'];
    $_SESSION['admin_lname']=$row['lastname'];
    $_SESSION['admin_email']=$row['email'];
    $_SESSION['admin_username']=$row['username'];
    $_SESSION['admin_password']=$row['password'];


      	/*$_SESSION['role'] =$row['access'];
		$_SESSION['userid']= $row['id'];
		$userid=$row['id'];
		$_SESSION['username']= $row['username'];
		$_SESSION['email']= $row['email'];
		
		
		// logging admin login time for future reference
		$sql2 = "insert into timelog (mid,narration, timing) values ('$userid', 'lOGGED IN', now() )";
        $result2 = $conn->query($sql2);*/
		
		header ("location:index.php");
              die();
			  
			  
   
   }
   
   
   
} else {
   
      ?>
   <script type="text/javascript">
alert("Oops! Your Login details were Incorrect. Please check again");
window.location="login.php";
</script>
<?php
die();

   }
   
   
   
   
   
}

$conn->close();


/*  // Making a password hash during registration
  $password_hash = password_hash($password);

  // During login, check if password is correct::
  if(password_verify($password_fromlogin, $password_hash_fromdatabase))
  {
    // The password is correct
  }
  else
  {
    // The password is not correct
  }*/



?>