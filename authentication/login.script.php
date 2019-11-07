<?php

include '../db/dbh.inc.php';

if (isset($_POST['username']) && isset($_POST['password'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
}

$stmt = $conn->prepare("SELECT * FROM user_table WHERE username='$username'");
$stmt->bind_param("ss", $_POST['username'], $_POST['password']);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $db_username = $row['username'];
        $db_password = $row['password'];
        $db_id = $row['id'];
        $db_full_name = $row['FullName'];
        $db_partner_name = $row['partnerName'];
    }
} else {
    header("Location: ../login.form.php?failed");
}

if (md5($password) == $db_password) {
    session_start();
    $_SESSION['user_id'] = $db_id;
    $_SESSION['username'] = $db_username;
    $_SESSION['full_name'] = $db_full_name;
    $_SESSION['partnerName'] = $db_partner_name;
    header("Location: ../index.php?loggedin");
} else {
    header("Location: ../login.form.php?failed");
}
