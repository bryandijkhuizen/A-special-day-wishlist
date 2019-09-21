<?php include 'includes/functions.inc.php' ?>

<?php include 'db/dbh.inc.php'; ?>

<?php include 'view/header.php'; ?>

<div class="main" style="margin: 2.5%">

    <?php include 'includes/messages.php'; ?>

    <?php
    if (isset($_SESSION['user_id'])) {
        ?>

        <?php include 'view/table.php'; ?>

    <?php
    } else {
        ?>
        <center>
            <a class="button is-medium is-bold is-dark" href="login.form.php">Click here to login!</a>
        </center>
    <?php
    }
    ?>
</div>



<?php include 'view/footer.php'; ?>