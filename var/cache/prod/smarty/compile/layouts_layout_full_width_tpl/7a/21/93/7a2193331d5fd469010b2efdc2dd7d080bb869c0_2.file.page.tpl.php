<?php
/* Smarty version 3.1.33, created on 2024-12-14 20:18:02
  from 'C:\xampp\htdocs\prestashop\themes\classic\templates\customer\page.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_675d777a479c80_14260699',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7a2193331d5fd469010b2efdc2dd7d080bb869c0' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashop\\themes\\classic\\templates\\customer\\page.tpl',
      1 => 1734178042,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:_partials/notifications.tpl' => 1,
    'file:customer/_partials/my-account-links.tpl' => 1,
  ),
),false)) {
function content_675d777a479c80_14260699 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_261427480675d777a470186_56584024', 'notifications');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_113344409675d777a470d29_57415214', 'page_content_container');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1047673164675d777a478596_46163276', 'page_footer');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'page.tpl');
}
/* {block 'notifications'} */
class Block_261427480675d777a470186_56584024 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'notifications' => 
  array (
    0 => 'Block_261427480675d777a470186_56584024',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'notifications'} */
/* {block 'customer_notifications'} */
class Block_1643616834675d777a4718b2_97937329 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <?php $_smarty_tpl->_subTemplateRender('file:_partials/notifications.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
      <?php
}
}
/* {/block 'customer_notifications'} */
/* {block 'page_content_top'} */
class Block_1667533924675d777a471367_06068000 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1643616834675d777a4718b2_97937329', 'customer_notifications', $this->tplIndex);
?>

    <?php
}
}
/* {/block 'page_content_top'} */
/* {block 'page_content'} */
class Block_1109166642675d777a477813_35217384 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <!-- Page content -->
    <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_113344409675d777a470d29_57415214 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content_container' => 
  array (
    0 => 'Block_113344409675d777a470d29_57415214',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_1667533924675d777a471367_06068000',
  ),
  'customer_notifications' => 
  array (
    0 => 'Block_1643616834675d777a4718b2_97937329',
  ),
  'page_content' => 
  array (
    0 => 'Block_1109166642675d777a477813_35217384',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <section id="content" class="page-content">
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1667533924675d777a471367_06068000', 'page_content_top', $this->tplIndex);
?>

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1109166642675d777a477813_35217384', 'page_content', $this->tplIndex);
?>

  </section>
<?php
}
}
/* {/block 'page_content_container'} */
/* {block 'my_account_links'} */
class Block_1130363567675d777a478b84_69144289 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php $_smarty_tpl->_subTemplateRender('file:customer/_partials/my-account-links.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
  <?php
}
}
/* {/block 'my_account_links'} */
/* {block 'page_footer'} */
class Block_1047673164675d777a478596_46163276 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_footer' => 
  array (
    0 => 'Block_1047673164675d777a478596_46163276',
  ),
  'my_account_links' => 
  array (
    0 => 'Block_1130363567675d777a478b84_69144289',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1130363567675d777a478b84_69144289', 'my_account_links', $this->tplIndex);
?>

<?php
}
}
/* {/block 'page_footer'} */
}
