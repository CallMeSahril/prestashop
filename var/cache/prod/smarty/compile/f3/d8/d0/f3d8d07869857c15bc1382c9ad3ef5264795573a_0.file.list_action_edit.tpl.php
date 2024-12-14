<?php
/* Smarty version 3.1.33, created on 2024-12-14 13:14:39
  from 'C:\xampp\htdocs\prestashop\admin\themes\default\template\controllers\tax_rules\helpers\list\list_action_edit.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_675d76af5f9be2_32611549',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f3d8d07869857c15bc1382c9ad3ef5264795573a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashop\\admin\\themes\\default\\template\\controllers\\tax_rules\\helpers\\list\\list_action_edit.tpl',
      1 => 1734178037,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_675d76af5f9be2_32611549 (Smarty_Internal_Template $_smarty_tpl) {
?><a onclick="loadTaxRule('<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['id']->value,'html','UTF-8' ));?>
'); return false;" href="#" class="btn btn-default">
	<i class="icon-pencil"></i>
	<?php echo $_smarty_tpl->tpl_vars['action']->value;?>

</a>
<?php }
}
