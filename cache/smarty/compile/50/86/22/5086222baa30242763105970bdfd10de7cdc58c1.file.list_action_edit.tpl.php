<?php /* Smarty version Smarty-3.1.14, created on 2014-04-12 17:56:55
         compiled from "/Applications/MAMP/htdocs/autotecnik/admin3972/themes/default/template/helpers/list/list_action_edit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16061366045349c4b7b15fe3-71128529%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5086222baa30242763105970bdfd10de7cdc58c1' => 
    array (
      0 => '/Applications/MAMP/htdocs/autotecnik/admin3972/themes/default/template/helpers/list/list_action_edit.tpl',
      1 => 1397171352,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16061366045349c4b7b15fe3-71128529',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'href' => 0,
    'action' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5349c4b7b2d419_10351266',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5349c4b7b2d419_10351266')) {function content_5349c4b7b2d419_10351266($_smarty_tpl) {?>
<a href="<?php echo $_smarty_tpl->tpl_vars['href']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
" class="edit">
	<i class="icon-pencil"></i> <?php echo $_smarty_tpl->tpl_vars['action']->value;?>

</a><?php }} ?>