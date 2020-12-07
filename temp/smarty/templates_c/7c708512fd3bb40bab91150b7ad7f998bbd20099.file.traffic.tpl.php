<?php /* Smarty version Smarty-3.1.12, created on 2013-12-08 11:38:24
         compiled from "Z:\home\lab4.com\www\temp\smarty\templates\traffic.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2436052a43e101d66b3-89208841%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7c708512fd3bb40bab91150b7ad7f998bbd20099' => 
    array (
      0 => 'Z:\\home\\lab4.com\\www\\temp\\smarty\\templates\\traffic.tpl',
      1 => 1385316498,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2436052a43e101d66b3-89208841',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'title' => 0,
    'head' => 0,
    'mas_traffic' => 0,
    'line' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_52a43e1034fa16_36708094',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52a43e1034fa16_36708094')) {function content_52a43e1034fa16_36708094($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//RU" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link href="style.css" rel="stylesheet" type="text/css" />
    <title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
</head>
<body>

<div id="reg"><?php echo $_smarty_tpl->tpl_vars['head']->value;?>
</div>

<?php if (isset($_smarty_tpl->tpl_vars['mas_traffic']->value)){?> 
    <div id='traffic'>
        <table width=80% border="1" align='center' cellspacing='0' cellpadding='4'>
            <tr height=35 id="table_head" align='center'>
                <td>Организация</td>
                <td>Output, GB</td>
                <td>Input, GB</td>
                <td>Limit, MB</td>
                <td>toPay, y.e.</td>
                <td>Курс</td>
                <td>Сумма без НДС, grn</td>
                <td>НДС, grn</td>
                <td>Сумма с НДС, grn</td>
            </tr>
    
    <?php  $_smarty_tpl->tpl_vars['line'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['line']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['mas_traffic']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['line']->key => $_smarty_tpl->tpl_vars['line']->value){
$_smarty_tpl->tpl_vars['line']->_loop = true;
?>
        <tr>
        <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['line']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
              <td><?php echo $_smarty_tpl->tpl_vars['item']->value;?>
</td>
        <?php } ?>
        </tr>
    <?php } ?>

        </table>
    </div>
<?php }?>

</body>
</html><?php }} ?>