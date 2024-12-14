<?php
/* Smarty version 3.1.33, created on 2024-12-14 13:14:35
  from 'C:\xampp\htdocs\prestashop\themes\classic\templates\customer\page.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_675d76aba97c58_92992791',
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
function content_675d76aba97c58_92992791 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2033970441675d76aba91713_38737932', 'notifications');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_502456328675d76aba92511_83574074', 'page_content_container');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_271828062675d76aba95ee1_08794890', 'page_footer');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'page.tpl');
}
/* {block 'notifications'} */
class Block_2033970441675d76aba91713_38737932 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'notifications' => 
  array (
    0 => 'Block_2033970441675d76aba91713_38737932',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'notifications'} */
/* {block 'customer_notifications'} */
class Block_784875390675d76aba93408_10091239 extends Smarty_Internal_Block
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
class Block_458354580675d76aba92cc3_19251421 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_784875390675d76aba93408_10091239', 'customer_notifications', $this->tplIndex);
?>

    <?php
}
}
/* {/block 'page_content_top'} */
/* {block 'page_content'} */
class Block_884240552675d76aba94d96_20468431 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <!-- Page content -->
    <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_502456328675d76aba92511_83574074 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content_container' => 
  array (
    0 => 'Block_502456328675d76aba92511_83574074',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_458354580675d76aba92cc3_19251421',
  ),
  'customer_notifications' => 
  array (
    0 => 'Block_784875390675d76aba93408_10091239',
  ),
  'page_content' => 
  array (
    0 => 'Block_884240552675d76aba94d96_20468431',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <section id="content" class="page-content">
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_458354580675d76aba92cc3_19251421', 'page_content_top', $this->tplIndex);
?>

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_884240552675d76aba94d96_20468431', 'page_content', $this->tplIndex);
?>

  </section>
<?php
}
}
/* {/block 'page_content_container'} */
/* {block 'my_account_links'} */
class Block_804051873675d76aba96630_79987435 extends Smarty_Internal_Block
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
class Block_271828062675d76aba95ee1_08794890 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_footer' => 
  array (
    0 => 'Block_271828062675d76aba95ee1_08794890',
  ),
  'my_account_links' => 
  array (
    0 => 'Block_804051873675d76aba96630_79987435',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_804051873675d76aba96630_79987435', 'my_account_links', $this->tplIndex);
?>

<?php
}
}
/* {/block 'page_footer'} */
}
