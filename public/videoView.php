<style>
    .art-sections {
        display: inline-block;
    }
    
    .art-sections,
    .container-fluid,
    .orbitlogo {
        margin-top: -280px;
    }
    
    .H2Hlogo {
        top: 270px;
        left: -3%;
    }
    
    .profilelogo {
        left: -27%;
    }
    
    .artlogo {
        top: 300px;
        left: 22%;
    }
    
    .litlogo {
        top: 300px;
        left: -51%;
    }
    .video
    {
       width: calc(60% + 30px);
    }
</style>
<?php
if (!isset($_POST['submit']))
{
    $query = "SELECT * FROM videos WHERE display=1 LIMIT 1";
    $result = mysqli_query($connection , $query); //this is excuted in case of insert and delete and update as well
            //test if there is query error
           if (mysqli_num_rows($result) > 0) {
        // output data of each row
      $row = mysqli_fetch_assoc($result);
           $vidname = $row['name'];
            $link =  $row['link'];
         $link = videoGallery($link , 1);
        $output = $link;
        $output.='<div class="videoTitle col-sm-4"><p>HUMAN TO HUMAN</p></div>';       
    }
}
?>

<div class="main-skin main-container skin-red hideme row">
    <div class="col-sm-2">
        <p class="videoInfo">
            type info here type info here type info here type info here type info here type info here type info here type info here
        </p>

    </div>
    <?php //echo '<h1 class="vidheader">'.$vidname. ' </h1>';?>
    <div class="col-sm-offset-1 col-sm-8 displayVideo" style="margin-left:7%">
        <?php echo $output;?>
    </div>
    <div class="col-sm-2"></div>
</div>