<?php
/*
* Sign Up Module
*/

    $username = $_POST['username'];
    $password = $_POST['password'];
    $status = 'Active';


    // Encrypt password
    $cipher_method = 'AES-128-CTR';
    $option = 0;
    $encryption_iv = '7893475893479853';
    $encryption_key = 'univcalcitycrypt';
    $encrypted_password = openssl_encrypt($password, $cipher_method, $encryption_iv, $option, $encryption_key);

    // Connect to DB ($conn)
    include('dbConn.php');
    $sql1 = "SELECT studno FROM tbl_student WHERE studno = '". $username ."'"; 
    $result = $conn->query($sql1);
    
    if ($result->num_rows > 0) {
            
            $sql = "UPDATE tbl_student SET password = ' $encrypted_password', status = '$status' WHERE studno = '". $username ."'";
            // Fire request

            if ($conn->query($sql) === TRUE) {
            echo "Account successfully created";            
        } 
        else{
            echo "Student number not found";            
        }

    } else {

    }

    

    // Close connection ($conn)
    $conn->close();

?>