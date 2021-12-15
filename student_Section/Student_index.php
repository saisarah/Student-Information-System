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
    <?php
    session_start();
    if (isset($_SESSION['studno'])) {
    ?>

        <header>
            <img class="logo" src="../assets/image/ucc logo.png">

            <nav>
                <ul class="nav_links">
                    <li><a class="activeForm" href="./Student_index.php">HOME</a></li>
                    <li><a href="./Student_account.php">ACCOUNT</a></li>
                    <li><a href="./Student_sched.php">SCHEDULE</a></li>
                    <li><a href="./Student_grades.php">GRADES</a></li>
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
                        <a class="modal-btn" href="#">Change Password</a>
                        <img src="https://img.icons8.com/dotty/80/000000/re-enter-pincode.png" />

                    </li>
                    <li class="options">
                        <a href="student-logout.php">Log Out</a>
                        <img src="https://img.icons8.com/external-prettycons-lineal-prettycons/49/000000/external-exit-essentials-prettycons-lineal-prettycons.png" />


                    </li>
                </ul>
            </div>

        </header>

        <div class="welcome">
            <h1>Welcome,</h1>
            <h1 class="stud-name"><?php if (isset($_SESSION['studno'])) {

                                        echo $_SESSION['studno'][1]; //firstname
                                    }
                                    ?> </h1>
            <p class="stud-num"><?php if (isset($_SESSION['studno'])) {
                                    echo $_SESSION['studno'][0]; //student number

                                }
                                ?>-N</p>
        </div>
        <div class="inbox-card">
            <div class="inbox-title"><i class="fas fa-inbox"></i>INBOX</div>
            <div class="inbox-item1">
                <div class="date">September 29, 2021</div>
                <div class="message">OPENING OF CLASSES FOR THE 1ST SEMESTER, SY 2020-2021</div>
            </div>
            <div class="inbox-item2">
                <div class="date">September 30, 2021</div>
                <div class="message">UCCSIS Advisory: Changing of Password</div>
            </div>
            <div class="inbox-item3">
                <div class="date">October 1, 2021</div>
                <div class="message">OPENING OF CLASSES FOR THE 2ND SEMESTER, SY 2020-2021</div>
            </div>
            <div class="inbox-item4">
                <div class="date">October 2, 2021</div>
                <div class="message">UCCSIS Advisory: Changing of Password</div>
            </div>
        </div>
        </section>


    <?php
    } else {
        header("location:Student_Login.php");
    }
    ?>
    <div class="footer">
    </div>
    <script src="assets/js/navbar.js"></script>
    <script src="assets/js/script.js"></script>

    <script src="../assets/student css/modal.js"></script>
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
    <!-- <div class="modal-bg">
        <div class="modal">
            <h2>Change Password</h2>
            <label for="password">Previous Password:</label>
            <input type="text" name="old">
            <label for="password">New Password</label>
            <input type="password" name="new">
            <button class="save">Save</button>

        </div>

    </div> -->



</body>

</html>