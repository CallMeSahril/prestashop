<?php
/* Smarty version 3.1.33, created on 2024-12-14 13:14:35
  from 'C:\xampp\htdocs\prestashop\themes\classic\templates\checkout\cart-empty.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_675d76ab11a797_67258320',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1df4ba8826eef137d85f2de83cbd8a5cf51c4f2f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashop\\themes\\classic\\templates\\checkout\\cart-empty.tpl',
      1 => 1734178042,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_675d76ab11a797_67258320 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_455238892675d76ab114001_75954778', 'content');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_406715274675d76ab115672_68615690', 'continue_shopping');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_32512157675d76ab117747_46358975', 'cart_actions');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_627295383675d76ab118b78_44795322', 'continue_shopping');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_379771912675d76ab119538_44389196', 'cart_voucher');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1984356815675d76ab119f54_70431219', 'display_reassurance');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'checkout/cart.tpl');
}
/* {block 'content'} */
class Block_455238892675d76ab114001_75954778 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_455238892675d76ab114001_75954778',
  ),
);
public $append = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayCrossSellingShoppingCart'),$_smarty_tpl ) );?>

<?php
}
}
/* {/block 'content'} */
/* {block 'continue_shopping'} */
class Block_406715274675d76ab115672_68615690 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'continue_shopping' => 
  array (
    0 => 'Block_406715274675d76ab115672_68615690',
  ),
);
public $append = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <a class="label" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['pages']['index'], ENT_QUOTES, 'UTF-8');?>
">
    <i class="material-icons">chevron_left</i><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Continue shopping','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>

  </a>
<?php
}
}
/* {/block 'continue_shopping'} */
/* {block 'cart_actions'} */
class Block_32512157675d76ab117747_46358975 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'cart_actions' => 
  array (
    0 => 'Block_32512157675d76ab117747_46358975',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <div class="checkout text-sm-center card-block">
    <button type="button" class="btn btn-primary disabled" disabled><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Checkout','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
</button>
  </div>
<?php
}
}
/* {/block 'cart_actions'} */
/* {block 'continue_shopping'} */
class Block_627295383675d76ab118b78_44795322 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'continue_shopping' => 
  array (
    0 => 'Block_627295383675d76ab118b78_44795322',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'continue_shopping'} */
/* {block 'cart_voucher'} */
class Block_379771912675d76ab119538_44389196 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'cart_voucher' => 
  array (
    0 => 'Block_379771912675d76ab119538_44389196',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'cart_voucher'} */
/* {block 'display_reassurance'} */
class Block_1984356815675d76ab119f54_70431219 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'display_reassurance' => 
  array (
    0 => 'Block_1984356815675d76ab119f54_70431219',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'display_reassurance'} */
}
