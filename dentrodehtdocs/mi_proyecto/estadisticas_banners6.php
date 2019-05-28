<?php
defined("TOKEN_L34567") or die("Acceso no autorizado!");

$sql="SELECT * FROM banners ORDER BY id";
$tabla=$db->sub_tuplas($sql);
$p1->assign("tabla_banners",$tabla);
?>