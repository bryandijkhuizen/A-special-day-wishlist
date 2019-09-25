<?php

include '../db/dbh.inc.php';

$secret_key = $_POST['secret_key'];

$stmt = $conn->prepare("SELECT * FROM user_table WHERE secret_key='$secret_key'");
$stmt->bind_param("s", $_POST['secret_key']);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        session_start();
        $_SESSION['secret_key'] = $row['secret_key'];
        $_SESSION['user_id'] = $row['id'];
        $_SESSION['full_name'] = $row['FullName'];
        header("Location: ../index.php?loggedin");
    }
} else {
    header("Location: ../guest_login.form.php?failed");
}
