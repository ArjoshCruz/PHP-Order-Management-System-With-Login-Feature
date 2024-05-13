<?php
    session_start(); // connect to current session
    session_unset(); // delete all session variables
    header('Location: login.php'); // go back to login page
?>