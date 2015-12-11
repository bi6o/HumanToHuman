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
</style>
<head>
    <link rel="stylesheet" type="text/css" href="../includes/style7.css" />
    <link rel="stylesheet" type="text/css" href="../includes/style2.css" />
</head>

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
<?php
//$query = "SELECT * FROM videos";
//$result = mysqli_query($connection , $query); //this is excuted in case of insert and delete and update as well
//        //test if there is query error
//$allVideos = "<div class='row'>";
//$counter = 0;
//while ($row = mysqli_fetch_assoc($result)) {
//    $counter++;
//    $director = $row['director'];
//    $cameraman = $row['cameraman'];
//    $music = $row['music'];
//    $editor = $row['editor'];
//    $name = $row['name'];
//     $link = $row['link'];
//
//       if ($row)
//       {
//            $allVideos .= "<div class='hideme2 video-frame col-sm-3'><div class='circular'>";
//           $allVideos .= videoGallery($link);
//           $allVideos .= "</div><a class='clickToGo' href='videoViewPage.php'></a></div>";
//           if ($counter != 0 && ($counter % 2 ==0 ) )
//           {
//
//                $allVideos .= "</div> <div class='row'>";
//           }
//       }
//
//    }
//    $allVideos .= "</div>";
    
?>   


<div class="main-container">
    <div class="row">
        <section class="main col-md-offset-1 col-md-10 move-left ">

            <ul class="ch-grid hideme4 col-md-12">
            <a href="videoViewPage.php">
                <li class="col-md-3">
                    <div class="ch-item ch-img-1">
                        <div class="ch-info">
                            <h3>Mohamad Bitar</h3>
                            <p>Web Developer<a href="photographySlider.php"></a></p>
                        </div>
                    </div>
                </li>
            </a>
                <li class="col-md-3">
                    <div class="ch-item ch-img-2">
                        <div class="ch-info">
                            <h3>Maher Khedder</h3>
                            <p>Graphic Designer<a href="photographySlider.php">View it</a></p>
                        </div>
                    </div>
                </li>
   
            </ul>

        </section>

    </div>
</div>