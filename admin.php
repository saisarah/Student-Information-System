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
                  <h4 id="total-stud" class="count" >55</h4>
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
                  <h4 id="total-enrolled" class="count">300</h4>
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
                  <h4 id="total-prof" class="count" >55</h4>
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
<?php 
    $today = date('F j, Y');
?>
          <div class="row">
            <div class="col-lg-6 col-md-12">
              <div class="card border-light mb-3">
                <div class="card-header card-header-primary card-header-tabs">
                  <h4 class="card-title">Students Stats</h4>
                  <p id="latest-stud" class="card-category">New Students Today, <?php echo $today; ?></p>
                </div>
                <div class="card-body table-responsive">
                    <table id="table-stud" class="table table-hover">
                      
                    </table>
                </div>
              </div>
            </div>

            <div class="col-lg-6 col-md-12">
              <div class="card border-light mb-3">
                <div class="card-header card-header-warning card-header-tabs">
                  <h4 class="card-title">Professor Stats</h4>
                  <p class="card-category">New Professor Today, <?php echo $today; ?></p>
                </div>
                <div class="card-body table-responsive">
                  <table id="table-prof" class="table table-hover">
                    
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
           <script type="text/javascript" src="assets/js/ajax-script.js"></script>

</body>

</html>