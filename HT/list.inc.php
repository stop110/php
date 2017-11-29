<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>后台活动管理</title>
		<link rel="stylesheet" href="css/show.css" />
		<script type="text/javascript" src="js/jquery-1.6.min.js" ></script>
		<script type="text/javascript" src="js/mine.js" ></script>
	</head>
	<body>
		<div id="box">

			<div id="right_width" class="right_show">
				<div class="right_wrap">
				<div class="show_title"><p>后台活动管理</p></div>
				<Div class="right_box">
					<div class="right_topBar">
						<ul>
							<li><a href="#">添加活动</a></li>
							<li><a href="#">修改活动</a></li>
						</ul>
					</div>
					
					<div class="content_box">
						<div class="content_all">
							<table width="95%" border="0" cellpadding="0" cellspacing="1" bgcolor="#999999">
								<tr>
								  <td align="center" valign="middle" bgcolor="#d1d1d1" >ID</td>
						     	  <td align="center" valign="middle" bgcolor="#d1d1d1" >手机号</td>
						     	  <td align="center" valign="middle" bgcolor="#d1d1d1">姓名</td>					     	  
							      <td height="35" align="center" valign="middle" bgcolor="#d1d1d1">报名时间</td>							 
						  		</tr>
						  		 
								 <?php
									/* 添加数据需要先连接并选数据库，包含DB.php文件连接数据库 */
										include "DB.php";
										
										// 总记录数  
										$sql = "SELECT id  FROM  entered ";  
										$zs=mysql_query($sql);
										$totalnums = mysql_num_rows($zs);  
										
  										// 每页显示条数  
										$fnum = 3;  
  
										// 翻页数  
										$pagenum = ceil($totalnums / $fnum);  
  
										// 页数常量  
										@$tmp = $_GET['page'];  
  
										//防止恶意翻页  
										/*if ($tmp > $pagenum)  
    									echo "<script>window.location.href='list.inc.php'</script>";  
  */
										//计算分页起始值  
										if ($tmp == "") {  
    													$num = 0;  
														} else {  
    															$num = ($tmp - 1) * $fnum;  
																}  
  
										// 查询语句  
										$sql = "SELECT id,mobile,username,createddate  FROM  entered ORDER BY id ASC LIMIT " . $num . ",$fnum";  
										$result = mysql_query($sql);  
  
										/*// 遍历输出  
										while (! ! $rows = dolists($result)) {  
    																	echo $rows['dg_id'] . " " . $rows['dg_username'] . "<br>";  
																		}  
  */
												
										
										/*$sql="SELECT id,mobile,username,createddate FROM entered ORDER BY id ASC";
										$result=mysql_query($sql);*/
	
										while($row=mysql_fetch_array($result)){
			    							echo '<tr>';	
											echo '<td align="center" valign="middle" bgcolor="#e7e7e7" class="Pleft">'.$row['id'].'</td>';
											echo '<td align="center" valign="middle" bgcolor="#e7e7e7" class="Pleft">'.$row['mobile'].'</td>';
											echo '<td align="center" valign="middle" bgcolor="#e7e7e7" class="Pleft">'.$row['username'].'</td>';
											echo '<td align="center" valign="middle" bgcolor="#e7e7e7" class="Pleft">'.$row['createddate'].'</td>';
											echo '</tr>';
			    
			   
										}
										
		 						
								  
								  
								  
						echo	'</table>';
						echo	'<div class="page">';
						echo		'<ul>';
									// 翻页链接  
										for ($i = 0; $i < $pagenum; $i ++) {  
    											echo "<li><a href=list.inc.php?page=".($i+1).">".($i+1)."</a></li>";  
													}  
									
						echo		'</ul>';
								
						echo	'</div>';
										mysql_free_result($result);
										mysql_close($link);
							?>
						</div>
						<div class="clear"></div>
					</div>
				</Div>
			</div>
			<div class="clear"></div>
			</div>
			
			
			<div id="left_nav" class="left_menu">
				<div class="back">
					<a href="#"></a>
				</div>
				<div class="menu_list">
					<ul>
						<li><a href="system.php">报名人员查看</a></li>
						<li><a href="#">活动添加</a></li>
						<li><a href="#">活动修改</a></li>
				
					</ul>
				</div>
			</div>
			
			
			
		</div>
	</body>
</html>
