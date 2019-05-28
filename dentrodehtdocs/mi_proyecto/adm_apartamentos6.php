<?php
defined("TOKEN_L34567") or die("Acceso no autorizado!");

$sql="SELECT * FROM apartamentos ORDER BY id_apartamento";
$tabla=$db->sub_tuplas($sql);
$p1->assign("tabla_apartamentos",$tabla);
?>