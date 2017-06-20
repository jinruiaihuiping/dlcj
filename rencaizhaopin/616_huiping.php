<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>616_课堂练习</title>
	<style>

		#dlzhaopin_box{
			width: 780px;
			height: 475px;
			margin:0 auto;
		}
		#dlzhaopin_box ul{
			/*招聘表*/
			width: 780px;
			height: 475px;
			list-style: none;
			margin:0px;
			padding: 0px;
		}
		#dlzhaopin_box ul #title{
			width: 780px;
			height: 46px;
			/*background: #ccc*/;
			border-bottom: 1px solid #a0a0a0;
		}
		#dlzhaopin_box ul #title span{
			font-size: 18px;
			color: rgb(15, 169, 235);
			border-bottom: 2px solid rgb(15, 169, 235);
			line-height: 66px;
		}
		#dlzhaopin_box ul li{
			width: 780px;
			height: 50px;
			border-bottom: 1px dashed #a0a0a0;
		}

		#dlzhaopin_box ul li .right{
			float: right;
			color: rgb(15, 169, 235);
		}
		#dlzhaopin_box ul li a{
			line-height: 50px;
			text-decoration-line: none;
			color: #000;
		}
		#dlzhaopin_box ul li a:hover{
			color: rgb(15, 169, 235);
		}
	</style>

</head>
<body>
	
		<div id="dlzhaopin_box">
			<ul>
				<?php function showList(){
				echo '
				<li id="title"><span>招聘职位</span></li>
				<li><a href=""><span id="first">机械工程师</span><span class="right">应聘职位</span></a></li>
				<li><a href=""><span>机械设计主管</span><span class="right">应聘职位</span></a></li>
				<li><a href=""><span>电气自动化工程师</span><span class="right">应聘职位</span></a></li>
				<li><a href=""><span>电气自动化设计主管</span><span class="right">应聘职位</span></a></li>
				<li><a href=""><span>液压工程师</span><span class="right">应聘职位</span></a></li>
				<li><a href=""><span>液压钳工</span><span class="right">应聘职位</span></a></li>
				<li><a href=""><span>招聘电工</span><span class="right">应聘职位</span></a></li>
				<li><a href=""><span>装配钳工</span><span class="right">应聘职位</span></a></li>
				';}
				showList();
				?>
			</ul>
		</div>
</body>
</html>