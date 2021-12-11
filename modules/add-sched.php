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
    $firstname = $_POST['firstName'];
    $lastname = $_POST['lastName'];
    // Connect to DB ($conn)
    include('dbConn.php');
    $newStart = date('h:i A', strtotime($start));
    $newEnd = date('h:i A', strtotime($end));


    $sql = "SELECT * FROM tbl_subject WHERE subcode = '". $code ."'";
    $result = $conn->query($sql);

    $sql2 = "SELECT * FROM tbl_professor WHERE lastname = '". $lastname ."' AND firstname ='". $firstname ."'";
    $result2 = $conn->query($sql2);



    if ($result->num_rows > 0){
        if ($result2->num_rows > 0){
            while($row = $result->fetch_assoc()) {
                $desc = $row['subdesc'];
            }
            $sql1 = "INSERT INTO tbl_schedule (code, description, instructor, day, startT, endT, course, year, section) VALUES ('".$code."', '".$desc."', '".$instructor."', '".$day."', '".$newStart."', '".$newEnd."', '".$course."', '".$year."', '".$section."')";
            if ($conn->query($sql1) === TRUE) {
                echo "SCHEDULE SUCCESSFULLY ADDED";
            }
        }else {
            echo "INCORRECT INSTRUCTOR NAME";
        }
    }else{
        echo "FAILED TO ADD SCHEDULE, SUBJECT CODE NOT FOUND";
    }

  
    
   
    // Close connection ($conn)
    $conn->close();

?>
