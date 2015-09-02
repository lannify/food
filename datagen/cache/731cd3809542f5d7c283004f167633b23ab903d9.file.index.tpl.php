<?php /* Smarty version Smarty-3.1.8, created on 2015-09-02 19:57:02
         compiled from "/Users/ike/Desktop/dojo/food/datagen/resources/templates/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:68263008255e7386ed02802-87326674%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '731cd3809542f5d7c283004f167633b23ab903d9' => 
    array (
      0 => '/Users/ike/Desktop/dojo/food/datagen/resources/templates/index.tpl',
      1 => 1432608962,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '68263008255e7386ed02802-87326674',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'L' => 0,
    'useMinifiedResources' => 0,
    'minifiedResourcePaths' => 0,
    'theme' => 0,
    'cssIncludes' => 0,
    'codeMirrorIncludes' => 0,
    'currLang' => 0,
    'isLoggedIn' => 0,
    'settings' => 0,
    'accountType' => 0,
    'exportTypeJSModules' => 0,
    'dataTypeJSModules' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_55e7386f019123_19590593',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55e7386f019123_19590593')) {function content_55e7386f019123_19590593($_smarty_tpl) {?><?php if (!is_callable('smarty_function_language_dropdown')) include '/Users/ike/Desktop/dojo/food/datagen/resources/libs/smarty/plugins/function.language_dropdown.php';
?><!DOCTYPE html>
<html>
<head>
	<title><?php echo $_smarty_tpl->tpl_vars['L']->value['title'];?>
</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="description" content="<?php echo $_smarty_tpl->tpl_vars['L']->value['meta_description'];?>
" />
	<meta name="keywords" content="<?php echo $_smarty_tpl->tpl_vars['L']->value['meta_keywords'];?>
" />

	<?php if ($_smarty_tpl->tpl_vars['useMinifiedResources']->value&&$_smarty_tpl->tpl_vars['minifiedResourcePaths']->value!=false){?>
		<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['minifiedResourcePaths']->value['coreCSS'];?>
" />
		<link rel="stylesheet" type="text/css" href="resources/css/smoothness/jquery-ui.min.css" />
		<link rel="stylesheet" type="text/css" href="resources/css/chosen/chosen.css" />
		<link rel="stylesheet" type="text/css" href="resources/themes/<?php echo $_smarty_tpl->tpl_vars['theme']->value;?>
/compiled/styles.css" />
		<script src="<?php echo $_smarty_tpl->tpl_vars['minifiedResourcePaths']->value['coreJS'];?>
"></script>
	<?php }else{ ?>

		<link rel="stylesheet" type="text/css" href="resources/css/smoothness/jquery-ui.min.css" />
		<link rel="stylesheet" type="text/css" href="resources/css/chosen/chosen.css" />
		<link rel="stylesheet" type="text/css" href="resources/css/tablesorter.theme.css" />
		<link rel="stylesheet" type="text/css" href="resources/libs/codemirror/lib/codemirror.css" />
		<link rel="stylesheet" type="text/css" href="resources/themes/<?php echo $_smarty_tpl->tpl_vars['theme']->value;?>
/compiled/styles.css" />

		<script src="resources/libs/codemirror/lib/codemirror.min.js"></script>
		<script src="resources/scripts/libs/jquery.min.js"></script>
		<script src="resources/scripts/libs/jquery-ui.min.js"></script>
		<script src="resources/scripts/libs/jquery.json-2.2.min.js"></script>
		<script src="resources/scripts/libs/chosen.jquery.min.js"></script>
		<script src="resources/scripts/libs/require.js"></script>
		<script src="resources/scripts/requireConfig.js"></script>
		<script src="resources/scripts/libs/spinners.js"></script>

		<!--[if lt IE 9]>
		<script src="resources/scripts/libs/html5shiv.js"></script>
		<script src="resources/scripts/libs/excanvas.js"></script>
		<![endif]-->
	<?php }?>

	<?php echo $_smarty_tpl->tpl_vars['cssIncludes']->value;?>

	<?php echo $_smarty_tpl->tpl_vars['codeMirrorIncludes']->value;?>

</head>
<body data-lang="<?php echo $_smarty_tpl->tpl_vars['currLang']->value;?>
" data-logged-in="<?php echo $_smarty_tpl->tpl_vars['isLoggedIn']->value;?>
" data-user-account-setup="<?php echo $_smarty_tpl->tpl_vars['settings']->value['userAccountSetup'];?>
">
	<header>
		<nav class="gdHideNoJS">
			<ul>
				<li id="gdUserAccount"<?php if (!$_smarty_tpl->tpl_vars['isLoggedIn']->value||$_smarty_tpl->tpl_vars['settings']->value['userAccountSetup']=="anonymousAdmin"){?> style="display:none"<?php }?>>
					<a href="#"><?php echo $_smarty_tpl->tpl_vars['L']->value['your_account'];?>
</a> |
				</li>
				<li id="gdLogin"<?php if ($_smarty_tpl->tpl_vars['isLoggedIn']->value||$_smarty_tpl->tpl_vars['settings']->value['userAccountSetup']=="anonymousAdmin"){?> style="display:none"<?php }?>>
					<a href="#"><?php echo $_smarty_tpl->tpl_vars['L']->value['login'];?>
</a> |
				</li>
				<li id="gdLogout"<?php if (!$_smarty_tpl->tpl_vars['isLoggedIn']->value||$_smarty_tpl->tpl_vars['settings']->value['userAccountSetup']=="anonymousAdmin"){?> style="display:none"<?php }?>>
					<a href="#"><?php echo $_smarty_tpl->tpl_vars['L']->value['logout'];?>
</a> |
				</li>
			</ul>
			<?php echo smarty_function_language_dropdown(array('nameId'=>"gdSelectLanguage"),$_smarty_tpl);?>

		</nav>
	</header>
	<nav id="gdMainTabs" class="gdHideNoJS">
		<span id="gdDataSetStatusLine"></span>
        <span id="gdDataSetHistoryNav" class="hidden">
            <a href="#" title="newer version" id="gdDataSetHistoryNavPrev" data-dir="newer">&laquo;</a>
            <select id="gdDataHistoryList"></select>
            <a href="#" title="older version" id="gdDataSetHistoryNavNext" data-dir="older">&raquo;</a>
        </span>
		<span id="gdProcessingIcon"></span>
		<ul>
			<li id="gdMainTab1" class="gdSelected"><?php echo $_smarty_tpl->tpl_vars['L']->value['generate'];?>
</li>
			<li id="gdMainTab2" <?php if ($_smarty_tpl->tpl_vars['settings']->value['userAccountSetup']!="multiple"||$_smarty_tpl->tpl_vars['accountType']->value!="admin"){?>style="display:none"<?php }?>><?php echo $_smarty_tpl->tpl_vars['L']->value['accounts'];?>
</li>
			<li id="gdMainTab3" <?php if ($_smarty_tpl->tpl_vars['settings']->value['userAccountSetup']!="anonymousAdmin"&&$_smarty_tpl->tpl_vars['accountType']->value!="admin"){?>style="display:none"<?php }?>><?php echo $_smarty_tpl->tpl_vars['L']->value['settings'];?>
</li>
			<li id="gdMainTab4"><?php echo $_smarty_tpl->tpl_vars['L']->value['about'];?>
</li>
		</ul>
	</nav>
	<noscript><p><?php echo $_smarty_tpl->tpl_vars['L']->value['no_js'];?>
</p></noscript>
	<section class="gdHideNoJS">
		<div id="gdContent">
			<ul class="gdMainTabContent">
				<li id="gdMainTab1Content"><?php echo $_smarty_tpl->getSubTemplate ("generate.tab1.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
</li>
				<li id="gdMainTab2Content" style="display:none"><?php echo $_smarty_tpl->getSubTemplate ("generate.tab2.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
</li>
				<li id="gdMainTab3Content" style="display:none"><?php echo $_smarty_tpl->getSubTemplate ("generate.tab3.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
</li>
				<li id="gdMainTab4Content" style="display:none"><?php echo $_smarty_tpl->getSubTemplate ("generate.tab4.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
</li>
			</ul>
		</div>
	</section>

	<div id="gdPageLoad"><?php echo $_smarty_tpl->tpl_vars['L']->value['loading'];?>
</div>

	<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


	<?php if ($_smarty_tpl->tpl_vars['useMinifiedResources']->value&&$_smarty_tpl->tpl_vars['minifiedResourcePaths']->value!=false){?>
		<script src="resources/scripts/libs/require.js"></script>
		<script src="resources/scripts/requireConfig.js"></script>
		<script>require(["<?php echo $_smarty_tpl->tpl_vars['minifiedResourcePaths']->value['appStart'];?>
"], function() {});</script>
	<?php }else{ ?>
		<script>
		require([
			"manager",
			"generator",
			"accountManager",
			<?php echo $_smarty_tpl->tpl_vars['exportTypeJSModules']->value;?>
,
			<?php echo $_smarty_tpl->tpl_vars['dataTypeJSModules']->value;?>
,
			"pageInit"
		], function(manager) {
			manager.start();
		});
		</script>
	<?php }?>


</body>
</html>
<?php }} ?>