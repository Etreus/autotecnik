<?php /* Smarty version Smarty-3.1.14, created on 2014-04-12 22:28:46
         compiled from "/Applications/MAMP/htdocs/autotecnik/themes/default-bootstrap/modules/productscategory/productscategory.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11892439085349a1fe9d8874-49342352%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '91210800991343bd156b698e65a8dbbb0f319d85' => 
    array (
      0 => '/Applications/MAMP/htdocs/autotecnik/themes/default-bootstrap/modules/productscategory/productscategory.tpl',
      1 => 1397171352,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11892439085349a1fe9d8874-49342352',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'categoryProducts' => 0,
    'categoryProduct' => 0,
    'link' => 0,
    'ProdDisplayPrice' => 0,
    'restricted_country_mode' => 0,
    'PS_CATALOG_MODE' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5349a1feba9bc0_68739849',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5349a1feba9bc0_68739849')) {function content_5349a1feba9bc0_68739849($_smarty_tpl) {?>
<?php if (count($_smarty_tpl->tpl_vars['categoryProducts']->value)>0&&$_smarty_tpl->tpl_vars['categoryProducts']->value!==false){?>
<section class="page-product-box blockproductscategory">
	<h3 class="productscategory_h3 page-product-heading"><?php echo count($_smarty_tpl->tpl_vars['categoryProducts']->value);?>
 <?php echo smartyTranslate(array('s'=>'other products in the same category:','mod'=>'productscategory'),$_smarty_tpl);?>
</h3>
	<div id="productscategory_list" class="clearfix">
		<ul id="bxslider1" class="bxslider clearfix">
		 <?php  $_smarty_tpl->tpl_vars['categoryProduct'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['categoryProduct']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['categoryProducts']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['categoryProduct']->key => $_smarty_tpl->tpl_vars['categoryProduct']->value){
$_smarty_tpl->tpl_vars['categoryProduct']->_loop = true;
?>
			<li class="product-box item">
				<a href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getProductLink($_smarty_tpl->tpl_vars['categoryProduct']->value['id_product'],$_smarty_tpl->tpl_vars['categoryProduct']->value['link_rewrite'],$_smarty_tpl->tpl_vars['categoryProduct']->value['category'],$_smarty_tpl->tpl_vars['categoryProduct']->value['ean13']);?>
" class="lnk_img product-image" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['categoryProduct']->value['name']);?>
"><img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getImageLink($_smarty_tpl->tpl_vars['categoryProduct']->value['link_rewrite'],$_smarty_tpl->tpl_vars['categoryProduct']->value['id_image'],'home_default'), ENT_QUOTES, 'UTF-8', true);?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['categoryProduct']->value['name']);?>
" /></a>
                
				<h5 class="product-name">
					<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getProductLink($_smarty_tpl->tpl_vars['categoryProduct']->value['id_product'],$_smarty_tpl->tpl_vars['categoryProduct']->value['link_rewrite'],$_smarty_tpl->tpl_vars['categoryProduct']->value['category'],$_smarty_tpl->tpl_vars['categoryProduct']->value['ean13']), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['categoryProduct']->value['name']);?>
"><?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['truncate'][0][0]->smarty_modifier_truncate($_smarty_tpl->tpl_vars['categoryProduct']->value['name'],14,'...'), ENT_QUOTES, 'UTF-8', true);?>
</a>
				</h5>
				<?php if ($_smarty_tpl->tpl_vars['ProdDisplayPrice']->value&&$_smarty_tpl->tpl_vars['categoryProduct']->value['show_price']==1&&!isset($_smarty_tpl->tpl_vars['restricted_country_mode']->value)&&!$_smarty_tpl->tpl_vars['PS_CATALOG_MODE']->value){?>
				<p class="price_display">
					<span class="price<?php if (isset($_smarty_tpl->tpl_vars['categoryProduct']->value['specific_prices'])&&$_smarty_tpl->tpl_vars['categoryProduct']->value['specific_prices']){?> special-price<?php }?>"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPrice'][0][0]->convertPrice(array('price'=>$_smarty_tpl->tpl_vars['categoryProduct']->value['displayed_price']),$_smarty_tpl);?>
</span>
                    <?php if (isset($_smarty_tpl->tpl_vars['categoryProduct']->value['specific_prices']['reduction'])&&$_smarty_tpl->tpl_vars['categoryProduct']->value['specific_prices']['reduction']&&$_smarty_tpl->tpl_vars['categoryProduct']->value['specific_prices']['reduction_type']=='percentage'){?><span class="price-percent-reduction small">-<?php echo $_smarty_tpl->tpl_vars['categoryProduct']->value['specific_prices']['reduction']*100;?>
%</span><?php }?>
                    <?php if (isset($_smarty_tpl->tpl_vars['categoryProduct']->value['specific_prices'])&&$_smarty_tpl->tpl_vars['categoryProduct']->value['specific_prices']){?><span class="old-price"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayWtPrice'][0][0]->displayWtPrice(array('p'=>$_smarty_tpl->tpl_vars['categoryProduct']->value['price_without_reduction']),$_smarty_tpl);?>
</span><?php }?>
				</p>
				<?php }else{ ?>
				<br />
				<?php }?>
			</li>
		<?php } ?>
		</ul>
	</div>
</section>
<?php }?><?php }} ?>