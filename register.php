<?php
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = 'hosteldb';
// $conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname);

// Create connection
$conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Get form data
$username = $_POST["username"];
$password = password_hash($_POST["password"], PASSWORD_DEFAULT);

// Insert new user into database
$sql = "INSERT INTO users (username, password) VALUES ('$username', '$password')";
if ($conn->query($sql) === TRUE) {
  // Signup successful, redirect to login page
  header("Location: login.php");
  exit();
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>
