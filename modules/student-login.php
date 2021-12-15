<?php

session_start();
$studno = $_POST['studno'];
$password = $_POST['password'];


// Connect to DB ($conn)
include('dbConn.php');
$cipher_method = 'AES-128-CTR';
$option = 0;
$decryption_iv = '7893475893479853';
$decryption_key = 'univcalcitycrypt';
$decrypted_password = openssl_encrypt($password, $cipher_method, $decryption_iv, $option, $decryption_key);

// Query
$sql = "SELECT * FROM `tbl_student` JOIN tbl_schedule WHERE studno = '" . $studno . "' AND password = '" . $decrypted_password . "'";
$result = $conn->query($sql);






// Fire request

if ($result->num_rows > 0) {
    $row = $result->fetch_array(MYSQLI_ASSOC);
    $studno_array = array(
        $_POST['studno'], //0
        $row['firstname'], //1
        $row['lastname'], //2
        $row['midname'], //3
        $row['course'], //4
        $row['year'], //5
        $row['section'], //6
        $row['studno'], //7
        $row['status'], //8
        $row['stud_Stat'], //9
        $row['code'], //10
        $row['description'], //11
        $row['instructor'], //12
        $row['day'], //13
        $row['startT'], //14
        $row['endT'] //15

    );

    $_SESSION['studno'] = $studno_array;
    header("location: ..//student_Section/Student_index.php?login=success");
} else {
    header("location: ../student_Section/Student_Login.php?Invalid=Please Enter Correct Username and Password ");
}


// Close connection ($conn)
$conn->close();
