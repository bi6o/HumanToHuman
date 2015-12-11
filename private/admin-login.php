<?php include_once('../includes/functions.php');?>
<?php include_once('../includes/session.php');?>
<?php include_once('admin-header.php');?>
<?php $layout_context = "admin"; ?>
<?php
    //another way is to detect if the submission has happened
  $username="";
        if (isset($_POST['submit'])){
            $username=$_POST['username'];
            $password=$_POST['password'];
            $found_admin = attempt_login($username,$password);
                    if ($found_admin)
                    {
                        $_SESSION['admin_id'] = $found_admin['id'];
                        $_SESSION['username'] = $found_admin['username'];
                        redirect_to('manage_content.php');
                    }
                    else
                    {
                        
                        $_SESSION['message']= "Username/Password not found";

                    }

                }
                else
                {
                }
        
            
?>
        <h1 class="text-center" > ADMIN Login</h1>
        </div>
    <div class="col-sm-6 col-sm-offset-3 loginbox" style="">
        <form name="submit" action="admin-login.php" method="post">
           <span class="col-sm-2">  Username: </span> <input class="col-sm-8 col-sm-offset-1" type="text" name="username" value="<?=htmlentities($username)?>" /> <br/>
    <span class="col-sm-2">  Password: </span> <input class="col-sm-8 col-sm-offset-1" type="password" name="password" value="" /> <br/>
    <br/>
    <input class="col-sm-offset-5" type="submit" name="submit" value="Login" />
        
        </form>
        </div>
            </div>
        
    </div>