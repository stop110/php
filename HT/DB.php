<meta charset="utf-8">
<?php
//数据连接信息
$link=mysql_connect('localhost','root','root');
if(!$link){
	die('连接失败：'.mysql_error());
}
//echo "与mysql服务器建立连接成功！！！";  库选择
if(!mysql_select_db("test")){
	die('数据库选择失败！:'.mysql_error());
}
?>