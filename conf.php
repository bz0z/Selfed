<?php
session_start();
include_once 'module.php';
include(db_con.php);

$database = new mysql(); //New Object of class mysql

$database -> connect($db);
if ($database) {echo "OK";}

?>
