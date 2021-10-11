<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/dashboard.css">
    <link rel="stylesheet" href="assets/bootstrap-4/css/bootstrap.min.css">
    <script src="https://kit.fontawesome.com/b1b0cba1bb.js" crossorigin="anonymous"></script> 
    <title>Admin</title>
</head>
<body>
<?php
    session_start();
    if(isset($_SESSION['username'])){

?>
   <div class="sidebar-container" id="navItem">
  <a href="#" class="navbar-brand">
    <img src="assets/image/logo.png" height="200">
  </a>
  <ul class="sidebar-navigation">
    <li>
      <a href="#" class="active">
        <i class="fa fa-dashboard" aria-hidden="true"></i> Dashboard
      </a>
    </li>
    <li>
      <a href="department.php">
        <i class="fa fa-user-tie" aria-hidden="true"></i> Professors
      </a>
    </li>
    <li>
      <a href="student.php">
        <i class="fa fa-users" aria-hidden="true"></i> Students
      </a>
    </li>
    <li>
      <a href="collectives.php">
        <i class="fa fa-files-o" aria-hidden="true"></i> Collectives
      </a>
    </li>
    <li>
      <a href="Subjects.php">
        <i class="fa fa-list-alt" aria-hidden="true"></i> Subjects
      </a>
    </li>
    <li>
      <a href="schedule.php">
        <i class="fa fa-calendar" aria-hidden="true"></i> Schedule
      </a>
    </li>
    <li>
      <a href="manageAcc.php">
        <i class="fa fa-tasks" aria-hidden="true"></i> Manage Accounts
      </a>
    </li>
    <li>
      <a href="logout.php">
        <i class="fa fa-sign-out" aria-hidden="true"></i> Logout
      </a>
    </li>
  </ul>
</div>


<div class="content">
  <div class="content-container">
    <nav class="navbar navbar-light bg-light  justify-content-between">
      <a class="navbar-brand">Dashboard</a>
    </nav>
      <div class="container-fluid">
          <div class="row">
            <div class="col-xl-4 col-lg-12">
              <div class="card border-light mb-3">
                <div class="card-header card-header-success">
                Students
                </div>
                <div class="card-body info">
                  <h4 class="count" >55</h4>
                  <h5 class="category">Total Student</h5>
                  <div class="fa fa-users fa-3x"></div>
                </div>
                <div class="card-footer text-muted bg-transparent">
                  <div class="stats">
                    <i class="far fa-clock"></i> Last updated 4 minutes ago
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-4 col-lg-12">
              <div class="card border-light mb-3">
                <div class="card-header card-header-warning">
                  Enrolled
                </div>
                <div class="card-body info">
                  <h4 class="count">300</h4>
                  <h5 class="category">Student</h5>
                  <div class="circle-wrap">
                    <div class="circle">
                      <div class="mask full">
                        <div class="fill"></div>
                      </div>
                    <div class="mask half">
                     <div class="fill"></div>
                    </div>
                    <div class="inside-circle">70%</div>
                  </div>
                </div>
                </div>
                <div class="card-footer text-muted bg-transparent">
                  <div class="stats">
                    <i class="far fa-clock"></i> Last updated 3 days ago
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-4 col-lg-12">
              <div class="card border-light mb-3">
                <div class="card-header card-header-danger">
                  Professor
                </div>
                <div class="card-body info">
                  <h4 class="count" >55</h4>
                  <h5 class="category">Total Professor</h5>
                  <div class="fa fa-user-tie fa-3x"></div>                
                </div>
                <div class="card-footer text-muted bg-transparent">
                  <div class="stats">
                    <i class="far fa-clock"></i> Last updated 4 days ago
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-lg-6 col-md-12">
              <div class="card border-light mb-3">
                <div class="card-header card-header-primary card-header-tabs">
                  <h4 class="card-title">Students Stats</h4>
                  <p class="card-category">New Students on 25th September, 2021</p>
                </div>
                <div class="card-body table-responsive">
                  <table class="table table-hover">
                    <thead class="text-warning">
                      <th>ID</th>
                      <th>Name</th>
                      <th>Course</th>
                      <th>Year</th>
                    </thead>
                    <tbody>
                      <tr>
                        <td>1</td>
                        <td>Dakota Rice</td>
                        <td>BSCS</td>
                        <td>1st</td>
                      </tr>
                      <tr>
                        <td>2</td>
                        <td>Minerva Hooper</td>
                        <td>BSIS</td>
                        <td>1st</td>
                      </tr>
                      <tr>
                        <td>3</td>
                        <td>Sage Rodriguez</td>
                        <td>BSEMC</td>
                        <td>1st</td>
                      </tr>
                      <tr>
                        <td>4</td>
                        <td>Philip Chaney</td>
                        <td>BSIT</td>
                        <td>1st</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>

            <div class="col-lg-6 col-md-12">
              <div class="card border-light mb-3">
                <div class="card-header card-header-warning card-header-tabs">
                  <h4 class="card-title">Professor Stats</h4>
                  <p class="card-category">New Professor on 25th September, 2021</p>
                </div>
                <div class="card-body table-responsive">
                  <table class="table table-hover">
                    <thead class="text-warning">
                      <th>ID</th>
                      <th>Name</th>
                      <th>Department</th>
                    </thead>
                    <tbody>
                      <tr>
                        <td>1</td>
                        <td>Jerwin Cabral</td>
                        <td>CLAS</td>
                      </tr>
                      <tr>
                        <td>2</td>
                        <td>Joemen Barrios</td>
                        <td>CLAS</td>
                      </tr>
                      <tr>
                        <td>3</td>
                        <td>Cherry Rose Concha</td>
                        <td>CLAS</td>
                      </tr>
                      <tr>
                        <td>4</td>
                        <td>Jeffrey Coco</td>
                        <td>CLAS</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
   </div>
            
<?php 
    }
    else
    {
        header("location:index.php");
    }

?>
   

    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="assets/js/script.js"></script>
</body>

</html>