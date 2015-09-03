<?php /* Smarty version Smarty-3.1.8, created on 2015-08-30 04:52:23
         compiled from "/Users/ike/Desktop/dojo/link/data-generator/resources/templates/install.tab2.tpl" */ ?>
<?php /*%%SmartyHeaderCode:21308888155e26fe7ebeed4-76203483%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b3b40eb37842d24862cf008107ca258da25f0bf1' => 
    array (
      0 => '/Users/ike/Desktop/dojo/link/data-generator/resources/templates/install.tab2.tpl',
      1 => 1432608962,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '21308888155e26fe7ebeed4-76203483',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'L' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_55e26fe7efd280_58063635',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55e26fe7efd280_58063635')) {function content_55e26fe7efd280_58063635($_smarty_tpl) {?><h1><?php echo $_smarty_tpl->tpl_vars['L']->value['help'];?>
</h1>
<p>
	<?php echo $_smarty_tpl->tpl_vars['L']->value['help_intro'];?>

</p>

<h2><?php echo $_smarty_tpl->tpl_vars['L']->value['help_prerequisites'];?>
</h2>
<p>
	<?php echo $_smarty_tpl->tpl_vars['L']->value['help_prereq_info'];?>

</p>

<h2><?php echo $_smarty_tpl->tpl_vars['L']->value['still_stuck'];?>
</h2>
<p>
	<?php echo $_smarty_tpl->tpl_vars['L']->value['install_user_doc_link'];?>

</p><?php }} ?>