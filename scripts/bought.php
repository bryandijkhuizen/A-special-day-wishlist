<?php


include '../db/dbh.inc.php';

if (isset($_GET['item_id'])) {
    $item_id = $_GET['item_id'];
}

$sql = "UPDATE item_table SET bought='yes' WHERE id='$item_id'";

if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
    header("Location: ../index.php?bought");
} else {
    echo "Error updating record: " . $conn->error;
}
