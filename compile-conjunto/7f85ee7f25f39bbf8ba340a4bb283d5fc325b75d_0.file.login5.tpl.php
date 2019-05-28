<?php
/* Smarty version 3.1.32, created on 2019-04-04 22:06:35
  from 'C:\xampp\tpl-conjunto\login5.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5ca663cb159d66_97951129',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7f85ee7f25f39bbf8ba340a4bb283d5fc325b75d' => 
    array (
      0 => 'C:\\xampp\\tpl-conjunto\\login5.tpl',
      1 => 1543193842,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ca663cb159d66_97951129 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8"> 
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Acceso</title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">

	<!-- jQuery library -->
	<?php echo '<script'; ?>
 src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"><?php echo '</script'; ?>
>

	<!-- Popper JS -->
	<?php echo '<script'; ?>
 src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"><?php echo '</script'; ?>
>

	<!-- Latest compiled JavaScript -->
	<?php echo '<script'; ?>
 src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"><?php echo '</script'; ?>
>

	<?php echo '<script'; ?>
 type="text/javascript" src="js/rollups/hmac-sha3.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src="js/components/sha3.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript">
		function validar() {
			// DOM: Document Objects Model
			// $("#pwd").val( CryptoJS.SHA3( $("#pwd").val() ) ); // JQuery

			// JavaScript
			if (document.forms[0].email.value == "") {
				alert("Se requiere el email");
				document.forms[0].email.focus();
				return false;
			}
			if (document.forms[0].pwd.value == "") {
				alert("Se requiere la contraseña");
				document.forms[0].pwd.focus();
				return false;
			}

			document.forms[0].pwd.value = CryptoJS.SHA3( document.forms[0].pwd.value ); 
		}
	<?php echo '</script'; ?>
>
</head>
<body>
	<div class="container">
		<div class="card">
  		<div class="card-header"><h1><?php echo $_smarty_tpl->tpl_vars['SOFTWARE']->value;?>
</h1></div>
  		<div class="card-body">
		  	<form action="<?php echo $_smarty_tpl->tpl_vars['LOGINI']->value;?>
" method="post" onsubmit="return validar();">
		  		<div class="form-group">
		    		<label for="email">Cuenta:</label>
		    		<input type="email" class="form-control" id="email" name="email" placeholder="Correo Electrónico">
		  		</div>
		  		<div class="form-group">
		    		<label for="pwd">Contraseña:</label>
		    		<input type="password" class="form-control" id="pwd" name="pwd" placeholder="Clave">
		  		</div>
		  		<div class="form-group form-check">
		    		<label class="form-check-label">
		      		<input class="form-check-input" type="checkbox"> Recordar
		    		</label>
  				</div>
  			<button type="submit" class="btn btn-primary">Aceptar</button>
		</form>
		<hr/>
		<?php echo $_smarty_tpl->tpl_vars['error1']->value;?>

  		</div> 
  		<div class="card-footer"><?php echo $_smarty_tpl->tpl_vars['EMPRESA']->value;?>
<br/>
  			<small><strong>Autor: <?php echo $_smarty_tpl->tpl_vars['AUTOR']->value;?>
</strong></small>
  		</div>
	</div>
	</div>
</body>
</html><?php }
}
