<?php
/* Smarty version 3.1.32, created on 2019-04-04 22:06:57
  from 'C:\xampp\tpl-conjunto\usuario5.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5ca663e1700dd5_09291834',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '814e8a5dba20dcbc94c15233902f449d6e6f57d8' => 
    array (
      0 => 'C:\\xampp\\tpl-conjunto\\usuario5.tpl',
      1 => 1547086446,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ca663e1700dd5_09291834 (Smarty_Internal_Template $_smarty_tpl) {
?>Usuario: <?php echo $_smarty_tpl->tpl_vars['nombre']->value;?>
<br/>
Perfil: <?php echo $_smarty_tpl->tpl_vars['nombre_perfil']->value;?>
<br/>
<img src="<?php echo $_smarty_tpl->tpl_vars['foto']->value;?>
" alt="Logo" height="50"><br/>
<a href="<?php echo $_smarty_tpl->tpl_vars['PROGRAMA']->value;?>
?cerrar=<?php echo $_smarty_tpl->tpl_vars['session_id']->value;?>
" class="btn btn-primary">&laquo; Salir &raquo;</a>
<?php }
}
