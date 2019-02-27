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
    <table> <?php
        foreach ($users as $value) : ?>
            <tr>
                <th>
                    <?= $value -> getInfo()->getFirstName() ?>
                </th>

            </tr>

        <?php endforeach ?>
    </table>



</div>


    <!-- end -->
<?php
include __DIR__ . "/../shared/end.html.php";
?>


