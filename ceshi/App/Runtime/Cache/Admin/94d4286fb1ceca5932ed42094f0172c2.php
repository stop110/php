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
	<form method="post" action="">
		<table class='table'>
			<tr>
				<th>ID</th>
				<th>链接名称</th>
				<th>链接网址</th>
				<th>操作</th>
			</tr>
			<?php if(is_array($data)): foreach($data as $key=>$v): ?><tr>
					<td><?php echo ($v["id"]); ?></td>
					<td><?php echo ($v["name"]); ?></td>
					<td><?php echo ($v["url"]); ?></td>
					<td>[<a href="">修改</a>][<a href="<?php echo U(GROUP_NAME . '/BlogRoll/del', array('id' => $v['id']));?>">删除</a>]</td>
				</tr><?php endforeach; endif; ?>
			
				
		</table>
	</form>
 </body>
</html>