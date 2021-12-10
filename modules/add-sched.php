<?php
/*
* Sign Up Module
*/

    $code = $_POST['code'];
    $instructor = $_POST['instructor'];
    $day = $_POST['day'];
    $start = $_POST['start'];
    $end = $_POST['end'];
    $course = $_POST['course'];
    $year = $_POST['year'];
    $section = $_POST['section'];
    $description= "asd";
    // Connect to DB ($conn)
    include('dbConn.php');

    $sql1 = "INSERT INTO tbl_schedule (code, description, instructor, day, startT, endT, course, year, section) VALUES ('".$code."', '".$description."', '".$instructor."', '".$day."', '".$start."', '".$end."', '".$course."', '".$year."', '".$section."')";
 
    if ($conn->query($sql1) === TRUE) {
        echo "SUCCESS";
    } else {
        echo "FAILED";
    }
    
   
    // Close connection ($conn)
    $conn->close();

?>