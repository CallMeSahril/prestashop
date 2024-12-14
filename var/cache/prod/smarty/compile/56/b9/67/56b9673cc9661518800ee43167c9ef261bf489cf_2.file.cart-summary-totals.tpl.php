<?php
/* Smarty version 3.1.33, created on 2024-12-14 13:14:35
  from 'C:\xampp\htdocs\prestashop\themes\classic\templates\checkout\_partials\cart-summary-totals.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_675d76ab35d0c6_66521925',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '56b9673cc9661518800ee43167c9ef261bf489cf' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashop\\themes\\classic\\templates\\checkout\\_partials\\cart-summary-totals.tpl',
      1 => 1734178042,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_675d76ab35d0c6_66521925 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<div class="card-block cart-summary-totals">

  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_946914776675d76ab3577e4_49481854', 'cart_summary_total');
?>


  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2094729212675d76ab35ad58_37427461', 'cart_summary_tax');
?>


</div>
<?php }
/* {block 'cart_summary_total'} */
class Block_946914776675d76ab3577e4_49481854 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'cart_summary_total' => 
  array (
    0 => 'Block_946914776675d76ab3577e4_49481854',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="cart-summary-line cart-total">
      <span class="label"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cart']->value['totals']['total']['label'], ENT_QUOTES, 'UTF-8');?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cart']->value['labels']['tax_short'], ENT_QUOTES, 'UTF-8');?>
</span>
      <span class="value"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cart']->value['totals']['total']['value'], ENT_QUOTES, 'UTF-8');?>
</span>
    </div>
  <?php
}
}
/* {/block 'cart_summary_total'} */
/* {block 'cart_summary_tax'} */
class Block_2094729212675d76ab35ad58_37427461 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'cart_summary_tax' => 
  array (
    0 => 'Block_2094729212675d76ab35ad58_37427461',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="cart-summary-line">
      <span class="label sub"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cart']->value['subtotals']['tax']['label'], ENT_QUOTES, 'UTF-8');?>
</span>
      <span class="value sub"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cart']->value['subtotals']['tax']['value'], ENT_QUOTES, 'UTF-8');?>
</span>
    </div>
  <?php
}
}
/* {/block 'cart_summary_tax'} */
}
