<?php
/* Smarty version 3.1.33, created on 2024-12-14 13:14:37
  from 'C:\xampp\htdocs\prestashop\admin\themes\default\template\controllers\localization\content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_675d76ada5b4a1_06915328',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '20d2d1c25b27a0fa043f4497a7a40f78c8f54cd2' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashop\\admin\\themes\\default\\template\\controllers\\localization\\content.tpl',
      1 => 1734178038,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_675d76ada5b4a1_06915328 (Smarty_Internal_Template $_smarty_tpl) {
if (isset($_smarty_tpl->tpl_vars['localization_form']->value)) {
echo $_smarty_tpl->tpl_vars['localization_form']->value;
}
if (isset($_smarty_tpl->tpl_vars['localization_options']->value)) {
echo $_smarty_tpl->tpl_vars['localization_options']->value;
}
echo '<script'; ?>
 type="text/javascript">
	$(document).ready(function() {
		$('#PS_CURRENCY_DEFAULT').change(function(e) {
			alert("<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Before changing the default currency, we strongly recommend that you enable maintenance mode. Indeed, any change on the default currency requires a manual adjustment of the price of each product and its combinations.','d'=>'Admin.International.Notification','js'=>1),$_smarty_tpl ) );?>
");
		});
	});
<?php echo '</script'; ?>
>
<?php }
}
