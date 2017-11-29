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
							<ul>
								<form enctype="multipart/form-data" action="index.php?action=insert" method="POST">
								<li><span>活动主题：</span><input type="title" value=""></li>
								<li><span>首页广告：</span><input type="advertise" value=""></li>
								<li><span>报名时间：</span><input type="apply" value=""></li>
								<li><span>活动时间：</span><input type="activity" value=""></li>
								<li><span>活动地址：</span><input type="address" value=""></li>
								<li><span>疑问咨询：</span><input type="tel" value=""></li>
								
								
							</ul>
							<div class="btn_box">
									<input class="queding" value="添加活动"" type="submit">
								</form>		
							</div>	
							
					
							
																
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
