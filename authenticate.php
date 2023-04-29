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
$password = $_POST["password"];

// Check if user exists in database
$sql = "SELECT * FROM users WHERE username='$username'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // User exists, check password
  $row = $result->fetch_assoc();
  if (password_verify($password, $row["password"])) {
    // Password correct, set session variable and redirect to home page
    session_start();
    $_SESSION["username"] = $username;
    header("Location: booking.php");
    exit();
  } else {
    // Password incorrect
    echo "Incorrect password!";
  }
} else {
  // User does not exist
  echo "User not found!";
}
$conn->close();
?>
