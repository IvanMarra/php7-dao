<?php
require_once"config.php";
$sql = new Sql();
$usuarios = $sql->select("SELECT * FROM login");

print_r(json_encode($usuarios));

#echo json_encode($usuarios);
?>