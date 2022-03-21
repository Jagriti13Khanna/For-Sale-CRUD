<?php

session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $page_title ?></title>
    <link rel="stylesheet" href="<?php echo BASE_URL;?>css/reset.css">
    <link rel="stylesheet" href="<?php echo BASE_URL;?>css/styles.css">
</head>
<body>
    <header>
        <h1>Sale Ads</h1>
    </header>    
    <nav>
        <ul>
            <li><a href="<?php echo BASE_URL;?>index.php">Home</a></li>

            <?php if ($_SESSION['user_id']): ?>
                <li><a href="<?php echo BASE_URL;?>myads.php">My Ads</a></li> 
                <li><a href="<?php echo BASE_URL;?>changepassword.php">Change Password</a></li>  
                <li><a href="<?php echo BASE_URL;?>logout.php">Logout</a></li>                 
            <?php else: ?>
                <li><a href="<?php echo BASE_URL;?>register.php">Register</a></li>
            <?php endif ?>

        </ul>
    </nav>
