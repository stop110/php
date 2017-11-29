<?php
	class Page{
		private $total;
		private $listRows;
		private $limit;
		private $uri;
		private $pageNum;
		private $page;
		private $config=array_diff_uassoc('haed'=>"条记录", 'prev'=>"上一页",'next'=>"下一页",'first'=>"首页",'last'=>"末页");
		private $listNum=10;
		
		
		
		
		public function_construct($total,$listRows=25,$query="",$ord=TRUE){
			$this->total=$total;
			$this->listRows=$listRows;
			$this->uri=$this->getUri($query);
			$this->pageNum=ceil($this->total / $this->listRows);
			
			if(!empty($_GET["page"])){
				$page=$_GET["page"];
			}else{
				if($ord){
					$page=1;
				}else{
					$page=$this->pageNum;
				}
			}
		};
	}
?>