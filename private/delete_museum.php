<?php include_once('../includes/session.php'); 
      include_once('../includes/db_connection.php'); 
      require_once('../includes/functions.php'); ?>

<?php 

$current_album=find_by_id($_GET['museum']  , "museum");
if (!$current_album)
 {
     redirect_to('manage_content.php');
 }

$id = $current_album['id'];

$query = 'DELETE FROM museum where id = '.$id.' LIMIT 1';
//file_put_contents('tes.txt',$query);
$result = mysqli_query($connection,$query);

 if ($result && mysqli_affected_rows($connection)==1)
            {
                $_SESSION['message'] = "museum Deleted";
                redirect_to('albums.php');
            }
            else
            {
                $_SESSION['message']= "museum deletion failed";
                redirect_to('albums.php');              

            }



?>