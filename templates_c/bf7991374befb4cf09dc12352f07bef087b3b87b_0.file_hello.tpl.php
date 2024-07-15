<?php
/* Smarty version 5.3.1, created on 2024-07-11 20:36:05
  from 'file:hello.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.3.1',
  'unifunc' => 'content_66902615853341_25991739',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bf7991374befb4cf09dc12352f07bef087b3b87b' => 
    array (
      0 => 'hello.tpl',
      1 => 1720722495,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_66902615853341_25991739 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\Users\\HPr\\Desktop\\smarty-5.3.1\\templates';
?><!DOCTYPE html>
<html>
<head>
    <title>Affichage des Données</title>
</head>
<body>
    <h1>Données des Utilisateurs</h1>
    <ul>
        <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('donnees'), 'utilisateur');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('utilisateur')->value) {
$foreach0DoElse = false;
?>
            <li><?php echo $_smarty_tpl->getValue('utilisateur')['nom'];?>
 - <?php echo $_smarty_tpl->getValue('utilisateur')['email'];?>
</li>
        <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
    </ul>
</body>
</html>

<?php }
}
