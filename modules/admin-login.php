
<?php
session_start ();

    $username = $_POST['username'];
    $password = $_POST['password'];

    // Connect to DB ($conn)
    include('dbConn.php');

    // Query
    $sql = "SELECT * FROM tbl_adminlogin WHERE username = '". $username ."' AND password = '". $password ."'";
    $result = $conn->query($sql);

    // Fire request
    if ($result->num_rows > 0) {
        $_SESSION['username'] = $_POST['username'];       
        header("location: ../admin.php?login=success");

        } else {
        header("location: ../index.php?Invalid=Please Enter Correct Username and Password ");
    }

    // Close connection ($conn)
    $conn->close();

?>