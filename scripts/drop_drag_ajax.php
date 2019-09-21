<?php


require('../db/dbh.inc.php');


$position = $_POST['position'];


$i = 1;
foreach ($position as $k => $v) {
    $sql = "UPDATE item_table SET priority=" . $i . " WHERE id=" . $v;
    $conn->query($sql);


    $i++;
}
