<?php
/* Smarty version 3.1.33, created on 2024-12-14 13:14:38
  from 'C:\xampp\htdocs\prestashop\admin\themes\default\template\controllers\referrers\helpers\view\view.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_675d76aee3b942_12982554',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a31d5b1b6bb8ebb36d61b86de291d8e6be6e4235' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashop\\admin\\themes\\default\\template\\controllers\\referrers\\helpers\\view\\view.tpl',
      1 => 1734178038,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_675d76aee3b942_12982554 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_693487344675d76aee2f217_10404333', "override_tpl");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "helpers/view/view.tpl");
}
/* {block "override_tpl"} */
class Block_693487344675d76aee2f217_10404333 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'override_tpl' => 
  array (
    0 => 'Block_693487344675d76aee2f217_10404333',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<?php echo '<script'; ?>
 type="text/javascript">
		$(function() {
			var btn_save_calendar = $('span[class~="process-icon-save-calendar"]').parent();
			var btn_submit_calendar = $('#submitDatePicker');

			if (btn_save_calendar.length > 0 && btn_submit_calendar.length > 0)
			{
				btn_submit_calendar.hide();
				btn_save_calendar.click(function() {
					btn_submit_calendar.before('<input type="hidden" name="'+btn_submit_calendar.attr("name")+'" value="1" />');

					$('#calendar_form').submit();
				});
			}
		});
	<?php echo '</script'; ?>
>

		<?php if ($_smarty_tpl->tpl_vars['enable_calendar']->value) {?>
			<?php echo $_smarty_tpl->tpl_vars['calendar_form']->value;?>

		<?php }?>
	</div>

	<?php echo '<script'; ?>
 type="text/javascript">
		function updateConversionRate(id_product)
		{
			$.getJSON('ajax.php',
				{
					ajaxReferrers:1,
					ajaxProductFilter:1,
					id_employee:<?php echo $_smarty_tpl->tpl_vars['id_employee']->value;?>
,
					token:'<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['token']->value,'html','UTF-8' ));?>
',
					id_referrer:<?php echo $_smarty_tpl->tpl_vars['referrer']->value->id;?>
,
					id_product:id_product
				},
				function(j) {
					<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['display_tab']->value, 'value', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['value']->value) {
?>
						$("#<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
").html(j[0].<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
);
					<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
				}
			)
		}

		function fillProducts(filter)
		{
			var form = document.layers ? document.forms.product_referrers : document.product_referrers;
			var filter = form.filterProduct.value;
			$.getJSON('ajax.php',
				{
					ajaxReferrers:1,
					ajaxFillProducts:1,
					id_employee:<?php echo $_smarty_tpl->tpl_vars['id_employee']->value;?>
,
					token:'<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['token']->value,'html','UTF-8' ));?>
',
					id_lang:<?php echo $_smarty_tpl->tpl_vars['id_lang']->value;?>
,
					filter:filter
				},
				function(j) {

					form.selectProduct.length = j.length + 1;
					for (var i = 0; i < j.length; i++)
					{
						form.selectProduct.options[i+1].value = j[i].id_product;
						form.selectProduct.options[i+1].text = j[i].name;
					}
				}
			);
		}
	<?php echo '</script'; ?>
>

	<div class="panel">
		<h3>
			<i class="icon-bar-chart"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Statistics','d'=>'Admin.Shopparameters.Feature'),$_smarty_tpl ) );?>

		</h3>
		<h2><?php echo $_smarty_tpl->tpl_vars['referrer']->value->name;?>
</h2>
		<table class="table">
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['display_tab']->value, 'label', false, 'data');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['data']->value => $_smarty_tpl->tpl_vars['label']->value) {
?>
				<tr>
					<td><?php echo $_smarty_tpl->tpl_vars['label']->value;?>
</td>
					<td id="<?php echo $_smarty_tpl->tpl_vars['data']->value;?>
"></td>
				</tr>
			<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		</table>
		<form id="product_referrers" name="product_referrers" class="form-horizontal">
			<div class="form-group">
				<label class="control-label col-lg-3"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Filter by product:','d'=>'Admin.Shopparameters.Feature'),$_smarty_tpl ) );?>
</label>
				<div class="col-lg-9">
					<select id="selectProduct" class="fixed-width-xl" name="selectProduct" onfocus="fillProducts();" onchange="updateConversionRate(this.value);">
						<option value="0" selected="selected">- <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'All','d'=>'Admin.Global'),$_smarty_tpl ) );?>
 -</option>
					</select>
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-lg-3"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Search','d'=>'Admin.Actions'),$_smarty_tpl ) );?>
</label>
				<div class="col-lg-9">
					<input class="btn btn-default" type="text" size="34" id="filterProduct" name="filterProduct" onkeyup="fillProducts();" />
				</div>
			</div>
		</form>
	</div>
	<?php echo '<script'; ?>
 type="text/javascript">
		updateConversionRate(0);
	<?php echo '</script'; ?>
>
<?php
}
}
/* {/block "override_tpl"} */
}
