<?php

include '../db/dbh.inc.php';
include '../includes/functions.inc.php';

if (isset($_POST['username']) && isset($_POST['password']) && isset($_POST['fullName']) && isset($_POST['email'])) {
    $username = str_replace("'", "\'", $_POST['username']);
    $password = str_replace("'", "\'", $_POST['password']);
    $fullname = str_replace("'", "\'", $_POST['fullName']);
    $partnername = str_replace("'", "\'", $_POST['partnerName']);
    $email = $_POST['email'];
    $hashedPassword = md5($password);
}

$stmt = $conn->prepare("SELECT * FROM user_table WHERE username='$username' OR email='$email'");
$stmt->bind_param("si", $_POST['username'], $_POST['password'], $_POST['email'], $_POST['fullname'], $_POST['partnerName']);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    header("Location: ../register.form.php?allreadyregistered");
} else {
    $secret_key = substr(md5(uniqid(rand(), true)), 0, 8);
    $stmt2 = $conn->prepare("INSERT INTO user_table (FullName, username, password, email, secret_key, partnerName) VALUES ('$fullname', '$username', '$hashedPassword', '$email', '$secret_key', '$partnername')");
    $stmt2->bind_param("sssss", $_POST['username'], $_POST['password'], $_POST['email'], $_POST['fullname'], $_POST['partnerName'], $secret_key);
    $stmt2->execute();
    $stmt2->close();
    header("Location: ../login.form.php?successR");
}
