<?php include 'view/header.php'; ?>

<div class="main" style="margin: 2.5%">
    <br>
    <?php include 'includes/messages.inc.php'; ?>
    <form action="authentication/register.script.php" method="POST">
        <div class="field">
            <label class="label">Full Name</label>
            <div class="control">
                <input class="input" type="text" placeholder="Full Name" id="fullName" name="fullName" required>
            </div>
        </div>

        <div class="field">
            <label class="label">Partner Name</label>
            <div class="control">
                <input class="input" type="text" placeholder="Partner Name" id="partnerName" name="partnerName" required>
            </div>
        </div>

        <div class="field">
            <label class="label">E-Mail</label>
            <div class="control">
                <input class="input" type="email" placeholder="E-Mail" id="email" name="email" required>
            </div>
        </div>

        <div class="field">
            <label class="label">Username</label>
            <div class="control">
                <input class="input" type="text" placeholder="Username" id="username" name="username" required>
            </div>
        </div>

        <div class="field">
            <label class="label">Password</label>
            <div class="control">
                <input class="input" type="password" placeholder="Password" id="password" name="password" required>
            </div>
        </div>

        <div class="field">
            <button class="button is-dark" type="submit">Register</button>
        </div>

    </form>



</div>

<?php include 'view/footer.php'; ?>