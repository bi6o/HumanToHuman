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
    
</style>

<head>
    <link rel="stylesheet" type="text/css" href="../includes/style7.css" />
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
<div class="main-container">

    <div class="row">
        <section class="main col-md-10 col-md-offset-1   move-left">

            <ul class="ch-grid hideme4 col-md-12">
                <li class="col-md-3">
                    <div class="ch-item ch-img-1">
                        <div class="ch-info">
                            <h3>Test 1</h3>
                            <p>Photography albums <a href="photographySlider.php">View it</a></p>
                        </div>
                    </div>
                </li>
                <li class="col-md-3">
                    <div class="ch-item ch-img-2">
                        <div class="ch-info">
                            <h3>Test 2</h3>
                            <p>Photography albums<a href="photographySlider.php">View it</a></p>
                        </div>
                    </div>
                </li>
                <li class="col-md-3">
                    <div class="ch-item ch-img-3">
                        <div class="ch-info">
                            <h3>Test 3</h3>
                            <p>Photography albums <a href="photographySlider.php">View it</a></p>
                        </div>
                    </div>
                </li>        <li class="col-md-3">
                    <div class="ch-item ch-img-1">
                        <div class="ch-info">
                            <h3>Test 1</h3>
                            <p>Photography albums <a href="photographySlider.php">View it</a></p>
                        </div>
                    </div>
                </li>
                <li class="col-md-3">
                    <div class="ch-item ch-img-2">
                        <div class="ch-info">
                            <h3>Test 2</h3>
                            <p>Photography albums<a href="photographySlider.php">View it</a></p>
                        </div>
                    </div>
                </li>
                <li class="col-md-3">
                    <div class="ch-item ch-img-3">
                        <div class="ch-info">
                            <h3>Test 3</h3>
                            <p>Photography albums <a href="photographySlider.php">View it</a></p>
                        </div>
                    </div>
                </li>        <li class="col-md-3">
                    <div class="ch-item ch-img-1">
                        <div class="ch-info">
                            <h3>Test 1</h3>
                            <p>Photography albums <a href="photographySlider.php">View it</a></p>
                        </div>
                    </div>
                </li>
                <li class="col-md-3">
                    <div class="ch-item ch-img-2">
                        <div class="ch-info">
                            <h3>Test 2</h3>
                            <p>Photography albums<a href="photographySlider.php">View it</a></p>
                        </div>
                    </div>
                </li>
                <li class="col-md-3">
                    <div class="ch-item ch-img-3">
                        <div class="ch-info">
                            <h3>Test 3</h3>
                            <p>Photography albums <a href="photographySlider.php">View it</a></p>
                        </div>
                    </div>
                </li>
            </ul>

        </section>

    </div>
</div>