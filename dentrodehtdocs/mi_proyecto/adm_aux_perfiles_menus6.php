<?php
defined("TOKEN_L34567") or die("Acceso no autorizado!");
$sql="SELECT * FROM aux_perfiles_menus ORDER BY id_aux";
$tabla=$db->sub_tuplas($sql);
$p1->assign("tabla_aux_perfiles_menus",$tabla);
?>