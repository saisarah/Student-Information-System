<?php
/*
* Sign Up Module
*/

    $username = $_POST['username'];
    $password = $_POST['password'];
    $userType = $_POST['userType'];
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $status = 'Active';


    // Encrypt password
    $cipher_method = 'AES-128-CTR';
    $option = 0;
    $encryption_iv = '7893475893479853';
    $encryption_key = 'univcalcitycrypt';
    $encrypted_password = openssl_encrypt($password, $cipher_method, $encryption_iv, $option, $encryption_key);

    // Connect to DB ($conn)
    include('dbConn.php');
    //Student
    $sql1 = "SELECT * FROM tbl_student WHERE studno = '". $username ."'";
    $result = $conn->query($sql1);
    //Prof
    $query = "SELECT * FROM tbl_Professor WHERE firstname = '". $firstName ."' AND lastname = '". $lastName ."'";
    $res = $conn->query($query);
if(is_numeric($username) && $userType == 'Student') {
    if ($result->num_rows > 0){
        //Retrieving data from data table
        while($row = $result->fetch_assoc()) {
            $studno = $row['studno'];
            $pass = $row['password'];
        }
        if ($studno == $username && $pass != "") {
            echo "Account already existed";
        }elseif ($studno == $username && $pass == ""){
            $sql = "UPDATE tbl_student SET password = '$encrypted_password', status = '$status' WHERE studno = '". $username ."'";

            if ($conn->query($sql) === TRUE) {
                echo "Account successfully created";
            }
        }

    }else{
            echo "Invalid student number";
        }
}elseif (is_string($username) && $userType == 'Professor'){
     if ($res->num_rows > 0){
       $setProf = "UPDATE tbl_Professor SET username = ' $username',  password = ' $encrypted_password', status = '$status' WHERE firstname = '". $firstName ."' AND lastname = '". $lastName ."'";

            if ($conn->query($setProf) === TRUE) {
                echo "Account successfully created";
            }

    }else{
        echo "Invalid Full name";
    }

}else{
    echo "Invalid entry, Please check the user type";
}
    // Close connection ($conn)
    $conn->close();

?>