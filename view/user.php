<?php

$user_id = $_SESSION['user_id'];

$stmt = $conn->prepare("SELECT * FROM user_table WHERE id='$user_id'");
$stmt->execute();

$result = $stmt->get_result();
if ($result->num_rows === 0) exit('No rows');
while ($row = $result->fetch_assoc()) {
    ?>

    <div class="card">
        <header class="card-header">
            <p class="card-header-title">
                <?php echo $row['FullName']; ?>
            </p>
            <a href="#" class="card-header-icon" aria-label="more options">
                <span class="icon">
                    <i class="fas fa-angle-down" aria-hidden="true"></i>
                </span>
            </a>
        </header>
        <div class="card-content">
            <div class="content">
                Username: <?php echo $row['username']; ?>
                <br>
                E-Mail: <?php echo $row['email']; ?>
                <br>
                <br>
                <hr>
                Secret Key:
                <span class="tag is-medium is-link"><?php echo $row['secret_key']; ?></span>

            </div>
        </div>

    </div>

<?php
}
