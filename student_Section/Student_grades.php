<?php
session_start();
if (isset($_SESSION['studno'])) {

?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../assets/student css/grades.css">
        <script src="https://kit.fontawesome.com/b1b0cba1bb.js" crossorigin="anonymous"></script>
        <title>UCC SIS | Student</title>
    </head>

    <body>
        <!-- Navbar -->
        <nav>
            <div class="nav-container">
                <div class="logo">
                    <img src="../assets/image/ucc logo.png" width="100px" alt="logo">
                </div>
                <div class="menu">

                    <a href="./Student_index.php">Home</a>
                    <a href="./Student_account.php">Account</a>
                    <a href="./student schedule.php">Schedule</a>
                    <a href="./Student_grades.php">Grades</a>
                    <a href="./Student_enrollment.php">Enrollment</a>
                </div>
                <button class="hamburger">
                    <span></span>
                    <span></span>
                    <span></span>
                </button>
            </div>
        </nav>
        <nav class="mobile-nav">
            <a href="home.php">Home</a>
            <a href="account.php">Account</a>
            <a href="student schedule.php">Schedule</a>
            <a href="grades.php">Grades</a>
            <a href="enrollment.php">Enrollment</a>
        </nav>

        <section class="content-header">
            <h1>Grades</h1>
            <div class="tabLe-container">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Subject Course</th>
                            <th>Description</th>
                            <th>Units</th>
                            <th>Professor</th>
                            <th>Grade</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td data-label="Subject Course">
                                Computer Engineering 1
                            </td>
                            <td data-label="Description">
                                ComEng1
                            </td>
                            <td data-label="Units">
                                5
                            </td>
                            <td data-label="Professor">
                                Lorem ipsum dolor sit amet.
                            </td>
                            <td data-label="Grade">
                                1
                            </td>
                        </tr>
                    </tbody>
                    <tbody>
                        <tr>
                            <td data-label="Subject Course">
                                Computer Engineering 1
                            </td>
                            <td data-label="Description">
                                ComEng1
                            </td>
                            <td data-label="Units">
                                5
                            </td>
                            <td data-label="Professor">
                                Lorem ipsum dolor sit amet.
                            </td>
                            <td data-label="Grade">
                                1
                            </td>
                        </tr>
                    </tbody>
                    <tbody>
                        <tr>
                            <td data-label="Subject Course">
                                Computer Engineering 1
                            </td>
                            <td data-label="Description">
                                ComEng1
                            </td>
                            <td data-label="Units">
                                5
                            </td>
                            <td data-label="Professor">
                                Lorem ipsum dolor sit amet.
                            </td>
                            <td data-label="Grade">
                                1
                            </td>
                        </tr>
                    </tbody>
                    <tbody>
                        <tr>
                            <td data-label="Subject Course">
                                Computer Engineering 1
                            </td>
                            <td data-label="Description">
                                ComEng1
                            </td>
                            <td data-label="Units">
                                5
                            </td>
                            <td data-label="Professor">
                                Lorem ipsum dolor sit amet.
                            </td>
                            <td data-label="Grade">
                                1
                            </td>
                        </tr>
                    </tbody>
                    <tbody>
                        <tr>
                            <td data-label="Subject Course">
                                Computer Engineering 1
                            </td>
                            <td data-label="Description">
                                ComEng1
                            </td>
                            <td data-label="Units">
                                5
                            </td>
                            <td data-label="Professor">
                                Lorem ipsum dolor sit amet.
                            </td>
                            <td data-label="Grade">
                                1
                            </td>
                        </tr>
                    </tbody>
                    <tbody>
                        <tr>
                            <td data-label="Subject Course">
                                Computer Engineering 1
                            </td>
                            <td data-label="Description">
                                ComEng1
                            </td>
                            <td data-label="Units">
                                5
                            </td>
                            <td data-label="Professor">
                                Lorem ipsum dolor sit amet.
                            </td>
                            <td data-label="Grade">
                                1
                            </td>
                        </tr>
                    </tbody>
                    <tbody>
                        <tr>
                            <td data-label="Subject Course">
                                Computer Engineering 1
                            </td>
                            <td data-label="Description">
                                ComEng1
                            </td>
                            <td data-label="Units">
                                5
                            </td>
                            <td data-label="Professor">
                                Lorem ipsum dolor sit amet.
                            </td>
                            <td data-label="Grade">
                                1
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </section>
        <svg class="waves" xmlns="http://www.w3.org/2000/svg" viewbox="0 0 1440 320">
            <path fill="#00cba9" fill-opacity="0.8" d="M0,32L40,48C80,64,160,96,240,101.3C320,107,400,85,480,106.7C560,128,640,192,720,197.3C800,203,880,149,960,149.3C1040,149,1120,203,1200,224C1280,245,1360,235,1400,229.3L1440,224L1440,320L1400,320C1360,320,1280,320,1200,320C1120,320,1040,320,960,320C880,320,800,320,720,320C640,320,560,320,480,320C400,320,320,320,240,320C160,320,80,320,40,320L0,320Z"></path>
        </svg>
        <script src="js/navbar.js"></script>
    </body>
<?php
} else {
    header("location:login.php");
}
?>

    </html>