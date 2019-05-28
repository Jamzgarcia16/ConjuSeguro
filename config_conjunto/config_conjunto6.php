<?php
/* 
	Parámetros de configuración
	VERSION: 6
*/
define("VERSION", "6");

$motor = "mariadb";
#$motor = "postgresql";
switch ($motor) {
	case 'mariadb':
		define("IPSERVER", "127.0.0.1");
		define("USERDB", "root");
		define("PASSWD", "");
		define("DB", "mi_proyecto");
		define("PORTDB", "3306");
		define("DRIVER","mysqli.class.php");
		break;
	case 'postgresql':
		define("IPSERVER", "127.0.0.1");
		define("USERDB", "postgres");
		define("PASSWD", "123456");
		define("DB", "mi_proyecto");
		define("PORTDB", "5432");
		define("DRIVER","postgresql.class.php");
		break;
}

define("EMPRESA", "Jamz Deveploment Software S.A.S. - 2.019");
define("SOFTWARE", "Prototipo de Aplicación Ver.".VERSION);
define("AUTOR", "Jimmy Cantor ");
define("TOKEN_L34567","12435");

#define("PROGRAMA", "aplicacion".VERSION.".php");
#define("LOGINI", "login".VERSION.".php");

$url1 = str_rot13("lala".date("HmsYd"));
define("DIR_PROYECTO","mi_proyecto");
define("DIR_INI","in-mi");
define("PROGRAMA", "/".DIR_PROYECTO."/$url1");
define("LOGINI", "/".DIR_INI."/$url1");





define("WEB", "C:/xampp/htdocs/mi_proyecto/"); # Windows
#define("WEB", "/var/www/html/mi_proyecto/"); # Linux
define("FOTO","fotos/");

session_start();	// Activa el registro de las variables en la sessión

require_once DRIVER;

?>