<?php /* Smarty version Smarty-3.1.8, created on 2015-09-03 01:16:14
         compiled from "/Users/ike/Desktop/dojo/food/datagen/resources/templates/generate.tab2.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18183190255e7833e89cb84-10886223%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '719e94f5b246b91fc39bd3d23911f25f7a0bda32' => 
    array (
      0 => '/Users/ike/Desktop/dojo/food/datagen/resources/templates/generate.tab2.tpl',
      1 => 1432608962,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18183190255e7833e89cb84-10886223',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'L' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_55e7833e908941_95363159',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55e7833e908941_95363159')) {function content_55e7833e908941_95363159($_smarty_tpl) {?><h3><?php echo $_smarty_tpl->tpl_vars['L']->value['user_accounts'];?>
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