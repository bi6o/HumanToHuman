<?php 
//5. Close db connection
if (isset($connection)){
    mysqli_close($connection);
}
?>
<div class="footer-row row">

    <span class="col-md-6 col-md-offset-4 ">
                <p class="footer col-md-8 col-md-offset-1 col-xs-offset-3">
                    HUMAN TO HUMAN &copy; <?=date('Y')?> | All Rights Reserved
                </p>
         </span>
</div>
</body>

</html>