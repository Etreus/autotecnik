<?php /* Smarty version Smarty-3.1.14, created on 2014-04-12 15:38:13
         compiled from "/Applications/MAMP/htdocs/autotecnik/admin3972/themes/default/template/content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3401974375349a435249339-78754406%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0e646288612478a07421a9350c9e4f72eb0c4c5e' => 
    array (
      0 => '/Applications/MAMP/htdocs/autotecnik/admin3972/themes/default/template/content.tpl',
      1 => 1397171352,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3401974375349a435249339-78754406',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5349a43529dc78_07579870',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5349a43529dc78_07579870')) {function content_5349a43529dc78_07579870($_smarty_tpl) {?>
<div id="ajax_confirmation" class="alert alert-success hide"></div>

<div id="ajaxBox" style="display:none"></div>

<?php if (isset($_smarty_tpl->tpl_vars['content']->value)){?>
	<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

<?php }?>
<?php }} ?>