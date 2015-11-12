<?php

    require "../classes/dbtable.php";
    header ("Content-type:  application/jason");

    $table1 = dbtable::getTable();

    echo ")]}',\n"; //prevent HiJacking of data

    echo json_encode($table1);

?>