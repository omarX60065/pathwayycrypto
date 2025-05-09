 <?php
// conection file to connect web portal to database 

$servername = "localhost"; // your host
$username1 = "root";// database username
$password = ""; // database password
$database="pathwaycrypto"; // database name

// Create connection
$conn = new mysqli($servername, $username1, $password, $database);

// Check connection or produce error
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
//echo "Connected successfully";
?>


<!-- 
$servername = "localhost"; 
$username1 = "u449510198_root";
$password = "eCryptoandtrade123$";
$database="u449510198_ecryptoandtrad"; -->