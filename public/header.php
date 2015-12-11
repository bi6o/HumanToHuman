<?php include_once( '../includes/db_connection.php');?>
<?php include_once( '../includes/functions.php');?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <link rel="shortcut icon" type="image/x-icon" href="../includes/uploads/smallicon.png">
    <title>Human to Human</title>
    <link rel="stylesheet" href="../includes/style.css">
    <link rel="stylesheet" href="../includes/bootstrap.css">
    <link rel="stylesheet" href="../includes/bxslider/css/jquery.bxslider.css">
    <link rel="stylesheet" type="text/css" href="../includes/jquery.fullPage.css" />
    

    <script src="../includes/jquery.min.js"></script>
    <script src="../includes/jquery.min.js"></script>
    <script src="../includes/jquery-1.10.2.js"></script>
    <script src="../includes/jquery.easing.1.3.js"></script>
    <script src="../includes/jquery.easing.compatibility.js"></script>
    <script src="../includes/unslider/unslider.js"></script>
    <script src="../includes/bxslider/js/jquery.bxslider.js"></script>
    <script type="text/javascript" src="../includes/bootstrap.js"></script>
    <script type="text/javascript" src="../includes/modernizr.custom.79639.js"></script>
    <script type="text/javascript" src="../includes/site-animations.js"></script>
    <script src="jquery.min.js"></script>
    <script src="background-blur.min.js"></script>
    
</head>

<body>
    <div class="container-fluid">
        <div class="trans row">
            <div class="header">

                <?php include_once( "nav-bubbles.php"); ?>
            </div>
            <div style="position:absolute;  margin-top: -5%;margin-left: 4%;color:#eee">
                <p style="position: relative;top: 66%;font-size: 14px;text-align: center">Developed by:
                    <br/> Mohamad Bitar</p>
            </div>
            <ul class="social">

                <li><img src="../includes/uploads/google.png" /></li>
                <li><img style="width:70%" src="../includes/uploads/yt.png" /></li>
            </ul>
            <div class="section-bubbles">
                <img class="underline" src="../includes/uploads/underline.png" />
                <?php include_once( "art-sections.php"); ?>
                <?php include_once( "profile-sections.php"); ?>
                <?php include_once( "lit-sections.php"); ?>
                <img class="prev-sections flip-sections" src="../includes/previous-button.png" />
                <img class="next-sections flip-sections" src="../includes/next-button.png" />
            </div>
        </div>