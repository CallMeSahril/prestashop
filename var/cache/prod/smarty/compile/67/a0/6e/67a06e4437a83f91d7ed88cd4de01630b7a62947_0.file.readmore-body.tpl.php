<?php
/* Smarty version 3.1.33, created on 2024-12-14 13:14:38
  from 'C:\xampp\htdocs\prestashop\admin\themes\default\template\controllers\modules\readmore-body.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_675d76ae2d9b33_85402029',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '67a06e4437a83f91d7ed88cd4de01630b7a62947' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashop\\admin\\themes\\default\\template\\controllers\\modules\\readmore-body.tpl',
      1 => 1734178038,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_675d76ae2d9b33_85402029 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="container-fluid ">
	<div class="row">
		<?php if ((int)$_smarty_tpl->tpl_vars['nb_rates']->value > 0) {?>
			<div class="rating col-md-3">
				<span class="star<?php if ($_smarty_tpl->tpl_vars['avg_rate']->value == 5) {?> active<?php }?>"></span>
				<span class="star<?php if ($_smarty_tpl->tpl_vars['avg_rate']->value == 4) {?> active<?php }?>"></span>
				<span class="star<?php if ($_smarty_tpl->tpl_vars['avg_rate']->value == 3) {?> active<?php }?>"></span>
				<span class="star<?php if ($_smarty_tpl->tpl_vars['avg_rate']->value == 2) {?> active<?php }?>"></span>
				<span class="star<?php if ($_smarty_tpl->tpl_vars['avg_rate']->value == 1) {?> active<?php }?>"></span>
			</div>
			<div class="col-md-2"><?php if ((int)$_smarty_tpl->tpl_vars['nb_rates']->value > 1) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>"(%s votes)",'sprintf'=>array($_smarty_tpl->tpl_vars['nb_rates']->value)),$_smarty_tpl ) );
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>"(%s vote)",'sprintf'=>array($_smarty_tpl->tpl_vars['nb_rates']->value)),$_smarty_tpl ) );
}?></div>
			<div class="col-md-3">
			<?php if (isset($_smarty_tpl->tpl_vars['badges']->value)) {?>
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['badges']->value, 'badge');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['badge']->value) {
?>
					<img src="<?php echo $_smarty_tpl->tpl_vars['badge']->value;?>
" alt="" class="clearfix" />
				<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
			<?php }?>
			</div>
			<?php if ((int)$_smarty_tpl->tpl_vars['price']->value) {?>
				<div class="quickview-price">
					<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayPrice'][0], array( array('price'=>$_smarty_tpl->tpl_vars['price']->value,'currency'=>$_smarty_tpl->tpl_vars['id_currency']->value),$_smarty_tpl ) );?>

				</div>
			<?php }?>
		<?php }?>
	</div>
	<div class="row">
		<hr />
		<h4><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>"Description"),$_smarty_tpl ) );?>
</h3>
		<hr />
		<p class="text-justify"><?php echo $_smarty_tpl->tpl_vars['description_full']->value;?>
</p>
	</div>
	<?php if (isset($_smarty_tpl->tpl_vars['additional_description']->value) && trim($_smarty_tpl->tpl_vars['additional_description']->value) != '') {?>
	<div class="row">
		<hr />
		<h4><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>"Merchant benefits"),$_smarty_tpl ) );?>
</h3>
		<hr />
		<p class="text-justify"><?php echo $_smarty_tpl->tpl_vars['additional_description']->value;?>
</p>
	</div>
	<?php }?>
	<div class="row">
		<?php if ($_smarty_tpl->tpl_vars['installed']->value) {?>
			<div class="btn-group-action pull-right">
				<?php if (count($_smarty_tpl->tpl_vars['options']->value) > 0) {?>
				<div class="btn-group">
					<?php $_smarty_tpl->_assignInScope('option', $_smarty_tpl->tpl_vars['options']->value[0]);?>
					<?php echo $_smarty_tpl->tpl_vars['option']->value;?>

					<?php if (count($_smarty_tpl->tpl_vars['options']->value) > 1) {?>
					<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" >
						<span class="caret">&nbsp;</span>
					</button>
					<ul class="dropdown-menu pull-right">

					<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['options']->value, 'option', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['option']->value) {
?>
						<?php if ($_smarty_tpl->tpl_vars['key']->value != 0) {?>
							<?php if (strpos($_smarty_tpl->tpl_vars['option']->value,'title="divider"') !== false) {?>
								<li class="divider"></li>
							<?php } else { ?>
								<li><?php echo $_smarty_tpl->tpl_vars['option']->value;?>
</li>
							<?php }?>
						<?php }?>
					<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
					</ul>
					<?php }?>
				</div>
				<?php }?>
			</div>
		<?php } elseif ($_smarty_tpl->tpl_vars['is_addons_partner']->value) {?>
			<a class="btn btn-success btn-lg pull-right" href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Install module'),$_smarty_tpl ) );?>
</a>
		<?php } else { ?>
			<a class="btn btn-success btn-lg pull-right" href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
" onclick="return !window.open(this.href, '_blank');"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'View on PrestaShop Addons'),$_smarty_tpl ) );?>
</a>
		<?php }?>
	</div>
</div>
<?php }
}
