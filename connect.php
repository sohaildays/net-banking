<?php
$servername = "localhost";
// Enter your MySQL username below(default=root)
$username = "id16869188_online_net_banking";
// Enter your MySQL password below
$password ="Sohailabbas@12345";
$dbname = "id16869188_net_banking";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    header("location:connection_error.php?error=$conn->connect_error");
    die($conn->connect_error);
}
?>
