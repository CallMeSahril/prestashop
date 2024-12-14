<?php
/* Smarty version 3.1.33, created on 2024-12-14 13:14:35
  from 'C:\xampp\htdocs\prestashop\themes\classic\templates\checkout\cart.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_675d76ab13c560_79739780',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6b7889558ce2a4a0b97ff3e1295b526296c21027' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashop\\themes\\classic\\templates\\checkout\\cart.tpl',
      1 => 1734178042,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:checkout/_partials/cart-detailed.tpl' => 1,
    'file:checkout/_partials/cart-detailed-totals.tpl' => 1,
    'file:checkout/_partials/cart-detailed-actions.tpl' => 1,
  ),
),false)) {
function content_675d76ab13c560_79739780 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1636471953675d76ab12ffa6_28864726', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['layout']->value);
}
/* {block 'cart_overview'} */
class Block_1066754658675d76ab1312e1_79334596 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php $_smarty_tpl->_subTemplateRender('file:checkout/_partials/cart-detailed.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('cart'=>$_smarty_tpl->tpl_vars['cart']->value), 0, false);
?>
          <?php
}
}
/* {/block 'cart_overview'} */
/* {block 'continue_shopping'} */
class Block_944195134675d76ab1329a3_06079361 extends Smarty_Internal_Block
{
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
/* {block 'hook_shopping_cart_footer'} */
class Block_645344945675d76ab134916_24436874 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayShoppingCartFooter'),$_smarty_tpl ) );?>

        <?php
}
}
/* {/block 'hook_shopping_cart_footer'} */
/* {block 'hook_shopping_cart'} */
class Block_1687825781675d76ab136a53_16732657 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

              <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayShoppingCart'),$_smarty_tpl ) );?>

            <?php
}
}
/* {/block 'hook_shopping_cart'} */
/* {block 'cart_totals'} */
class Block_2144104521675d76ab137fe3_90877467 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

              <?php $_smarty_tpl->_subTemplateRender('file:checkout/_partials/cart-detailed-totals.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('cart'=>$_smarty_tpl->tpl_vars['cart']->value), 0, false);
?>
            <?php
}
}
/* {/block 'cart_totals'} */
/* {block 'cart_actions'} */
class Block_252420447675d76ab1394e3_19942960 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

              <?php $_smarty_tpl->_subTemplateRender('file:checkout/_partials/cart-detailed-actions.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('cart'=>$_smarty_tpl->tpl_vars['cart']->value), 0, false);
?>
            <?php
}
}
/* {/block 'cart_actions'} */
/* {block 'cart_summary'} */
class Block_794707475675d76ab135b23_75336446 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <div class="card cart-summary">

            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1687825781675d76ab136a53_16732657', 'hook_shopping_cart', $this->tplIndex);
?>


            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2144104521675d76ab137fe3_90877467', 'cart_totals', $this->tplIndex);
?>


            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_252420447675d76ab1394e3_19942960', 'cart_actions', $this->tplIndex);
?>


          </div>
        <?php
}
}
/* {/block 'cart_summary'} */
/* {block 'hook_reassurance'} */
class Block_1008526538675d76ab13aca1_06813043 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayReassurance'),$_smarty_tpl ) );?>

        <?php
}
}
/* {/block 'hook_reassurance'} */
/* {block 'content'} */
class Block_1636471953675d76ab12ffa6_28864726 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_1636471953675d76ab12ffa6_28864726',
  ),
  'cart_overview' => 
  array (
    0 => 'Block_1066754658675d76ab1312e1_79334596',
  ),
  'continue_shopping' => 
  array (
    0 => 'Block_944195134675d76ab1329a3_06079361',
  ),
  'hook_shopping_cart_footer' => 
  array (
    0 => 'Block_645344945675d76ab134916_24436874',
  ),
  'cart_summary' => 
  array (
    0 => 'Block_794707475675d76ab135b23_75336446',
  ),
  'hook_shopping_cart' => 
  array (
    0 => 'Block_1687825781675d76ab136a53_16732657',
  ),
  'cart_totals' => 
  array (
    0 => 'Block_2144104521675d76ab137fe3_90877467',
  ),
  'cart_actions' => 
  array (
    0 => 'Block_252420447675d76ab1394e3_19942960',
  ),
  'hook_reassurance' => 
  array (
    0 => 'Block_1008526538675d76ab13aca1_06813043',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


  <section id="main">
    <div class="cart-grid row">

      <!-- Left Block: cart product informations & shpping -->
      <div class="cart-grid-body col-xs-12 col-lg-8">

        <!-- cart products detailed -->
        <div class="card cart-container">
          <div class="card-block">
            <h1 class="h1"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Shopping Cart','d'=>'Shop.Theme.Checkout'),$_smarty_tpl ) );?>
</h1>
          </div>
          <hr class="separator">
          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1066754658675d76ab1312e1_79334596', 'cart_overview', $this->tplIndex);
?>

        </div>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_944195134675d76ab1329a3_06079361', 'continue_shopping', $this->tplIndex);
?>


        <!-- shipping informations -->
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_645344945675d76ab134916_24436874', 'hook_shopping_cart_footer', $this->tplIndex);
?>

      </div>

      <!-- Right Block: cart subtotal & cart total -->
      <div class="cart-grid-right col-xs-12 col-lg-4">

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_794707475675d76ab135b23_75336446', 'cart_summary', $this->tplIndex);
?>


        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1008526538675d76ab13aca1_06813043', 'hook_reassurance', $this->tplIndex);
?>


      </div>

    </div>
  </section>
<?php
}
}
/* {/block 'content'} */
}
