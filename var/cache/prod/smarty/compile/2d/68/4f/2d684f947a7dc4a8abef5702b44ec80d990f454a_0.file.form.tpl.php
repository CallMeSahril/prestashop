<?php
/* Smarty version 3.1.33, created on 2024-12-14 13:14:36
  from 'C:\xampp\htdocs\prestashop\admin\themes\default\template\controllers\carriers\helpers\form\form.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_675d76acbb1b79_57081337',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2d684f947a7dc4a8abef5702b44ec80d990f454a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashop\\admin\\themes\\default\\template\\controllers\\carriers\\helpers\\form\\form.tpl',
      1 => 1734178038,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_675d76acbb1b79_57081337 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1212713579675d76acba8771_28028952', 'script');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_808633237675d76acbaa063_77044109', "label");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2115709052675d76acbaf1a7_93119203', "field");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "helpers/form/form.tpl");
}
/* {block 'script'} */
class Block_1212713579675d76acba8771_28028952 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'script' => 
  array (
    0 => 'Block_1212713579675d76acba8771_28028952',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	// At the loading
	($("input[name='is_free']:checked").val() == 0) ? $('#shipping_costs_div').show('toggle'): $('#shipping_costs_div').hide();

	$("input[name='is_free']").live('change', function() {
		($("input[name='is_free']:checked").val() == 0) ? $('#shipping_costs_div').show('toggle'): $('#shipping_costs_div').hide();
	});
<?php
}
}
/* {/block 'script'} */
/* {block "label"} */
class Block_808633237675d76acbaa063_77044109 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'label' => 
  array (
    0 => 'Block_808633237675d76acbaa063_77044109',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<?php if ($_smarty_tpl->tpl_vars['input']->value['type'] == 'select' && $_smarty_tpl->tpl_vars['input']->value['name'] == 'id_tax_rules_group') {?>
		<div id="shipping_costs_div" style="display:<?php if (isset($_smarty_tpl->tpl_vars['fields_value']->value['is_free']) && $_smarty_tpl->tpl_vars['fields_value']->value['is_free']) {?>none<?php } else { ?>block<?php }?>">
	<?php }?>
	<?php 
$_smarty_tpl->inheritance->callParent($_smarty_tpl, $this, '{$smarty.block.parent}');
?>

<?php
}
}
/* {/block "label"} */
/* {block "field"} */
class Block_2115709052675d76acbaf1a7_93119203 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'field' => 
  array (
    0 => 'Block_2115709052675d76acbaf1a7_93119203',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<?php 
$_smarty_tpl->inheritance->callParent($_smarty_tpl, $this, '{$smarty.block.parent}');
?>

	<?php if ($_smarty_tpl->tpl_vars['input']->value['type'] == 'select' && $_smarty_tpl->tpl_vars['input']->value['name'] == 'range_behavior') {?>
		</div>
	<?php }
}
}
/* {/block "field"} */
}
