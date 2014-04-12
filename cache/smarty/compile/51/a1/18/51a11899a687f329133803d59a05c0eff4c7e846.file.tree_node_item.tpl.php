<?php /* Smarty version Smarty-3.1.14, created on 2014-04-12 22:28:33
         compiled from "/Applications/MAMP/htdocs/autotecnik/admin/themes/default/template/helpers/tree/tree_node_item.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20252783725349a1f1136849-79679136%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '51a11899a687f329133803d59a05c0eff4c7e846' => 
    array (
      0 => '/Applications/MAMP/htdocs/autotecnik/admin/themes/default/template/helpers/tree/tree_node_item.tpl',
      1 => 1397171352,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20252783725349a1f1136849-79679136',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'node' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5349a1f114abd5_45179168',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5349a1f114abd5_45179168')) {function content_5349a1f114abd5_45179168($_smarty_tpl) {?>

<li class="tree-item">
	<label class="tree-item-name">
		<i class="tree-dot"></i>
		<?php echo $_smarty_tpl->tpl_vars['node']->value['name'];?>

	</label>
</li><?php }} ?>