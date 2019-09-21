<?php include 'view/header.php'; ?>

<div class="main" style="margin: 2.5%">

    <form action="authentication/login_guest_script.php" method="POST">

        <div class="field">
            <label class="label">Secret Key</label>
            <div class="control">
                <input class="input" type="text" placeholder="Secret Key" id="secret_key" name="secret_key">
            </div>
        </div>

        <div class="field">
            <button class="button is-dark" type="submit">Login</button>
        </div>

    </form>

    <br>

    <?php include 'includes/messages.php'; ?>

</div>

<?php include 'view/footer.php'; ?>