<!doctype html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="initial-scale=1, width=device-width"/>
    <base href="/php-initiation/public/">
    <link rel="stylesheet" type="text/css" href="node_modules/bootstrap/dist/css/bootstrap.css"/>
    <title>

        <?php  if ("Home" === $title) :  ?>

           Welcome

        <?php else: ?>

        <?= $title ?>

   <?php endif ?>

    </title>


</head>

<body>