<?php
/*
* Sign Up Module
*/

    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $department = $_POST['dept'];
    $status = 'Inactive';
    $date = date('Y-m-d H:i:s');
    // Connect to DB ($conn)
    include('dbConn.php');

    $sql1 = "INSERT INTO tbl_professor (firstname, lastname, department, status, dateInserted) VALUES ('".$firstName."', '".$lastName."', '".$department."', '".$status."', '".$date."')";
 
    if ($conn->query($sql1) === TRUE) {
        echo "SUCCESS";
    } else {
        echo "FAILED";
    }
    
   
    // Close connection ($conn)
    $conn->close();

?>