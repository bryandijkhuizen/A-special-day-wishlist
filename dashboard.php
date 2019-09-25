<?php include 'includes/functions.inc.php' ?>

<?php include 'db/dbh.inc.php'; ?>

<?php include 'view/header.php'; ?>

<?php isAuthenticated(); ?>

<div class="main" style="margin: 2.5%">

    <?php include 'includes/messages.inc.php'; ?>

    <?php include 'view/table.php'; ?>

    <form action="scripts/add.php" method="POST">
        <div class="field">
            <label class="label">Item</label>
            <div class="control">
                <input class="input" type="text" placeholder="Item name" id="item_name" name="item_name">
            </div>
        </div>

        <div class="field">
            <label class="label">Description</label>
            <div class="control">
                <input class="input" type="text" placeholder="Item Description" id="description" name="description">
            </div>
        </div>

        <div class="field">
            <button class="button is-dark" type="submit">Submit</button>
        </div>

    </form>

    <hr>
</div>

<?php include 'view/footer.php'; ?>