  <?php	
					/* 添加数据需要先连接并选数据库，包含DB.php文件连接数据库 */
					include "DB.php";
					
					
					$sql = "SELECT title, advertise, apply, activity, address,tel,createdtime FROM manage order by id desc limit 1";
					/* 执行查询语句 */
					$result = mysql_query($sql);
					 $row=mysql_fetch_array($result);
					 $sq="SELECT * FROM manage";
					 $resu = mysql_query($sq);	
					 $count=mysql_num_rows($resu);
					/* 用完后关闭数据库的连接 */
					mysql_close($link);
			?>
<!DOCTYPE html>
<html lang="zh-CN">
  <head>
    <meta charset="utf-8"> 
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport">
	<meta content="yes" name="apple-mobile-web-app-capable">
	<meta content="black" name="apple-mobile-web-app-status-bar-style">
	<meta content="telephone=no" name="format-detection">
    <title><?php echo "$row[title]";?></title>
    <link href="./css/common.css" rel="stylesheet">
	  <style>
		  form>p input{
				width: 100%;
				line-height: 20px;
				padding: 10px;
			  height:40px;
			}
		  form input[type="submit"]{
			  display: block;
			  width:100%;
			  height: 40px;
			  line-height:20px;
		  }
	  </style>
    <!-- script type="text/javascript" src="/static/weixinenter/js/jquery-1.10.2.min.js"></script -->
    <script src="http://cdn.bootcss.com/jquery/1.11.2/jquery.min.js"></script>
    <script src="http://res.wx.qq.com/open/js/jweixin-1.0.0.js"></script>
    <script type="text/javascript" src="./js/layer/layer.min.js"></script>
  </head>
  
  <body>
	<!-- 导航条 -->
	<div class="header">
		
		<img src="./image/jiaju-logo.png" height="28"><span>| </span>
		
		<strong><?php echo "$row[title]";?></strong>
	</div>
	
  	<!-- 大图   -->
  	
  		<div><img src="<?php echo "$row[advertise]";?>" style=" width:100%;"></div>
  	
  	
  	<!-- 表单 -->
  	<a  id="F5"></a>
  	<div class="clear"></div>
  	<div class="total">已有 <span><?php echo "$count";?></span> 人报名</div>
  	  
	  	
	  	<form action='insert.php' method='post' enctype='multipart/form-data'>
			<p><input type='text' name='mobile' placeholder='请输入手机号' value=''></p>
			<p><input type='text' name='username'   placeholder='请输入姓名' value=''></p>
			     <input type="hidden" name="sid" value="<?=$sess_id; ?>">
			
			<p><input type='submit' name='submit' value='报名提交' class='btn'></p>
		</form>
	
    
    <!-- 活动介绍 -->
  	<div class="wrap">
    	<div class="info-title">活动介绍</div>
    	
    	
	    	<p class="s-title"><span>报名时间：</span></p>
	    	<p class="s-con"><?php echo "$row[apply]";?></p>
    	
    	
	    	<p class="s-title"><span>活动时间：</span></p>
	    	<p class="s-con"><?php echo "$row[activity]";?></p>
    	
    	
	    	<p class="s-title"><span>活动地址：</span></p>
	    	<p class="s-con"><?php echo "$row[address]";?></p>
    	
    	
	    	<p class="s-title"><span>咨询电话：</span></p>
	    	<p class="s-con"><?php echo "$row[tel]";?></p>
    	
    	
    	
    	
    	
	    	<p class="s-title"><span>装修建材采购会的疑问都可以来咨询我哦：</span></p>
	    	<p><img src="http://api.0550.com/thumb/0400000001/uploads/images/c0/41/16/1865d3fa677827e2e2900d1dc6.jpg" style="margin:0 auto; width:80%; display:block;"></p>
    	
    </div>
    
    
    <!-- 活动赏析 -->
    
    <div class="wrap">
    	<div class="info-title">活动简介</div>
    	
    	<p><img src="http://api.0550.com/thumb/0640000001/uploads/images/ce/50/01/4bb2b9c716577ea42176d28f45.jpg" width="100%" style="margin:0 auto; display:block;"></p><br>
    	
    	<p><img src="http://api.0550.com/thumb/0640000001/uploads/images/3b/ee/04/87fd6f470575c7b9a1c99b8816.jpg" width="100%" style="margin:0 auto; display:block;"></p><br>
    	
    	<p><img src="http://api.0550.com/thumb/0640000001/uploads/images/b1/2f/41/376148ce254946d170bd1aea6d.jpg" width="100%" style="margin:0 auto; display:block;"></p><br>
    	
    	<p><img src="http://api.0550.com/thumb/0640000001/uploads/images/7a/38/1a/56ea49ca58984f770066335ea8.jpg" width="100%" style="margin:0 auto; display:block;"></p><br>
    	
    </div>
    
    
    
    
    	
    
    <div class="wrap">
    	<p class="s-title"><a href="http://bbs.0550.com/t-868672-1-1.html"_blank" style="color:#f50;">【E滁州装修建材采购会-地板篇】实木、实木多层随你挑，特价78元强化地板抢购！>></a></p>
<p class="s-title"><a href="http://bbs.0550.com/t-868694-1-1.html"_blank" style="color:#f50;">【E滁州装修建材采购会-衣柜篇】更多品牌，更多优惠，等你来选购>></a></p>
<p class="s-title"><a href="http://bbs.0550.com/t-868761-1-1.html"_blank" style="color:#f50;">【E滁州装修建材采购会-卫浴篇】一站式搞定你的卫浴空间，高颜值卫浴组合3699元!>></a></p>
<p class="s-title"><a href="http://bbs.0550.com/t-868802-1-1.html"_blank" style="color:#f50;">【E滁州装修建材采购会-家具篇】顾家、美乐乐大牌齐聚，各款家具优惠来袭! >></a></p>
<p class="s-title"><a href="http://bbs.0550.com/t-869011-1-1.html"_blank" style="color:#f50;">【E滁州装修建材采购会-瓷砖篇】瓷砖大牌齐聚，都优惠啦 >></a></p>
<p class="s-title"><a href="http://bbs.0550.com/t-869039-1-1.html"_blank" style="color:#f50;">【E滁州装修建材采购会-厨电篇】这些优惠都是你正需要的，提前选购一样实惠 >></a></p>
<p class="s-title"><a href="http://bbs.0550.com/t-869165-1-1.html"_blank" style="color:#f50;">【E滁州装修建材采购会-吊顶篇】这场团购吊顶商家集合，大放优惠，等你来选 >></a></p>
<p class="s-title"><a href="http://bbs.0550.com/t-869188-1-1.html"_blank" style="color:#f50;">【E滁州装修建材采购会-木门移门篇】家的颜值担当组团来啦！喜欢就来买 >></a></p>
<p class="s-title"><a href="http://bbs.0550.com/t-869213-1-1.html"_blank" style="color:#f50;">【E滁州装修建材采购会-灯饰篇】高颜值高性价比都在这了！ >></a></p>
<p class="s-title"><a href="http://bbs.0550.com/t-869214-1-1.html"_blank" style="color:#f50;">【E滁州装修建材采购会-冷暖空调篇】格力、威能、沁园大牌齐聚，究竟多优惠！ >></a></p>
<p class="s-title"><a href="http://bbs.0550.com/t-869217-1-1.html"_blank" style="color:#f50;">【E滁州装修建材采购会-橱柜篇】橱柜合集，大品牌大优惠！ >></a></p>
<p class="s-title"><a href="http://bbs.0550.com/t-869219-1-1.html"_blank" style="color:#f50;">【E滁州装修建材采购会-装饰公司】为你打造用心、舒心、放心的家装！ >></a></p>
<p class="s-title"><a href="http://bbs.0550.com/t-869208-1-1.html"_blank" style="color:#f50;">【E滁州装修建材采购会-墙饰涂料篇】乳胶漆、硅藻泥、墙纸齐聚，新年新家换新装！ >></a></p>
<p class="s-title"><a href="http://bbs.0550.com/t-869202-1-1.html"_blank" style="color:#f50;">【E滁州装修建材采购会-门窗篇】新标、皇派，惊喜优惠，放心挑选！ >></a></p>
    </div>
    
   
	<!-- 分享按钮 -->
  	<div id="share_btn"><a href="javascript:;" class="btn_ss">分享给好友/群、朋友圈</a></div>
  	
  	<!-- 我要报名弹出 -->
  	<div class="callme" style="height:0px;"><a  onclick="javascript:document.getElementById('F5').scrollIntoView()"><strong>我要报名</strong></a></div>
    
    <!-- 微信分享设置  + 页面JS设置 -->
	<script type="text/javascript">
	
		$.ajax({
	        url: "http://wq.0550.com/app/index.php?shareAuth=1",
	        type:'get',
	        dataType : "json",
	        data: {
	            'url':location.href
	        },
	        success: function (weixin) {
		//console.log(weixin);
	            wx.config({
	                debug: false,
	                appId: weixin.appId,
	                timestamp: weixin.timestamp,
	                nonceStr: weixin.nonceStr,
	                signature: weixin.signature,
	                jsApiList: [
	                    "onMenuShareTimeline",
	                    "onMenuShareAppMessage"
	                ]
	            });
	        }/*,
	        error: function(XMLHttpRequest, textStatus, errorThrown) {
	            document.write("status:"+XMLHttpRequest.status+"<br/>");
	            document.write("readyState:"+XMLHttpRequest.readyState+"<br/>");
	            document.write("textStatus:"+textStatus+"<br/>");
	        }*/
	    });
	
		wx.ready(function () {
			wx.error(function(res){
			    console.log(res);
			});
	        var shareData = {
	            title: 'E滁州装修建材采购会，46家大品牌已就位！',
	            desc: '还在等什么，快来报名参与吧，查看详情>>',
	            link: '',
	            imgUrl: 'http://api.0550.com/thumb/0150015001/uploads/images/23/f2/d3/743bd65e3d1b765d34a9e6c12a.jpg',
	        };
	        //分享朋友
	        wx.onMenuShareAppMessage({
	            title: shareData.title,
	            desc: shareData.desc,
	            link: shareData.link,
	            imgUrl:shareData.imgUrl,
	            trigger: function (res) {
	            },
	            success: function (res) {
	                //window.location.href =adurl;
	            },
	            cancel: function (res) {
	            },
	            fail: function (res) {
	                alert(JSON.stringify(res));
	            }
	        });
	        //朋友圈
	        wx.onMenuShareTimeline({
	            title: shareData.title,
	            link: shareData.link,
	            imgUrl:shareData.imgUrl,
	            trigger: function (res) {
	            },
	            success: function (res) {
	                //window.location.href =adurl;
	            },
	            cancel: function (res) {
	            },
	            fail: function (res) {
	                alert(JSON.stringify(res));
	            }
	        });
	    });
		
	
	
		//我也要报名弹出效果
		$(window).scroll(function(){ 
			var scrollTop=document.body.scrollTop||document.documentElement.scrollTop ;
			if(scrollTop>=200)
			{
				$('.callme').css("height","46px");
			}else{
				$('.callme').css("height","0px");
			}
		});
	
		//分享遮罩层
		$('.btn_ss').on('click', function(){
		  $.layer({
		    type: 2,
		    fadeIn: 400,
			shift: 'top',
		    border: [0],
			bgcolor: '',
		    offset: ['0', ''],
			title: false,
		    closeBtn: false,
			maxmin: false,
			shade: [0.7, '#000000'],
		    shadeClose: true, //开启点击遮罩关闭层
		    iframe: {src : 'http://baoming.0550.com/share.html'},
		    area: ['100%' , '178px']
		  });
		});
	</script>
	
	<!-- 统计代码 -->
	<script type="text/javascript">var cnzz_protocol = (("https:" == document.location.protocol) ? " https://" : " http://");document.write(unescape("%3Cspan id='cnzz_stat_icon_1256423826'%3E%3C/span%3E%3Cscript src='" + cnzz_protocol + "w.cnzz.com/q_stat.php%3Fid%3D1256423826' type='text/javascript'%3E%3C/script%3E"));</script>
  </body>
</html>