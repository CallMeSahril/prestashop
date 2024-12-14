<?php
/* Smarty version 3.1.33, created on 2024-12-14 13:14:45
  from 'C:\xampp\htdocs\prestashop\admin\themes\default\template\helpers\tree\tree_node_item_radio.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_675d76b5aaf1a3_75298654',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8f206e64a0d537f422aa371fd08e35d39536fa37' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashop\\admin\\themes\\default\\template\\helpers\\tree\\tree_node_item_radio.tpl',
      1 => 1734178038,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_675d76b5aaf1a3_75298654 (Smarty_Internal_Template $_smarty_tpl) {
?><li class="tree-item<?php if (isset($_smarty_tpl->tpl_vars['node']->value['disabled']) && $_smarty_tpl->tpl_vars['node']->value['disabled'] == true) {?> tree-item-disable<?php }?>">
	<span class="tree-item-name">
		<input type="radio" name="<?php echo $_smarty_tpl->tpl_vars['input_name']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['node']->value['id_category'];?>
"<?php if (isset($_smarty_tpl->tpl_vars['node']->value['disabled']) && $_smarty_tpl->tpl_vars['node']->value['disabled'] == true) {?> disabled="disabled"<?php }?> />
		<i class="tree-dot"></i>
		<label class="tree-toggler"><?php echo $_smarty_tpl->tpl_vars['node']->value['name'];?>
</label>
	</span>
</li>
<?php }
}
