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
  <script type="text/javascript" src='__ROOT__/Data/Ueditor/ueditor.all.min.js'></script>
  <script type="text/javascript" src='__ROOT__/Data/Ueditor/ueditor.config.js'></script>
  <script type="text/javascript">
  
		window.UEDITOR_HOME_URL = '__ROOT__/Data/Ueditor';
		window.onload = function(){
			window.UEDITOR_CONFIG.imageUrl = "<?php echo U(GROUP_NAME . '/Blog/upload');?>";
			window.UEDITOR_CONFIG.imagePath = '__ROOT__/Uploads/';
			UE.getEditor('content');
		}
  
  </script>
 </head>
 <body>
	<form method="post" action="<?php echo U(GROUP_NAME . '/Blog/addBlog');?>">
		<table class='table'>
			<tr>
				<td align='right' width='10%'>所属分类：</td>
				<td>
					<select name="cid">
						<option value="" >===请选择分类===</option>
							<?php if(is_array($cate)): foreach($cate as $key=>$v): ?><option value="<?php echo ($v["id"]); ?>" ><?php echo ($v["html"]); echo ($v["name"]); ?></option><?php endforeach; endif; ?>	
					</select>
				</td>
			</tr>

			<tr>
				<td align='right' width='10%'>博文属性：</td>
				<td>
					<?php if(is_array($attr)): foreach($attr as $key=>$v): ?><label style='margin-right:10px;'>
							<input type="checkbox" name="aid[]" value='<?php echo ($v["id"]); ?>'/>&nbsp;<?php echo ($v["name"]); ?> 
						</label><?php endforeach; endif; ?>
					
				</td>
			</tr>
			
			<tr>
				<td align='right' width='10%'>点击次数：</td>
				<td>
					<input type="text" name="click" value='100'>
				</td>
			</tr>


			<tr>
				<td align='right' width='10%'>标题：</td>
				<td>
					<input type="text" name="title">
				</td>
			</tr>
			
			<tr>
				<td align='right' width='10%'>文章摘要：</td>
				<td>
					<input type="text" name="summary" >
				</td>
			</tr>

			<tr>
			
			<td colspan='2'>
				<textarea name="content" id='content'></textarea>
			</td>
			</tr>

			<tr>
			<td colspan='2' align='center'>
				<input type="submit" value="提交">
			</td>
			</tr>
			
			
		</table>
	</form>
 </body>
</html>