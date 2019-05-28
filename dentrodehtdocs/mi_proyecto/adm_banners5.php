<?php
defined("TOKEN_L34567") or die("Acceso no autorizado!");

$mensaje="";
if (isset($_POST["operacion"]) && isset($_POST["aceptar"])) {	// Nivel 3
	if ($_POST["aceptar"] != "Regresar") {
		print_r($_FILES);

		switch ($_POST["operacion"]) {
			case 'u':	// Update
				$sql="UPDATE banners SET descripcion='".$_POST["descripcion"]."',objeto='".$_POST["objeto"]."',impresiones=".$_POST["impresiones"]."accesos='".$_POST["accesos"]."' WHERE id=".$_POST["id"];
				$mensaje="Banner Actualizado";
				break;
			case 'd':	// Delete
				$sql="DELETE FROM banners WHERE id=".$_POST["id"];
				$mensaje="Perfil Eliminado";
				break;
			case 'c':	// Create
				$sql="INSERT INTO banners (descripcion,objeto,impresiones,accesos) VALUES ('".$_POST["descripcion"]."','".$_POST["objeto"]."','".$_POST["impresiones"]."','".$_POST["accesos"]."')";
				$mensaje="creado";
				echo $sql;
				break;
		}
		echo "$sql";
		if ($db->consulta($sql)) {	# Ejecutamos el Query
			$mensaje="Registro del  $mensaje exitosamente!";
		} else {
			$mensaje="Error: el registro no fue  $mensaje! satisfactoriamente";
		}
	}
}

if (isset($_GET["crud"])) {	# Nivel 2
	$p1->assign("crud", $_GET["crud"]);
	switch ($_GET["crud"]) {
		case 'u':	// Editar
			$sql="SELECT id,descripcion,objeto,impresiones,accesos FROM banners WHERE id=".$_GET["idu"];
			$boton="Actualizar";
			$subtitulo="Edición de Datos de Banners";
			$at1=" readonly";
			$at2="";
			$at3="";
			break;
		case 'd':	// Eliminar
			$sql="SELECT id,descripcion,objeto,impresiones,accesos FROM banners WHERE id=".$_GET["idu"];
			$boton="Eliminar";
			$subtitulo="Eliminar el Registro del Banners";
			$at1=" readonly";
			$at2=" readonly";
			$at3=" readonly";
			$at4=" readonly";
			break;
		case 'c':	// Crear
			$sql="";
			$boton="Grabar";
			$subtitulo="Creación de nuevo Registro de banner! ";
			$at1=" readonly";
			$at2="";
			$at3="";			
			break;
	}
	$fila=array("id"=>"","descripcion"=>"","objeto"=>"","impresiones"=>"","accesos"=>"");
	if ($sql != "") {	# Ejecutamos el Query: $sql
		if (!$fila=$db->sub_fila($sql)) {
			$fila=array("id"=>"","descripcion"=>"","objeto"=>"","impresiones"=>"","accesos"=>"");
		}
	}
	$p1->assign("subtitulo",$subtitulo);
	$p1->assign("boton",$boton);
	$p1->assign("at1",$at1);
	$p1->assign("at2",$at2);
	$p1->assign("at3",$at3);
	$p1->assign("fila",$fila);

	$sql = "SELECT id,descripcion,objeto,impresiones,accesos FROM banners ORDER BY id ";
	$tabla = $db->sub_tuplas($sql);
	$p1->assign("tabla_banners",$tabla);

} else {	# Nivel 1
	$p1->assign("crud", "");
	$p1->assign("mensaje",$mensaje);
	$sql = "SELECT id,descripcion,objeto,impresiones,accesos FROM banners ORDER BY id ASC";
	$tabla=$db->sub_tuplas($sql);
	$p1->assign("tabla_banners", $tabla);
}

?>