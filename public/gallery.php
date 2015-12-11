<style>
.footer
    {
          top: 1930px;
    }
</style>
<?php
$query = "SELECT * FROM album";
$result = mysqli_query($connection , $query); //this is excuted in case of insert and delete and update as well
        //test if there is query error
$output = "<div class='photosMain row'><ul class='gallery'>";
$counter =0;
       while ($row = mysqli_fetch_assoc($result)) {
    // output data of each row
           $counter++;
            $output .= "<li class='photoContainer'><img class='insideImg' src='../includes/uploads/album/".$row['photo'].".jpg' /><h4>".$row['title']."</h4><span>".$row['content']."</span></li>";
                    /*$row = mysqli_fetch_assoc($result);
                    $title = $row['title'];
                    $content =  $row['content'];
                    $photo =  $row['photo'];*/
           echo $counter % 3;
             if ($counter != 0 && $counter % 3 ==0  )
              {    
                         

                    $output .= "</ul></div><div class='photosMain row'> <ul class='gallery'>";
               }
           
                
        }
        $output .= '</ul>'; 

        echo $output;
?>   

            </div>
            </div>
       
        
    
    </div>
