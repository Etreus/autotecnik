<?php /* Smarty version Smarty-3.1.14, created on 2014-04-12 22:28:30
         compiled from "/Applications/MAMP/htdocs/autotecnik/admin/themes/default/template/helpers/list/list_action_delete.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2626820525349a1ee2203b4-05095771%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'abe8fe86f6f00b864bb566a91b3ead5da789334f' => 
    array (
      0 => '/Applications/MAMP/htdocs/autotecnik/admin/themes/default/template/helpers/list/list_action_delete.tpl',
      1 => 1397171352,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2626820525349a1ee2203b4-05095771',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'href' => 0,
    'confirm' => 0,
    'action' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5349a1ee24baf6_05254777',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5349a1ee24baf6_05254777')) {function content_5349a1ee24baf6_05254777($_smarty_tpl) {?>
<a href="<?php echo $_smarty_tpl->tpl_vars['href']->value;?>
" <?php if (isset($_smarty_tpl->tpl_vars['confirm']->value)){?>onclick="if (confirm('<?php echo $_smarty_tpl->tpl_vars['confirm']->value;?>
')){ return true; }else{ event.stopPropagation(); event.preventDefault();};"<?php }?> title="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
" class="delete">
	<i class="icon-trash"></i> <?php echo $_smarty_tpl->tpl_vars['action']->value;?>

</a><?php }} ?>