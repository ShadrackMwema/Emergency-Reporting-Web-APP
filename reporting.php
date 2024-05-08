<?php require 'includes/common.php';


?>

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
   
    
        <div class="container" id="content">
       
       <a href="tel:999">
            <div class="col-md-4 col-sm-8">
                <div class="card thumbnail">
                        <img src="img/call.png" alt="Call">
                            <div class="caption">
                                <div class="col-md-12 col-sm-12" style="text-align: center;">
                                Reporting by CALL
                                </div>
                                <br>
                                
                                    
                        
                        </div>
                      
                    </div>
                </div>
                </a>
                <a href="onetap.php" onclick="alert('complaint successfully registered'); window.location='onetap.php';";
">
                <div  class="col-md-4 col-sm-8">
                <div class="card thumbnail">
                        <img src="img/onetap.png" alt="One Tap">
                            <div class="caption">
                                <div class="col-md-12 col-sm-12" style="text-align: center;">
                                    One Tap Reporting
                                </div>
                                <br>
                                
   
                        
                        </div>
                      
                    </div>
                </div>
                </a>
                <a href="message2.php">
                <div class="col-md-4 col-sm-8">
                <div class="card thumbnail">
                        <img src="img/message.png" alt="Message">
                            <div class="caption">
                                <div class="col-md-12 col-sm-12" style="text-align: center;">
                                    Reporting by Message
                                </div>
                                <br>
                                
                        
                        
                        </div>
                      
                    </div>
                </div>
                </a>
                
               
        </div>
    <!-- end of content -->
    </header>
    <!-- end of header -->
    <footer>
        <?php require 'includes/footer.php'; ?>
    </footer>
</div>
<!-- end of page wrapper -->
</body>
</html>
