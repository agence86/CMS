<?php /* Smarty version Smarty-3.0.7, created on 2012-04-17 15:09:09
         compiled from "application/views/admin/toolbar.php" */ ?>
<?php /*%%SmartyHeaderCode:1777302604f8d6b75cce4c9-43080168%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c30c12fbdedb4529fa12c1a4116689ada2be88df' => 
    array (
      0 => 'application/views/admin/toolbar.php',
      1 => 1334668149,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1777302604f8d6b75cce4c9-43080168',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<div id="nav">
    <ul>
        <li><a href="#">Arborescence</a>
            <ul>
                <li><a href="<?php echo site_url('admin/c_menu');?>
">Menus</a>
                    <ul>
                        <li><a href="<?php echo site_url('admin/c_menu/add');?>
">Ajouter un menu</a></li>
                        <li><a href="<?php echo site_url('admin/c_menu/view/1');?>
">Menu 1</a></li>
                        <li><a href="<?php echo site_url('admin/c_menu/view/2');?>
">Menu 2</a></li>
                        <li><a href="<?php echo site_url('admin/c_menu/view/3');?>
">Menu 3</a></li>
                    </ul>
                </li>
                <li><a href="<?php echo site_url('admin/c_page/add');?>
">Ajouter une page</a></li>
            </ul>
        </li>
        <li><a href="#">Blog</a>
            <ul>
                <li><a href="<?php echo site_url('admin/c_category/blog');?>
">Lister les catégorie</a></li>
                <li><a href="<?php echo site_url('admin/c_category/add/blog');?>
">Ajouter une catégorie</a></li>
                <li><a href="<?php echo site_url('admin/c_blog/add');?>
">Ajouter un article</a></li>
            </ul>
        </li>
        <li><a href="#">Medias</a>
            <ul>
                <li><a href="<?php echo site_url('admin/c_category/media');?>
">Lister les catégorie</a></li>
                <li><a href="<?php echo site_url('admin/c_category/add/media');?>
">Ajouter une catégorie</a></li>
                <li><a href="<?php echo site_url('admin/c_media/add');?>
">Ajouter un Média</a></li>
            </ul>
        </li>
        <li><a href="#">Contenus libres</a>
            <ul>
                <li><a href="<?php echo site_url('admin/c_category/content');?>
">Lister les catégorie</a></li>
                <li><a href="<?php echo site_url('admin/c_category/add/content');?>
">Ajouter une catégorie</a></li>
                <li><a href="<?php echo site_url('admin/c_content/add');?>
">Ajouter un Contenu</a></li>
            </ul>
        </li>
        <li><a href="<?php echo site_url('admin/c_user');?>
">Utilisateurs</a>
            <ul>
                <li><a href="<?php echo site_url('admin/c_group');?>
">Groupes</a></li>
                <li><a href="<?php echo site_url('admin/c_frontright');?>
">Autorisations Frontoffice</a></li>
                <li><a href="<?php echo site_url('admin/c_group/add');?>
">Ajouter un groupe</a></li>
                <li><a href="<?php echo site_url('admin/c_user/add');?>
">Ajouter un utilisateur</a></li>
            </ul>
        </li>
        <li><a href="<?php echo site_url('admin/c_system');?>
">Système</a>
            <ul>
                <li><a href="<?php echo site_url('admin/c_language');?>
">Langues</a></li>
                <li><a href="<?php echo site_url('admin/c_language/add');?>
">Ajouter une langue</a></li>
            </ul>
        </li>
        <li class="send_right"><a href="#">Déconnexion</a></li>
    </ul>
</div>