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
            <a href="index.php">Home</a>
            <a href="account.php">Account</a>
            <a href="schedule.php">Schedule</a>
            <a href="grades.php">Grades</a>
            <a href="enrollment.php">Enrollment</a>
        </nav>
        <section>
            <div class="welcome">
                <h1>Welcome,</h1>
                <h1><?php if (isset($_SESSION['studno'])) {

                        echo $_SESSION['studno'][2]; //firstname
                        echo " ";
                        echo $_SESSION['studno'][1]; //lastname
                    }
                    ?> </h1>
                <p><?php if (isset($_SESSION['studno'])) {
                        echo $_SESSION['studno'][0]; //student number
                    }
                    ?></p>
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
    <svg class="waves" xmlns="http://www.w3.org/2000/svg" viewbox="0 0 1440 320">
        <path fill="green" fill-opacity="0.8" d="M0,32L40,48C80,64,160,96,240,101.3C320,107,400,85,480,106.7C560,128,640,192,720,197.3C800,203,880,149,960,149.3C1040,149,1120,203,1200,224C1280,245,1360,235,1400,229.3L1440,224L1440,320L1400,320C1360,320,1280,320,1200,320C1120,320,1040,320,960,320C880,320,800,320,720,320C640,320,560,320,480,320C400,320,320,320,240,320C160,320,80,320,40,320L0,320Z"></path>
    </svg>
    <script src="assets/js/navbar.js"></script>
    <script src="assets/js/script.js"></script>
</body>

</html>