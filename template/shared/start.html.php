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

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">PHPiNITIATION</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item active">
                <a class="nav-link" href="home">Home <span class="sr-only">(current)</span></a>
            </li>


            <?php if ( $this->session("user")) : ?>

            <li class="nav-item">
                <a class="nav-link" href="logout">Logout</a>
            </li>

            <?php endif ?>

            <li class="nav-item">
                <a class="nav-link" href="login">Login</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="signin">Signin</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="users">Users</a>
            </li>

        </ul>
    </div>
</nav>
</body>