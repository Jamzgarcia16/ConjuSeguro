<?php
/* Smarty version 3.1.32, created on 2019-04-04 22:06:57
  from 'C:\xampp\tpl-conjunto\aplicacion5.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5ca663e1686fd6_13831861',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5f3e7f502bbf31844fdd36530b2e9abed40d5653' => 
    array (
      0 => 'C:\\xampp\\tpl-conjunto\\aplicacion5.tpl',
      1 => 1545179352,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:encabezado".((string)$_smarty_tpl->tpl_vars[\'VERSION\']->value).".tpl' => 1,
    'file:usuario".((string)$_smarty_tpl->tpl_vars[\'VERSION\']->value).".tpl' => 1,
    'file:menu".((string)$_smarty_tpl->tpl_vars[\'VERSION\']->value).".tpl' => 1,
    'file:contenido".((string)$_smarty_tpl->tpl_vars[\'VERSION\']->value).".tpl' => 1,
    'file:pie".((string)$_smarty_tpl->tpl_vars[\'VERSION\']->value).".tpl' => 1,
  ),
),false)) {
function content_5ca663e1686fd6_13831861 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8"> 
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>ConjuntoSeguro.com</title>
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

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
</head>
<body>
<div class="card">
  <div class="card-header">

  <div class="row">
    <div class="col-sm-9" style="text-align: center;">
      <?php $_smarty_tpl->_subTemplateRender("file:encabezado".((string)$_smarty_tpl->tpl_vars['VERSION']->value).".tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
    </div>
    <div class="col-sm-3" style="text-align: center;">
    <?php $_smarty_tpl->_subTemplateRender("file:usuario".((string)$_smarty_tpl->tpl_vars['VERSION']->value).".tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
    </div>
  </div>

  </div>
  <div class="card-body">
  <div class="row">
    <div class="col-sm-2" style="text-align: left;">
      <?php $_smarty_tpl->_subTemplateRender("file:menu".((string)$_smarty_tpl->tpl_vars['VERSION']->value).".tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
    </div>
    <div class="col-sm-10" style="text-align: left;">
      <?php $_smarty_tpl->_subTemplateRender("file:contenido".((string)$_smarty_tpl->tpl_vars['VERSION']->value).".tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
    </div>
  </div>
  </div> 
  <div class="card-footer" style="text-align: center;">
  <?php $_smarty_tpl->_subTemplateRender("file:pie".((string)$_smarty_tpl->tpl_vars['VERSION']->value).".tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
  </div>
</div>
</body>
</html><?php }
}
