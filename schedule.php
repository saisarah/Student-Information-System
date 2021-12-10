<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/dashboard.css">
    <link rel="stylesheet" href="assets/bootstrap-4/css/bootstrap.min.css">
    <script type="text/javascript" src="assets/js/jquery.min.js"></script>
    <script type="text/javascript" src="assets/js/popper.min.js"></script>
    <script type="text/javascript" src="assets/js/filter-table.js"></script>
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
      <div class="form-inline">
      <input type="text" id="myInput" class="form-control mr-sm-2" onkeyup="myFunction()" placeholder="Search for name..">
      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
          Add Schedule
        </button>
      </div>
        <!-- The Modal -->
        <div class="modal fade" id="myModal">
          <div class="modal-dialog">
            <div class="modal-content">
              <!-- Modal Header -->
              <div class="modal-header">
               <h4 class="modal-title">Add Schedule</h4>
               <button type="button" class="close" data-dismiss="modal">&times;</button>
             </div>
             <!-- Modal body -->
            <div class="modal-body justify-content-center">
              <form id="modal">
                
                <div class="row">
                <div class="form-group col-md-5">
                  <label>Code</label>
                  <div class="input-group mb-3">
                    <input type="text" id="inputCode" name="inputCode" placeholder="Subject Code" class="form-control border border-secondary required-error">
                    <div class="input-group-append">
                      <button class="fa fa-search btn btn-info" id="btnSearch" type="submit"></button>
                    </div>
                  </div>
                </div>

                <div class="form-group col-md-7">
                  <label>Description</label>
                  <input type="text" id="inputDesc" name="inputDesc" placeholder="Subject Description"  disabled class="form-control border border-secondary required-error">
                </div>
               </div>

                <div class="row">
                  <div class="form-group col-md-6">
                  <label>Instructor</label>
                  <input type="text" id="inputInstructor" name="inputInstructor" placeholder="Ex. Matthew Smith"  class="form-control border border-secondary required-error">
                </div>

                <div class="form-group col-md-6">
                  <label>Day</label>
                  <select id="inputDay" name="inputDay" class="form-control border border-secondary required-error">
                    <option></option>
                    <option>Monday</option>
                    <option>Tuesday</option>
                    <option>Wednesday</option>
                    <option>Thursday</option>
                    <option>Friday</option>
                    <option>Saturday</option>
                    <option>Sunday</option>
                  </select>
                </div>
              </div>

              <div class="row">
                  <div class="form-group col-md-6">
                  <label>Start Time</label>
                  <input type="time" id="inputStart" name="inputStart"  class="form-control border border-secondary required-error">
                </div>

                <div class="form-group col-md-6">
                  <label>End Time</label>
                  <input type="time" id="inputEnd" name="inputEnd" class="form-control border border-secondary required-error">
                </div>
              </div>

              <div class="row">
                  <div class="form-group col-md-4">
                  <label>Course</label>
                  <select id="inputCourse" name="inputCourse" class="form-control border border-secondary">
                    <option selected></option>
                    <option>BSCS</option>
                    <option>BSIT</option>
                    <option>BSEMC</option>
                    <option>BSIS</option>
                  </select>
                </div>

                <div class="form-group col-md-4">
                  <label>Year</label>
                  <select id="inputYear" name="inputYear" class="form-control border border-secondary">
                    <option selected></option>
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                  </select>
                </div>

                <div class="form-group col-md-4">
                  <label>Section</label>
                  <select id="inputSection" name="inputSection" class="form-control border border-secondary">
                    <option selected></option>
                    <option>A</option>
                    <option>B</option>
                    <option>C</option>
                    <option>D</option>
                  </select>                
                </div>
              </div>

            <!-- Modal footer -->
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <button type="submit" id="btnAddSched" class="btn btn-primary">Save changes</button>
            </div>
            </form>
            </div>
          </div>
        </div>
      </div>
    </nav>
      <div class="container-fluid">
        <div class="row">
          
          <div class="col-md-12">
           <div class="card border-light mb-3">
            <div class="card-header card-header-info card-header-tabs">
              <h4 class="card-title">Schedule List</h4>
              <p class="card-category">1st Semester A.Y 2021-2022</p>
              <p class="card-category"></p>
            </div>
            <div class="card-body table-responsive">
              <table id="myTable" class="table table-hover">
                
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
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.14.0/jquery.validate.min.js"></script>
<script type="text/javascript" src="assets/js/script-sched.js"></script>

</body>

</html>