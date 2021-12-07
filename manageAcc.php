<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/dashboard.css">
    <link rel="stylesheet" href="assets/bootstrap-4/css/bootstrap.min.css">
    <script type="text/javascript" src="assets/js/filter-table.js"></script>
    <script type="text/javascript" src="assets/js/jquery.min.js"></script>
    <script type="text/javascript" src="assets/js/popper.min.js"></script>
    <script type="text/javascript" src="assets/bootstrap-4/js/bootstrap.min.js"></script>
    <script src="https://kit.fontawesome.com/b1b0cba1bb.js" crossorigin="anonymous"></script> 
    <title>Admin</title>
</head>
<?php
    session_start();
    if(isset($_SESSION['username'])){

?>
<body>
   <div class="sidebar-container" id="navItem">
  <a href="#" class="navbar-brand">
    <img src="assets/image/logo.png" height="200">
  </a>
  <ul class="sidebar-navigation">
    
    <li>
      <a href="admin.php">
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
      <a href="subjects.php">
        <i class="fa fa-list-alt" aria-hidden="true"></i> Subjects
      </a>
    </li>
    <li>
      <a href="schedule.php">
        <i class="fa fa-calendar" aria-hidden="true"></i> Schedule
      </a>
    </li>
    <li>
      <a href="#" class="active">
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
      <a class="navbar-brand">Manage Accounts</a>
      <form class="form-inline">
        
        <!-- The Modal -->
        <div class="modal fade" id="myModal">
          <div class="modal-dialog">
            <div class="modal-content">
              <!-- Modal Header -->
              <div class="modal-header">
               <h4 class="modal-title">Create New Account</h4>
               <button type="button" class="close" data-dismiss="modal">&times;</button>
             </div>
             <!-- Modal body -->
             <div class="modal-body">

            </div>
            <!-- Modal footer -->
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <button type="button" class="btn btn-primary">Save changes</button>
            </div>
          </div>
        </div>
      </div>
    </form>
    </nav>
 
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-4 col-md-6">

           <div class="card border-light mb-3">
            <div class="card-header card-header-danger">
              <h4 class="card-title">Create New Accountt</h4>
              <p class="card-category"></p>
            </div>
            <div class="card-body">
              <div class="form-row">
                <div class="form-group col-md-12">
                  <label>Username *</label>
                  <input type="text" id="username" placeholder="Username or Student Number" class="form-control" required>
                </div>
                
                <div class="form-group col-md-12">
                  <label>Password *</label>
                  <div class="input-group mb-3">
                    <input type="Password" id="txtGenerated" placeholder="Generated Password" class="form-control" placeholder="Recipient's username" disabled>
                  <div class="input-group-append">
                    <button id="btnShowPass" class="far fa-eye-slash"></button>
                  </div>
                </div>
                <label>User *</label>
                  <select id="userType" class="form-control">
                    <option selected>Choose ...</option>
                    <option>Student</option>
                    <option>Professor</option>
                  </select>
                </div>
                <div class="form-group col-md-12">
                  <label>For Professors *</label>
                  <div class="input-group mb-3">
                  <input type="text" id="FNProf" placeholder="Enter full name. Ex: John Doe" class="form-control" required>
                  </div>

                  <button type="submit" id="btnGenerate" class="btn btn-success">Generate Password</button>
                  <button type="submit" id="btnCreateAcc" style="float: right;" class="btn btn-primary">Submit</button>
                </div>


              </div>

            </div>
            </div>
          </div>
          <div class="col-lg-8 col-md-6">
           <div class="card border-light mb-3">
            <div class="card-header card-header-success card-header-tabs">
              <h4 class="card-title">Account Created</h4>
              <p class="card-category">Recent Account Created</p>
            </div>
            <div class="card-body table-responsive">
              <table id="myTable" class="table table-hover">
                
              </table>
            </div>
            <?php
            include("modules/dbConn.php");

            $timea = "SELECT UPDATE_TIME FROM   information_schema.tables WHERE TABLE_SCHEMA = 'dbsis'AND TABLE_NAME = 'tbl_student'";
            $res = $conn->query($timea);
            while($row = $res->fetch_assoc()) {
            $time = $row['UPDATE_TIME'];
            }
            function timeago($time, $tense='ago') {
    // declaring periods as static function var for future use
    static $periods = array('year', 'month', 'day', 'hour', 'minute', 'second');

    // checking time format
    if(!(strtotime($time)>0)) {
        return trigger_error("Wrong time format: '$time'", E_USER_ERROR);
    }

    // getting diff between now and time
    date_default_timezone_set('UTC');

    $now  = new DateTime('now');
    $time = new DateTime($time);
    $diff = $now->diff($time)->format('%y %m %d %h %i %s');
    // combining diff with periods
    $diff = explode(' ', $diff);
    $diff = array_combine($periods, $diff);
    // filtering zero periods from diff
    $diff = array_filter($diff);
    // getting first period and value
    $period = key($diff);
    $value  = current($diff);

    // if input time was equal now, value will be 0, so checking it
    if(!$value) {
        $period = 'seconds';
        $value  = 0;
    } else {
        // converting days to weeks
        if($period=='day' && $value>=7) {
            $period = 'week';
            $value  = floor($value/7);
        }
        // adding 's' to period for human readability
        if($value>1) {
            $period .= 's';
        }
    }

    // returning timeago
    return "$value $period $tense";
    
}

            ?>
            <div class="card-footer text-muted bg-transparent">
                  <div class="stats">
                      <i class='fa fa-clock'></i> Last account created 
                  </div>
                </div>
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