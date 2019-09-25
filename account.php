<?php include 'includes/functions.inc.php' ?>

<?php include 'db/dbh.inc.php'; ?>

<?php include 'view/header.php'; ?>

<?php isAuthenticated(); ?>

<div class="main" style="margin: 2.5%">

    <?php include 'includes/messages.inc.php'; ?>

    <?php $user_id = $_SESSION['user_id']; ?>

    <?php include 'view/user.php'; ?>

</div>

<?php include 'view/footer.php'; ?>