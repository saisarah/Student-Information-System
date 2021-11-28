<?php

session_start();
$studno = $_POST['studno'];
$password = $_POST['password'];


// Connect to DB ($conn)
include('dbConn.php');

// Query
$sql = "SELECT * FROM tbl_student  WHERE studno = '" . $studno . "' AND password = '" . $password . "'";
$result = $conn->query($sql);






// Fire request

if ($result->num_rows > 0) {
    $row = $result->fetch_array(MYSQLI_ASSOC);
    $studno_array = array(
        $_POST['studno'],
        $row['firstname'],
        $row['lastname'],
        $row['midname'],
        $row['course'],
        $row['year'],
        $row['section'],
        $row['studno'],
        $row['status'],
        $row['stud_Stat']
    );

    $_SESSION['studno'] = $studno_array;
    header("location: ..//student_Section/Student_index.php?login=success");
    // // echo ($row["lastname"]);
    // $lastname = $row["lastname"];
    // $firstname = $row["firstname"];          
} else {
    header("location: ../student_Section/Student_Login.php?Invalid=Please Enter Correct Username and Password ");
}


// Close connection ($conn)
$conn->close();
