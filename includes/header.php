<?php
    $companyName = "Franklin's Fine Dining";
    include('includes/arrays.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo TITLE;?></title>
    <link href="styles.css" rel="stylesheet">
</head>
<body id="final-example">
    <div class="wrapper"><!-- wrapper -->
        <div class="banner"><!-- banner -->
            <a href="/" title="Return to Home">
                <img src="img/banner.png">
            </a>
        </div>
        <div id="nav">
            
            <?php include('includes/nav.php'); ?>
            
        </div><!-- endnav -->
        <div class="content">