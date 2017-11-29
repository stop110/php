<?php /** file: index.php 程序的主控制 */ ?>
<html>
	<head>
		<title>活动管理</title>
		<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
		<style>
			body {font-size:12px;}
			td {font-size:12px;}
		</style>
	<head>
	<body>
			<h1>活动管理</h1>
			
			<?php
				
				/* 如果用户提交添加表单action=insert，则条件成立 */
				if ($_GET["action"] == "insert") {

					
					
					
					/* 添加数据需要先连接并选数据库，包含DB.php文件连接数据库 */
					include "DB.php";
					
					/* 根据用户通过POST提交的数据组合插入数据库的SQL语句 */
					$sql = "INSERT INTO manage(title, advertise, apply, activity, address,tel,createdtime) VALUES('{$_POST["title"]}', '{$_POST["advertise"]}', '{$_POST["apply"]}', '{$_POST["activity"]}',  '{$_POST["address"]}', '{$_POST["tel"]}', now() )";
					/* 执行INSERT语句 */
					$result = mysql_query($sql);
					/* 如果INSERT语句执行成功，并对数据表manage有行数影响，则插入数据成功 */
					if($result && mysql_affected_rows() > 0 ) {
						echo "插入一条数据成功!";
					}else {
						echo "数据录入失败!";
					}
					/* 用完后关闭数据库的连接 */
					mysql_close($link);
				}
					
				
			?>
	</body>
</html>