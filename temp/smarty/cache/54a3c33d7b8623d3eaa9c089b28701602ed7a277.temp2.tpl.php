<?php /*%%SmartyHeaderCode:9590526bf091da2fd1-38964717%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '54a3c33d7b8623d3eaa9c089b28701602ed7a277' => 
    array (
      0 => 'Z:\\home\\lab.com\\www\\temp\\smarty\\templates\\temp2.tpl',
      1 => 1382806183,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9590526bf091da2fd1-38964717',
  'cache_lifetime' => 3600,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_526bf2a9a44203_32185556',
  'variables' => 
  array (
    'tit' => 0,
    'head' => 0,
    'data' => 0,
    'key' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_526bf2a9a44203_32185556')) {function content_526bf2a9a44203_32185556($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//RU" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link href="style.css" rel="stylesheet" type="text/css" />
    <script type="text/javascript" src="js/func.js"></script>
    <title>Регистраця</title>
</head>
<body>

<div id="reg">Регистрация</div>


<!--<div id="img"></div>-->
<div id="forma">
    <form method="get" onSubmit="return Check(this)" action="index.php" >
        <table width="100%" border="0" cellspacing="0" cellpadding="0">
            <tr>
                <td align="right"><label for="name">Имя: </label></td>
                <td align="left"><input class="ttext" accesskey="2" tabindex="1" type="text" id="name" name="name" size="30" /></td>
            </tr>
            <tr>
            <tr>
                <td width="200px" align="right"><label for="surname">Фамилия: </label></td>
                <td align="left"><input class="ttext" accesskey="1" tabindex="2" type="text" id="surname" name="surname" size="30" /></td>
            </tr>
            <tr>
                <td width="200px" align="right"><label for="pass">Пароль: </label></td>
                <td align="left"><input class="ttext" accesskey="1" tabindex="2" type="password" id="pass" name="pass" size="30" /></td>
            </tr>
            <tr>
                <td width="200px" align="right"><label for="pass2">Подтвердите пароль: </label></td>
                <td align="left"><input class="ttext" accesskey="1" tabindex="2" type="password" id="pass2" name="pass2" size="30" /></td>
            </tr>
            <tr>
                <td width="200px" align="right"><label for="country">Страна проживания: </label></td>
                <td align="left"><input class="ttext" accesskey="1" tabindex="2" type="text" id="country" name="country" value="Ukraine" size="30" /></td>
            </tr>
            <tr>
                <td width="200px" align="right"><label for="city">Город: </label></td>
                <td align="left"><input class="ttext" accesskey="1" tabindex="2" type="text" id="city" name="city" value="Kyiv" size="30" /></td>
            </tr>
            <tr>
                <td align="right"><label for="cat">Пол: </label></td>
                <td align="left">
                    <select class="ttext" name="pol" tabindex="4">
                        <option value="">Выберите.. </option>
                        <option value="m">Мужской </option>
                        <option value="w">Женский </option>
                    </select>
                </td>
            </tr>
            <tr>
                <td align="right"><label>Социальное положение: </label></td>
                <td><br /><div class="soc"><input type="radio" value="student" name="soc" checked=checked>Студент</div>
                    <div class="soc"><input type="radio" value="working" name="soc">Pаботающий</div>
                    <div class="soc"><input type="radio" value="pensiya" name="soc">Пенсионер</div>
                </td>
            </tr>
            <td align="right"><label for="about">О себе: </label></td>
            <td align="left"><textarea class="tarea" id="about" name="about" tabindex="3" wrap="virtual" cols="40" rows="5"></textarea></td>
            </tr>

            <tr>
                <td>&nbsp;</td>
                <td align="left"><input tabindex="5" class="but" type="submit" value="Зарегистрировать" /><input tabindex="6" class="but" style="color:#A80000" type="reset" value="Reset"/></td>
            </tr>
        </table>
    </form></div>


</body>
</html><?php }} ?>