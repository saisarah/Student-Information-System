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
  </ul>
</div>



<div class="content">
  <div class="content-container">
    <nav class="navbar navbar-light bg-light  justify-content-between">
      <a class="navbar-brand">Student</a>
      <form class="form-inline">
      <input type="text" id="myInput" class="form-control mr-sm-2" onkeyup="myFunction()" placeholder="Search for name..">
      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
          Add Subject
        </button>
    </form>
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
              <table id="myTable" class="table table-hover">
                <thead class="text-warning">
                  <th>ID</th>
                  <th>Name</th>
                  <th>Course</th>
                  <th>Year</th>
                  <th>Section</th>
                  <th>Status</th>
                  <th>Student No.</th>
                  <th>Password</th>
                  <th>Account Status</th>
                  <th scope="col">Actions</th>
                </thead>
                <tbody>
                  <tr>
                    <td>1</td>
                    <td>Sarah Grace Arlyn Oben</td>
                    <td>BSCS</td>
                    <td>3rd</td>
                    <td>C</td>
                    <td>Regular</td>
                    <td>20191940</td>
                    <td>*******</td>
                    <td>Active</td>
                    <td>
                      <button type="button" class="btn btn-success"><i class="fas fa-edit"></i></button>
                      <button type="button" class="btn btn-danger"><i class="far fa-trash-alt"></i></button>
                    </td>
                  </tr>
                   <tr>
                    <td>2</td>
                    <td>Juan Paolo Ortega</td>
                    <td>BSCS</td>
                    <td>3rd</td>
                    <td>C</td>
                    <td>Regular</td>
                    <td>20192216</td>
                    <td>*******</td>
                    <td>Active</td>
                    <td>
                      <button type="button" class="btn btn-success"><i class="fas fa-edit"></i></button>
                      <button type="button" class="btn btn-danger"><i class="far fa-trash-alt"></i></button>
                    </td>
                  </tr>
                  <tr>
                    <td>3</td>
                    <td>Justine Podiotan</td>
                    <td>BSCS</td>
                    <td>3rd</td>
                    <td>C</td>
                    <td>Regular</td>
                    <td>20191992</td>
                    <td>*******</td>
                    <td>Active</td>
                    <td>
                      <button type="button" class="btn btn-success"><i class="fas fa-edit"></i></button>
                      <button type="button" class="btn btn-danger"><i class="far fa-trash-alt"></i></button>
                    </td>
                    </tr>
                  <tr>
                    <td>4</td>
                    <td>Jessica Joy Gapusan</td>
                    <td>BSCS</td>
                    <td>3rd</td>
                    <td>C</td>
                    <td>Regular</td>
                    <td>20192091</td>
                    <td>*******</td>
                    <td>Active</td>
                    <td>
                      <button type="button" class="btn btn-success"><i class="fas fa-edit"></i></button>
                      <button type="button" class="btn btn-danger"><i class="far fa-trash-alt"></i></button>
                    </td>
                  </tr>
                  <tr>
                    <td>5</td>
                    <td>Jennylyn Riego</td>
                    <td>BSCS</td>
                    <td>3rd</td>
                    <td>C</td>
                    <td>Regular</td>
                    <td>20192128</td>
                    <td>*******</td>
                    <td>Active</td>
                    <td>
                      <button type="button" class="btn btn-success"><i class="fas fa-edit"></i></button>
                      <button type="button" class="btn btn-danger"><i class="far fa-trash-alt"></i></button>
                    </td>
                  </tr>
                  <tr>
                    <td>6</td>
                    <td>Maryjoy Lacopanto</td>
                    <td>BSCS</td>
                    <td>3rd</td>
                    <td>C</td>
                    <td>Regular</td>
                    <td>20192127</td>
                    <td>*******</td>
                    <td>Active</td>
                    <td>
                      <button type="button" class="btn btn-success"><i class="fas fa-edit"></i></button>
                      <button type="button" class="btn btn-danger"><i class="far fa-trash-alt"></i></button>
                    </td>
                  </tr>
                  <tr>
                    <td>7</td>
                    <td>Jomer Delgado</td>
                    <td>BSCS</td>
                    <td>3rd</td>
                    <td>C</td>
                    <td>Regular</td>
                    <td>20192161</td>
                    <td>*******</td>
                    <td>Active</td>
                    <td>
                      <button type="button" class="btn btn-success"><i class="fas fa-edit"></i></button>
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
            

</body>

</html>