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
							<?php 
									include 'DB.php';
	
									$sql = "select * from manage";
									/*	echo "sql:".$sql;*/
									$result = mysql_query($sql);
									if($row = mysql_fetch_array($result)){
							?>

							<form enctype="multipart/form-data" action="update.php" method="post">
							<ul>
								
								<li><span>活动主题：</span><input type="text" name="id" value="<?php echo $row['ID']?>"></li>	
								<li><span>活动主题：</span><input type="text" name="title" value="<?php echo $row['title']?>"></li>
								<li><span>首页广告：</span><input type="text" name="advertise" value="<?php echo $row['advertise']?>"></li>
								<li><span>报名时间：</span><input type="text" name="apply" value="<?php echo $row['apply']?>"></li>
								<li><span>活动时间：</span><input type="text" name="activity" value="<?php echo $row['activity']?>"></li>
								<li><span>活动地址：</span><input type="text" name="address" value="<?php echo $row['address']?>"></li>
								<li><span>疑问咨询：</span><input type="text" name="tel" value="<?php echo $row['tel']?>"></li>
									
							
							</ul>
							<div class="btn_box">
									<input class="queding" type="submit" value="修改用户" >
							
							</div>	
							
							</form>	
									<?php }?>	
																
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

