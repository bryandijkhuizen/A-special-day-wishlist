<?php


require('../db/dbh.inc.php');

$position = $_POST['position'];

//$v staat voor het id het item
//$k is de huidige prioriteit van het item
//$i is de nieuwe prioriteit van het item.

$i = 1;
foreach ($position as $k => $v) {
    $sql = "UPDATE item_table SET priority=" . $i . " WHERE id=" . $v;
    $conn->query($sql);


    $i++;
}
