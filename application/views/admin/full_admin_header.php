<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" lang="fr">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

  <title>Webmanager 3.0</title>
  
    <link href='http://fonts.googleapis.com/css?family=Quicksand:400,700' rel='stylesheet' type='text/css'>
    <link type="text/css" rel="stylesheet" media="screen" href="{base_url()}statics/css/reset.css" />
    <link type="text/css" rel="stylesheet" media="screen" href="{base_url()}statics/css/jquery.noty.css" />
    <link type="text/css" rel="stylesheet" media="screen" href="{base_url()}statics/css/noty_theme_twitter.css" />
    <link type="text/css" rel="stylesheet" media="screen" href="{base_url()}statics/css/Aristo.css" />
    <link type="text/css" rel="stylesheet" media="screen" href="{base_url()}statics/css/admin.css" />
    
    
    <script type="text/javascript" src="http://code.jquery.com/jquery-1.7.1.min.js"></script>
    <script type="text/javascript" src="{base_url()}statics/js/jquery-ui-1.8.16.custom.min.js"></script>
    <script type="text/javascript" src="{base_url()}statics/js/jquery.defaultvalue.js"></script>
    <script type="text/javascript" src="{base_url()}statics/js/jquery.noty.js"></script>
    <script type="text/javascript" src="{base_url()}statics/js/functions.js"></script>
  <script type="text/javascript">
    
    {if count($errors)>0}
        var json_errors = {$errors[0]};
        {literal}
        $(document).ready(function()
        {
            var noty_error = noty({text: json_errors.message, theme: 'noty_theme_twitter',type:'error'});
        });
        {/literal}
    {/if}
  </script>
</head>
<body>
    <div id="main">