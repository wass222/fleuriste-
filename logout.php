<?php
// Start a session (if not already started)
session_start();

// Destroy the session data
session_destroy();

// Redirect the user back to the login page
header("Location: login.php");
exit();
?>
