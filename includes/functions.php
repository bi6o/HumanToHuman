<?php
function confirm_query($result_set)
{
        if (!$result_set)
        {
            die("Database query failed");
        }
}
function find_all_admins()
{
            global $connection;
            $query = "SELECT * ";
            $query .= "FROM admins ";
           //$query .= "WHERE visible = 1 ";
            $query .= "order by id ASC";
            $admin_set = mysqli_query($connection , $query); 
            confirm_query($admin_set);
            return $admin_set;
}

function navigation($subject_array,$page_array)
{
    $output= '<ul class="subjects">';
             $subject_set = find_all_subjects(); 
            
                while($subject= mysqli_fetch_assoc($subject_set))
                {
                    $output.= "<li ";
                    if ($subject_array && $subject_array['id'] == $subject['id'])
                    {
                        $output.= "class='selected' ";
                    }
                    $output.= "> ";
                    $output.= "<a href='manage_content.php?subject=".urlencode($subject['id'])."'> ".  htmlentities($subject['menu_name']) . "</a>" ;
                    $pages_set = find_pages_for_subject($subject['id']);
                    $output.= "<ul class='pages'>";
                     while($page= mysqli_fetch_assoc($pages_set))
                    {
                        $output.= "<li ";
                        if ($page_array && $page_array['id'] == $page['id'])
                        {
                            $output.= "class='selected'";
                        }
                        $output.= "> ";
                        $output.= "<a href='manage_content.php?page=".urlencode($page['id'])."'> ".  htmlentities($page['menu_name'])." </a></li> ";
                    }
                    
                    
                    
                    $output.= "</ul>
                    </li>";    
                }
                
           
             mysqli_free_result($subject_set); 
             mysqli_free_result($pages_set); 
         $output.='</ul>';
    return $output;
}
function find_admin_by_id($id)
{
            //very important to escape the variable
            global $connection;
            $escaped_id = mysqli_real_escape_string($connection,$id);
            $query = "SELECT * ";
            $query .= "FROM admins ";
            $query .= "WHERE id = ".$escaped_id." " ;
            $query .= "LIMIT 1";
            $admin_set = mysqli_query($connection , $query); 
            confirm_query($admin_set);
            if ($admin = mysqli_fetch_assoc($admin_set))
            {
                return $admin;
            }
            else
            {
                return null;
            }
}
function find_by_id($id , $table)
{
            //very important to escape the variable
            global $connection;
            $escaped_id = mysqli_real_escape_string($connection,$id);
            $query = "SELECT * ";
            $query .= "FROM ";
            $query .= $table ;
            $query .= " WHERE id = ".$escaped_id." " ;
            $query .= "LIMIT 1";
            $item_set = mysqli_query($connection , $query); 
            confirm_query($item_set);
            if ($item = mysqli_fetch_assoc($item_set))
            {
                return $item;
            }
            else
            {
                return null;
            }
}
function find_page_by_id($id)
{
            //very important to escape the variable
            global $connection;
            $escaped_id = mysqli_real_escape_string($connection,$id);
            $query = "SELECT * ";
            $query .= "FROM pages ";
            $query .= "WHERE id = ".$escaped_id." " ;
            $query .= "LIMIT 1";
            $page_set = mysqli_query($connection , $query); 
            confirm_query($page_set);
            if ($page = mysqli_fetch_assoc($page_set))
            {
                return $page;
            }
            else
            {
                return null;
            }
}
function find_selected_page()
{
    global $current_subject;
    global $current_page;
    if (isset($_GET['subject']))
    {
        $current_subject = find_subject_by_id($_GET['subject']); 
        $current_page=null;
    }
    else if (isset($_GET['page']))    
    {
        $current_page = find_page_by_id( $_GET['page']); 

        $current_subject=null;
    }else
    {
        $current_subject=null;
        $current_page=null;
    }
}

function find_selected_page_edit()
{
    global $current_subject;
    global $current_page;
    
     if (isset($_GET['page']))    
    {
        $current_page = find_page_by_id( $_GET['page']); 

        $current_subject=null;
    }else
    {
        $current_subject=null;
        $current_page=null;
    }
}
function redirect_to($new_location)
{
    header("Location: " . $new_location);
    exit;
}
function mysql_prep($string)
{
    global $connection;
    
    $escaped_string = mysqli_real_escape_string($connection,$string);
    return $escaped_string;
}
function form_errors($errors=array())
        {
            $output="";
        if (!empty($errors))
            {
             $output.= '<div class="error">
             Please fix the following errors:
             <ul>';
             foreach ($errors as $key =>$error)
             {
             $output.= '<li>'.htmlentities($error).'</li>';
             }
            $output.= '</ul></div>';
                
            }
            return $output;
        }
function password_encrypt($password)
{
 
        $hash_format = "$2y$10$";  //this tells PHP that we are using Blowfish, 2y=Blowfish, 10=cost diameter. meaning, how many times to run the algorithm; the more you run it the slower it is; 10 is good
        $salt_length = 22;
        $salt = generate_salt($salt_length); //Salt uses strings that have 22 characters or more exclusively 
        $format_and_salt = $hash_format . $salt;
        $hash  = crypt($password , $format_and_salt);
        
        return $hash;

}
function generate_salt($length)
    {
 
        $unique_random_string = md5(uniqid(mt_rand(), true));
        //valid characters for a salt are [a-zA-Z0-9./]
        $base64_string = base64_encode($unique_random_string);
        //But not + which is valid in base64encoding
        $modified_base64_string = str_replace('+','.',$base64_string);  
        //make string in the right length
        $salt = substr($modified_base64_string,0,$length);
        return $salt;
    }
function password_check($password , $existing_hash)
    {
        $hash = crypt($password,$existing_hash);
        if ($hash === $existing_hash)
        {
            return true;
        }
        else
        {
            return false; 
        }
    }
function attempt_login($username,$password)
{
    $admin = find_admin_by_username($username);
    if ($admin)
    {
        //admin found,check password
        if (password_check($password , $admin['password']))
            {
                //password matches
                return $admin;
            }
        else
            {
                return false;
            }
    }
    else
    {
        ///return false, admin not found
        return false;
    }
}
function find_admin_by_username($username)
{
            //very important to escape the variable
            global $connection;
            $escaped_username = mysqli_real_escape_string($connection,$username);
            $query = "SELECT * ";
            $query .= "FROM admins ";
            $query .= "WHERE username = '".$escaped_username."' " ;
            $query .= "LIMIT 1";
            $admin_set = mysqli_query($connection , $query); 
            confirm_query($admin_set);
            if ($admin = mysqli_fetch_assoc($admin_set))
            {
                return $admin;
            }
            else
            {
                return null;
            }
}
function logged_in()
{
    return isset($_SESSION['admin_id']);
    
}
function confirm_logged_in()
{
if (!logged_in())
    {
        redirect_to("admin-login.php");
    }
}
function convertYoutube($link,$main = 0) {
    $dimensions = "class='videoGallery'";
    if ($main ==1)
    {
    $dimensions = 'width="700" height="400" class="mainDisplayVid"';
    }
    return preg_replace(
        "/\s*[a-zA-Z\/\/:\.]*youtu(be.com\/watch\?v=|.be\/)([a-zA-Z0-9\-_]+)([a-zA-Z0-9\/\*\-\_\?\&\;\%\=\.]*)/i",
        "<iframe {$dimensions} frameborder='0' src=\"//www.youtube.com/embed/$2?modestbranding=1&autohide=1&showinfo=0&controls=0\" allowfullscreen></iframe>",
        $link
    );
}
function videoGallery($link , $main = 0)
{
    $embedlink = convertYoutube($link,$main);
  
return $embedlink;
}
?>