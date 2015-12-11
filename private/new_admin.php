<?php include_once('admin-header.php');?>
<?php include_once('../includes/db_connection.php');?>
<?php include_once('../includes/functions.php');?>
<?php confirm_logged_in();?>
<?php 
if (isset($_POST['submit']))
    {
    global $message;
        if (isset($_POST['newuser']) && isset($_POST['newpass']))
                  {
                      $username = mysql_prep($_POST['newuser']);
                      $password = password_encrypt($_POST['newpass']);
                      $query = "INSERT INTO admins (`username`,`password`)
VALUES ('".$username."','".$password."');";
                        $result = mysqli_query($connection , $query); //this is excuted in case of insert and delete and update as well
                        if ($result)
                        {
                             $message = "Success" ;
                            redirect_to("manage_admins.php");
                            
                        }
                      else
                      {
                            
                      }
                  }
    }


?>

<body>
<br/><br/><br/>
        <form class="col-sm-offset-3" style="margin-top:80px;position:absolute" name="submit" action="new_admin.php" method="post">
         <span style="color:#fff;" class="col-sm-4">Username:</span>    <input class="col-sm-7" type="text" name="newuser" value="" /> <br/>
            <span style="color:#fff;" class="col-sm-4">Password:</span>  <input class="col-sm-7" type="password" name="newpass" value="" /> <br/>
    <br/>
    <input class="col-sm-offset-5" type="submit" name="submit" value="+ Add new admin" />
        
        </form>
      <?php include_once('cmsmenu.php'); ?>
        
           
        
    </div>