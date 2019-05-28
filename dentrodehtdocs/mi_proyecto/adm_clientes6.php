<?php
defined("TOKEN_L34567") or die("Acceso no autorizado!");

$sql="SELECT * FROM clientes ORDER BY id_cliente";
$tabla=$db->sub_tuplas($sql);
$p1->assign("tabla_clientes",$tabla);
?>