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
				<th>属性名称</th>
				<th>颜色</th>
				<th>操作</th>
			</tr>
			<?php if(is_array($attr)): foreach($attr as $key=>$v): ?><tr>
					<td><?php echo ($v["id"]); ?></td>
					<td><?php echo ($v["name"]); ?></td>
					<td>
						<div id="" class="" style='width:20px;height:20px;background:<?php echo ($v["color"]); ?>'></div>
					</td>
					<td colspan='2'>
						[<a href="">修改</a>]
						[<a href="">删除</a>]
					</td>
					
				</tr><?php endforeach; endif; ?>
			
		</table>
	</form>
 </body>
</html>