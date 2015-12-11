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
    
    body {
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
    .comic
    {
       width: calc(60% + 30px);
    }
</style>
<header>
    <script src="../includes/bxslider/js/jquery.bxslider.js"></script>
    <script type="text/javascript" src="../includes/bootstrap.js"></script>
    <script type="text/javascript" src="../includes/modernizr.2.5.3.min.js"></script>
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

<div class="col-sm-6 col-sm-offset-3 main-container comics-book hideme ">

    <div class="flipbook-viewport ">
        <div class="container ">
            <div class="flipbook ">
                <div style="background-image:url(../includes/images/pages/1.jpg)"></div>
                <div style="background-image:url(../includes/images/pages/2.jpg)"></div>
                <div style="background-image:url(../includes/images/pages/3.jpg)"></div>
                <div style="background-image:url(../includes/images/pages/4.jpg)"></div>
                <div style="background-image:url(../includes/images/pages/5.jpg)"></div>
                <div style="background-image:url(../includes/images/pages/6.jpg)"></div>
                <div style="background-image:url(../includes/images/pages/7.jpg)"></div>
                <div style="background-image:url(../includes/images/pages/8.jpg)"></div>
                <div style="background-image:url(../includes/images/pages/9.jpg)"></div>
                <div style="background-image:url(../includes/images/pages/10.jpg)"></div>
                <div style="background-image:url(../includes/images/pages/11.jpg)"></div>
                <div style="background-image:url(../includes/images/pages/12.jpg)"></div>
            </div>
        </div>
    </div>


</div>
<div class="empty main-skin skin-grey row"></div>
<div class="comics-desc hideme col-sm-6 col-sm-offset-4">
  <p>  Desc Here</p></div>

</div>
<script type="text/javascript">
    function loadApp() {

        // Create the flipbook

        $('.flipbook').turn({
            // Width

            width: 922,

            // Height

            height: 600,

            // Elevation

            elevation: 50,

            // Enable gradients

            gradients: true,

            // Auto center this flipbook

            autoCenter: true

        });
    }

    // Load the HTML4 version if there's not CSS transform

    yepnope({
        test: Modernizr.csstransforms,
        yep: ['../includes/comics/turn.js'],
        nope: ['../includes/comicsturn.html4.min.js'],
        both: ['../includes/comics/basic.css'],
        complete: loadApp
    });
</script>