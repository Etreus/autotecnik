<?php /*%%SmartyHeaderCode:18935851055349a3e3259726-79332259%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '36fbcc1b16361b7112e99dffbb2f6933c0b045bf' => 
    array (
      0 => '/Applications/MAMP/htdocs/autotecnik/themes/default-bootstrap/modules/blocksearch/blocksearch-top.tpl',
      1 => 1397171352,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18935851055349a3e3259726-79332259',
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5349c7c7009062_03144029',
  'has_nocache_code' => false,
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5349c7c7009062_03144029')) {function content_5349c7c7009062_03144029($_smarty_tpl) {?><!-- Block search module TOP -->
<div id="search_block_top" class="col-sm-4 clearfix">
	<form id="searchbox" method="get" action="http://localhost:8888/autotecnik/en/buscar" >
		<input type="hidden" name="controller" value="search" />
		<input type="hidden" name="orderby" value="position" />
		<input type="hidden" name="orderway" value="desc" />
		<input class="search_query form-control" type="text" id="search_query_top" name="search_query" placeholder="Search" value="" />
		<button type="submit" name="submit_search" class="btn btn-default button-search">
			<span>Search</span>
		</button>
	</form>
</div>
<!-- /Block search module TOP --><?php }} ?>