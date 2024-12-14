<?php
/* Smarty version 3.1.33, created on 2024-12-14 13:14:34
  from 'C:\xampp\htdocs\prestashop\themes\classic\templates\catalog\_partials\facets.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_675d76aab8b755_50766210',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4d3b07d65cd7bd2d130540b9b488f1b85f5c4667' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashop\\themes\\classic\\templates\\catalog\\_partials\\facets.tpl',
      1 => 1734178042,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_675d76aab8b755_50766210 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
  <div id="search_filters">

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1228059913675d76aab364c6_53055585', 'facets_title');
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1807860759675d76aab38b13_35375678', 'facets_clearall_button');
?>


    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['facets']->value, 'facet');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['facet']->value) {
?>
      <?php if ($_smarty_tpl->tpl_vars['facet']->value['displayed']) {?>
        <section class="facet clearfix">
          <p class="h6 facet-title hidden-sm-down"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['facet']->value['label'], ENT_QUOTES, 'UTF-8');?>
</p>
          <?php $_smarty_tpl->_assignInScope('_expand_id', mt_rand(10,100000));?>
          <?php $_smarty_tpl->_assignInScope('_collapse', true);?>
          <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['facet']->value['filters'], 'filter');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['filter']->value) {
?>
            <?php if ($_smarty_tpl->tpl_vars['filter']->value['active']) {
$_smarty_tpl->_assignInScope('_collapse', false);
}?>
          <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
          <div class="title hidden-md-up" data-target="#facet_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_expand_id']->value, ENT_QUOTES, 'UTF-8');?>
" data-toggle="collapse"<?php if (!$_smarty_tpl->tpl_vars['_collapse']->value) {?> aria-expanded="true"<?php }?>>
            <p class="h6 facet-title"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['facet']->value['label'], ENT_QUOTES, 'UTF-8');?>
</p>
            <span class="float-xs-right">
              <span class="navbar-toggler collapse-icons">
                <i class="material-icons add">&#xE313;</i>
                <i class="material-icons remove">&#xE316;</i>
              </span>
            </span>
          </div>

          <?php if ($_smarty_tpl->tpl_vars['facet']->value['widgetType'] !== 'dropdown') {?>

            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1432087144675d76aab4f599_13918335', 'facet_item_other');
?>


          <?php } else { ?>

            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2114898441675d76aab78a59_52555758', 'facet_item_dropdown');
?>


          <?php }?>
        </section>
      <?php }?>
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
  </div>
<?php }
/* {block 'facets_title'} */
class Block_1228059913675d76aab364c6_53055585 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'facets_title' => 
  array (
    0 => 'Block_1228059913675d76aab364c6_53055585',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <p class="text-uppercase h6 hidden-sm-down"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Filter By','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
</p>
    <?php
}
}
/* {/block 'facets_title'} */
/* {block 'facets_clearall_button'} */
class Block_1807860759675d76aab38b13_35375678 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'facets_clearall_button' => 
  array (
    0 => 'Block_1807860759675d76aab38b13_35375678',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <div id="_desktop_search_filters_clear_all" class="hidden-sm-down clear-all-wrapper">
        <button data-search-url="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['clear_all_link']->value, ENT_QUOTES, 'UTF-8');?>
" class="btn btn-tertiary js-search-filters-clear-all">
          <i class="material-icons">&#xE14C;</i>
          <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Clear all','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>

        </button>
      </div>
    <?php
}
}
/* {/block 'facets_clearall_button'} */
/* {block 'facet_item_other'} */
class Block_1432087144675d76aab4f599_13918335 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'facet_item_other' => 
  array (
    0 => 'Block_1432087144675d76aab4f599_13918335',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

              <ul id="facet_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_expand_id']->value, ENT_QUOTES, 'UTF-8');?>
" class="collapse<?php if (!$_smarty_tpl->tpl_vars['_collapse']->value) {?> in<?php }?>">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['facet']->value['filters'], 'filter', false, 'filter_key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['filter_key']->value => $_smarty_tpl->tpl_vars['filter']->value) {
?>
                  <?php if ($_smarty_tpl->tpl_vars['filter']->value['displayed']) {?>
                    <li>
                      <label class="facet-label<?php if ($_smarty_tpl->tpl_vars['filter']->value['active']) {?> active <?php }?>" for="facet_input_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_expand_id']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['filter_key']->value, ENT_QUOTES, 'UTF-8');?>
">
                        <?php if ($_smarty_tpl->tpl_vars['facet']->value['multipleSelectionAllowed']) {?>
                          <span class="custom-checkbox">
                            <input
                              id="facet_input_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_expand_id']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['filter_key']->value, ENT_QUOTES, 'UTF-8');?>
"
                              data-search-url="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['filter']->value['nextEncodedFacetsURL'], ENT_QUOTES, 'UTF-8');?>
"
                              type="checkbox"
                              <?php if ($_smarty_tpl->tpl_vars['filter']->value['active']) {?> checked <?php }?>
                            >
                            <?php if (isset($_smarty_tpl->tpl_vars['filter']->value['properties']['color'])) {?>
                              <span class="color" style="background-color:<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['filter']->value['properties']['color'], ENT_QUOTES, 'UTF-8');?>
"></span>
                              <?php } elseif (isset($_smarty_tpl->tpl_vars['filter']->value['properties']['texture'])) {?>
                                <span class="color texture" style="background-image:url(<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['filter']->value['properties']['texture'], ENT_QUOTES, 'UTF-8');?>
)"></span>
                              <?php } else { ?>
                              <span <?php if (!$_smarty_tpl->tpl_vars['js_enabled']->value) {?> class="ps-shown-by-js" <?php }?>><i class="material-icons rtl-no-flip checkbox-checked">&#xE5CA;</i></span>
                            <?php }?>
                          </span>
                        <?php } else { ?>
                          <span class="custom-radio">
                            <input
                              id="facet_input_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_expand_id']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['filter_key']->value, ENT_QUOTES, 'UTF-8');?>
"
                              data-search-url="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['filter']->value['nextEncodedFacetsURL'], ENT_QUOTES, 'UTF-8');?>
"
                              type="radio"
                              name="filter <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['facet']->value['label'], ENT_QUOTES, 'UTF-8');?>
"
                              <?php if ($_smarty_tpl->tpl_vars['filter']->value['active']) {?> checked <?php }?>
                            >
                            <span <?php if (!$_smarty_tpl->tpl_vars['js_enabled']->value) {?> class="ps-shown-by-js" <?php }?>></span>
                          </span>
                        <?php }?>

                        <a
                          href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['filter']->value['nextEncodedFacetsURL'], ENT_QUOTES, 'UTF-8');?>
"
                          class="_gray-darker search-link js-search-link"
                          rel="nofollow"
                        >
                          <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['filter']->value['label'], ENT_QUOTES, 'UTF-8');?>

                          <?php if ($_smarty_tpl->tpl_vars['filter']->value['magnitude']) {?>
                            <span class="magnitude">(<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['filter']->value['magnitude'], ENT_QUOTES, 'UTF-8');?>
)</span>
                          <?php }?>
                        </a>
                      </label>
                    </li>
                  <?php }?>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
              </ul>
            <?php
}
}
/* {/block 'facet_item_other'} */
/* {block 'facet_item_dropdown'} */
class Block_2114898441675d76aab78a59_52555758 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'facet_item_dropdown' => 
  array (
    0 => 'Block_2114898441675d76aab78a59_52555758',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

              <ul id="facet_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_expand_id']->value, ENT_QUOTES, 'UTF-8');?>
" class="collapse<?php if (!$_smarty_tpl->tpl_vars['_collapse']->value) {?> in<?php }?>">
                <li>
                  <div class="col-sm-12 col-xs-12 col-md-12 facet-dropdown dropdown">
                    <a class="select-title" rel="nofollow" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <?php $_smarty_tpl->_assignInScope('active_found', false);?>
                      <span>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['facet']->value['filters'], 'filter');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['filter']->value) {
?>
                          <?php if ($_smarty_tpl->tpl_vars['filter']->value['active']) {?>
                            <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['filter']->value['label'], ENT_QUOTES, 'UTF-8');?>

                            <?php if ($_smarty_tpl->tpl_vars['filter']->value['magnitude']) {?>
                              (<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['filter']->value['magnitude'], ENT_QUOTES, 'UTF-8');?>
)
                            <?php }?>
                            <?php $_smarty_tpl->_assignInScope('active_found', true);?>
                          <?php }?>
                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        <?php if (!$_smarty_tpl->tpl_vars['active_found']->value) {?>
                          <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'(no filter)','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>

                        <?php }?>
                      </span>
                      <i class="material-icons float-xs-right">&#xE5C5;</i>
                    </a>
                    <div class="dropdown-menu">
                      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['facet']->value['filters'], 'filter');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['filter']->value) {
?>
                        <?php if (!$_smarty_tpl->tpl_vars['filter']->value['active']) {?>
                          <a
                            rel="nofollow"
                            href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['filter']->value['nextEncodedFacetsURL'], ENT_QUOTES, 'UTF-8');?>
"
                            class="select-list"
                          >
                            <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['filter']->value['label'], ENT_QUOTES, 'UTF-8');?>

                            <?php if ($_smarty_tpl->tpl_vars['filter']->value['magnitude']) {?>
                              (<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['filter']->value['magnitude'], ENT_QUOTES, 'UTF-8');?>
)
                            <?php }?>
                          </a>
                        <?php }?>
                      <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </div>
                  </div>
                </li>
              </ul>
            <?php
}
}
/* {/block 'facet_item_dropdown'} */
}
