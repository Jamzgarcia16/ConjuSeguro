<?php
/*  Comentarios multilinea


	Archivo: infoVersion1.php
	Version: 1.0
	Autor: Jamz Garcia
	Empresa: Develoment Software Jamz PCS
	Fecha: Noviembre 21 de 2018
*/
$mensaje = "Version 1 aplicativo Conjuntos Residenciales Con Smarty PHP.<br>\n";
$info = "Version 1.0 de Conjuntos Residenciales Completada";
$tarea = "la tarea de mañana es revisar la base de datos de Conjuntos Residenciales SENA y Actualizarla en la nuestra, adicional debe de generar los menus administrativos a los que vamos a generar los CRUD de Informacion! ";
$off = "Feliz Noche Dia, <br> Fecha: 21 Noviembre 2018. <br> No pierdas el impulso campeon";

$nov23 = "se deja version 2 de PHP conjuntos Residenciales ok, se deja copia de base de datos y backup del proyecto, se porcede a empezar la version 3";

//$mensaje = ""; 
// echo = $mensaje; Declarar la variable con el signo igual resulta ser un error Fatal.! Ojo Con Eso xD 

//echo  $mensaje; // manera de imprimir la variable en una declaracion de Imprecion de Texto. Ej = ( echo $mensaje )

if ($mensaje !="") { // forma de imprimir texto en un formato condicional!
	echo $mensaje;
	echo "<br>";
	echo $info;
	echo "<br>";
	echo "<br>";
	echo "<br>";
	echo $tarea;
	echo "<br>";
	echo "<br>";
	echo "<br>";
	echo $off;
	echo "<br>";
	echo "<br>";
	echo $nov23;
	}
	else{
		echo "variable "," vacia";
	}




?>