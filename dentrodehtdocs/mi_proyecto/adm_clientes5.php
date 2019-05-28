<?php
defined("TOKEN_L34567") or die("Acceso no autorizado!");

$mensaje="";
if (isset($_POST["operacion"]) && isset($_POST["aceptar"])) {	// Nivel 3
	if ($_POST["aceptar"] != "Regresar") {
		print_r($_FILES);


		switch ($_POST["operacion"]) {
			case 'u':	// Update
				$sql="UPDATE clientes SET nombre_cliente='".$_POST["nombre_cliente"]."',cc='".$_POST["cc"]."',email='".$_POST["email"]."',direccion='".$_POST["direccion"]."',cod_cliente='".$_POST["cod_cliente"]."' WHERE id_cliente=".$_POST["id_cliente"];
				$mensaje="actualizado";
				break;
			case 'd':	// Delete
				$sql="DELETE FROM clientes WHERE id_cliente=".$_POST["id_cliente"];
				$mensaje="eliminado";
				break;
			case 'c':	// Create
				$sql="INSERT INTO clientes (nombre_cliente,cc,email,direccion,cod_cliente) VALUES ('".$_POST["nombre_cliente"]."','".$_POST["cc"]."',".$_POST["email"].",".$_POST["direccion"].",".$_POST["cod_cliente"].")";
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
			$sql="SELECT id_cliente,nombre_cliente,cc,email,direccion,cod_cliente FROM clientes WHERE id_cliente=".$_GET["idu"];
			$boton="Actualizar";
			$subtitulo="Edición de Datos";
			$at1=" readonly";
			$at2="";
			$at3="";
			break;
		case 'd':	// Eliminar
			$sql="SELECT id_cliente,nombre_cliente,cc,email,direccion,cod_cliente FROM clientes WHERE id_cliente=".$_GET["idu"];
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
	$fila=array("id_cliente"=>"","nombre_cliente"=>"","cc"=>"","email"=>"","direccion"=>"","cod_cliente"=>"");
	if ($sql != "") {	# Ejecutamos el Query: $sql
		if (!$fila=$db->sub_fila($sql)) {
			$fila=array("id_cliente"=>"","nombre_cliente"=>"","email"=>"","direccion"=>"","cod_cliente"=>"");
		}
	}
	$p1->assign("subtitulo",$subtitulo);
	$p1->assign("boton",$boton);
	$p1->assign("at1",$at1);
	$p1->assign("at2",$at2);
	$p1->assign("at3",$at3);
	$p1->assign("fila",$fila);

	$sql = "SELECT id_cliente,nombre_cliente FROM clientes ORDER BY id_cliente";
	$tabla = $db->sub_tuplas($sql);
	$p1->assign("tabla_clientes",$tabla);

} else {	# Nivel 1
	$p1->assign("crud", "");
	$p1->assign("mensaje",$mensaje);
	$sql="SELECT id_cliente,nombre_cliente,cc,email,direccion,cod_cliente FROM clientes WHERE id_cliente=id_cliente ORDER BY id_cliente ASC";
	$tabla=$db->sub_tuplas($sql);
	$p1->assign("tabla_clientes", $tabla);
}

?>