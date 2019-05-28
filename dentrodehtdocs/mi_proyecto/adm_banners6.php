<?php
defined("TOKEN_L34567") or die("Acceso no autorizado!");

# $sql="SELECT * FROM banners ORDER BY id";
$sql="SELECT b.*,c.nombre FROM banners b LEFT JOIN clientes c ON b.cliente_id=c.id ORDER BY b.id";

$tabla=$db->sub_tuplas($sql);
$p1->assign("tabla_banners",$tabla);
?>