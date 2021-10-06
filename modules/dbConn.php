<?php
/*
* Database Module
*/

    // DB Credentials
    $server_name = "localhost";
    $server_username = "root"; // default = "root"
    $server_password = ""; // default = ""
    $database_name = "dbsis";

    // Create connection
    $conn = new mysqli($server_name, $server_username, $server_password, $database_name);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error . " Please contact site admin.");
    }

?>