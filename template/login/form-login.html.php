

<div class="col-6">

    <?php if (array_key_exists("pdo", $error)) :
        $message = $error["pdo"];
        include __DIR__ . "/../shared/alert.html.php";
    endif ?>


    <div class="form-group">


        <label>Email address*</label>


        <?php if (array_key_exists("email", $error)) :
            $message = $error["email"];
            include __DIR__ . "/../shared/alert.html.php";
        endif ?>


        <input name="email" class="form-control"
               placeholder="Enter email"
               value="<?= filter_input(INPUT_POST, "email", FILTER_SANITIZE_FULL_SPECIAL_CHARS) ?>">
    </div>

    <div class="form-group">

        <label>Password*</label>

        <?php if (array_key_exists("password", $error)) :
            $message = $error["password"];
            include __DIR__ . "/../shared/alert.html.php";
        endif ?>


        <input name="password" class="form-control"
               placeholder="Password"
               value="<?= filter_input(INPUT_POST, "password", FILTER_SANITIZE_FULL_SPECIAL_CHARS) ?>">
    </div>