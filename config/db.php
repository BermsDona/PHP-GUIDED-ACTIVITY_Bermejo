<?php 
    // Enable us to use Headers
    ob_start();
    // Set sessions
    if(!isset($_SESSION)) {
        session_start();
    }
    $hostname = "localhost";
    $username = "root";
    $password = ""; // Leave this empty if no password is set
    $dbname = "positronx_db";
    
    $connection = mysqli_connect($hostname, $username, $password, $dbname) or die("Database connection not established.");
?>
