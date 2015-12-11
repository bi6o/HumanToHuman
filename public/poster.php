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
    
</style>
<header>
    <script src="../includes/bxslider/js/jquery.bxslider.js"></script>
    <script type="text/javascript" src="../includes/bootstrap.js"></script>

</header>

<?php
if (!isset($_POST['submit']))
{
    $query = "SELECT * FROM posters";
    $result = mysqli_query($connection , $query); //this is excuted in case of insert and delete and update as well
            //test if there is query error
           if (mysqli_num_rows($result) > 0) {
        // output data of each row
      $row = mysqli_fetch_assoc($result);
           $title = $row['title'];
            $description =  $row['description'];
            $photoName = $row['name'];
               
    }
}
?>

<div class="row main-container hideme main-skin  skin-yellow">

    <ul class="bxslider">
        <li><img src="../includes/uploads/album/1.jpg" /></li>
        <li><img src="../includes/uploads/album/2.jpg" /></li>
        <li><img src="../includes/uploads/album/3.jpg" /></li>
    </ul>

</div>

<div class="poster-desc hideme col-sm-6 col-sm-offset-3">
    Desc Here </div>

</div>

<script>
    $(document).ready(function() {
       var slider =  $('.bxslider').bxSlider({
            mode: 'fade',
            infiniteLoop: true,
            Controls: true,
            slideHeight: 400,
            slideWidth: 600
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