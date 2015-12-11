<?php include('header.php')?>
<style>
.footer
    {
        top:2350px
    }
    

</style>
<?php
$query = "SELECT * FROM museum";
$result = mysqli_query($connection , $query); //this is excuted in case of insert and delete and update as well
        //test if there is query error
$highlight = "<ul class='bxslider'>";
$output = "<div class='photographyMain'><ul class='photography row'>";
$counter = 0;
while ($row = mysqli_fetch_assoc($result)) {
       $counter++;
// output data of each row
       if ($row)
       {
        $output .= "<li class='photographyContainer'><img class='insideImg' src='../includes/uploads/museum/".$row['photo'].".jpg' />                        <h4>".$row['title']."</h4><span>".$row['content']."</span></li>";
        $highlight .= "<li><img src='../includes/uploads/museum/".$row['photo'].".jpg' title = '".$row['caption']."'/></li>";
       if ($counter != 0 && ($counter % 3 ==0 ) )
       {

            $output .= "</ul> <ul class='photography row'>";
       }
       }

    }
    $output .= '</ul>'; 
    $highlight .= "</ul>";
    echo $highlight;
        echo $output;
?>   

            </div>
            </div>
       
        
    
    </div>
<script>
$(document).ready(function(){
  $('.bxslider').bxSlider({
  slideWidth: '800',
  captions: true,
      mode: 'fade',
      auto: 'true'
  });
});
</script>
<?php include('footer.php')?>