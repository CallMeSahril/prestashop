<?php
/* Smarty version 3.1.33, created on 2024-12-14 13:14:36
  from 'C:\xampp\htdocs\prestashop\themes\classic\templates\_partials\form-errors.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_675d76ac05fb02_83139132',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'aee19a6a5c5f37cd0162748cad4986d68b825b33' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashop\\themes\\classic\\templates\\_partials\\form-errors.tpl',
      1 => 1734178042,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_675d76ac05fb02_83139132 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
if (count($_smarty_tpl->tpl_vars['errors']->value)) {?>
  <div class="help-block">
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2016330677675d76ac05d6a6_75970420', 'form_errors');
?>

  </div>
<?php }
}
/* {block 'form_errors'} */
class Block_2016330677675d76ac05d6a6_75970420 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'form_errors' => 
  array (
    0 => 'Block_2016330677675d76ac05d6a6_75970420',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <ul>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['errors']->value, 'error');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['error']->value) {
?>
          <li class="alert alert-danger"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['error']->value, ENT_QUOTES, 'UTF-8');?>
</li>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
      </ul>
    <?php
}
}
/* {/block 'form_errors'} */
}
