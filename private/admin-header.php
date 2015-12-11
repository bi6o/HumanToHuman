<?php include_once('../includes/db_connection.php');?>
<?php include_once('../includes/session.php');?>
<?php include_once('../includes/functions.php');?>
<!DOCTYPE html>
<style>
body
    {
            background: url(../includes/uploads/headerbg.png) no-repeat !important;
     
    }
.text-center
    {
        margin-bottom:0px;
    }
</style>
<html>
<head>
<title>Human to Human - CMS</title>
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
    
    
        <div class="container-fluid">
    
    <div class="admin-header row">
        <img src="../includes/uploads/logo.png" style="position: absolute;right: 18px;  width: 95px;" />
        <div class="headertitle">
        <h1 class="text-center"> HUMAN TO HUMAN</h1>
            <h1 class="text-center"> <?php if (logged_in()){ echo ucfirst(htmlentities($_SESSION['username'])); } ?></h1>
        </div>
            </div>