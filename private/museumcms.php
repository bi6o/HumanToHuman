<?php include_once('../includes/db_connection.php');?>
<?php include_once('../includes/functions.php');?>
<?php include_once('../includes/session.php');?>
<?php confirm_logged_in();?>
<!-- Place inside the <head> of your HTML -->
<script type="text/javascript" src="../includes/tinymce/js/tinymce/tinymce.js"></script>
<script type="text/javascript">
tinymce.init({
    selector: "textarea",
      theme_advanced_fonts : "Andale Mono=andale mono,times;"+
                "Arial=arial,helvetica,sans-serif;"+
                "Arial Black=arial black,avant garde;"+
                "Book Antiqua=book antiqua,palatino;"+
                "Comic Sans MS=comic sans ms,sans-serif;"+
                "Courier New=courier new,courier;"+
                "Georgia=georgia,palatino;"+
                "Helvetica=helvetica;"+
                "Impact=impact,chicago;"+
                "Symbol=symbol;"+
                "Tahoma=tahoma,arial,helvetica,sans-serif;"+
                "Terminal=terminal,monaco;"+
                "Times New Roman=times new roman,times;"+
                "Trebuchet MS=trebuchet ms,geneva;"+
                "Verdana=verdana,geneva;"+
                "Webdings=webdings;"+
                "Wingdings=wingdings,zapf dingbats"
    
 });
</script>
<style>
    .mce-tinymce
    {
            left: 148px;
            margin-top: 25px !important;
            width: 66% !important;
    }

</style>
<?php
$query = "SELECT * FROM museum";
$result = mysqli_query($connection , $query); //this is excuted in case of insert and delete and update as well
$output = "";
        //test if there is query error
       while ($row = mysqli_fetch_assoc($result)) {
    // output data of each row
        $id = $row['id'];
           $title = $row['title'];
        $content = $row['content'];
           $caption = $row['caption'];
           $photo = $row['photo'];
   $output .= '<form name="submit" action="museumcms.php" method="post">
         
        <div class="cmsalbum col-sm-9">
                           <input type="hidden" name="id" value="'.$id.'" />
                   <span class="col-sm-3"> Title: </span><input class="col-sm-8" type="text" name="title" value="'.htmlspecialchars($title).'" /> <br/>
                    <span class="col-sm-3">Content: </span><textarea class="col-sm-6" type="text" name="content" value="'.htmlspecialchars($content).'" /> </textarea><br/>
                    <span class="col-sm-3">Caption: </span><input class="col-sm-8" type="text" name="caption" value="'.htmlspecialchars($caption).'" /> <br/>
                    <span class="col-sm-3">Photo: </span><input class="col-sm-8" type="text" name="photo" value="'.htmlspecialchars($photo).'" />  <br/></div>   <input class="col-sm-offset-5" type="submit" name="submit" value="Submit" />
        <a href="delete_museum.php?museum='.urlencode($id).'" onclick="return confirm("Are You Sure?");" >  Delete</a>
        </form>';
                    }

 $output .= '<form name="new" action="museumcms.php" method="post">
         
        <div class="cmsalbum col-sm-9">
        <h3 class="col-sm-offset-5">New Museum item</h3>
                           
                   <span class="col-sm-3"> Title: </span><input class="col-sm-8" type="text" name="newtitle" value="" /> <br/>
                   <div class="rp row"> <span class="col-sm-3">Content: </span><textarea class="col-sm-6" type="text" name="newcontent" value="" > </textarea></div> <br/>
                    <span class="col-sm-3">Caption: </span><input class="col-sm-8" type="text" name="newcaption" value="" /> <br/>
                    <span class="col-sm-3">Photo: </span><input class="col-sm-8" type="text" name="newphoto" value="" />  <br/></div>   <input class="col-sm-offset-5" type="submit" name="new" value="Add" />
        
        </form>';

?>  
<?php
if (isset($_POST['submit']))
         {  
            $id = $_POST['id'];        
            $title = $_POST['title'];
            $content = $_POST['content'];
            $caption = $_POST['caption'];
            $photo = $_POST['photo'];

            $query = "UPDATE museum SET
            title = '".$title."',
            content='".$content."',
            caption = '".$caption."',
            photo='".$photo."'
            where id = ".$id."
            LIMIT 1";
            file_put_contents('test.txt',$query);
            $result = mysqli_query($connection , $query); //this is excuted in case of insert and delete and update as well
            //test if there is query error
            if ($result && mysqli_affected_rows($connection)>=0)
            {
                $_SESSION['message'] = "item Edited";
                 $_SESSION['message'];
               redirect_to('manage_content.php');
            }
            else
            {
                $_SESSION['message']= "item edit failed";
            }


        }

?>
<?php
if (isset($_POST['new']))
         {  
               
            $newtitle = mysql_prep($_POST['newtitle']);
            $newcontent = mysql_prep($_POST['newcontent']);
            $newcaption = mysql_prep($_POST['newcaption']);
            $newphoto = mysql_prep($_POST['newphoto']);

            $query = "INSERT INTO museum (`title`,`content`,`photo`,`caption`) values ('".$newtitle."','".$newcontent."','".$newphoto."','".$newcaption."')";
            file_put_contents('test.txt',$query);
            $result = mysqli_query($connection , $query); //this is excuted in case of insert and delete and update as well
            //test if there is query error
            if ($result && mysqli_affected_rows($connection)>=0)
            {
                $_SESSION['message'] = "Museum item Created";
                 
               redirect_to('manage_content.php');
            }
            else
            {
                $_SESSION['message']= "New item failed";
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