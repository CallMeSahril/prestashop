<?php
/* Smarty version 3.1.33, created on 2024-12-14 13:14:39
  from 'C:\xampp\htdocs\prestashop\admin\themes\default\template\controllers\shop\content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_675d76af0a4218_55452911',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '31700832939ecdc8ab4ed7a8edecea8c167bf958' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashop\\admin\\themes\\default\\template\\controllers\\shop\\content.tpl',
      1 => 1734178037,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_675d76af0a4218_55452911 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="row">
	<div class="col-lg-4">
		<?php echo $_smarty_tpl->tpl_vars['shops_tree']->value;?>

	</div>
	<div class="col-lg-8"><?php echo $_smarty_tpl->tpl_vars['content']->value;?>
</div>
</div>
<?php }
}
