<?php
/* Smarty version 3.1.33, created on 2024-12-14 13:14:35
  from 'C:\xampp\htdocs\prestashop\themes\classic\templates\customer\identity.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_675d76ab9000e9_44143461',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd0c3e9b0e14dde041370b1b6e0b914ed6c27e0e2' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashop\\themes\\classic\\templates\\customer\\identity.tpl',
      1 => 1734178042,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_675d76ab9000e9_44143461 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_526938105675d76ab8fcf24_06997685', 'page_title');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_35530156675d76ab8fe968_40463323', 'page_content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'customer/page.tpl');
}
/* {block 'page_title'} */
class Block_526938105675d76ab8fcf24_06997685 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_title' => 
  array (
    0 => 'Block_526938105675d76ab8fcf24_06997685',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Your personal information','d'=>'Shop.Theme.Customeraccount'),$_smarty_tpl ) );?>

<?php
}
}
/* {/block 'page_title'} */
/* {block 'page_content'} */
class Block_35530156675d76ab8fe968_40463323 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content' => 
  array (
    0 => 'Block_35530156675d76ab8fe968_40463323',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['render'][0], array( array('file'=>'customer/_partials/customer-form.tpl','ui'=>$_smarty_tpl->tpl_vars['customer_form']->value),$_smarty_tpl ) );?>

<?php
}
}
/* {/block 'page_content'} */
}
