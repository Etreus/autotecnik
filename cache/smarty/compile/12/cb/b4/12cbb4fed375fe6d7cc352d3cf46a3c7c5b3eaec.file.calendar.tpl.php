<?php /* Smarty version Smarty-3.1.14, created on 2014-04-12 22:28:26
         compiled from "/Applications/MAMP/htdocs/autotecnik/admin/themes/default/template/controllers/stats/calendar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16724722315349a1ea570d16-95227196%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '12cbb4fed375fe6d7cc352d3cf46a3c7c5b3eaec' => 
    array (
      0 => '/Applications/MAMP/htdocs/autotecnik/admin/themes/default/template/controllers/stats/calendar.tpl',
      1 => 1397171352,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16724722315349a1ea570d16-95227196',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5349a1ea5788c8_62047639',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5349a1ea5788c8_62047639')) {function content_5349a1ea5788c8_62047639($_smarty_tpl) {?>

<div id="statsContainer" class="col-md-9">
	<?php echo $_smarty_tpl->getSubTemplate ("../../form_date_range_picker.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>