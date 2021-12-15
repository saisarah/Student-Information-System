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
        <link rel="stylesheet" href="../assets/student css/home.css">
        <script src="https://kit.fontawesome.com/b1b0cba1bb.js" crossorigin="anonymous"></script>
        <title>UCC SIS | Student</title>
    </head>

    <body>
        <header>
            <img class="logo" src="../assets/image/ucc logo.png">

            <nav>
                <ul class="nav_links">
                    <li><a href="./Student_index.php">HOME</a></li>
                    <li><a href="./Student_account.php">ACCOUNT</a></li>
                    <li><a href="./Student_sched.php">SCHEDULE</a></li>
                    <li><a href="./Student_grades.php">GRADES</a></li>
                    <li><a class="activeForm" href="./Student_enrollment.php">ENROLLMENT</a></li>
                </ul>
            </nav>
            <div class="selector">
                <div id="selectField">
                    <p class="select-text"><?php if (isset($_SESSION['studno'])) {
                                                echo $_SESSION['studno'][0]; //student number

                                            }
                                            ?>-N</p>
                    <img src="https://img.icons8.com/ios/50/ffffff/expand-arrow--v1.png" id="arrowIcon" />
                </div>
                <ul id="list" class="hide">
                    <li class="options">
                        <img src="https://img.icons8.com/dotty/80/000000/re-enter-pincode.png" />
                        <a href="#">Change Password</a>
                    </li>
                    <li class="options">
                        <img src="https://img.icons8.com/external-prettycons-lineal-prettycons/49/000000/external-exit-essentials-prettycons-lineal-prettycons.png" />
                        <a href="student-logout.php">Log Out</a>
                    </li>
                </ul>
            </div>
        </header>
        <main>
            <section class="content-enroll">
                <div id="Student">
                    <h1><?php if (isset($_SESSION['studno'])) {
                            echo $_SESSION['studno'][2]; //firstname
                            echo (" ");
                            echo $_SESSION['studno'][1]; //lastname
                            echo ("(");
                            echo $_SESSION['studno'][0]; //student number
                            echo (")");
                        }
                        ?> </h1>
                </div>
                <div id="Semester">
                    <div class="enrollment-content">Registration (SY. 2021-2022 First Semester)</div>
                </div>
                <div id="Status">
                    <div class="enrollment-content">
                        <p><?php if (isset($_SESSION['studno'])) {
                                echo "Status: ";
                                echo $_SESSION['studno'][9]; //status

                            }
                            ?> </p>
                    </div>
                </div>
                <div id="Section">
                    <div class="enrollment-content">
                        <p><?php if (isset($_SESSION['studno'])) {
                                echo "Course: ";
                                echo $_SESSION['studno'][4]; //year
                                echo " ";
                                echo $_SESSION['studno'][6]; //section
                            }
                            ?> </p>
                    </div>
                </div>
                <div id="Online-Enrollment">
                    <div class="enrollment-content">Online Enrollment is not yet open.</div>
                </div>
            </section>

        </main>


        <div class="footer">
        </div>
        <script src="js/navbar.js"></script>
        <script>
            var selectField = document.getElementById("selectField");
            var selectext = document.getElementById("selectext");
            var options = document.getElementsByClassName("options");
            var list = document.getElementById("list");
            var arrowIcon = document.getElementById("arrowIcon");

            selectField.onclick = function() {
                list.classList.toggle("hide");
                arrowIcon.classList.toggle("rotate");
            }

            for (options of options) {
                options.onclick = function() {
                    list.classList.toggle("hide");
                    arrowIcon.classList.toggle("rotate");
                }
            }
        </script>
    <?php
} else {
    header("location:login.php");
}
    ?>
    </body>

    </html>