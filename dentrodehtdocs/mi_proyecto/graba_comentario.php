<?php
include '../../config_conjunto/config_conjunto6.php';
if (isset($_POST["crud"]) && isset($_POST["id_comentario"]) && isset($_POST["comentario"])) 
 {
	switch ($_POST["crud"]) {
		case 'u':
			$sql="UPDATE comentarios SET comentario='".$_POST["comentario"]."' WHERE id_comentario=".$_POST["id_comentario"];
			$mensaje="actualizado";
			break;
		case 'd':
			$sql="DELETE FROM comentarios WHERE id_comentario=".$_POST["id_comentario"];
			$mensaje="eliminado";
			break;
			case 'c':
			#$sql="INSERT INTO perfiles (nombre_perfil) VALUES '".$_POST["nombre_perfil"]."')";
			$sql="INSERT INTO comentarios (comentario) VALUES ('".$_POST["comentario"]."')";
			$mensaje="creado";
			break;
	}
	//echo "$sql";
	$db = new subase();	# Creamos el objeto $db: instancia de la clase subase
	if ($fila=$db->consulta($sql)) {
		if ($_POST["crud"]=='c') {
			$id_comentario=$db->ultimo_id();
			$sql="SELECT * FROM comentarios WHERE id_comentario=$id_comentario";
			$fila=$db->sub_fila($sql);
			echo json_encode($fila);
		} else {
			echo "Registro $mensaje exitosamente!";
		}
	} else {
		//echo "Error: el registro NO fue $mensaje!";
		echo "Error: el registro NO fue $mensaje! $sql";
	}
} else {
	echo "No hay variables";
}

?>