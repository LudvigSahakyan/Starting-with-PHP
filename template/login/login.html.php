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

<!--        --><?php //if (array_key_exists("success", $success)) :
//            $message = $success["success"];
//            include __DIR__ . "/../shared/alert.html.php";
//        endif ?>




        <form class="row col-12 col-md-10 offset-md-1" method="post" action="">

            <?php include __DIR__ . "/form-login.html.php"; ?>

            <!-- Login button -->
            <input type="submit" name="login" value="Log In" class="btn btn-primary"/>

        </form>

    </div>


    <!-- end -->
<?php
include __DIR__ . "/../shared/end.html.php";
?>