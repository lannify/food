<?php /* Smarty version Smarty-3.1.8, created on 2015-08-30 04:52:48
         compiled from "d2ad892d4d6590edb5d68920561c1e54d79dea4f" */ ?>
<?php /*%%SmartyHeaderCode:155099549355e27000679ac8-44361828%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd2ad892d4d6590edb5d68920561c1e54d79dea4f' => 
    array (
      0 => 'd2ad892d4d6590edb5d68920561c1e54d79dea4f',
      1 => 0,
      2 => 'string',
    ),
  ),
  'nocache_hash' => '155099549355e27000679ac8-44361828',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'db_connection_error' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_55e270006cb9a9_18921011',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55e270006cb9a9_18921011')) {function content_55e270006cb9a9_18921011($_smarty_tpl) {?>We were unable to connect to the database using the information you supplied. The error message the database returned is: <i><?php echo $_smarty_tpl->tpl_vars['db_connection_error']->value;?>
</i><?php }} ?>