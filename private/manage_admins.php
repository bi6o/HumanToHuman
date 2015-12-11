<?php include_once('../includes/session.php');?>
<?php include_once('../includes/db_connection.php');?>
<?php include_once('../includes/functions.php');?>
<?php include_once('admin-header.php') ?>
<?php confirm_logged_in();?>

<?php 
    global $message;
    $admins_set = find_all_admins();
    $output = "<table class='table col-sm-6'><tr><th>Username</th><th>Action</th></tr>";
    while($admin= mysqli_fetch_assoc($admins_set))
            {
                $output .= "<tr><td>".  htmlentities($admin['username'])."</td><td><a href='edit_admin.php?admin=".urlencode($admin['id'])."'>Edit  </a><a href='delete_admin.php?admin=".urlencode($admin['id'])."' onclick='return confirm('Are You Sure?');' >  Delete</a></tr> </a>";
            }
     
        $output .=  '</table>';
        $output .=  '<a href="new_admin.php?">+ Add a new admin</a><hr/>';
        
       
?>
 <div class="col-sm-3">
    <?php include_once( 'cmsmenu.php'); ?>
</div>
        <div class="adminscontainer col-sm-8 col-sm-offset-1">
            <?= $message ?>
        <?=$output ?>
            </div>
            </div>
            </div>
        
    </div>