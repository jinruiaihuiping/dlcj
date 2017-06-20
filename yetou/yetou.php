<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>大连城建页头</title>
	<style>
/*clear*/

		#st{
			/*搜索输入框*/
			width: 230px;
			height: 26px;
			background: #fff;
			border: 1px solid rgb(15, 169, 235);
			border-right: none;
			float: left;
			font-size: 16px;
			text-indent: 5px;
			margin-top: 15px;
		}
		#search1{
			width: 60px;
			height: 30px;
			background: rgb(15, 169, 235);
			border: 1px solid rgb(15, 169, 235);
			color: #fff;
			float: left;
			font-size: 16px;
			margin-top: 15px;
		}
		#head{
			width: 100%
			height:50px;
			border-top: 1px solid #c6d2d8;
			border-bottom: 1px solid #c6d2d8;
			clear:both
		}
		#nav_title{
			/*页头标题*/
			width: 1001px;
			height: 50px;
			margin:0px auto;
			line-height: 50px;
			text-align: center;
			font-size: 18px;
		}
		#nav_title a{
			display: block;
			width: 143px;
			height:50px;
			float: left;
			text-decoration-line: none;
			color: #3f3345;
		}
		#nav_title a:hover{
			background: #0fa9eb;
			color: #fff;
		}
		#logo{
			display: block;
			width: 485px;
			height: 107px;
			margin-left: 145px;
		}
		#logo_box{
			width: 852px;
			height: 107px;
			float: left;
		}
		#search_box{
			width: 296px;
			height: 92px;
			float: right;
			margin-top: 15px;
			margin-right: 130px;
		}
		#search_box a{
			text-decoration-line: none;
			color: #747474;
			font-size: 14px;
		}
		#banner{
			width: 100%;
			height:100%;
		}
		#head_box{
			width: 1287px;
			height: 107px;
			margin:0px auto;
		}
		body{
			margin: 0px 0px;
		}
	</style>
</head>
<body>
	<div id="head_box">
		<div id="logo_box">
			<a id='logo' href=""><img src="../images/yetoulogo.png"></a>
		</div>
		<div id="search_box">
			<div align="right">
				<a href="">设为首页</a>丨
				<a href="">加入收藏</a>
			</div>
				<form action="" method="post">
						<input type="text" name="search text" id="st" placeholder="请输入关键词......">
						<input type="submit" name="search" id='search1' value="搜索">
				</form>
		</div>
	</div>
	<div >
		<div id="head">
			<div id="nav_title">
				<a href="">网站首页</a>
				<a href="">关于诚技</a>
				<a href=""> 新闻资讯</a>
				<a href="">产品中心</a>
				<a href="">成功案例</a>
				<a href="">人才招聘</a>
				<a href="">联系我们</a>
			</div>
		</div>
	</div>
	<div >
		<img id="banner" src="../images/banner.jpg">
	</div>
</body>
</html>