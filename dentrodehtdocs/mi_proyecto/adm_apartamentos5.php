<?php
defined("TOKEN_L34567") or die("Acceso no autorizado!");

$mensaje="";
if (isset($_POST["operacion"]) && isset($_POST["aceptar"])) {	// Nivel 3
	if ($_POST["aceptar"] != "Regresar") {
		print_r($_FILES);

		switch ($_POST["operacion"]) {
			case 'u':	// Update
				$sql="UPDATE apartamentos SET nombre_apartamento='".$_POST["nombre_apartamento"]."',descripcion='".$_POST["descripcion"]."',valor_adm=".$_POST["valor_adm"]." WHERE id_apartamento=".$_POST["id_apartamento"];
				$mensaje="actualizado";
				break;
			case 'd':	// Delete
				$sql="DELETE FROM apartamentos WHERE id_apartamento=".$_POST["id_apartamento"];
				$mensaje="eliminado";
				break;
			case 'c':	// Create
				$sql="INSERT INTO apartamentos (nombre_apartamento,descripcion,valor_adm) VALUES ('".$_POST["nombre_apartamento"]."','".$_POST["descripcion"]."',".$_POST["valor_adm"].")";
				$mensaje="creado";
				break;
		}
		echo "$sql";
		if ($db->consulta($sql)) {	# Ejecutamos el Query
			$mensaje="Registro $mensaje exitosamente!";
		} else {
			$mensaje="Error: el registro no fue $mensaje!";
		}
	}
}

if (isset($_GET["crud"])) {	# Nivel 2
	$p1->assign("crud", $_GET["crud"]);
	switch ($_GET["crud"]) {
		case 'u':	// Editar
			$sql="SELECT id_apartamento,nombre_apartamento,descripcion,valor_adm FROM apartamentos WHERE id_apartamento=".$_GET["idu"];
			$boton="Actualizar";
			$subtitulo="Edición de Datos";
			$at1=" readonly";
			$at2="";
			$at3="";
			$at4="";
			break;
		case 'd':	// Eliminar
			$sql="SELECT id_apartamento,nombre_apartamento,descripcion,valor_adm FROM apartamentos WHERE id_apartamento=".$_GET["idu"];
			$boton="Eliminar";
			$subtitulo="Eliminar el Registro";
			$at1=" readonly";
			$at2=" readonly";
			$at3=" readonly";
			$at4=" readonly";
			break;
		case 'c':	// Crear
			$sql="";
			$boton="Grabar";
			$subtitulo="Creación de Registro";
			$at1=" readonly";
			$at2="";
			$at3="";			
			break;
	}
	$fila=array("id_apartamento"=>"","nombre_apartamento"=>"","descripcion"=>"","valor_adm"=>"");
	if ($sql != "") {	# Ejecutamos el Query: $sql
		if (!$fila=$db->sub_fila($sql)) {
			$fila=array("id_apartamento"=>"","nombre_apartamento"=>"","descripcion"=>"","valor_adm"=>"");
		}
	}
	$p1->assign("subtitulo",$subtitulo);
	$p1->assign("boton",$boton);
	$p1->assign("at1",$at1);
	$p1->assign("at2",$at2);
	$p1->assign("at3",$at3);
	$p1->assign("fila",$fila);

	$sql = "SELECT id_apartamento,nombre_apartamento,descripcion,valor_adm FROM apartamentos ORDER BY id_apartamento";
	$tabla = $db->sub_tuplas($sql);
	$p1->assign("tabla_apartamentos",$tabla);

} else {	# Nivel 1
	$p1->assign("crud", "");
	$p1->assign("mensaje",$mensaje);
	 $sql="SELECT id_apartamento,nombre_apartamento,descripcion,valor_adm FROM apartamentos ORDER BY id_apartamento ASC";
	# $sql="SELECT id,nombre,cuenta,foto,estado,nombre_perfil FROM apartamentos u LEFT JOIN perfiles p ON u.perfil_id=p.id_perfil ORDER BY id ASC";
	$tabla=$db->sub_tuplas($sql);
	$p1->assign("tabla_apartamentos", $tabla);
}

?>