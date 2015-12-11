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
    
    .bodybg {
        height: 1300px;
    }
    
    .bx-wrapper img {
        margin: 0 auto;
        height: 600px;
        width: 100%;
    }
    
    .bx-wrapper .bx-prev {
        left: 10px;
    }
    
    .bx-wrapper .bx-next {
        right: 10px;
    }
    
    .bx-wrapper,
    .bx-viewport {
        height: 500px !important; //provide height of slider
    }
    
    .photo-slider {
        padding: 0;
    }
    
    .banner {
        position: relative;
        overflow: auto;
    }
    
    .banner li {
        list-style: none;
    }
    
    .banner ul li {
        float: left;
    }
     .ph
    {
       width: calc(60% + 30px);
    }

</style>

<head>
    <link rel="stylesheet" type="text/css" href="../includes/style1.css" />
</head>
<?php
if (!isset($_POST['submit']))
{
    $query = "SELECT * FROM albums where display=1";
    $result = mysqli_query($connection , $query); //this is excuted in case of insert and delete and update as well
            //test if there is query error
           if (mysqli_num_rows($result) > 0) {
        // output data of each row
      $row = mysqli_fetch_assoc($result);
           $id = $row['id'];
            $title = $row['title'];
            $album_name =  $row['album_name'];
            $desc_ar =  $row['album_desc_ar'];
            $desc_en =  $row['album_desc_en'];
               
    }
}
?>

<div class="main-container hideme2 row main-skin skin-green">
        <div class="col-md-12 col-sm-12 photo-slider">

            <ul class="bxslider ">
                <li><img src="../includes/images/112.jpg" /></li>
                <li><img src="../includes/uploads/album/2.jpg" /></li>
                <li><img src="../includes/uploads/album/3.jpg" /></li>
            </ul>

        
    </div>
</div>
    <script>
        $(document).ready(function() {
          var slider =  $('.bxslider').bxSlider({
                mode: 'fade',
                infiniteLoop: true,
                Controls: true,
                slideHeight: 300
            });
       
        $(document).keydown(function(e) {
            if (e.keyCode == 39) // Right arrow 
            {
                slider.goToNextSlide();
                return false;
            } else if (e.keyCode == 37) // left arrow
            {
                slider.goToPrevSlide();
                return false;
            }
        })
         });
    </script>