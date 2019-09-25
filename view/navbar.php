<nav class="navbar is-transparent">
    <div class="navbar-brand">
        <a class="navbar-item" href="index.php">
            <img src="https://bryanskijk.nl/assets/earth.svg">
        </a>
        <div class="navbar-burger burger" data-target="navbarExampleTransparentExample">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>

    <div id="navbarExampleTransparentExample" class="navbar-menu">
        <div class="navbar-start">
            <a class="navbar-item" href="index.php">
                Home
            </a>
            <?php if (isset($_SESSION['user_id'])) {
                if (!isset($_SESSION['secret_key'])) {
                    ?>
                    <a class="navbar-item" href="dashboard.php">
                        Dashboard
                    </a>
                    <a class="navbar-item" href="account.php">
                        My Account
                    </a>
                <?php } else { ?>
            <?php }
            } ?>
        </div>
        <div class="navbar-end">
            <?php if (!isset($_SESSION['user_id'])) { ?>
                <a class="navbar-item" href="login.form.php">
                    Login
                </a>
                <a class="navbar-item" href="register.form.php">
                    Register
                </a>
            <?php } else { ?>

                <a class="navbar-item" href="authentication/logout.php">
                    Logout
                </a>
            <?php } ?>

        </div>
    </div>
</nav>