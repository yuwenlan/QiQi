<?php /* Smarty version Smarty-3.1-DEV, created on 2012-02-18 15:31:15
         compiled from "/Applications/MAMP/htdocs/QiQi/template/staff_edit.html" */ ?>
<?php /*%%SmartyHeaderCode:19277505154f2f6551e7e423-77574160%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2347f2e0f4bf81e66dbc02796eb370c3db20e9e8' => 
    array (
      0 => '/Applications/MAMP/htdocs/QiQi/template/staff_edit.html',
      1 => 1328506920,
      2 => 'file',
    ),
    'e6fe3efd8ac3453911ee3689f6edfd3250e67910' => 
    array (
      0 => '/Applications/MAMP/htdocs/QiQi/template/layout/main.html',
      1 => 1329121153,
      2 => 'file',
    ),
    '73724f54b4fd6386eca628876690542a4ebb87b2' => 
    array (
      0 => '/Applications/MAMP/htdocs/QiQi/template/layout/base.html',
      1 => 1328256547,
      2 => 'file',
    ),
    '69790866394d263c9299c1864e79c28558acf52a' => 
    array (
      0 => '/Applications/MAMP/htdocs/QiQi/template/lib/footer.html',
      1 => 1328256547,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19277505154f2f6551e7e423-77574160',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1-DEV',
  'unifunc' => 'content_4f2f6551f181a',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4f2f6551f181a')) {function content_4f2f6551f181a($_smarty_tpl) {?><!doctype html>
<!--[if lt IE 7 ]> <html lang="en" class="no-js ie6"> <![endif]-->
<!--[if IE 7 ]>    <html lang="en" class="no-js ie7"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en" class="no-js ie8"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en" class="no-js ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<html lang="en" class="no-js">
<!--<![endif]-->
<head>

<!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame Remove this if you use the .htaccess -->
<title>QiQi管理系统</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="description" content="PHP Web Design Coding WebDesign">
<meta name="author" content="Geek-Zoo">
<meta name="Keywords" content="Web Design PHP Coding WebDesign">
<meta name="Copyright" content="Geek-Zoo.com">
<meta content="All" name="Robots">
<!--  Mobile viewport optimized: j.mp/bplateviewport -->
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="shortcut icon" href="<?php echo @SITE_URL;?>
/images/favicon.ico'">
<link rel="apple-touch-icon" href="<?php echo @SITE_URL;?>
/images/apple-touch-icon.png">
<!-- CSS : implied media="all" -->
<base href="<?php echo @SITE_URL;?>
/" />
<link rel="stylesheet" href="<?php echo @SITE_URL;?>
/styles/style.css">
<link rel="stylesheet" href="<?php echo @SITE_URL;?>
/styles/layout.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<script src="<?php echo @SITE_URL;?>
/js/libs/modernizr-1.7.min.js"></script>
<script src="<?php echo @SITE_URL;?>
/js/ui.js"></script>
<script type="text/javascript" charset="utf-8">
	__THEME__ = '<?php echo @SITE_URL;?>
';
</script>

</head>
<body>


<!--header start-->
<div class="header"> <a href="#"><span class="fl" style="font-size:20px;">QiQi人事管理系统</span></a>
	<div class="header_login clearfix"><a href="user/logout" class="btn_logout">登出767</a></div>
</div>
<!--header end-->

<div class="container clearfix">
  
	<div class="sidebar">
		<dl class="sidemenu show">
			<dd><a href="<?php echo @SITE_URL;?>
/">值班表</a></dd>
			<dd><a href="<?php echo @SITE_URL;?>
/staff">人员管理</a></dd>
			<dd><a href="<?php echo @SITE_URL;?>
/class">班次管理</a></dd>
		</dl>
	</div>
<div class="main">
<div class="main_con">

<form action="staff/edit/" method="post">
<div class="clearfix">
	<dl class="set_blk">
		员工姓名：<br><input type="text" name="staff" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['username'];?>
">
		<input type="submit" class="btn1" value="更改姓名">
		<input type="hidden" name="sid" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['id'];?>
">
	</dl>
</div>
</form>

</div>
</div>
</div>
<?php /*  Call merged included template "lib/footer.html" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("lib/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0, '19277505154f2f6551e7e423-77574160');
content_4f3f53c38db32($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "lib/footer.html" */?>


</body>
</html><?php }} ?><?php /* Smarty version Smarty-3.1-DEV, created on 2012-02-18 15:31:15
         compiled from "/Applications/MAMP/htdocs/QiQi/template/lib/footer.html" */ ?>
<?php if ($_valid && !is_callable('content_4f3f53c38db32')) {function content_4f3f53c38db32($_smarty_tpl) {?><!--footer start-->
<div class="footer">Copyright &copy; 2010-2011</div>
<!--footer end-->
<!--[if lt IE 7 ]>
    <script src="<?php echo @THEME_URL;?>
/js/libs/dd_belatedpng.js"> </script>
    <script> DD_belatedPNG.fix('img, .png_bg'); //fix any <img> or .png_bg background-images </script>
<![endif]-->

<script src="<?php echo @THEME_URL;?>
/js/ui.js"></script><?php }} ?>