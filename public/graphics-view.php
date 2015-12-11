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
    .graphics
    {
       width: calc(60% + 30px);
    }

</style>

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
<div class="main-container main-skin skin-purple row">
    <div class="row">
        <div class="col-md-2 col-sm-10 graphics-desc desc_en hideme3">here is some text</div>
        <div class="col-md-7 col-sm-5 graphicslider">

            <ul class="bxslider graphicsinner">
                <li><img src="../includes/uploads/album/1.jpg" /></li>
                <li><img src="../includes/uploads/album/2.jpg" /></li>
                <li><img src="../includes/uploads/album/3.jpg" /></li>
            </ul>

        </div>
        <div class="col-md-2 col-sm-10 graphics-desc desc_ar hideme2" dir="rtl">هنا بعض النصوص</div>
    </div>
</div>
<script>
    $(document).ready(function() {
        var slider = $('.bxslider').bxSlider({
            mode: 'fade',
            infiniteLoop: true,
            Controls: true,
            slideWidth: 1000
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