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

<?php
    include('modules/dbConn.php');

    $query = "SELECT COUNT(*) AS SUM FROM tbl_student";
    $result = $conn->query($query);
    $rows = mysqli_fetch_assoc($result);

    $query1 = "SELECT COUNT(*) AS SUM FROM tbl_student WHERE status = 'Active'";
    $result1 = $conn->query($query1);
    $rows1 = mysqli_fetch_assoc($result1);

    $query2 = "SELECT COUNT(*) AS SUM FROM tbl_professor";
    $result2 = $conn->query($query2);
    $rows2 = mysqli_fetch_assoc($result2);

    $ttlStud = $rows['SUM'];
    $ttlEnrolled = $rows1['SUM'];
    $percentage = ($ttlEnrolled / $ttlStud) * 100;

    $query3 = "SELECT dateInserted FROM tbl_student WHERE id=(SELECT max(id) FROM tbl_student)";
    $res = $conn->query($query3);
   if ($res->num_rows > 0){
        //Retrieving data from data table
        while($row = $res->fetch_assoc()) {
           // $id = $row['id'];
            $dateIns = $row['dateInserted'];
        }
        $dateIns1 = new DateTime($dateIns);
        $now = new DateTime();
        $interval = $dateIns1->diff($now,true);

       
   
    }
    $query4 = "SELECT dateInserted FROM tbl_student WHERE status='Active'";
    $res1 = $conn->query($query4);

    if ($res1->num_rows > 0){
        //Retrieving data from data table
        while($row = $res1->fetch_assoc()) {
           // $id = $row['id'];
            $dateIns3 = $row['dateInserted'];
        }
        $dateIns2 = new DateTime($dateIns3);
        $now1 = new DateTime();
        $interval1 = $dateIns2->diff($now1,true);

       
   
    }
    $query5 = "SELECT dateInserted FROM tbl_professor";
    $res5 = $conn->query($query5);

    if ($res5->num_rows > 0){
        //Retrieving data from data table
        while($row = $res5->fetch_assoc()) {
           // $id = $row['id'];
            $dateIns4 = $row['dateInserted'];
        }
        $dateIns5 = new DateTime($dateIns4);
        $now5 = new DateTime();
        $interval5 = $dateIns5->diff($now5,true);

       
   
    }

 
    


?>

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
                  <h4 id="total-stud" class="count" ><?php echo $rows['SUM'];?></h4>
                  <h5 class="category">Total Student</h5>
                  <div class="fa fa-users fa-3x"></div>
                </div>
                <div class="card-footer text-muted bg-transparent">
                  <div class="stats">
                    <i class="far fa-clock"></i> <?php if ($interval->y) echo 'Last updated ' . $interval->y . ' years ago'; elseif ($interval->m) echo 'Last updated ' . $interval->m . ' months ago';
elseif ($interval->d) echo 'Last updated ' . $interval->d . ' days ago';
elseif ($interval->h) echo 'Last updated ' . $interval->h . ' hours ago';
elseif ($interval->i) echo 'Last updated ' . $interval->i . ' minutes ago';
else echo "Less than 1 minute ago";?>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-4 col-lg-12">
              <div class="card border-light mb-3">
                <div class="card-header card-header-info">
                  Enrolled
                </div>
                <div class="card-body info">
                  <h4 id="total-enrolled" class="count"><?php echo $rows1['SUM'];?></h4>
                  <h5 class="category">Student</h5>
                  <div class="fa fa-users fa-3x"></div>
                </div>
                <div class="card-footer text-muted bg-transparent">
                  <div class="stats">
                    <i class="far fa-clock"></i><?php if ($interval->y) echo 'Last updated ' . $interval1->y . ' years ago'; elseif ($interval1->m) echo 'Last updated ' . $interval1->m . ' months ago';
elseif ($interval1->d) echo 'Last updated ' . $interval1->d . ' days ago';
elseif ($interval1->h) echo 'Last updated ' . $interval1->h . ' hours ago';
elseif ($interval1->i) echo 'Last updated ' . $interval1->i . ' minutes ago';
else echo "Less than 1 minute ago";?>
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
                  <h4 id="total-prof" class="count" ><?php echo $rows2['SUM'];?></h4>
                  <h5 class="category">Total Professor</h5>
                  <div class="fa fa-user-tie fa-3x"></div>                
                </div>
                <div class="card-footer text-muted bg-transparent">
                  <div class="stats">
                    <i class="far fa-clock"></i><?php if ($interval5->y) echo 'Last updated ' . $interval5->y . ' years ago'; elseif ($interval5->m) echo 'Last updated ' . $interval5->m . ' months ago';
elseif ($interval5->d) echo 'Last updated ' . $interval5->d . ' days ago';
elseif ($interval5->h) echo 'Last updated ' . $interval5->h . ' hours ago';
elseif ($interval5->i) echo 'Last updated ' . $interval5->i . ' minutes ago';
else echo "Less than 1 minute ago";?>
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
                  <table id="table-container" class="table table-hover">
                    
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