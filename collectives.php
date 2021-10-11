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
      <a href="#" class="active">
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
      <a class="navbar-brand">Collectives</a>
      <form class="form-inline">
      <input type="text" id="myInput" class="form-control mr-sm-2" onkeyup="myFunction()" placeholder="Search for name..">
    </form>
    </nav>
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
           <div class="card border-light mb-3">
            <div class="card-header card-header-primary card-header-tabs">
              <h4 class="card-title">Student</h4>
              <p class="card-category">Enrollment Requirements on 26th September, 2021</p>
            </div>
            <div class="card-body table-responsive">
              <table id="myTable" class="table table-hover">
                <thead class="text-warning">
                  <th>ID</th>
                  <th>Name</th>
                  <th>Course</th>
                  <th>Year</th>
                  <th>Section</th>
                  <th scope="col">Actions</th>
                </thead>
                <tbody>
                  <tr>
                    <td>1</td>
                    <td>Sarah Grace Arlyn Oben</td>
                    <td>BSCS</td>
                    <td>3rd</td>
                    <td>C</td>
                    <td>
                      <button type="button" class="btn btn-primary"><i class="far fa-eye"></i></button>
                      <button type="button" class="btn btn-danger"><i class="far fa-trash-alt"></i></button>
                    </td>
                  </tr>
                   <tr>
                    <td>2</td>
                    <td>Juan Paolo Ortega</td>
                    <td>BSCS</td>
                    <td>3rd</td>
                    <td>C</td>
                    <td>
                      <button type="button" class="btn btn-primary"><i class="far fa-eye"></i></button>
                      <button type="button" class="btn btn-danger"><i class="far fa-trash-alt"></i></button>
                    </td>
                  </tr>
                  <tr>
                    <td>3</td>
                    <td>Justine Podiotan</td>
                    <td>BSCS</td>
                    <td>3rd</td>
                    <td>C</td>
                    <td>
                      <button type="button" class="btn btn-primary"><i class="far fa-eye"></i></button>
                      <button type="button" class="btn btn-danger"><i class="far fa-trash-alt"></i></button>
                    </td>
                    </tr>
                  <tr>
                    <td>4</td>
                    <td>Jessica Joy Gapusan</td>
                    <td>BSCS</td>
                    <td>3rd</td>
                    <td>C</td>
                    <td>
                      <button type="button" class="btn btn-primary"><i class="far fa-eye"></i></button>
                      <button type="button" class="btn btn-danger"><i class="far fa-trash-alt"></i></button>
                    </td>
                  </tr>
                  <tr>
                    <td>5</td>
                    <td>Jennylyn Riego</td>
                    <td>BSCS</td>
                    <td>3rd</td>
                    <td>C</td>
                    <td>
                      <button type="button" class="btn btn-primary"><i class="far fa-eye"></i></button>
                      <button type="button" class="btn btn-danger"><i class="far fa-trash-alt"></i></button>
                    </td>
                  </tr>
                  <tr>
                    <td>6</td>
                    <td>Maryjoy Lacopanto</td>
                    <td>BSCS</td>
                    <td>3rd</td>
                    <td>C</td>
                    <td>
                      <button type="button" class="btn btn-primary"><i class="far fa-eye"></i></button>
                      <button type="button" class="btn btn-danger"><i class="far fa-trash-alt"></i></button>
                    </td>
                  </tr>
                  <tr>
                    <td>7</td>
                    <td>Jomer Delgado</td>
                    <td>BSCS</td>
                    <td>3rd</td>
                    <td>C</td>
                    <td>
                      <button type="button" class="btn btn-primary"><i class="far fa-eye"></i></button>
                      <button type="button" class="btn btn-danger"><i class="far fa-trash-alt"></i></button>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
            </div>
          </div>
          <div class="col-md-12">
           <div class="card border-light mb-3">
            <div class="card-header card-header-warning card-header-tabs">
              <h4 class="card-title">Professor</h4>
              <p class="card-category">Grading Sheet on 26th September, 2021</p>
            </div>
            <div class="card-body table-responsive">
              <table id="myTable" class="table table-hover">
                <thead class="text-warning">
                  <th>ID</th>
                  <th>Professor</th>
                  <th>Course</th>
                  <th>Year</th>
                  <th>Section</th>
                  <th scope="col">Actions</th>
                </thead>
                <tbody>
                  <tr>
                    <td>1</td>
                    <td>Raul Gutierrez</td>
                    <td>BSIT</td>
                    <td>1st</td>
                    <td>B</td>
                    <td>
                      <button type="button" class="btn btn-primary"><i class="far fa-eye"></i></button>
                      <button type="button" class="btn btn-danger"><i class="far fa-trash-alt"></i></button>
                    </td>
                  </tr>
                   <tr>
                    <td>2</td>
                    <td>Joemen Barrios</td>
                    <td>BSCS</td>
                    <td>3rd</td>
                    <td>A</td>
                    <td>
                      <button type="button" class="btn btn-primary"><i class="far fa-eye"></i></button>
                      <button type="button" class="btn btn-danger"><i class="far fa-trash-alt"></i></button>
                    </td>
                  </tr>
                  <tr>
                    <td>3</td>
                    <td>Jerwin Cabral</td>
                    <td>BSCS</td>
                    <td>3rd</td>
                    <td>C</td>
                    <td>
                      <button type="button" class="btn btn-primary"><i class="far fa-eye"></i></button>
                      <button type="button" class="btn btn-danger"><i class="far fa-trash-alt"></i></button>
                    </td>
                    </tr>
                  <tr>
                    <td>4</td>
                    <td>Jeffrey Coco</td>
                    <td>BSIS</td>
                    <td>3rd</td>
                    <td>A</td>
                    <td>
                      <button type="button" class="btn btn-primary"><i class="far fa-eye"></i></button>
                      <button type="button" class="btn btn-danger"><i class="far fa-trash-alt"></i></button>
                    </td>
                  </tr>
                  <tr>
                    <td>5</td>
                    <td>Michael Tan</td>
                    <td>BSIS</td>
                    <td>2nd</td>
                    <td>A</td>
                    <td>
                      <button type="button" class="btn btn-primary"><i class="far fa-eye"></i></button>
                      <button type="button" class="btn btn-danger"><i class="far fa-trash-alt"></i></button>
                    </td>
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
</div>
<?php 
    }
    else
    {
        header("location:index.php");
    }

?>            

</body>

</html>