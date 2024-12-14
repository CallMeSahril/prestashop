<?php
/* Smarty version 3.1.33, created on 2024-12-14 13:14:35
  from 'C:\xampp\htdocs\prestashop\themes\classic\templates\checkout\_partials\cart-summary-items-subtotal.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_675d76ab301345_58436481',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '659739ed37eeb85b21bed80ecdae090c4feb381b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashop\\themes\\classic\\templates\\checkout\\_partials\\cart-summary-items-subtotal.tpl',
      1 => 1734178042,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_675d76ab301345_58436481 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_979058994675d76ab2fede5_05513595', 'cart_summary_items_subtotal');
?>

<?php }
/* {block 'cart_summary_items_subtotal'} */
class Block_979058994675d76ab2fede5_05513595 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'cart_summary_items_subtotal' => 
  array (
    0 => 'Block_979058994675d76ab2fede5_05513595',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <div class="card-block cart-summary-line cart-summary-items-subtotal clearfix" id="items-subtotal">
    <span class="label"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cart']->value['summary_string'], ENT_QUOTES, 'UTF-8');?>
</span>
    <span class="value"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cart']->value['subtotals']['products']['amount'], ENT_QUOTES, 'UTF-8');?>
</span>
  </div>
<?php
}
}
/* {/block 'cart_summary_items_subtotal'} */
}
