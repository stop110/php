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
				<th>标题</th>
				<th>所属分类</th>
				<th>点击次数</th>
				<th>发布时间</th>
				<th>操作</th>
			</tr>

			<?php if(is_array($blog)): foreach($blog as $key=>$v): ?><tr>
					<td width='5%'><?php echo ($v["id"]); ?></td>
					<td>
						<?php echo ($v["title"]); if(is_array($v["attr"])): foreach($v["attr"] as $key=>$value): ?><strong style='color:<?php echo ($value["color"]); ?>;padding:0 5px;'>[<?php echo ($value["name"]); ?>]</strong><?php endforeach; endif; ?>
						
					</td>
					<td width='12%'><?php echo ($v["cate"]); ?></td>
					<td width='12%'><?php echo ($v["click"]); ?></td>
					<td width='12%'><?php echo (date('y-m-d H:i', $v["time"])); ?></td>
					<td width='12%'>
						<?php if(ACTION_NAME == "index"): ?>[<a href="">修改</a>]
							[<a href="<?php echo U(GROUP_NAME . '/Blog/toTrash',array('id' => $v['id'],'type' => 1));?>">删除</a>]
						<?php else: ?>
							[<a href="<?php echo U(GROUP_NAME . '/Blog/toTrash',array('id' => $v['id'],'type' => 0));?>">还原</a>]
							[<a href="<?php echo U(GROUP_NAME . '/Blog/del',array('id' => $v['id']));?>">彻底删除</a>]<?php endif; ?>
					</td>
					
				</tr><?php endforeach; endif; ?>

			<?php if(ACTION_NAME == "trash"): ?><tr>
					<td colspan='6' align='center'>
						<a href="<?php echo U(GROUP_NAME . '/Blog/delAll');?>">清空回收站</a>
					</td>
				</tr><?php endif; ?>
			
		</table>
	</form> 
	
 </body>
</html>