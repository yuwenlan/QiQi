<?php /* Smarty version Smarty-3.1-DEV, created on 2012-02-18 20:25:11
         compiled from "/Applications/MAMP/htdocs/QiQi/template/default.html" */ ?>
<?php /*%%SmartyHeaderCode:8033842374f2bb4dc62dc34-88753242%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '02364c6c4697f879c1e7822fc3417c78b985d6d4' => 
    array (
      0 => '/Applications/MAMP/htdocs/QiQi/template/default.html',
      1 => 1329567909,
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
  'nocache_hash' => '8033842374f2bb4dc62dc34-88753242',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1-DEV',
  'unifunc' => 'content_4f2bb4dc7ae27',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4f2bb4dc7ae27')) {function content_4f2bb4dc7ae27($_smarty_tpl) {?><!doctype html>
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

<style type="text/css">
table {
	font-size: 12px;
}
table th {
	width: 100px;
	height: 50px;
}
</style>
<div class="btn_blk">
<h1>上一周&nbsp;&nbsp;&nbsp;下一周</h1>
</div>

<div >
<form action="index" method="post">
<table width="100%" class="table_list">
	<tr>
		<th>姓名</th>
		<th>2月13日<br>周一</th>
		<th>2月14日<br>周二</th>
		<th>2月15日<br>周三</th>
		<th>2月16日<br>周四</th>
		<th>2月17日<br>周五</th>
		<th>2月18日<br>周六</th>
		<th>2月19日<br>周日</th>
	</tr>
    <?php  $_smarty_tpl->tpl_vars['val'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['val']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['staff']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['val']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['val']->key => $_smarty_tpl->tpl_vars['val']->value){
$_smarty_tpl->tpl_vars['val']->_loop = true;
 $_smarty_tpl->tpl_vars['val']->iteration++;
?>
    <tr<?php if ($_smarty_tpl->tpl_vars['val']->iteration%2){?> class="odd"<?php }?>>
        <td>
			<select name="day[<?php echo $_smarty_tpl->tpl_vars['val']->value['id'];?>
][id]">
				<?php  $_smarty_tpl->tpl_vars['vo'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['vo']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['staff']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['vo']->key => $_smarty_tpl->tpl_vars['vo']->value){
$_smarty_tpl->tpl_vars['vo']->_loop = true;
?>
					<option value="<?php echo $_smarty_tpl->tpl_vars['vo']->value['id'];?>
" <?php if ($_smarty_tpl->tpl_vars['val']->value['username']==$_smarty_tpl->tpl_vars['vo']->value['username']){?> selected <?php }?>><?php echo $_smarty_tpl->tpl_vars['vo']->value['username'];?>
</option>
				<?php } ?>
			</select>
		</td>
		<td>
			<select name="day[<?php echo $_smarty_tpl->tpl_vars['val']->value['id'];?>
][Monday]">
				<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['class']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
					<option <?php if ($_smarty_tpl->tpl_vars['model']->value[$_smarty_tpl->tpl_vars['val']->value['id']]['Monday']==$_smarty_tpl->tpl_vars['v']->value['cid']){?>selected<?php }?> value="<?php echo $_smarty_tpl->tpl_vars['v']->value['cid'];?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value['cname'];?>
</option>
				<?php } ?>
			</select>
		</td>
		<td>
			<select name="day[<?php echo $_smarty_tpl->tpl_vars['val']->value['id'];?>
][Tuesday]">
				<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['class']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
					<option <?php if ($_smarty_tpl->tpl_vars['model']->value[$_smarty_tpl->tpl_vars['val']->value['id']]['Tuesday']==$_smarty_tpl->tpl_vars['v']->value['cid']){?>selected<?php }?> value="<?php echo $_smarty_tpl->tpl_vars['v']->value['cid'];?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value['cname'];?>
</option>
				<?php } ?>
			</select>
		</td><td>
			<select name="day[<?php echo $_smarty_tpl->tpl_vars['val']->value['id'];?>
][Wednesday]">
				<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['class']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
					<option <?php if ($_smarty_tpl->tpl_vars['model']->value[$_smarty_tpl->tpl_vars['val']->value['id']]['Wednesday']==$_smarty_tpl->tpl_vars['v']->value['cid']){?>selected<?php }?> value="<?php echo $_smarty_tpl->tpl_vars['v']->value['cid'];?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value['cname'];?>
</option>
				<?php } ?>
			</select>
		</td><td>
			<select name="day[<?php echo $_smarty_tpl->tpl_vars['val']->value['id'];?>
][Thursday]">
				<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['class']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
					<option <?php if ($_smarty_tpl->tpl_vars['model']->value[$_smarty_tpl->tpl_vars['val']->value['id']]['Thursday']==$_smarty_tpl->tpl_vars['v']->value['cid']){?>selected<?php }?> value="<?php echo $_smarty_tpl->tpl_vars['v']->value['cid'];?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value['cname'];?>
</option>
				<?php } ?>
			</select>
		</td><td>
			<select name="day[<?php echo $_smarty_tpl->tpl_vars['val']->value['id'];?>
][Friday]">
				<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['class']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
					<option <?php if ($_smarty_tpl->tpl_vars['model']->value[$_smarty_tpl->tpl_vars['val']->value['id']]['Friday']==$_smarty_tpl->tpl_vars['v']->value['cid']){?>selected<?php }?> value="<?php echo $_smarty_tpl->tpl_vars['v']->value['cid'];?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value['cname'];?>
</option>
				<?php } ?>
			</select>
		</td><td>
			<select  name="day[<?php echo $_smarty_tpl->tpl_vars['val']->value['id'];?>
][Saturday]">
				<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['class']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
					<option <?php if ($_smarty_tpl->tpl_vars['model']->value[$_smarty_tpl->tpl_vars['val']->value['id']]['Saturday']==$_smarty_tpl->tpl_vars['v']->value['cid']){?>selected<?php }?> value="<?php echo $_smarty_tpl->tpl_vars['v']->value['cid'];?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value['cname'];?>
</option>
				<?php } ?>
			</select>
		</td><td>
			<select name="day[<?php echo $_smarty_tpl->tpl_vars['val']->value['id'];?>
][Sunday]">
				<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['class']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
					<option <?php if ($_smarty_tpl->tpl_vars['model']->value[$_smarty_tpl->tpl_vars['val']->value['id']]['Sunday']==$_smarty_tpl->tpl_vars['v']->value['cid']){?>selected<?php }?> value="<?php echo $_smarty_tpl->tpl_vars['v']->value['cid'];?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value['cname'];?>
</option>
				<?php } ?>
			</select>
		</td>
    </tr>
    <?php } ?>
</table>
<div class="clearfix">
	<dl class="set_blk">
		<input type="submit" class="btn1 fr" value="保存" style="margin-right: 20px">
	</dl>
</div>
<div style="width: 100%;height: 30px">
</div>
<script type="text/javascript">

</script>

</div>
</div>
</div>
<?php /*  Call merged included template "lib/footer.html" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("lib/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0, '8033842374f2bb4dc62dc34-88753242');
content_4f3f98a7be890($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "lib/footer.html" */?>


</body>
</html><?php }} ?><?php /* Smarty version Smarty-3.1-DEV, created on 2012-02-18 20:25:11
         compiled from "/Applications/MAMP/htdocs/QiQi/template/lib/footer.html" */ ?>
<?php if ($_valid && !is_callable('content_4f3f98a7be890')) {function content_4f3f98a7be890($_smarty_tpl) {?><!--footer start-->
<div class="footer">Copyright &copy; 2010-2011</div>
<!--footer end-->
<!--[if lt IE 7 ]>
    <script src="<?php echo @THEME_URL;?>
/js/libs/dd_belatedpng.js"> </script>
    <script> DD_belatedPNG.fix('img, .png_bg'); //fix any <img> or .png_bg background-images </script>
<![endif]-->

<script src="<?php echo @THEME_URL;?>
/js/ui.js"></script><?php }} ?>