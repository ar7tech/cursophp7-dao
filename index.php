<?php 

require_once("config.php");

/* $sql = New Sql();

$usuarios = $sql->select("SELECT * FROM tb_usuarios");

echo json_encode($usuarios); */

$root = new Usuario();

$root->loadbyid(3);

echo $root;

 ?>