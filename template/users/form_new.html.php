<form class="row col-12 col-md-10 offset-md-1" method="post" action="">

    <div class="col-6">
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

        <div class="form-group">

            <label>Confirm password*</label>


            <input name="confirm" class="form-control"
                   placeholder="Confirm"
                   value="<?= filter_input(INPUT_POST, "confirm", FILTER_SANITIZE_FULL_SPECIAL_CHARS) ?>">
        </div>
        <br/>

        <!-- Submit button -->
        <input type="submit" name="signin" value="Sign In" class="btn btn-primary"/>

    </div>

    <div class="col-6">

        <div class="form-group">

            <label>Fristame</label>

            <?php if (array_key_exists("firstname", $error)) :
                $message = $error["firstname"];
                $level = "warning";
                include __DIR__ . "/../shared/alert.html.php";
            endif ?>


            <input name="firstname" class="form-control" placeholder="Enter firstname"
                   value="<?= filter_input(INPUT_POST, "firstname", FILTER_SANITIZE_FULL_SPECIAL_CHARS) ?>"
            >

        </div>

        <div class="form-group">
            <label>Lastname</label>

            <?php if (array_key_exists("lastname", $error)) :
                $message = $error["lastname"];
                $level = "warning";
                include __DIR__ . "/../shared/alert.html.php";
            endif ?>

            <input name="lastname" class="form-control"
                   placeholder="Enter lastname"
                   value="<?= filter_input(INPUT_POST, "lastname", FILTER_SANITIZE_FULL_SPECIAL_CHARS) ?>">
        </div>

        <div class="form-group">
            <label>Phone</label>

            <?php if (array_key_exists("phone", $error)) :
                $message = $error["phone"];
                $level = "warning";
                include __DIR__ . "/../shared/alert.html.php";
            endif ?>


            <input name="phone" class="form-control"
                   placeholder="Enter phone number"
                   value="<?= filter_input(INPUT_POST, "phone", FILTER_SANITIZE_FULL_SPECIAL_CHARS) ?>">

        </div>
    </div>

</form>