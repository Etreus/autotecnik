<?php /* Smarty version Smarty-3.1.14, created on 2014-04-12 22:28:16
         compiled from "/Applications/MAMP/htdocs/autotecnik/admin/themes/default/template/content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3181416755349a1e0391090-18811216%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '098b89d02ea9360970af993ced2d57ba7d3f1e02' => 
    array (
      0 => '/Applications/MAMP/htdocs/autotecnik/admin/themes/default/template/content.tpl',
      1 => 1397171352,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3181416755349a1e0391090-18811216',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5349a1e0435670_99564485',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5349a1e0435670_99564485')) {function content_5349a1e0435670_99564485($_smarty_tpl) {?>
<div id="ajax_confirmation" class="alert alert-success hide"></div>

<div id="ajaxBox" style="display:none"></div>

<?php if (isset($_smarty_tpl->tpl_vars['content']->value)){?>
	<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

<?php }?>
<?php }} ?>