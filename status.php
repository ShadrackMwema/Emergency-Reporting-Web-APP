<?php
require("includes/common.php");
if (!isset($_SESSION['email'])) {
    header('location: index.php');
}
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
            <?php 
             $user = $_SESSION['id']; 
             $select="SELECT * FROM  `complaints` WHERE  `user_id` =$user";
			 $result = $mysqlConnection->query($select);

			if ($result->num_rows > 0) {
    			?><table style="border-collapse: collapse; width: 100%; text-align: left;background-color: #000000;">
                <thead >
                    <tr style="background-color: #A9A9A9;">
                        <th style="padding: 8px; border: 1px solid #ddd;">Complain number</th>
                        <th style="padding: 8px; border: 1px solid #ddd;">Title</th>
                        <th style="padding: 8px; border: 1px solid #ddd;">Description</th>
                        <th style="padding: 8px; border: 1px solid #ddd;">Location_x</th>
                        <th style="padding: 8px; border: 1px solid #ddd;">Location_y</th>
                        <th style="padding: 8px; border: 1px solid #ddd;">Date and Time</th>
                        <th style="padding: 8px; border: 1px solid #ddd;">Status</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $i = 1;
                    // output data of each row
                    while ($row = $result->fetch_assoc()) { ?>
                        <tr style="background-color: #AA9A0;">
                            <td style="padding: 8px; border: 1px solid #ddd; text-align:center;"><?php echo $i++ ?></td>
                            <td style="padding: 8px; border: 1px solid #ddd;"><?php echo $row['title'] ?></td>
                            <td style="padding: 8px; border: 1px solid #ddd;"><?php echo $row['description'] ?></td>
                            <td style="padding: 8px; border: 1px solid #ddd;"><?php echo $row['location_x'] ?></td>
                            <td style="padding: 8px; border: 1px solid #ddd;"><?php echo $row['location_y'] ?></td>
                            <td style="padding: 8px; border: 1px solid #ddd;"><?php echo $row['timex'] ?></td>
                            <td style="padding: 8px; border: 1px solid #ddd;"><button style="background-color: #007bff; color: #fff; border: none; padding: 5px 10px; border-radius: 3px;"><?php echo $row['status'] ?></button></td>
                        </tr>
                        <?php
    			}
    			
			} else {
    			echo "You haven't Register compalint till now";
			}
			?></tbody></table>

            
			    
        </div>
        </div>
        <?php include("includes/footer.php"); ?>
    </body>
</html>