<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html lang="en">
 <head>
  <meta charset="UTF-8">
  <meta name="Generator" content="EditPlus庐">
  <meta name="Author" content="">
  <meta name="Keywords" content="">
  <meta name="Description" content="">
  <link rel="stylesheet" href="__PUBLIC__/Css/public.css" />
  <title>Document</title>
 </head>
 <body>
	<form method="post" action="<?php echo U(GROUP_NAME . '/BlogRoll/runAdd');?>">
		<table class='table'>
			<tr>
				<td align='right'>链接名称</td>
				<td>
					<input type="text" name="name">
				</td>
			</tr>

			<tr>
				<td align='right'>链接地址</td>
				<td>
					<input type="text" name="url">
					不要添加前面的http://
				</td>
			</tr>

			<tr>
				
				<td colspan='2' align='center'>
					<input type="submit" value="保存添加">
				</td>
			</tr>
		
		</table>
	</form>
 </body>
</html>