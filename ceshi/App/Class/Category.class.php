<?php

	Class Category {

		Static Public function catesort($cate, $html = '&nbsp;&nbsp;&nbsp;--', $pid = 0, $level = 0){
			$arr = array();
			foreach($cate as $v){
				if ($v['pid'] == $pid){
					$v['level'] = $level +1;
					$v['html'] = str_repeat($html, $level);
					$arr[] = $v;
					$arr = array_merge($arr, self::catesort($cate, $html, $v['id'], $level + 1));
					
				}
			}
			return $arr;
		}

		Static Public function catesortforlayer($cate, $name = 'child', $pid = 0){
			$arr = array();
			foreach($cate as $v){
				if($v['pid'] == $pid){
					
					$v[$name] = self::catesortforlayer($cate, $name, $v['id']);
					$arr[] = $v;
					
				}
			}
			return $arr;
		}

		Static Public function getParents ($cate, $id){
			$arr = array();
			foreach($cate as $v){
				if($v['id'] == $id){
					
					$arr = array_merge($arr, self::getParents($cate, $v['pid']));
					$arr[] = $v;
				}
			}
			return $arr;
		}

		Static Public function getChildsId($cate, $pid){
			$arr = array();
			foreach($cate as $v){
				if($v['pid'] == $pid){
					$arr[] = $v['id'];
					$arr = array_merge($arr, self::getChildsId($cate, $v['id']));
 				}
			}
			return $arr;
		}

		Static Public function getChilds($cate, $pid){
			$arr = array();
			foreach($cate as $v){
				if($v['pid'] == $pid){
					$arr[] = $v;
					$arr = array_merge($arr, self::getChildsId($cate, $v['id']));
 				}
			}
			return $arr;
		}
	}
?>



