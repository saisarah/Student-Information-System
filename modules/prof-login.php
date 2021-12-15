<?php

session_start();
$firstname = $_POST['firstname'];
$password = $_POST['password'];


// Connect to DB ($conn)
include('dbConn.php');
// $cipher_method = 'AES-128-CTR';
// $option = 0;
// $decryption_iv = '7893475893479853';
// $decryption_key = 'univcalcitycrypt';
// $decrypted_password = openssl_encrypt($password, $cipher_method, $decryption_iv, $option, $decryption_key);

// Query
$sql = "SELECT * FROM `tbl_professor` WHERE firstname= '" . $firstname . "' AND password = '" . $password . "'";
$result = $conn->query($sql);






// Fire request

if ($result->num_rows > 0) {
    $row = $result->fetch_array(MYSQLI_ASSOC);
    $prof_array = array(
        $_POST['firstname'], //0
        $_POST['lastname'], //1
        $_POST['department'], //2
        $_POST['username'] //3
    );

    $_SESSION['firstname'] = $prof_array;
    header("location: ..//Faculty CMS/index.php?login=success");
} else {
    header("location: ../Faculty CMS/login.php?Invalid=Please Enter Correct Username and Password ");
}



// Close connection ($conn)
$conn->close();
