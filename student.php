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
      <a href="#" class="active">
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
      <a class="navbar-brand">Student</a>
      <div class="form-inline">
      <input type="text" id="myInput" class="form-control mr-sm-2" onkeyup="myFunction()" placeholder="Search for name..">
      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
          Add Student
        </button>
      </div>
        <!-- The Modal -->
        <div class="modal fade" id="myModal">
          <div class="modal-dialog">
            <div class="modal-content">
              <!-- Modal Header -->
              <div class="modal-header">
               <h4 class="modal-title">Add Student</h4>
               <button type="button" class="close" data-dismiss="modal">&times;</button>
             </div>
             <!-- Modal body -->
            <div class="modal-body justify-content-center">
              <form class="regUser" id="modal">
                <div class="form-group">
                  <label>First Name</label>
                  <input type="text" id="inputfName" placeholder="John" name="inputfName" class="form-control border border-secondary required-error">
                </div>

                <div class="row">
                <div class="form-group col-md-6">
                  <label>Middle Name</label>
                  <input type="text" id="inputmName" placeholder="Doe"  class="form-control border border-secondary">
                </div>

                <div class="form-group col-md-6">
                  <label>Last Name</label>
                  <input type="text" id="inputlName" name="inputlName" placeholder="Smith"  class="form-control border border-secondary required-error">
                </div>
               </div>

                <div class="form-group">
                  <label>Course</label>
                  <select id="inputCourse" name="inputCourse" class="form-control border border-secondary required-error">
                    <option></option>
                    <option>BSCS</option>
                    <option>BSIT</option>
                    <option>BSEMC</option>
                    <option>BSIS</option>
                  </select>
                </div>

                <div class="row">
                  <div class="form-group col-md-4">
                  <label>Student No.</label>
                  <input type="number" id="inputStudno" name="inputStudno" placeholder="Student No."  class="form-control border border-secondary required-error">
                </div>

                <div class="form-group col-md-4">
                  <label>Year</label>
                  <select id="inputYear" name="inputYear" class="form-control border border-secondary required-error">
                    <option></option>
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                  </select>
                </div>

                <div class="form-group col-md-4">
                  <label>Section</label>
                  <select id="inputSection" name="inputSection" class="form-control border border-secondary required-error">
                    <option></option>
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
              <button type="submit" id="btnAddStud" class="btn btn-primary">Save changes</button>
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
            <div class="card-header card-header-primary card-header-tabs">
              <h4 class="card-title">Student List</h4>
              <p class="card-category">Total Student</p>
            </div>
            <div class="card-body table-responsive">
              <table id="table-container" class="table table-hover">
                
              </table>
            </div>
            </div>
          </div>
          
        </div>
      </div>

<!-- Modal -->
<form method="post" action="stud-list.php">
<div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Update Student</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <!-- Modal body -->
            <div class="modal-body justify-content-center">
              <form>
                <div class="form-group">
                  <label>First Name</label>
                  <input type="text" id="inputfName" placeholder="John" class="form-control" required>
                </div>
                <div class="row">
                <div class="form-group col-md-6">
                  <label>Middle Name</label>
                  <input type="text" id="inputmName" placeholder="Doe"  class="form-control" required>
                </div>

                <div class="form-group col-md-6">
                  <label>Last Name</label>
                  <input type="text" id="inputlName" placeholder="Smith"  class="form-control">
                </div>
               </div>
                <div class="form-group">
                  <label>Course</label>
                  <select id="inputCourse" class="form-control" required>
                    <option selected>Choose</option>
                    <option>BSCS</option>
                    <option>BSIT</option>
                    <option>BSEMC</option>
                    <option>BSIS</option>
                  </select>
                </div>
                <div class="row">
                  <div class="form-group col-md-4">
                  <label>Student No.</label>
                  <input type="number" id="inputStudno" placeholder="Student No."  class="form-control" required>
                </div>
                <div class="form-group col-md-4">
                  <label>Year</label>
                  <select id="inputYear" class="form-control" required>
                    <option selected>Choose</option>
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                  </select>
                </div>
                <div class="form-group col-md-4">
                  <label>Section</label>
                  <select id="inputSection" class="form-control" required>
                    <option selected>Choose</option>
                    <option>A</option>
                    <option>B</option>
                    <option>C</option>
                    <option>D</option>
                  </select>
                </div>
                 
              </div>
            </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save</button>
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
<script type="text/javascript" src="assets/js/script-stud.js"></script>

</body>

</html>