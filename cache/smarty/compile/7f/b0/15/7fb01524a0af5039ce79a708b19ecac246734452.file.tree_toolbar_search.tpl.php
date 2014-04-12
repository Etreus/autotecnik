<?php /* Smarty version Smarty-3.1.14, created on 2014-04-12 22:28:33
         compiled from "/Applications/MAMP/htdocs/autotecnik/admin/themes/default/template/helpers/tree/tree_toolbar_search.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10547542635349a1f1472c84-54304310%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7fb01524a0af5039ce79a708b19ecac246734452' => 
    array (
      0 => '/Applications/MAMP/htdocs/autotecnik/admin/themes/default/template/helpers/tree/tree_toolbar_search.tpl',
      1 => 1397171352,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10547542635349a1f1472c84-54304310',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'label' => 0,
    'id' => 0,
    'name' => 0,
    'class' => 0,
    'typeahead_source' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5349a1f151cf29_79361711',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5349a1f151cf29_79361711')) {function content_5349a1f151cf29_79361711($_smarty_tpl) {?>

<!-- <label for="node-search"><?php echo smartyTranslate(array('s'=>$_smarty_tpl->tpl_vars['label']->value),$_smarty_tpl);?>
</label> -->
<div class="pull-right">
	<input type="text"
		<?php if (isset($_smarty_tpl->tpl_vars['id']->value)){?>id="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
"<?php }?>
		<?php if (isset($_smarty_tpl->tpl_vars['name']->value)){?>name="<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
"<?php }?>
		class="search-field <?php if (isset($_smarty_tpl->tpl_vars['class']->value)){?> <?php echo $_smarty_tpl->tpl_vars['class']->value;?>
<?php }?>"
		placeholder="<?php echo smartyTranslate(array('s'=>'search...'),$_smarty_tpl);?>
" />
</div>

<?php if (isset($_smarty_tpl->tpl_vars['typeahead_source']->value)&&isset($_smarty_tpl->tpl_vars['id']->value)){?>

<script type="text/javascript">
	$(document).ready(
		function()
		{
			$("#<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
").typeahead(
			{
				name: "<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
",
				valueKey: 'name',
				local: [<?php echo $_smarty_tpl->tpl_vars['typeahead_source']->value;?>
]
			});

			$("#<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
").keypress(function( event ) {
				if ( event.which == 13 ) {
					event.stopPropagation();
				}
			});
		}
	);
</script>
<?php }?>
<?php }} ?>