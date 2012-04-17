<?php /* Smarty version Smarty-3.0.7, created on 2012-04-16 15:55:56
         compiled from "application/views/admin/full_admin_header.php" */ ?>
<?php /*%%SmartyHeaderCode:7343997834f8c24ec080d74-80841361%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6ce0fedc1c08417d2f86cc37843ed1b4de2e8811' => 
    array (
      0 => 'application/views/admin/full_admin_header.php',
      1 => 1334584548,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7343997834f8c24ec080d74-80841361',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" lang="fr">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

  <title></title>
  
  <link type="text/css" rel="stylesheet" media="screen" href="<?php echo base_url();?>
statics/css/admin.css" />
  <link type="text/css" rel="stylesheet" media="screen" href="<?php echo base_url();?>
statics/css/jquery.noty.css" />
  
  <script type="text/javascript" src="http://code.jquery.com/jquery-1.7.1.min.js"></script>
  <script type="text/javascript" src="<?php echo base_url();?>
statics/js/jquery.defaultvalue.js"></script>
  <script type="text/javascript" src="<?php echo base_url();?>
statics/js/jquery.noty.js"></script>
  <script type="text/javascript" src="<?php echo base_url();?>
statics/js/functions.js"></script>
  <script type="text/javascript">
    <?php if (count($_smarty_tpl->getVariable('errors')->value)>0){?>
        var json_errors = <?php echo json_encode($_smarty_tpl->getVariable('errors')->value);?>
;
        
        var noty_error = noty({text: json_errors.message});
        
    <?php }?>
  </script>
</head>
<body>
    <div id="main">