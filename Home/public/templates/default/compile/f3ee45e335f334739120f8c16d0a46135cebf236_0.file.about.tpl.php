<?php
/* Smarty version 4.3.1, created on 2023-03-30 12:46:43
  from 'D:\Dropbox\PHPTestProject\Home\public\templates\default\about.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_642584b30b2500_90774915',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f3ee45e335f334739120f8c16d0a46135cebf236' => 
    array (
      0 => 'D:\\Dropbox\\PHPTestProject\\Home\\public\\templates\\default\\about.tpl',
      1 => 1680180398,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_642584b30b2500_90774915 (Smarty_Internal_Template $_smarty_tpl) {
?><!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo $_smarty_tpl->tpl_vars['about']->value;?>
</title>
</head>
<body>
    <div>ABOUT PAGE</div>
    <a href="/">Home</a>
    <a href="/about">About</a>
    <a href="/cabinet">Cabinet</a>
    <a href="/news">News</a>
    <a href="/photo">Photos</a>
</body>
</html>
<?php }
}
