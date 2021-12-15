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
                    <li><a class="activeForm" href="./Student_grades.php">GRADES</a></li>
                    <li><a href="./Student_enrollment.php">ENROLLMENT</a></li>
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

        <section class="grade-holder">
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
    </body>
<?php
} else {
    header("location:login.php");
}
?>

    </html>