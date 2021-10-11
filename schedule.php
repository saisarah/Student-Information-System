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
      <a href="Subjects.php">
        <i class="fa fa-list-alt" aria-hidden="true"></i> Subjects
      </a>
    </li>
    <li>
      <a href="#" class="active">
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
      <a class="navbar-brand">Schedule</a>
    </nav>
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-4 col-md-6">
            <div class="card border-light mb-3">
              <div class="card-header card-header-primary">
              Students
            </div>
            <div class="card-body sched-info">
              <div class="form-row">
                <div class="form-group col-md-8">
                  <label>Code</label>
                  <input type="text" placeholder="Subject Code" class="form-control">
                </div>
                <div class="form-group col-md-4">
                  <label>Search</label>
                  <button type="submit" class="btn btn-primary">Search</button>
                </div>
                <div class="form-group col-md-12">
                  <label>Description</label>
                  <input type="text" placeholder="Subject Description" disabled="" class="form-control">
                </div>
              </div>
              <div class="form-row">
                <div class="form-group col-md-4">
                  <label for="inputState">Day</label>
                  <select id="inputState" class="form-control">
                    <option selected>Choose...</option>
                    <option>Sunday</option>
                    <option>Monday</option>
                    <option>Tuesday</option>
                    <option>Wednesday</option>
                    <option>Thursday</option>
                    <option>Friday</option>
                    <option>Saturday</option>
                  </select>
                </div>
                <div class="form-group col-md-8">
                  <label>Time</label>
                  <input type="time" class="form-control">
                </div>
              </div>
              <div class="form-row">
                <div class="form-group col-md-4">
                  <label for="inputState">Course</label>
                  <select id="inputState" class="form-control">
                    <option selected>Choose</option>
                    <option>BSCS</option>
                    <option>BSIT</option>
                    <option>BSEMC</option>
                    <option>BSIS</option>
                  </select>
                </div>
                <div class="form-group col-md-4">
                  <label for="inputState">Year</label>
                  <select id="inputState" class="form-control">
                    <option selected>Choose</option>
                    <option>1st</option>
                    <option>2nd</option>
                    <option>3rd</option>
                    <option>4th</option>
                  </select>
                </div>
                <div class="form-group col-md-4">
                  <label for="inputState">Section</label>
                  <select id="inputState" class="form-control">
                    <option selected>Choose</option>
                    <option>A</option>
                    <option>B</option>
                    <option>C</option>
                    <option>D</option>
                  </select>
                </div>
              </div>
              <button type="submit" class="btn btn-primary btnSub">Add Schedule</button>
              </div>
              
            </div>
          </div>
          <div class="col-lg-8 col-md-6">
           <div class="card border-light mb-3">
            <div class="card-header card-header-primary card-header-tabs">
              <h4 class="card-title">Student Schedule</h4>
              <p class="card-category">1st Semester A.Y 2021-2022</p>
              <p class="card-category"></p>
            </div>
            <div class="card-body table-responsive">
              <table id="myTable" class="table table-hover">
                <thead class="text-warning">
                  <th>ID</th>
                  <th>Code</th>
                  <th>Description</th>
                  <th>Units</th>
                  <th>Day</th>
                  <th>Time</th>
                  <th>Course</th>
                  <th>Year</th>
                  <th>Section</th>
                </thead>
                <tbody>
                  <tr>
                    <td>1</td>
                    <td>CCS 110</td>
                    <td>Networks and Communication</td>
                    <td>3</td>
                    <td>Mon</td>
                    <td>7:00-10:00</td>
                    <td>BSCS</td>
                    <td>3</td>
                    <td>C</td>
                  </tr>
                   <tr>
                    <td>2</td>
                    <td>CCS 116</td>
                    <td>Advanced Web Systems</td>
                    <td>5</td>
                    <td>Sun | Tues</td>
                    <td>4:00-6:00 | 6:00-9:00</td>
                    <td>BSCS</td>
                    <td>3</td>
                    <td>C</td>
                  </tr>
                  <tr>
                    <td>3</td>
                    <td>CSE 102</td>
                    <td>Graphics and Visual Computing</td>
                    <td>3</td>
                    <td>Wed</td>
                    <td>4:00-7:00</td>
                    <td>BSCS</td>
                    <td>3</td>
                    <td>C</td>
                    </tr>
                  <tr>
                    <td>4</td>
                    <td>CS 108</td>
                    <td>Software Engineering 1</td>
                    <td>3</td>
                    <td>Sun | Wed</td>
                    <td>11:00-1:00 | 1:00-2:00</td>
                    <td>BSCS</td>
                    <td>3</td>
                    <td>C</td>
                  </tr>
                  <tr>
                    <td>5</td>
                    <td>CS 113</td>
                    <td>Information Assurance and Security</td>
                    <td>3</td>
                    <td>Thurs</td>
                    <td>5:00-8:00</td>
                    <td>BSCS</td>
                    <td>3</td>
                    <td>C</td>
                  </tr>
                 
                </tbody>
              </table>
            </div>
            </div>
          </div>
        </div>
          <div class="row">
          <div class="col-lg-4 col-md-6">
            <div class="card border-light mb-3">
              <div class="card-header card-header-warning">
              Professors
            </div>
            <div class="card-body sched-info">
              <div class="form-row">
                <div class="form-group col-md-8">
                  <label>Code</label>
                  <input type="text" placeholder="Subject Code" class="form-control">
                </div>
                <div class="form-group col-md-4">
                  <label>Search</label>
                  <button type="submit" class="btn btn-primary">Search</button>
                </div>
                <div class="form-group col-md-12">
                  <label>Description</label>
                  <input type="text" placeholder="Subject Description" disabled="" class="form-control">
                </div>
              </div>
              <div class="form-row">
                <div class="form-group col-md-4">
                  <label for="inputState">Day</label>
                  <select id="inputState" class="form-control">
                    <option selected>Choose...</option>
                    <option>Sunday</option>
                    <option>Monday</option>
                    <option>Tuesday</option>
                    <option>Wednesday</option>
                    <option>Thursday</option>
                    <option>Friday</option>
                    <option>Saturday</option>
                  </select>
                </div>
                <div class="form-group col-md-8">
                  <label>Time</label>
                  <input type="time" class="form-control">
                </div>
              </div>
              <div class="form-row">
                <div class="form-group col-md-4">
                  <label for="inputState">Course</label>
                  <select id="inputState" class="form-control">
                    <option selected>Choose</option>
                    <option>BSCS</option>
                    <option>BSIT</option>
                    <option>BSEMC</option>
                    <option>BSIS</option>
                  </select>
                </div>
                <div class="form-group col-md-4">
                  <label for="inputState">Year</label>
                  <select id="inputState" class="form-control">
                    <option selected>Choose</option>
                    <option>1st</option>
                    <option>2nd</option>
                    <option>3rd</option>
                    <option>4th</option>
                  </select>
                </div>
                <div class="form-group col-md-4">
                  <label for="inputState">Section</label>
                  <select id="inputState" class="form-control">
                    <option selected>Choose</option>
                    <option>A</option>
                    <option>B</option>
                    <option>C</option>
                    <option>D</option>
                  </select>
                </div>
              </div>
              <button type="submit" class="btn btn-primary btnSub">Add Schedule</button>
              </div>
              
            </div>
          </div>
          <div class="col-lg-8 col-md-6">
           <div class="card border-light mb-3">
            <div class="card-header card-header-warning card-header-tabs">
              <h4 class="card-title">Professor Schedule</h4>
              <p class="card-category">1st Semester A.Y 2021-2022</p>
              <p class="card-category"></p>
            </div>
            <div class="card-body table-responsive">
              <table id="myTable" class="table table-hover">
                <thead class="text-warning">
                  <th>ID</th>
                  <th>Code</th>
                  <th>Description</th>
                  <th>Units</th>
                  <th>Day</th>
                  <th>Time</th>
                  <th>Course</th>
                  <th>Year</th>
                  <th>Section</th>
                </thead>
                <tbody>
                  <tr>
                    <td>1</td>
                    <td>CCS 110</td>
                    <td>Networks and Communication</td>
                    <td>3</td>
                    <td>Mon</td>
                    <td>7:00-10:00</td>
                    <td>BSCS</td>
                    <td>3</td>
                    <td>C</td>
                  </tr>
                   <tr>
                    <td>2</td>
                    <td>CCS 116</td>
                    <td>Advanced Web Systems</td>
                    <td>5</td>
                    <td>Sun | Tues</td>
                    <td>4:00-6:00 | 6:00-9:00</td>
                    <td>BSCS</td>
                    <td>3</td>
                    <td>C</td>
                  </tr>
                  <tr>
                    <td>3</td>
                    <td>CSE 102</td>
                    <td>Graphics and Visual Computing</td>
                    <td>3</td>
                    <td>Wed</td>
                    <td>4:00-7:00</td>
                    <td>BSCS</td>
                    <td>3</td>
                    <td>C</td>
                    </tr>
                  <tr>
                    <td>4</td>
                    <td>CS 108</td>
                    <td>Software Engineering 1</td>
                    <td>3</td>
                    <td>Sun | Wed</td>
                    <td>11:00-1:00 | 1:00-2:00</td>
                    <td>BSCS</td>
                    <td>3</td>
                    <td>C</td>
                  </tr>
                  <tr>
                    <td>5</td>
                    <td>CS 113</td>
                    <td>Information Assurance and Security</td>
                    <td>3</td>
                    <td>Thurs</td>
                    <td>5:00-8:00</td>
                    <td>BSCS</td>
                    <td>3</td>
                    <td>C</td>
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