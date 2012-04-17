<?php /* Smarty version Smarty-3.0.7, created on 2012-04-17 08:07:08
         compiled from "application/views/admin/login.php" */ ?>
<?php /*%%SmartyHeaderCode:2082461394f8d088ccdfcb8-20849238%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '17916759a68d697141109ea6392ea8ab46d00fdd' => 
    array (
      0 => 'application/views/admin/login.php',
      1 => 1334642827,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2082461394f8d088ccdfcb8-20849238',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<div id="form_login">
    <h3>Connexion</h3>
    <form action="<?php echo site_url('admin/admin/do_login');?>
" method="post">
        <input class="custom_tf" name="login" type="text" alt="Identifiant"/>
        <input class="custom_tf" name="password" type="password" alt="Mot de passe"/>
        <input class="custom_submit" type="submit" name="logon" value="Connexion"/>
    </form> 
    <p class="forgot_password"><a href="<?php echo site_url('admin/admin/forgot_password');?>
">J'ai oublié mon mot de passe</a></p>
</div>