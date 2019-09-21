<?php

include '../db/dbh.inc.php';

session_start();

if (isset($_POST['item_name']) && isset($_POST['description'])) {
    $item_name = str_replace("'", "\'", ($_POST['item_name']));
    $description = str_replace("'", "\'", $_POST['description']);
    $user_id = $_SESSION['user_id'];

    $stmt = $conn->prepare("INSERT INTO item_table (title, description, bought, user_id)
            VALUES ('$item_name', '$description', 'no', '$user_id')");
    $stmt->bind_param("si", $_POST['item_name'], $_POST['description']);
    $stmt->execute();

    header("Location: ../dashboard.php?success");
} else {
    header("Location: ../dashboard.php");
}
