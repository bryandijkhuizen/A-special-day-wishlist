<?php
if (isset($_GET['loggedin'])) {
    ?>
    <div class="field">
        <div class="notification is-success">
            <a class="delete" href="index.php"></a>
            Login Success
        </div>
    </div>
<?php
}
?>

<?php
if (isset($_GET['loggedout'])) {
    ?>
    <div class="field">
        <div class="notification is-warning">
            <a class="delete" href="index.php"></a>
            Sucessfully logged out!
        </div>
    </div>
<?php
}
?>


<?php
if (isset($_GET['allreadyregistered'])) {
    ?>
    <div class="field">
        <div class="notification is-warning">
            <a class="delete" href="index.php"></a>
            This Email or Username is allready registered in our database!
        </div>
    </div>
<?php
}
?>

<?php
if (isset($_GET['bought'])) {
    ?>
    <div class="field">
        <div class="notification is-success">
            <a class="delete" href="index.php"></a>
            Sucessfully bought!
        </div>
    </div>

<?php
}
?>

<?php

if (isset($_GET['failed'])) {
    ?>
    <div class="field">
        <div class="notification is-danger">
            <a class="delete" href="login.form.php"></a>
            Login Failed
        </div>
    </div>

<?php
}

?>

<?php

if (isset($_GET['success'])) {
    ?>
    <div class="field">
        <div class="notification is-success">
            <a class="delete" href="dashboard.php"></a>
            Item Added
        </div>
    </div>

<?php
}

?>

<?php

if (isset($_GET['successR'])) {
    ?>
    <div class="field">
        <div class="notification is-success">
            <a class="delete" href="login.form.php"></a>
            Sucessfully registered, you can find your unique key in your account.
        </div>
    </div>

<?php
}

?>


<?php

if (isset($_GET['not-auth'])) {
    ?>
    <div class="field">
        <div class="notification is-danger">
            <a class="delete" href="index.php"></a>
            Your are not authorised to visit that page.
        </div>
    </div>

<?php
}

?>

<?php

if (isset($_GET['deleted'])) {
    ?>
    <div class="field">
        <div class="notification is-success">
            <a class="delete" href="index.php"></a>
            Item sucessfully removed!
        </div>
    </div>

<?php
}

?>