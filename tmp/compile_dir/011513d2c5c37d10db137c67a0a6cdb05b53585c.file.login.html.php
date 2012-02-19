<?php /* Smarty version Smarty-3.1-DEV, created on 2012-02-16 10:57:24
         compiled from "/Applications/MAMP/htdocs/QiQi/template/login.html" */ ?>
<?php /*%%SmartyHeaderCode:16340196954f2c08f6c4bb99-03177374%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '011513d2c5c37d10db137c67a0a6cdb05b53585c' => 
    array (
      0 => '/Applications/MAMP/htdocs/QiQi/template/login.html',
      1 => 1328287866,
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
  'nocache_hash' => '16340196954f2c08f6c4bb99-03177374',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1-DEV',
  'unifunc' => 'content_4f2c08f6cd039',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4f2c08f6cd039')) {function content_4f2c08f6cd039($_smarty_tpl) {?><!doctype html>
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

<div class="login_header"> 
	<span class="fr ico_home"><a href="<?php echo @SITE_URL;?>
/">返回首页</a></span>
	<a href="#"><span class="fl" style="font-size:20px;">QiQi人事管理系统</span></a>
</div>
<!--header end-->
<div class="login_content clearfix">
	<form action="<?php echo @SITE_URL;?>
/user" method="post" id="login">
		<dl class="login_form clearfix">
			<dt class="fl">用户名:</dt><dd class="fl"><input type="text" name="user_info[name]" /></dd>
			<dt class="fl">密码:</dt><dd class="fl"><input type="password" name="user_info[password]" /></dd>
			<dt class="fl">&nbsp;</dt><dd class="fl btn"><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
<a href="" class="btn1 fr submit">现在登陆</a></dd>
		</dl>
	</form>	
</div>
<script type="text/javascript" charset="utf-8">
	$('.submit').click(function(){
		  $("#login").submit();
		return false;
	});

	$('input').keydown(function(event){
		if (event.keyCode == 13){
		  $("#login").submit();
		};
	});
</script>
<?php /*  Call merged included template "lib/footer.html" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("lib/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0, '16340196954f2c08f6c4bb99-03177374');
content_4f3c7095a653c($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "lib/footer.html" */?>

</body>
</html><?php }} ?><?php /* Smarty version Smarty-3.1-DEV, created on 2012-02-16 10:57:25
         compiled from "/Applications/MAMP/htdocs/QiQi/template/lib/footer.html" */ ?>
<?php if ($_valid && !is_callable('content_4f3c7095a653c')) {function content_4f3c7095a653c($_smarty_tpl) {?><!--footer start-->
<div class="footer">Copyright &copy; 2010-2011</div>
<!--footer end-->
<!--[if lt IE 7 ]>
    <script src="<?php echo @THEME_URL;?>
/js/libs/dd_belatedpng.js"> </script>
    <script> DD_belatedPNG.fix('img, .png_bg'); //fix any <img> or .png_bg background-images </script>
<![endif]-->

<script src="<?php echo @THEME_URL;?>
/js/ui.js"></script><?php }} ?>