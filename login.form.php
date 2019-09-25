<?php include 'view/header.php'; ?>

<div class="main" style="margin: 2.5%">

    <form action="authentication/login.script.php" method="POST">
        <div class="field">
            <label class="label">Username</label>
            <div class="control">
                <input class="input" type="text" placeholder="username" id="username" name="username">
            </div>
        </div>
        <div class="field">
            <label class="label">Password</label>
            <div class="control">
                <input class="input" type="password" placeholder="password" id="password" name="password">
            </div>
        </div>
        <div class="field">
            <button class="button is-dark" type="submit">Login</button>
        </div>

    </form>

    <br>

    <a href="guest_login.form.php">Login as guest</a>

    <br><br>

    <?php include 'includes/messages.inc.php'; ?>

</div>

<?php include 'view/footer.php'; ?>