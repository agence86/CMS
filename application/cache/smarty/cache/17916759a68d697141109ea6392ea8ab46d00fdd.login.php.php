<?php /*%%SmartyHeaderCode:7343997834f8c24ec1f46e6-69568457%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '17916759a68d697141109ea6392ea8ab46d00fdd' => 
    array (
      0 => 'application/views/admin/login.php',
      1 => 1334582847,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7343997834f8c24ec1f46e6-69568457',
  'has_nocache_code' => false,
  'cache_lifetime' => 600,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!$no_render) {?><form action="http://agence86-server/cms86/admin/admin/do_login" method="post">
    <input class="custom_tf" name="login" type="text" alt="Identifiant"/>
    <input class="custom_tf" name="password" type="password" alt="Mot de passe"/>
    <input class="custom_submit" type="submit" name="logon" value="Connexion"/>
</form> 
    <p class="forgot_password"><a href="http://agence86-server/cms86/admin/admin/forgot_password">J'ai oublié mon mot de passe</a></p><?php } ?>