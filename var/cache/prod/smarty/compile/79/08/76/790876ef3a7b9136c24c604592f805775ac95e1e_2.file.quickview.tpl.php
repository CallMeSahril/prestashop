<?php
/* Smarty version 3.1.33, created on 2024-12-14 13:14:35
  from 'C:\xampp\htdocs\prestashop\themes\classic\templates\catalog\_partials\quickview.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_675d76ab0bf209_93451707',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '790876ef3a7b9136c24c604592f805775ac95e1e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashop\\themes\\classic\\templates\\catalog\\_partials\\quickview.tpl',
      1 => 1734178042,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:catalog/_partials/product-cover-thumbnails.tpl' => 1,
    'file:catalog/_partials/product-prices.tpl' => 1,
    'file:catalog/_partials/product-variants.tpl' => 1,
    'file:catalog/_partials/product-add-to-cart.tpl' => 1,
  ),
),false)) {
function content_675d76ab0bf209_93451707 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<div id="quickview-modal-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['id'], ENT_QUOTES, 'UTF-8');?>
-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['id_product_attribute'], ENT_QUOTES, 'UTF-8');?>
" class="modal fade quickview" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog" role="document">
   <div class="modal-content">
     <div class="modal-header">
       <button type="button" class="close" data-dismiss="modal" aria-label="Close">
         <span aria-hidden="true">&times;</span>
       </button>
     </div>
     <div class="modal-body">
      <div class="row">
        <div class="col-md-6 col-sm-6 hidden-xs-down">
          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_454197884675d76ab0b4677_47882308', 'product_cover_thumbnails');
?>

          <div class="arrows js-arrows">
            <i class="material-icons arrow-up js-arrow-up">&#xE316;</i>
            <i class="material-icons arrow-down js-arrow-down">&#xE313;</i>
          </div>
        </div>
        <div class="col-md-6 col-sm-6">
          <h1 class="h1"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8');?>
</h1>
          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_293244367675d76ab0b64a4_47398790', 'product_prices');
?>

          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1446664221675d76ab0b76d1_87140830', 'product_description_short');
?>

          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_367237553675d76ab0b8cb4_71531723', 'product_buy');
?>

        </div>
      </div>
     </div>
     <div class="modal-footer">
       <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductAdditionalInfo','product'=>$_smarty_tpl->tpl_vars['product']->value),$_smarty_tpl ) );?>

    </div>
   </div>
 </div>
</div>
<?php }
/* {block 'product_cover_thumbnails'} */
class Block_454197884675d76ab0b4677_47882308 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_cover_thumbnails' => 
  array (
    0 => 'Block_454197884675d76ab0b4677_47882308',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/product-cover-thumbnails.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
          <?php
}
}
/* {/block 'product_cover_thumbnails'} */
/* {block 'product_prices'} */
class Block_293244367675d76ab0b64a4_47398790 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_prices' => 
  array (
    0 => 'Block_293244367675d76ab0b64a4_47398790',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/product-prices.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
          <?php
}
}
/* {/block 'product_prices'} */
/* {block 'product_description_short'} */
class Block_1446664221675d76ab0b76d1_87140830 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_description_short' => 
  array (
    0 => 'Block_1446664221675d76ab0b76d1_87140830',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <div id="product-description-short" itemprop="description"><?php echo $_smarty_tpl->tpl_vars['product']->value['description_short'];?>
</div>
          <?php
}
}
/* {/block 'product_description_short'} */
/* {block 'product_variants'} */
class Block_1041929789675d76ab0bb4e9_72803700 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                  <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/product-variants.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                <?php
}
}
/* {/block 'product_variants'} */
/* {block 'product_add_to_cart'} */
class Block_1036037078675d76ab0bc683_86316899 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                  <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/product-add-to-cart.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                <?php
}
}
/* {/block 'product_add_to_cart'} */
/* {block 'product_refresh'} */
class Block_1591737072675d76ab0bd956_24630914 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'product_refresh'} */
/* {block 'product_buy'} */
class Block_367237553675d76ab0b8cb4_71531723 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_buy' => 
  array (
    0 => 'Block_367237553675d76ab0b8cb4_71531723',
  ),
  'product_variants' => 
  array (
    0 => 'Block_1041929789675d76ab0bb4e9_72803700',
  ),
  'product_add_to_cart' => 
  array (
    0 => 'Block_1036037078675d76ab0bc683_86316899',
  ),
  'product_refresh' => 
  array (
    0 => 'Block_1591737072675d76ab0bd956_24630914',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <div class="product-actions">
              <form action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['pages']['cart'], ENT_QUOTES, 'UTF-8');?>
" method="post" id="add-to-cart-or-refresh">
                <input type="hidden" name="token" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['static_token']->value, ENT_QUOTES, 'UTF-8');?>
">
                <input type="hidden" name="id_product" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['id'], ENT_QUOTES, 'UTF-8');?>
" id="product_page_product_id">
                <input type="hidden" name="id_customization" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['id_customization'], ENT_QUOTES, 'UTF-8');?>
" id="product_customization_id">
                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1041929789675d76ab0bb4e9_72803700', 'product_variants', $this->tplIndex);
?>


                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1036037078675d76ab0bc683_86316899', 'product_add_to_cart', $this->tplIndex);
?>


                                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1591737072675d76ab0bd956_24630914', 'product_refresh', $this->tplIndex);
?>

            </form>
          </div>
        <?php
}
}
/* {/block 'product_buy'} */
}
