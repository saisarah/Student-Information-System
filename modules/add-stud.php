<?php
/*
* Sign Up Module
*/

    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $midName = $_POST['midName'];
    $course = $_POST['course'];
    $year = $_POST['year'];
    $section = $_POST['section'];
    $studNo = $_POST['studNo'];
    $studStat = 'Regular';
    $status = 'Inactive';
    $date = date('Y-m-d H:i:s');
    // Connect to DB ($conn)
    include('dbConn.php');

    $sql = "SELECT * FROM tbl_student WHERE studno = '". $studNo ."'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0){
        //Retrieving data from data table
        while($row = $result->fetch_assoc()) {
            $stud = $row['studno'];
        }
        if ($studNo == $stud) {
            echo "Student number already existed";
        }
    }else {
        $sql1 = "INSERT INTO tbl_student (firstname, lastname, midname, course, year, section, studno, status, stud_Stat, dateInserted) VALUES ('".$firstName."', '".$lastName."', '".$midName."', '".$course."', '".$year."', '".$section."', '".$studNo."', '".$status."', '".$studStat."', '".$date."')";
            if ($conn->query($sql1) === TRUE) {
                echo "SUCCESS";
            } else {
                echo "FAILED";
           
            }
    }
    // Close connection ($conn)
    $conn->close();

?>