<?php
	Class IndexAction extends CommonAction {
		Public function index(){
			$this->display();
		}

		Public function logout(){
			session(null);
			$this->redirect(GROUP_NAME . '/Login/index');
		}
		
	}

?>