<?php
session_start();
if (!isset($_SESSION["username"])) {
  // User not logged in, redirect to login page
  header("Location: index.php");
 
}
?>