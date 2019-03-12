

  <?php

    include __DIR__ . "/../login/form-login.html.php";
   ?>

        <div class="form-group">

            <label>Confirm password*</label>


            <input name="confirm" class="form-control" type="password"
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

