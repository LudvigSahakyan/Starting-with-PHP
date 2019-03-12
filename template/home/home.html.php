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

    <?php
    $this->session("user")
        ? include __DIR__ . "/../login/logoutbutton.html.php"
        : include __DIR__ . "/../login/loginbutton.html.php";
    ?>
 <!-- a ameliroer avec un navbar dans le start-->

</div>



<!-- end -->
<?php
include __DIR__ . "/../shared/end.html.php";
?>






