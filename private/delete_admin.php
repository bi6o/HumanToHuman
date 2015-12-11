<?php include_once('../includes/session.php'); 
      include_once('../includes/db_connection.php'); 
      require_once('../includes/functions.php'); ?>

<?php 

$current_admin=find_admin_by_id($_GET['admin'] , false);
if (!$current_admin)
 {
     redirect_to('manage_admins.php');
 }

$id = $current_admin['id'];

$query = 'DELETE FROM admins where id = '.$id.' LIMIT 1';
$result = mysqli_query($connection,$query);

 if ($result && mysqli_affected_rows($connection)==1)
            {
                $_SESSION['message'] = "Page Deleted";
                redirect_to('manage_admins.php');
            }
            else
            {
                $_SESSION['message']= "Page deletion failed";
                redirect_to('manage_admins.php?admin='.$id.'');              

            }



?>