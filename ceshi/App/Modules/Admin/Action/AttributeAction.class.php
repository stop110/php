<?php
	Class AttributeAction extends CommonAction{
		Public function index(){
			$this->attr = M('attr')->select();
			$this->display();
		}

		Public function addAttr(){
			$this->display();
		}

		Public function runAddAttr(){
			if(M('attr')->add($_POST)){
				$this->success('添加成功', U(GROUP_NAME . '/Attribute/index'));
			}else{
				$this->error('添加失败');
			}
		}
	}
?>