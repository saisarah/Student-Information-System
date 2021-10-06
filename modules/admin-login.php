<?php

    $username = $_POST['username'];
    $password = $_POST['password'];

    // Connect to DB ($conn)
    include('dbConn.php');

    // Query
    $sql = "SELECT * FROM tbl_adminlogin WHERE username = '". $username ."' AND password = '". $password ."'";
    $result = $conn->query($sql);

    // Fire request
    if ($result->num_rows > 0) {
       
        
        echo "Succesful";
    } else {
        echo false;
    }

    // Close connection ($conn)
    $conn->close();

?>