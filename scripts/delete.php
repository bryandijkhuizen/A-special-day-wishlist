<?php


include '../db/dbh.inc.php';

if (isset($_GET['item_id'])) {
    $item_id = $_GET['item_id'];
}

$stmt = $conn->prepare("DELETE FROM item_table WHERE id ='$item_id'");
$stmt->bind_param("i", $_GET['item_id']);
$stmt->execute();
$stmt->close();

header("Location: ../index.php?deleted");
