<?php
defined("TOKEN_L34567") or die("Acceso no autorizado!");

$sql="SELECT * FROM comentarios ORDER BY id_comentario";
$tabla=$db->sub_tuplas($sql);
$p1->assign("tabla_comentarios",$tabla);

$busca="";
if (!$busca="") {
	$busca=$_POST['busca'];
	$busqueda="SELECT * FROM clientes WHERE nombre_cliente LIKE '%".$busca."%'";
	$tabla=$db->sub_tuplas($busqueda);
	$p1->assign("tabla_buscar",$tabla);
}



// mas pruebas!! no dormimos hp....

// otra!!

$sql="SELECT * FROM personajes ORDER BY id_personaje";
$tabla=$db->sub_tuplas($sql);
$p1->assign("listPer",$tabla);

if(isset($_POST['insertar']))//si apretamos el boton..
{
  $mensaje="";
  $nombre=$_POST['nombre'];
  $cargarAvatar=($_FILES['avatar']['tmp_name']);//carga el archivo
  $avatar=fopen($cargarAvatar, 'rb');//leer el archivo como binario
  $cargarPoder=($_FILES['poder']['tmp_name']);//cargar/obtener el archivo
  $poder=fopen($cargarPoder, 'rb');//leer como binario
  $pais=$_POST['pais'];

  $sql="INSERT INTO personajes (avatar, nombre, poder, pais) VALUES ('".$_POST["avatar"]."','".$_POST["avatar"]."','".$_POST["poder"]."','".$_POST["pais"]."')";
  echo $sql;
  if($sql)//si la query se ejecuta con exito lanza el mensaje:
  {
    
    $mensaje="<div class='col-md-offset-4 col-md-4 alert alert-success text-center'>
    ¡PERSONAJE AÑADIDO EXITOSAMENTE! <a href='index.php'>VER AQUÍ</a></div>";
  }

  else //pero si no se ejecuta correctamente, lanza el mensaje:
  {
    $mensaje="<div class='col-md-offset-4 col-md-4 alert alert-danger text-center'>
    ¡EL PERSONAJE NO PUDO AGREGARSE!</div>";
  }
}

?>

