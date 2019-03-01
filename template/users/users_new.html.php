<?php
include __DIR__ . "/../shared/start.html.php";

?>
    <!-- start -->
    <div class="container-fluid">
        <br/>
        <br/>

        <h1 class="col-12 col-md-10 offset-md-1"><?= $title ?></h1>
        <br/>
        <br/>

        <form class="row col-12 col-md-10 offset-md-1" method="post" action="">



       <?php

       include __DIR__ . "/form_new.html.php";

       ?>

        </form>

    </div>

    <!-- end -->
<?php
include __DIR__ . "/../shared/end.html.php";
?>