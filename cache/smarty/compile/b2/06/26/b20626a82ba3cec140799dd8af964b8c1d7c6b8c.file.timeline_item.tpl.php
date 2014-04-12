<?php /* Smarty version Smarty-3.1.14, created on 2014-04-12 22:28:18
         compiled from "/Applications/MAMP/htdocs/autotecnik/admin/themes/default/template/controllers/customer_threads/helpers/view/timeline_item.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9901910355349a1e249ab90-41985398%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b20626a82ba3cec140799dd8af964b8c1d7c6b8c' => 
    array (
      0 => '/Applications/MAMP/htdocs/autotecnik/admin/themes/default/template/controllers/customer_threads/helpers/view/timeline_item.tpl',
      1 => 1397171352,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9901910355349a1e249ab90-41985398',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'timeline_item' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5349a1e250daf2_50386761',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5349a1e250daf2_50386761')) {function content_5349a1e250daf2_50386761($_smarty_tpl) {?>

<article class="timeline-item <?php if (isset($_smarty_tpl->tpl_vars['timeline_item']->value['alt'])){?> alt <?php }?>">
	<div class="timeline-caption">
		<div class="timeline-panel arrow arrow-<?php echo $_smarty_tpl->tpl_vars['timeline_item']->value['arrow'];?>
">
			<span class="timeline-icon" style="background-color:<?php echo $_smarty_tpl->tpl_vars['timeline_item']->value['background_color'];?>
">
				<i class="<?php echo $_smarty_tpl->tpl_vars['timeline_item']->value['icon'];?>
"></i>
			</span>
			<span class="timeline-date"><i class="icon-calendar"></i> <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['dateFormat'][0][0]->dateFormat(array('date'=>$_smarty_tpl->tpl_vars['timeline_item']->value['date'],'full'=>0),$_smarty_tpl);?>
 - <i class="icon-time"></i> <?php echo substr($_smarty_tpl->tpl_vars['timeline_item']->value['date'],11,5);?>
</span>
			<?php if (isset($_smarty_tpl->tpl_vars['timeline_item']->value['id_order'])){?><a class="badge" href="#"><?php echo smartyTranslate(array('s'=>"Order #"),$_smarty_tpl);?>
<?php echo $_smarty_tpl->tpl_vars['timeline_item']->value['id_order'];?>
</a><br><?php }?>
			<span><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['truncate'][0][0]->smarty_modifier_truncate($_smarty_tpl->tpl_vars['timeline_item']->value['content'],220);?>
</span>
			<?php if (isset($_smarty_tpl->tpl_vars['timeline_item']->value['see_more_link'])){?>
				<br><br><a href="<?php echo $_smarty_tpl->tpl_vars['timeline_item']->value['see_more_link'];?>
" target="_blank" class="btn btn-default"><?php echo smartyTranslate(array('s'=>"See more"),$_smarty_tpl);?>
</a>
			<?php }?>
		</div>
	</div>
</article><?php }} ?>