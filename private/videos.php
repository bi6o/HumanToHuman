<?php include_once('../includes/db_connection.php');?>
<?php include_once('../includes/functions.php');?>
<?php include_once('../includes/session.php');?>
<?php confirm_logged_in();?>
<?php

$query = "SELECT * FROM videos";
$result = mysqli_query($connection , $query); //this is excuted in case of insert and delete and update as well
        //test if there is query error
       while ($row = mysqli_fetch_assoc($result)) {
    // output data of each row
//        $videoname = $row['name'];
//        $link = $row['link'];
//            $width = $row['width'];
//       $height= $row['height'];
        }
     
?>  
<?php
//if (isset($_POST['submit']))
// {          $videoname = $_POST['name'];
//            $link = $_POST['link'];
//
//            $query = "UPDATE videos SET
//            name = '".$videoname."',
//            link='".$link."'
//            LIMIT 1";
//            echo $query;
//            $result = mysqli_query($connection , $query); //this is excuted in case of insert and delete and update as well
//            //test if there is query error
//            if ($result && mysqli_affected_rows($connection)>=0)
//            {
//                $_SESSION['message'] = "Video Edited";
//                redirect_to('manage_content.php');
//            }
//            else
//            {
//                $_SESSION['message']= "Video edit failed";
//            }
//
//
//        }

?>
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
<?php include("admin-header.php")?>
     <div class="col-sm-3">
        <?php include_once('cmsmenu.php'); ?>
           </div>
        <div class="col-sm-9 infocontainer">
        <form name="submit" action="vlink.php" method="post">
       <span class="col-sm-3"> Video Name: </span> <input class="col-sm-7" type="text" name="name" value="<?=htmlspecialchars($videoname)?>" /> <br/>
        <span class="col-sm-3">Link: </span><input type="text" class="col-sm-7" name="link" value="<?=htmlspecialchars($link)?>" /> <br/>
        <br/>
              <span class="col-sm-3"> Width: </span> <input class="col-sm-3" type="text" name="width" value="<?=htmlspecialchars($width)?>" /> <br/><br/>
        <span class="col-sm-3">Height: </span><input type="text" class="col-sm-3" name="height" value="<?=htmlspecialchars($height)?>" /> <br/>
        <br/>
            <input class="col-sm-offset-5" type="submit" name="submit" value="Submit" />
        
        </form>
            </div>
            </div>
    
    </div>