
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome Admin</title>
    <link rel="stylesheet" href="assets/css/login.css">
    <link rel="stylesheet" href="assets/bootstrap-4/css/bootstrap.min.css">

    <script src="https://kit.fontawesome.com/b1b0cba1bb.js" crossorigin="anonymous"></script> 
  </head>
  <body>

    <div class="container">
      <div class="wrapper consas" id="consas1" style="width: 400px; margin-left: 35%;">
        <div class="title"><span>Admin Login</span>
        </div>
        <form class="form" action="modules/admin-login.php" method="post">
          <div class="row">
            <i class="fa fa-user"></i>
            <input type="text" placeholder="Username" name="username" required>
          </div>
          <div class="row">
            <i class="fa fa-lock"></i>
            <input type="password" placeholder="Password" id="password" name="password" required>
          </div>
          <div class="form-group form-check">
            <input type="checkbox" class="form-check-input" id="checkShow">
            <label class="form-check-label" for="checkShow">Show password</label>
          </div>
          <div class="row button">
            <input type="submit" id="btnlogin" name="login_btn"></a>
          <?php 
                        if(@$_GET['Empty']==true)
                        {
                    ?>
                        <div class="alert-danger alert-custom text-center"style="margin-top:5px; margin-left: 10px; width: 95%;"><?php echo $_GET['Empty'] ?></div>                                
                    <?php
                        }
                    ?>


                    <?php 
                        if(@$_GET['Invalid']==true)
                        {
                    ?>  
                        <div class="alert-danger alert-custom text-center"style="margin-top:5px; margin-left: 10px; width: 95%;"><?php echo $_GET['Invalid'] ?></div>                                
                    <?php
                        }
                    ?>
          </div>
          
        </form>
      </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="assets/js/script.js"></script>

  </body>
</html>
