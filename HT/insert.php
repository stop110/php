<meta charset="utf-8">
<?php
/* 添加数据需要先连接并选数据库，包含DB.php文件连接数据库 */
include "DB.php";
if($_POST['sid'] != '' && $_POST['sid'] == $_SESSION['sid'])
{
　unset($_SESSION['sid']);
 
　
$sql="INSERT INTO entered(mobile,username,createddate)values('{$_POST["mobile"]}','{$_POST["username"]}',now())";
	/* 执行INSERT语句 */
$result=mysql_query($sql);
/*if($result && mysql_affected_rows()>0){
	echo "插入一条数据成功！";
}else{
	echo "数据录入失败！";
}
*/
}
else
{
　echo '已提交过表单';
}

mysql_close($link);
?>