<?php /* Smarty version Smarty-3.1.8, created on 2015-08-30 05:12:52
         compiled from "/Users/ike/Desktop/dojo/link/datagen/resources/templates/generate.tab2.tpl" */ ?>
<?php /*%%SmartyHeaderCode:176920591055e274b4b7cdf1-95938039%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9aa2fa80f674b378fcdbb1433865c0ac2d2cbfd2' => 
    array (
      0 => '/Users/ike/Desktop/dojo/link/datagen/resources/templates/generate.tab2.tpl',
      1 => 1432608962,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '176920591055e274b4b7cdf1-95938039',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'L' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_55e274b4be6004_20079392',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55e274b4be6004_20079392')) {function content_55e274b4be6004_20079392($_smarty_tpl) {?><h3><?php echo $_smarty_tpl->tpl_vars['L']->value['user_accounts'];?>
 <span id="gdNumUserAccounts"></span></h3>

<p>
	<?php echo $_smarty_tpl->tpl_vars['L']->value['user_account_section_intro'];?>

</p>

<div id="gdAccountList" class="hidden">
	<div id="gdAccountListEmpty">
		<div class="gdMessage gdNotify gdStickyMessage" style="display:block">
			<p><?php echo $_smarty_tpl->tpl_vars['L']->value['no_user_accounts_defined'];?>
</p>
		</div>
	</div>
	<div id="gdAccountListNonEmpty">
		<table cellpadding="0" cellspacing="0" class="tablesorter tablesorter-default">
		<thead>
			<tr>
				<th width="40">ID</th>
				<th><?php echo $_smarty_tpl->tpl_vars['L']->value['first_name'];?>
</th>
				<th><?php echo $_smarty_tpl->tpl_vars['L']->value['last_name'];?>
</th>
				<th><?php echo $_smarty_tpl->tpl_vars['L']->value['email'];?>
</th>
				<th align="center"><?php echo $_smarty_tpl->tpl_vars['L']->value['num_records_generated'];?>
</th>
				<th><?php echo $_smarty_tpl->tpl_vars['L']->value['last_logged_in'];?>
</th>
				<th><?php echo $_smarty_tpl->tpl_vars['L']->value['date_created'];?>
</th>
				<th data-sorter="false" width="18"></th>
				<th data-sorter="false" width="18"></th>
			</tr>
		</thead>
		<tbody></tbody>
		</table>
	</div>
</div>

<button class="gdPrimaryButton" id="gdCreateAccount"><?php echo $_smarty_tpl->tpl_vars['L']->value['create_account_rightarrow'];?>
</button><?php }} ?>