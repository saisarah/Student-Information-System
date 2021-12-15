<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/student css/login.css">
    <title>Document</title>
</head>

<body>
    <main class="flex-container">
        <section id="log-in1">
            <div class="container1">
                <div class="introholder">
                    <h2>Welcome,</h2>
                    <h1>YUSISISTA</h1>
                    <p>A quality higher education institution imbued with relevant knowledge, skills and values for the attainment of community driven, industry sensitive, environmentally conscious, resilient and globally competitive, Academicsally focused citizens for the service of Caloocan City.</p>

                    <a href="#log-in2" class="scroll-down">
                        <div class="mouse">
                            <span></span>
                        </div>
                        <div class="arrow">
                            <span></span>
                        </div>
                    </a>

                </div>
            </div>
            <span></span>
        </section>
        <section id="log-in2">
            <div class="container2">
                <div class="scheduleholder">
                    <div class="container-timeline">
                        <div class="timeline">
                            <ul>
                                <li>
                                    <div class="timeline-content">
                                        <h3 class="date">AUGUST 2-6, 2021</h3>
                                        <p>Enrollment Period</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="timeline-content">
                                        <h3 class="date">AUGUST 6-22, 2021</h3>
                                        <p>START CLASSES</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="timeline-content">
                                        <h3 class="date">AUGUST 30-SEPTEMBER 5, 2021</h3>
                                        <p>ADDING / DROPPING / CHANGING SUBJECTS</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="timeline-content">
                                        <h3 class="date">OCTOBER 11-17, 2021</h3>
                                        <p>MIDTERM EXAMINATION</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="timeline-content">
                                        <h3 class="date">DECEMBER 20-JANUARY 2, 2022</h3>
                                        <p>CHRISTMAS BREAK</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="timeline-content">
                                        <h3 class="date">JANUARY 3-9, 2022</h3>
                                        <p>FINAL EXAMINATION</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="timeline-content">
                                        <h3 class="date">JANUARY 10-14, 2022</h3>
                                        <p>SUBMISSION OF GRADES</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="timeline-content">
                                        <h3 class="date">FEBRUARY 1-4, 2022</h3>
                                        <p>2ND SEMESTER ENROLLMENT PERIOD</p>
                                    </div>
                                </li>
                            </ul>
                        </div>


                    </div>
                </div>
                <div class="loginholder">
                    <div id="loginForm1">
                        <input type="checkbox" id="chk" aria-hidden="true">
                        <div class="studentLogIn">
                            <form class="form" action="../modules/student-login.php" method="post">
                                <label for="chk" aria-hidden="true">STUDENT</label>
                                <input type="hidden" name="type" value="login">
                                <input type="text" name="studno" placeholder="Student No./Email...">
                                <input type="password" name="password" id="password" placeholder="Password...">
                                <button type="submit" name="submit">Log In</button>
                            </form>


                        </div>

                        <!-- <div class="login">
                            <form class="form" action="../modules/prof-login.php" method="post">
                                <label for="chk" aria-hidden="true">PROFESSOR</label>
                                <input type="text" name="username" required="">
                                <input type="password" name="password" id="password" required="">
                                <button type="submit" name="submit">Log In</button>
                            </form>
                        </div> -->
                    </div>

                </div>

            </div>
            <div class="section2">

            </div>
        </section>
        </section>
        </div>
    </main>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="assets/js/script.js"></script>

</body>

</html>