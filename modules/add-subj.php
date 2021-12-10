<?php
/*
* Sign Up Module
*/

    $code = $_POST['code'];
    $units = $_POST['units'];
    $description = $_POST['description'];
    
    // Connect to DB ($conn)
    include('dbConn.php');
   

    $sql1 = "INSERT INTO tbl_subject (subcode, subunits, subdesc) VALUES ('".$code."', '".$units."', '".$description."')";
 
    if ($conn->query($sql1) === TRUE) {
        echo "SUCCESS";
    } else {
        echo "FAILED";
    }
    
   
    // Close connection ($conn)
    $conn->close();

?>