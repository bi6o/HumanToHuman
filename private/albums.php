<?php include_once('../includes/db_connection.php');?>
<?php include_once('../includes/functions.php');?>
<?php include_once('../includes/session.php');?>
<?php confirm_logged_in();?>
<?php
$query = "SELECT * FROM album";
$result = mysqli_query($connection , $query); //this is excuted in case of insert and delete and update as well
$output = "";
        //test if there is query error
       while ($row = mysqli_fetch_assoc($result)) {
    // output data of each row
        $id = $row['id'];
           $title = $row['title'];
        $content = $row['content'];
           $photo = $row['photo'];
   $output .= '<form name="submit" action="albums.php" method="post">
         
        <div class="cmsalbum col-sm-9">
                           <input type="hidden" name="id" value="'.$id.'" />
                   <span class="col-sm-3"> Title: </span><input class="col-sm-8" type="text" name="title" value="'.htmlspecialchars($title).'" /> <br/>
                    <span class="col-sm-3">Content: </span><input class="col-sm-8" type="text" name="content" value="'.htmlspecialchars($content).'" /> <br/>
                    <span class="col-sm-3">Photo: </span><input class="col-sm-8" type="text" name="photo" value="'.htmlspecialchars($photo).'" />  <br/></div>   <input class="col-sm-offset-5" type="submit" name="submit" value="Submit" />
        <a href="delete_album.php?album='.urlencode($id).'" onclick="return confirm("Are You Sure?");" >  Delete</a>
        </form>';
                    }
 $output .= '<form name="submit" action="albums.php" method="post">
         
        <div class="cmsalbum col-sm-9">
                           <h3 class="col-sm-offset-6">New Album</h3>
                   <span class="col-sm-3"> Title: </span><input class="col-sm-8" type="text" name="newtitle" value="" /> <br/>
                    <span class="col-sm-3">Content: </span><input class="col-sm-8" type="text" name="newcontent" value="" /> <br/>
                    <span class="col-sm-3">Photo: </span><input class="col-sm-8" type="text" name="newphoto" value="" />  <br/></div>   <input class="col-sm-offset-5" type="submit" name="new" value="Add" />
        
        </form>';
?>  
<?php
if (isset($_POST['submit']))
         {  
            $id = $_POST['id'];        
            $title = $_POST['title'];
            $content = $_POST['content'];
            $photo = $_POST['photo'];

            $query = "UPDATE album SET
            title = '".$title."',
            content='".$content."',
            photo='".$photo."'
            where id = ".$id."
            LIMIT 1";
            file_put_contents('test.txt',$query);
            $result = mysqli_query($connection , $query); //this is excuted in case of insert and delete and update as well
            //test if there is query error
            if ($result && mysqli_affected_rows($connection)>=0)
            {
                $_SESSION['message'] = "Album Edited";
                 $_SESSION['message'];
               redirect_to('manage_content.php');
            }
            else
            {
                $_SESSION['message']= "Album edit failed";
            }


        }

?>
<?php
if (isset($_POST['new']))
         {  
               
            $newtitle = mysql_prep($_POST['newtitle']);
            $newcontent = mysql_prep($_POST['newcontent']);
            $newphoto = mysql_prep($_POST['newphoto']);

            $query = "INSERT INTO album (`title`,`content`,`photo`) values ('".$newtitle."','".$newcontent."','".$newphoto."')";
            file_put_contents('test.txt',$query);
            $result = mysqli_query($connection , $query); //this is excuted in case of insert and delete and update as well
            //test if there is query error
            if ($result && mysqli_affected_rows($connection)>=0)
            {
                $_SESSION['message'] = "Album Created";
                 
               redirect_to('manage_content.php');
            }
            else
            {
                $_SESSION['message']= "New Album failed";
            }


        }

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
    
    <div class="container1">
        <div class="fluid">
    <div class="trans">
    <div class="header">
        <img src="../includes/uploads/logo.png" style="position: absolute;right: 18px;  width: 95px;" />
        <div class="headertitle">
        <h1 class="col-sm-offset-3"> HUMAN TO HUMAN</h1>
        <h1 class="col-sm-offset-4" style="margin-left: 31.33333333%;"> <?php echo ucfirst(htmlentities($_SESSION['username']))?></h1>
        </div>
        <div class="col-sm-3">
        <?php include_once('cmsmenu.php'); ?>
           </div>
        <div class="col-sm-9 infocontainer">
       <?= $output?>
            </div>
            </div>
    
    </div>