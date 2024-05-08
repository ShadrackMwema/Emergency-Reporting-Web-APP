<?php require ('includes/common.php');?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Signup|ERS</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/main.css" />
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
</head>

<body>
<div class="page-wrapper">
    <!-- header -->
    <header class="header">
        <nav class="navbar">
            <?php require 'includes/header.php'; ?>
        </nav>
   
    

<?php 


if(isset($_POST['submit']))
{
    $user_id = $_SESSION['id'];
    $title = $_POST['title'];
    $description = $_POST['description'];
    $timex = date("Y-m-d H:i:s"); // Correct date format for MySQL DATETIME field
    $loc_x = (isset($_GET['lat'])) ? $_GET['lat'] : '';
    $loc_y = (isset($_GET['long'])) ? $_GET['long'] : '';
    $status = 'Open';

    // Prepare and execute SQL statement
    $query = "INSERT INTO complaints (user_id, title, description, location_x, location_y, timex, status) VALUES (?, ?, ?, ?, ?, ?, ?)";
    $stmt = mysqli_prepare($mysqlConnection, $query);
    mysqli_stmt_bind_param($stmt, 'issssss', $user_id, $title, $description, $loc_x, $loc_y, $timex, $status);
    mysqli_stmt_execute($stmt);
}

?>

<div class="container" style="font-family: Arial, sans-serif;">
    <h2 style="text-align: center; color: #075e54;">Report Complaint by Message</h2>
    <br>
    <div style="background-color: #075e50; padding: 10px; border-radius: 10px;">
        <div class="message">
            <div class="sender">You</div>
            <div class="text">
                <form action="" method="post">
                    <div class="form-group">
                        <label for="title">Complain Title</label>
                        <input type="text" class="form-control" id="title" placeholder="Enter title" name="title" required>
                    </div>
                    <div class="form-group">
                        <label for="description">Complain Details</label>
                        <textarea class="form-control" name="description" id="description" placeholder="Enter details" rows="3" required></textarea>
                    </div>
                    <br>
                    <div style="text-align: right;"> <!-- Added this div for alignment -->
                        <button type="submit" name="submit" class="btn"><i class="fa fa-paper-plane fa-3x" style="color: #fff;"></i></button>
                    </div>
              </form>
            </div>
        </div>
    </div>
    <br><br><br><br><br><br><br>
</div>


<footer>
    <?php include('includes/footer.php'); ?>
</footer>

</body>
</html>
