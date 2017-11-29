
<?php
/* 添加数据需要先连接并选数据库，包含DB.php文件连接数据库 */
		include "DB.php";

		//通过post获取页面提交数据信息
		$id = $_POST['id'];
		$title = $_POST['title'];
		$advertise = $_POST['advertise'];
		$apply = $_POST['apply'];
		$activity = $_POST['activity'];
		$address = $_POST['address'];
		$tel = $_POST['tel'];

		$sql = "update manage set title='".$title."',advertise='".$advertise."',apply='".$apply."',activity='".$activity."',address='".$address."',tel='".$tel."' where id='".$id."'";
		mysql_query($sql);//执行SQL
		$mark  = mysql_affected_rows();//返回影响行数
		$url = "updatelist.php";  

		if($mark>0){
				echo " <script type=\"text/javascript\"> "; 
				echo " window.location.href = \"$url\";"; 
				echo " </script> ";
				/*echo  "alert('修改成功');<br>";*/
	
	
			}else{
				echo  "alert('修改失败')";
				}
				
				mysql_close($link);

				 


?>

