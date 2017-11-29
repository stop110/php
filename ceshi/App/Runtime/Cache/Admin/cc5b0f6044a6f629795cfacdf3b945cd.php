<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html lang="en">
 <head>
  <meta charset="UTF-8">
  <meta name="Generator" content="EditPlus®">
  <meta name="Author" content="">
  <meta name="Keywords" content="">
  <meta name="Description" content="">
  <title>Document</title>
  <link rel="stylesheet" href="__PUBLIC__/Css/public.css" />
 </head>
 <body>
	<form method="post" action="<?php echo U(GROUP_NAME . '/System/updateverify');?>">
		
		<table class='table'>
			<tr>
				<td align='right'>验证码长度:</td>
				<td>
					<input type="text" name="VERIFY_LENGTH" value='<?php echo (C("verify_length")); ?>' />
				</td>
			</tr>
			<tr>
				<td align='right'>验证码图片宽度:</td>
				<td>
					<input type="text" name="VERIFY_WIDTH" value='<?php echo (C("verify_width")); ?>' />
				</td>
			</tr>
			<tr>
				<td align='right'>验证码图片高度:</td>
				<td>
					<input type="text" name="VERIFY_HEIGHT" value='<?php echo (C("verify_height")); ?>' />
				</td>
			</tr>
			<tr>
				<td align='right'>验证码背影颜色:</td>
				<td>
					<input type="text" name="VERIFY_BGCOLOR" value='<?php echo (C("verify_bgcolor")); ?>'/>
				</td>
			</tr>

			<tr>
				<td align='right'>验证码字体大小</td>
				<td>
					<input type="text" name="VERIFY_SIZE" value='<?php echo (C("verify_size")); ?>'/>
				</td>
			</tr>

			<tr>
				<td align='right'>验证码字体颜色</td>
				<td>
					<input type="text" name="VERIFY_COLOR" value='<?php echo (C("verify_color")); ?>'/>
				</td>
			</tr>
		
			<tr>
				<td colspan='2' align='center'><input type="submit" value='提交保存'></td>
			</tr>

			<input type="hidden" name="VERIFY_FUNC" value='<?php echo (C("verify_func")); ?>'>
			<input type="hidden" name="VERIFY_NAME" value='<?php echo (C("verify_name")); ?>'>
			<input type="hidden" name="VERIFY_SEED" value='<?php echo (C("verify_seed")); ?>'>
			<input type="hidden" name="VERIFY_FONTFILE" value='<?php echo (C("verify_fontfile")); ?>'>
			
		</table>

	</form>

 </body>
</html>