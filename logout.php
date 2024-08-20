<?php
session_start();

// Unset all of the session variables
$_SESSION = array();

// Destroy the session
session_destroy();

// Redirect to the home page (you can change this URL as needed)
header("Location: index.php");
exit;
?>
