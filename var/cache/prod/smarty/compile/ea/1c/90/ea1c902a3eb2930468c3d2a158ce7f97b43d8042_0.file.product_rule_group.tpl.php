<?php
/* Smarty version 3.1.33, created on 2024-12-14 13:14:37
  from 'C:\xampp\htdocs\prestashop\admin\themes\default\template\controllers\cart_rules\product_rule_group.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_675d76ad01e8d6_42687484',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ea1c902a3eb2930468c3d2a158ce7f97b43d8042' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashop\\admin\\themes\\default\\template\\controllers\\cart_rules\\product_rule_group.tpl',
      1 => 1734178037,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_675d76ad01e8d6_42687484 (Smarty_Internal_Template $_smarty_tpl) {
?><tr id="product_rule_group_<?php echo intval($_smarty_tpl->tpl_vars['product_rule_group_id']->value);?>
_tr">
	<td>
		<a class="btn btn-default" href="javascript:removeProductRuleGroup(<?php echo intval($_smarty_tpl->tpl_vars['product_rule_group_id']->value);?>
);">
			<i class="icon-remove text-danger"></i>
		</a>
	</td>
	<td>

		<div class="form-group">
			<label class="control-label col-lg-4"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Number of products required in the cart to enjoy the discount:','d'=>'Admin.Catalog.Feature'),$_smarty_tpl ) );?>
</label>
			<div class="col-lg-1 pull-left">
				<input type="hidden" name="product_rule_group[]" value="<?php echo intval($_smarty_tpl->tpl_vars['product_rule_group_id']->value);?>
" />
				<input class="form-control" type="text" name="product_rule_group_<?php echo intval($_smarty_tpl->tpl_vars['product_rule_group_id']->value);?>
_quantity" value="<?php echo intval($_smarty_tpl->tpl_vars['product_rule_group_quantity']->value);?>
" />
			</div>
		</div>



		<div class="form-group">

			<label class="control-label col-lg-4"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Add a rule concerning'),$_smarty_tpl ) );?>
</label>
			<div class="col-lg-4">
				<select class="form-control" id="product_rule_type_<?php echo intval($_smarty_tpl->tpl_vars['product_rule_group_id']->value);?>
">
					<option value=""><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'-- Choose --','d'=>'Admin.Actions'),$_smarty_tpl ) );?>
</option>
					<option value="products"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Products','d'=>'Admin.Global'),$_smarty_tpl ) );?>
</option>
					<option value="attributes"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Attributes','d'=>'Admin.Global'),$_smarty_tpl ) );?>
</option>
					<option value="categories"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Categories','d'=>'Admin.Global'),$_smarty_tpl ) );?>
</option>
					<option value="manufacturers"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Brands','d'=>'Admin.Global'),$_smarty_tpl ) );?>
</option>
					<option value="suppliers"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Suppliers','d'=>'Admin.Global'),$_smarty_tpl ) );?>
</option>
				</select>
			</div>
			<div class="col-lg-4">
				<a class="btn btn-default" href="javascript:addProductRule(<?php echo intval($_smarty_tpl->tpl_vars['product_rule_group_id']->value);?>
);">
					<i class="icon-plus-sign"></i>
					<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>"Add",'d'=>'Admin.Actions'),$_smarty_tpl ) );?>

				</a>
			</div>

		</div>

		<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'The product(s) are matching one of these:'),$_smarty_tpl ) );?>

		<table id="product_rule_table_<?php echo intval($_smarty_tpl->tpl_vars['product_rule_group_id']->value);?>
" class="table table-bordered">
			<?php if (isset($_smarty_tpl->tpl_vars['product_rules']->value) && count($_smarty_tpl->tpl_vars['product_rules']->value)) {?>
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product_rules']->value, 'product_rule');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['product_rule']->value) {
?>
					<?php echo $_smarty_tpl->tpl_vars['product_rule']->value;?>

				<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
			<?php }?>
		</table>

	</td>
</tr>
<?php }
}
