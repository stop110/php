<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html lang="en">
 <head>
  <meta charset="UTF-8">
  <meta name="Generator" content="EditPlus®">
  <meta name="Author" content="">
  <meta name="Keywords" content="">
  <meta name="Description" content="">
<link rel="stylesheet" href="__PUBLIC__/Css/Public.css" />
<title>Document</title>
 </head>
 <body>
	<form method="post" action="<?php echo U(GROUP_NAME . '/Category/runAddCate');?>">
		<table class='table'>
			<tr>
				<td align="right">分类栏目名称：</td>
				<td>
					<input type="text" name="name">
				</td>
			</tr>

			<tr>
				<td align="right">排序：</td>
				<td>
					<input type="text" name="sort" value= "100">
				</td>
			</tr>
		
			<tr>
				<td align="center" colspan="2">
					<input type="hidden" name="pid" value="<?php echo ($pid); ?>">
					<input type="submit" value="保存添加">
				</td>
				
			</tr>
		</table>
	</form>
  
 </body>
</html>