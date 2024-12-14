<?php
/* Smarty version 3.1.33, created on 2024-12-14 13:14:34
  from 'C:\xampp\htdocs\prestashop\themes\classic\templates\catalog\_partials\miniatures\brand.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_675d76aabfedc0_11241331',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b72d584c01955c2d8f62033b4d705b223f03ddf5' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashop\\themes\\classic\\templates\\catalog\\_partials\\miniatures\\brand.tpl',
      1 => 1734178042,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_675d76aabfedc0_11241331 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_79878627675d76aabf4406_37567002', 'brand_miniature_item');
?>

<?php }
/* {block 'brand_miniature_item'} */
class Block_79878627675d76aabf4406_37567002 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'brand_miniature_item' => 
  array (
    0 => 'Block_79878627675d76aabf4406_37567002',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <li class="brand">
    <div class="brand-img"><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['brand']->value['url'], ENT_QUOTES, 'UTF-8');?>
"><img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['brand']->value['image'], ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['brand']->value['name'], ENT_QUOTES, 'UTF-8');?>
"></a></div>
    <div class="brand-infos">
      <p><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['brand']->value['url'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['brand']->value['name'], ENT_QUOTES, 'UTF-8');?>
</a></p>
      <?php echo $_smarty_tpl->tpl_vars['brand']->value['text'];?>

    </div>
    <div class="brand-products">
      <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['brand']->value['url'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['brand']->value['nb_products'], ENT_QUOTES, 'UTF-8');?>
</a>
      <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['brand']->value['url'], ENT_QUOTES, 'UTF-8');?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'View products','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
</a>
    </div>
  </li>
<?php
}
}
/* {/block 'brand_miniature_item'} */
}
