<?php
defined("TOKEN_L34567") or die("Acceso no autorizado!");

$mensaje="";
if (isset($_POST["operacion"]) && isset($_POST["aceptar"])) {	// Nivel 3
	if ($_POST["aceptar"] != "Regresar") {
		print_r($_FILES);

		$fotoa1=""; $fotoa2=""; $fotou="";
		if (isset($_FILES["foto"])) {
			if (is_uploaded_file($_FILES["foto"]["tmp_name"])) {
				$arc = explode(".", $_FILES["foto"]["name"]);
				$cfoto = $_POST["email"].".".$arc[count($arc)-1];
				if (move_uploaded_file($_FILES["foto"]["tmp_name"], WEB.FOTO.$cfoto)) {
					$fotoa1=",foto";
					$fotoa2=",'".FOTO.$cfoto."'";
					$fotou=",foto='".FOTO.$cfoto."'";
				}
			}
		}

		switch ($_POST["operacion"]) {
			case 'u':	// Update

				$sql="UPDATE propietarios SET nombre_propietario='".$_POST["nombre_propietario"]."',identificacion='".$_POST["identificacion"]."',celular='".$_POST["celular"]."',email='".$_POST["email"]."',fecha_nacimiento='".$_POST["fecha_nacimiento"]."'$fotou WHERE id_propietario=".$_POST["id_propietario"];

				$mensaje="actualizado";
				break;
			case 'd':	// Delete
				$sql="DELETE FROM propietarios WHERE id_propietario=".$_POST["id_propietario"];
				$mensaje="eliminado";
				break;
			case 'c':	// Create
				$sql="INSERT INTO propietarios (nombre_propietario,identificacion,celular,email,fecha_nacimiento$fotoa1) VALUES ('".$_POST["nombre_propietario"]."','".$_POST["identificacion"]."','".$_POST["celular"]."','".$_POST["email"]."','".$_POST["fecha_nacimiento"]."'$fotoa2)";
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
			$sql="SELECT id_propietario,nombre_propietario,identificacion,celular,email,fecha_nacimiento,foto FROM propietarios WHERE id_propietario=".$_GET["idu"];
			$boton="Actualizar";
			$subtitulo="Edición de Datos";
			$at1=" readonly";
			$at2="";
			$at3="";
			break;
		case 'd':	// Eliminar
			$sql="SELECT id_propietario,nombre_propietario,identificacion,celular,email,fecha_nacimiento,foto FROM propietarios WHERE id_propietario=".$_GET["idu"];
			$boton="Eliminar";
			$subtitulo="Eliminar el Registro";
			$at1=" readonly";
			$at2=" readonly";
			$at3=" disable";
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
	$fila=array("id_propietario"=>"","nombre_propietario"=>"","identificacion"=>"","celular"=>"","email"=>"","fecha_nacimiento"=>"","foto"=>"");
	if ($sql != "") {	# Ejecutamos el Query: $sql
		if (!$fila=$db->sub_fila($sql)) {
			$fila=array("id_propietario"=>"","nombre_propietario"=>"","identificacion"=>"","celular"=>"","email"=>"","fecha_nacimiento"=>"","foto"=>"");
		}
	}
	$p1->assign("subtitulo",$subtitulo);
	$p1->assign("boton",$boton);
	$p1->assign("at1",$at1);
	$p1->assign("at2",$at2);
	$p1->assign("at3",$at3);
	$p1->assign("fila",$fila);

	$sql = "SELECT id_propietario,nombre_propietario,identificacion,celular,email,fecha_nacimiento,foto FROM propietarios ORDER BY id_propietario";
	$tabla = $db->sub_tuplas($sql);
	$p1->assign("tabla_propietarios",$tabla);

} else {	# Nivel 1
	$p1->assign("crud", "");
	$p1->assign("mensaje",$mensaje);
	$sql = "SELECT id_propietario,nombre_propietario,identificacion,celular,email,fecha_nacimiento,foto FROM propietarios ORDER BY id_propietario";
	$tabla=$db->sub_tuplas($sql);
	$p1->assign("tabla_propietarios", $tabla);
}

?>