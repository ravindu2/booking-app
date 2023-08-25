<?php

// Perform the session cleanup
session_start();
unset($_SESSION['User_Fname']);
unset($_SESSION['User_email']);
session_destroy();

// Redirect to index.php
header("Location: index.php");
exit(); // Make sure to exit the script after the redirection


?>