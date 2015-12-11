<?php include_once('../includes/functions.php');?>
<?php include_once('../includes/db_connection.php');?>
<?php include_once('../includes/session.php');?>
<?php confirm_logged_in();?>
<!DOCTYPE html>

<html>
<head>
<title>Human to Human</title>
<link rel="stylesheet" href="../includes/style.css">
<link rel="stylesheet" href="../includes/bootstrap.css">
<script type="text/javascript" src="../includes/bootstrap.js"></script>
<script src="../includes/jquery.min.js"></script>
    <script src="../includes/jquery.min.js"></script>
    <script src="../includes/jquery-1.10.2.js"></script>
    <script src="../includes/jquery-ui.css"></script>
    
<script src="../includes/bxslider/jquery.bxslider.min.js"></script>
<!-- bxSlider CSS file -->
<link href="../includes/bxslider/jquery.bxslider.css" rel="stylesheet" />
    
    
</head>
<body>
    
    <div class="container1">
        <div class="fluid">
    <div class="trans">
    <div class="header">
        <img src="../includes/uploads/logo.png" style="position: absolute;right: 18px;  width: 95px;" />
        <div class="headertitle">
        <h1 class="text-center"> HUMAN TO HUMAN</h1>
        <h1 class="text-center"> <?php echo ucfirst(htmlentities($_SESSION['username']))?></h1>
        </div>
        
      <?php include_once('cmsmenu.php'); ?>
        
            </div>
        
    </div>