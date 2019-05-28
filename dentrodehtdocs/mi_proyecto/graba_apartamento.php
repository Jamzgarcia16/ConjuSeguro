<?php
include '../../config_conjunto/config_conjunto6.php';

if (isset($_POST["crud"]) && isset($_POST["id_apartamento"]) && isset($_POST["nombre_apartamento"])) 
 {
	switch ($_POST["crud"]) {
		case 'u':
			$sql="UPDATE apartamentos SET nombre_apartamento='".$_POST["nombre_apartamento"]."',descripcion='".$_POST["descripcion"]."',valor_adm='".$_POST["valor_adm"]."' WHERE id_apartamento=".$_POST["id_apartamento"];
			$mensaje="actualizado";
			break;
		case 'd':
			$sql="DELETE FROM apartamentos WHERE id_apartamento=".$_POST["id_apartamento"];
			$mensaje="eliminado";
			break;
			case 'c':
			#$sql="INSERT INTO perfiles (nombre_perfil) VALUES '".$_POST["nombre_perfil"]."')";
			$sql="INSERT INTO apartamentos (nombre_apartamento,descripcion,valor_adm) VALUES ('".$_POST["nombre_apartamento"]."','".$_POST["descripcion"]."','".$_POST["valor_adm"]."')";
			$mensaje="creado";
			break;
	}
	//echo "$sql";
	$db = new subase();	# Creamos el objeto $db: instancia de la clase subase
	if ($fila=$db->consulta($sql)) {
		if ($_POST["crud"]=='c') {
			$id_apartamento=$db->ultimo_id();
			$sql="SELECT * FROM apartamentos WHERE id_apartamento=$id_apartamento";
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