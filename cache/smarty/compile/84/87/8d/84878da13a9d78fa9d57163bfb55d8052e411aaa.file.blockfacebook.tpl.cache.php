<?php /* Smarty version Smarty-3.1.14, created on 2014-04-12 15:36:51
         compiled from "/Applications/MAMP/htdocs/autotecnik/modules/blockfacebook/blockfacebook.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1214896515349a3e3782695-24492785%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '84878da13a9d78fa9d57163bfb55d8052e411aaa' => 
    array (
      0 => '/Applications/MAMP/htdocs/autotecnik/modules/blockfacebook/blockfacebook.tpl',
      1 => 1397171352,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1214896515349a3e3782695-24492785',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'facebookurl' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5349a3e3808968_28099243',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5349a3e3808968_28099243')) {function content_5349a3e3808968_28099243($_smarty_tpl) {?>
<?php if ($_smarty_tpl->tpl_vars['facebookurl']->value!=''){?>
<div id="fb-root"></div>
<div id="facebook_block" class="col-xs-4">
	<h4 ><?php echo smartyTranslate(array('s'=>'Follow us on facebook','mod'=>'blockfacebook'),$_smarty_tpl);?>
</h4>
	<div class="facebook-fanbox">
		<div class="fb-like-box" data-href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['facebookurl']->value, ENT_QUOTES, 'UTF-8', true);?>
" data-colorscheme="light" data-show-faces="true" data-header="false" data-stream="false" data-show-border="false">
		</div>
	</div>
</div>
<?php }?>
<?php }} ?>