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
    <ul class="list-group">
        <?php
        foreach ($users as $value) : ?>


                  <li class="list-group-item list-group-item-success"><?= $value->getEmail() ?></li>




        <?php endforeach ?>
    </ul>



</div>


    <!-- end -->
<?php
include __DIR__ . "/../shared/end.html.php";
?>


