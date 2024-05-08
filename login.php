  <?php require 'includes/common.php';
  if(isset($_REQUEST['submit'])) {

      //  echo "123";

      $email = $_POST['e-mail'];
      
      $password = md5($_POST['password']);


      // To protect MySQL injection (more detail about MySQL injection)
      $email = stripslashes($email);
      $password = stripslashes($password);
      $sql = "SELECT * FROM users WHERE email='$email' and password='$password'";

      //exit();
      $result = $mysqlConnection->query($sql);

      // Mysql_num_row is counting table row
      $count = mysqli_num_rows($result);
      // If result matched $username and $password, table row must be 1 row
     // echo "1";
      if ($count >= 1) {
          //echo "Success! $count";
          $_SESSION['email'] = $email;
          $temp = $result->fetch_object();
          $_SESSION['name'] = $temp->name;
          $_SESSION['id'] = $temp->id;
          
          ?>
          <script>
          window.location = "reporting.php";
          </script>
          <?php
          
    } else {
          ?>
          <script>
              alert('email id or Password is incorrect');
          </script>
         <?php
      }
  }
  ?>
  <!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Login|ERS</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- font awesome -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

        <link rel = "stylesheet" href = "css/main.css" />
        
              <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
        <script src="js/jquery.js"></script>
        <script src="js/bootstrap.min.js"></script>
    </head>

    <body>
     
     
        <div class="page-wrapper">
            <!-- header -->
            <header class = "header">
                <nav class = "navbar">
                <?php require 'includes/header.php'; ?>
     
                </nav>

                <div id="content">
            <div class="container-fluid decor_bg" id="login-panel">
                <div class="row">
                    <div class="col-md-4 col-md-offset-4">
                    <div class="panel" style="border: 1px solid #337ab7; border-radius: 4px;">
    <div class="panel-heading" style="background-color: #337ab7; color: #fff; padding: 10px;">
        <h4 style="margin: 0;">LOGIN</h4>
    </div>
    <div class="panel-body" style="padding: 20px;">
        <p class="text-warning" style="margin-bottom: 20px;"><i>Login to report emergency</i></p>
        <form role="form" action="" method="POST">
            <div class="form-group">
                <input type="email" class="form-control" placeholder="Email" name="e-mail" required style="width: 100%; padding: 10px; border: 1px solid #337ab7; border-radius: 4px;">
            </div>
            <div class="form-group">
                <input type="password" class="form-control" placeholder="Password" name="password" required style="width: 100%; padding: 10px; border: 1px solid #337ab7; border-radius: 4px;">
            </div>
            <button type="submit" name="submit" class="btn btn-primary" style="width: 100%; padding: 10px; background-color: #337ab7; border: none; border-radius: 4px;">Login</button>
        </form>
        <br/>
    </div>
    <div class="panel-footer" style="padding: 10px;">
        <p style="margin: 0;color: #808080">Don't have an account? <a href="signup.php" style="color: #337ab7;">Register</a></p>
    </div>
</div>

                    </div>
                </div>
            </div>
        </div>
            </header>
            <!-- end of header -->
            <footer>
            <?php require 'includes/footer.php'; ?>
        </footer>

        </div>
        
       
    </body>
</html>