<?php if (!defined('THINK_PATH')) exit();?><dl>
	<dt>友情连接</dt>
	<?php if(is_array($url)): foreach($url as $key=>$v): ?><dd>
			<a href="<?php echo ($v["url"]); ?>"><?php echo ($v["name"]); ?></a>
		</dd><?php endforeach; endif; ?>
</dl>