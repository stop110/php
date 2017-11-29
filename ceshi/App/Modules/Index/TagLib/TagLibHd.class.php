<?php
	import('TagLib');
	Class TagLibHd extends TagLib{
		Protected $tags = array(
			'nav' => array('attr' => 'order', 'close' => 1)
		);
		Public function _nav($attr, $content){
			$attr = $this->parseXmlAttr($attr);
			$str = <<<str
<?php
					\$_nav_cate = M('cate')->order("{$attr['order']}")->select();
					import('Class.Category', APP_PATH);
					\$_nav_cate = Category::catesortforlayer(\$_nav_cate);
					foreach(\$_nav_cate as \$_nav_cate_v):
						extract(\$_nav_cate_v);
					\$url = U('/c_' . \$id);
?>
str;
			$str .= $content;
			$str .= '<?php endforeach;?>';
			return $str;
		}
	}
?>