<?php
	Class ShowAction extends Action{
		Public function index(){
			$id = (int)$_GET['id'];
			M('blog')->where(array('id' => $id))->setInc('click');
			$field = array('id','title', 'time', 'click', 'content', 'cid');
			$this->blog = M('blog')->field($field)->find($id);
			
			$cid = $this->blog['cid'];
			import('Class.Category', APP_PATH);
			$cate = M('cate')->order('sort')->select();
			$this->parent = Category::getParents($cate, $cid);
			//p($parent);
			$this->display();
		}
	}
?>