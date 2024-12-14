<?php
/* Smarty version 3.1.33, created on 2024-12-14 13:14:35
  from 'C:\xampp\htdocs\prestashop\themes\classic\templates\checkout\checkout.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_675d76ab1828c9_78637876',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bb47e1edaa992253a84d86af53b4d31e08ee9169' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashop\\themes\\classic\\templates\\checkout\\checkout.tpl',
      1 => 1734178042,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:_partials/head.tpl' => 1,
    'file:checkout/_partials/header.tpl' => 1,
    'file:_partials/notifications.tpl' => 1,
    'file:checkout/_partials/cart-summary.tpl' => 1,
    'file:checkout/_partials/footer.tpl' => 1,
    'file:_partials/javascript.tpl' => 1,
  ),
),false)) {
function content_675d76ab1828c9_78637876 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!doctype html>
<html lang="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['language']->value['iso_code'], ENT_QUOTES, 'UTF-8');?>
">

  <head>
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_416289764675d76ab172554_73851990', 'head');
?>

  </head>

  <body id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value['page_name'], ENT_QUOTES, 'UTF-8');?>
" class="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'classnames' ][ 0 ], array( $_smarty_tpl->tpl_vars['page']->value['body_classes'] )), ENT_QUOTES, 'UTF-8');?>
">

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1721985460675d76ab1756b6_40156253', 'hook_after_body_opening_tag');
?>


    <header id="header">
      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2025554393675d76ab176ab3_49166126', 'header');
?>

    </header>

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1999313343675d76ab177dd5_34663741', 'notifications');
?>


    <section id="wrapper">
      <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayWrapperTop"),$_smarty_tpl ) );?>

      <div class="container">

      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1616273873675d76ab179e49_46886567', 'content');
?>

      </div>
      <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayWrapperBottom"),$_smarty_tpl ) );?>

    </section>

    <footer id="footer">
      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1015538506675d76ab17e7a6_87247629', 'footer');
?>

    </footer>

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1654293378675d76ab17f9f6_91013714', 'javascript_bottom');
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1225854017675d76ab1816c8_45331790', 'hook_before_body_closing_tag');
?>


  </body>

</html>
<?php }
/* {block 'head'} */
class Block_416289764675d76ab172554_73851990 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head' => 
  array (
    0 => 'Block_416289764675d76ab172554_73851990',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php $_smarty_tpl->_subTemplateRender('file:_partials/head.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <?php
}
}
/* {/block 'head'} */
/* {block 'hook_after_body_opening_tag'} */
class Block_1721985460675d76ab1756b6_40156253 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'hook_after_body_opening_tag' => 
  array (
    0 => 'Block_1721985460675d76ab1756b6_40156253',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayAfterBodyOpeningTag'),$_smarty_tpl ) );?>

    <?php
}
}
/* {/block 'hook_after_body_opening_tag'} */
/* {block 'header'} */
class Block_2025554393675d76ab176ab3_49166126 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header' => 
  array (
    0 => 'Block_2025554393675d76ab176ab3_49166126',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <?php $_smarty_tpl->_subTemplateRender('file:checkout/_partials/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
      <?php
}
}
/* {/block 'header'} */
/* {block 'notifications'} */
class Block_1999313343675d76ab177dd5_34663741 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'notifications' => 
  array (
    0 => 'Block_1999313343675d76ab177dd5_34663741',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php $_smarty_tpl->_subTemplateRender('file:_partials/notifications.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <?php
}
}
/* {/block 'notifications'} */
/* {block 'cart_summary'} */
class Block_1192299879675d76ab17a599_80789005 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['render'][0], array( array('file'=>'checkout/checkout-process.tpl','ui'=>$_smarty_tpl->tpl_vars['checkout_process']->value),$_smarty_tpl ) );?>

              <?php
}
}
/* {/block 'cart_summary'} */
/* {block 'cart_summary'} */
class Block_1736726584675d76ab17bb66_86870419 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                <?php $_smarty_tpl->_subTemplateRender('file:checkout/_partials/cart-summary.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('cart'=>$_smarty_tpl->tpl_vars['cart']->value), 0, false);
?>
              <?php
}
}
/* {/block 'cart_summary'} */
/* {block 'content'} */
class Block_1616273873675d76ab179e49_46886567 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_1616273873675d76ab179e49_46886567',
  ),
  'cart_summary' => 
  array (
    0 => 'Block_1192299879675d76ab17a599_80789005',
    1 => 'Block_1736726584675d76ab17bb66_86870419',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <section id="content">
          <div class="row">
            <div class="col-md-8">
              <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1192299879675d76ab17a599_80789005', 'cart_summary', $this->tplIndex);
?>

            </div>
            <div class="col-md-4">

              <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1736726584675d76ab17bb66_86870419', 'cart_summary', $this->tplIndex);
?>


              <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayReassurance'),$_smarty_tpl ) );?>

            </div>
          </div>
        </section>
      <?php
}
}
/* {/block 'content'} */
/* {block 'footer'} */
class Block_1015538506675d76ab17e7a6_87247629 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_1015538506675d76ab17e7a6_87247629',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <?php $_smarty_tpl->_subTemplateRender('file:checkout/_partials/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
      <?php
}
}
/* {/block 'footer'} */
/* {block 'javascript_bottom'} */
class Block_1654293378675d76ab17f9f6_91013714 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'javascript_bottom' => 
  array (
    0 => 'Block_1654293378675d76ab17f9f6_91013714',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php $_smarty_tpl->_subTemplateRender("file:_partials/javascript.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('javascript'=>$_smarty_tpl->tpl_vars['javascript']->value['bottom']), 0, false);
?>
    <?php
}
}
/* {/block 'javascript_bottom'} */
/* {block 'hook_before_body_closing_tag'} */
class Block_1225854017675d76ab1816c8_45331790 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'hook_before_body_closing_tag' => 
  array (
    0 => 'Block_1225854017675d76ab1816c8_45331790',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayBeforeBodyClosingTag'),$_smarty_tpl ) );?>

    <?php
}
}
/* {/block 'hook_before_body_closing_tag'} */
}
