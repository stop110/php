<?php
	Class IndexAction extends Action{
		/*
			43级中IndexAction的index方法，有两点问题。不知是否我把代码少敲还是啥子原因，我在这里申明下。
			一、关于首页博文列表的显示。如果按照老师敲的代码$this->cate = $topCate;博文的具体列表不会显示，花了点时间发现显示页面是$cate的那些值而不是$topCate的值，
			所以我将老师的$this->cate = $topCate;改成$this->topCate = $topCate;发现问题解决了。

			二、老师设置了缓存，但好像没有哪里读取缓存，导致第一次是读取数据库，可第二次却没有数据。我猜是不是没有读取缓存的原因。
			我搞不懂为什么老师视频上可以直接读取，反正我这里是不行。我只好尝试自己去看手册，设置读取缓存，发现也ok了。
			
			我也是刚学php，希望分享我的一点心得能对各位刚学php的童鞋有点帮助。
		*/
		Public function index(){
			if(!$list = cache('index_list')){
				$topCate = M('cate')->where(array('pid' => 0))->field(array('id', 'name'))->order('sort')->select();

				//p($topCate);
				import('Class.Category', APP_PATH);
				$cate = M('cate')->order('sort')->select();
				$db = M('blog');
				$field = array('id', 'title', 'time');

				foreach ($topCate as $k =>$v){
					//p($v['id']);
					$cids = Category::getChildsId($cate, $v['id']);
					$cids[] = $v['id'];
					//p($cids);
					$where = array('cid' => array('IN', $cids), 'del' => 0);
					$topCate[$k]['blog'] = $db->field($field)->where($where)->order('time DESC')->select();
				}

				cache('index_list', $topCate, 10);
			}
			$topCate = cache('index_list');
			
			
			//p($topCate);
			$this->topCate = $topCate;
			$this->display();
		}
				// 实例化blog对象
				$blog = M("blog"); 
			    
    			// 查找judge值为1的用户数据 以创建时间排序 返回10条数据
    			$list = $blog->where('judge=0')->order('time')->limit(10)->select();
    			$list1 = $blog->where('judge=1')->order('time')->limit(10)->select();
			$this->assign('list',$list)->assign('list1',$list1)->display();
		}
	}
?>