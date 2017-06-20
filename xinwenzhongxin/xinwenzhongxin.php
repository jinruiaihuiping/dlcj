<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>616_课堂练习2</title>
	<style>
		#xinwen_box{
			margin-left: 30px;
			float: left;
		}
		#xinwenzixun{
			width: 780px;
			height: 46px;
			border-bottom: solid 1px #ccc;
		}
		#xinwenzixun span{
			position: relative;
			top: 16px;
			color: #0fa9eb;
			font-size: 18px;
			border-bottom: solid 3px #0fa9eb;
			padding-bottom: 5px;
		}
		dl{
			margin:0px;
			padding: 0px;
			/*background: #999;*/
			width: 780px;
			overflow: hidden;
			border-bottom: 1px dashed #e5e5e5;
			padding-bottom: 20px;
			padding-top: 20px;

		}
		dl dt img{
			width: 190px;
			height: 140px;
		}
		dl dt{
			margin:0px;
			padding:0px;
			width: 190px;
			height: 140px;
			float: left;
		}

		.title{
			margin:0px;
			padding:0px;
			float: left;
			/*background: #777;*/
			width: 554px;
			height: 140px;
			font-size: 12px;
			margin-left: 36px;
			color:#333;
		}

		.date{
			float: right;
			/*background: #00f;*/
		}
		dl dd p{
			margin:0px;
			padding:0px;
		}
		dl dd a{
			text-decoration-line: none;
			color: #0fabec;
			font-size: 13px;
		}
		dl dd p a{
			text-decoration-line: none;
			font-weight: bold;
			color: #0fabec;
			font-size: 14px;
		}
		dl dd .neirong{
			text-indent: 24px;
			height: 86px;
			line-height: 26px;
			margin-top: 4px;
		}
		dl dd .btn{
			display: block;
			width: 80px;
			height: 30px;
			border:1px solid #0fa9eb;
			/*background: #fff;*/
			text-decoration-line: none;
			line-height: 30px;
			text-align: center;
		}
		#news_box{
			width: 1000px;
			overflow: hidden;
			/*background: #999;*/
			margin:0 auto;
		}
		#news_box #daohang_box{
			width: 190px;
			height: 133px;
			float: left;
			background: #0ff;
		}
		#news_box #daohang_box ul{
			margin:0px;
			padding: 0px;
			list-style: none;
		}
		#news_box #daohang_box #xinwenzixun1{
			width: 190px;
			height: 61px;
			background: #6fcbf3;
			color: #fff;
			font-size: 24px;
		}
		#news_box #daohang_box #xinwenzixun2{
			border-bottom: 1px solid #fff;
			padding-bottom: 4px;
			position: relative;
			top: 12px;
		}
		#news_box #daohang_box ul li{
			text-indent: 16px;
			background: #eee;
		}
		#news_box #daohang_box ul a{
			width: 190px;
			height: 36px;
			line-height: 36px;
			color: #000;
			text-decoration-line: none;
		}
		#news_box #daohang_box ul li:hover{
			background: #6fcbf3;
			color: #fff;
		}
	</style>
</head>
<body>
	<div id="news_box">
		<div id="daohang_box">
			<ul>
				<li id="xinwenzixun1"><span id="xinwenzixun2">新闻资讯</span></li>
				<a href=""><li>> 公司新闻</li></a>
				<a href=""><li>> 行业新闻</li></a>
			</ul>
		</div>
		<div id="xinwen_box">
			<p id="xinwenzixun">
				<span>
					新闻资讯
				</span>
			</p>
			<dl>
				<dt><a href=""><img src="../images/4.jpg"></a></dt>
				<dd class="title">
					<p><a href="">大连诚技迎来外国友人参观考察</a><span class="date">[ 2017-05-31 ]</span></p>
					<p class="neirong">5月23日下午，大连诚技迎来 了几位外国友人参观考察，公司郝副总全程陪同接待。为了迎接本次参观考察人员，各部门提前一天便制定好接待计划的相关细节，并落实到各岗位。 当日下午3点左右，外国友人如约而至。首先，刘彦凯董事长致欢迎词。然后，市场部华北区负责人张涛介绍了公司相关...</p>
					<a class="btn" href="">+ 查看详情</a>
				</dd>
			</dl>
			<dl>
				<dt><a href=""><img src="../images/5.jpg"></a></dt>
				<dd class="title">
					<p><a href="">工程部成立誓师大会</a><span class="date">[ 2017-05-02 ]</span></p>
					<p class="neirong">为更好的促进公司发展，加强项目的管理，公司决定成立工程部。2017年4月28日15:00，我公司在上品公馆会议室举行工程部成立誓师大会。公司董事长刘彦凯，郝副总和各部门领导参会。首先，刘彦凯董事长宣布任命，寄予工程部厚望，希望各部门密切配合，协助工程部的工作。工程部负责人赵福建讲...</p>
					<a class="btn" href="">+ 查看详情</a>
				</dd>
			</dl>
			<dl>
				<dt><a href=""><img src="../images/6.jpg"></a></dt>
				<dd class="title">
					<p><a href="">帅呆了！国之「神器」！</a><span class="date">[ 2017-04-06 ]</span></p>
					<p class="neirong">3月18日上午8时38分，中信重工重大技改项目—5000吨自由锻造油压机开始热负荷试生产，与配套的200吨•米操作机同步联动作业，至10时38分成功首锻。       该油压机由德国威普...</p>
					<a class="btn" href="">+ 查看详情</a>
				</dd>
			</dl>
			<dl>
				<dt><a href=""><img src="../images/7.jpg"></a></dt>
				<dd class="title">
					<p><a href="">为什么要造8万吨模锻压机？水平高在哪里？...</a><span class="date">[ 2017-04-06 ]</span></p>
					<p class="neirong">众所周知，被誉为工业皇冠上明珠的航空发动机的制造问题，一直是国人心中的“痛”。我国由于受到欧美国家出口限制，无法造出可靠性高的高性能航空发动机！如今，这个大国重器的出现，将会彻底改变这种现状！中国二重制造的8万吨模锻压机它就是四川</p>
					<a class="btn" href="">+ 查看详情</a>
				</dd>
			</dl>
			<dl>
				<dt><a href=""><img src="../images/8.jpg"></a></dt>
				<dd class="title">
					<p><a href="">和谐共赢 携手未来</a><span class="date">[ 2017-02-24 ]</span></p>
					<p class="neirong">祝大连诚技与System Seals中国代理金总洽谈圆满成功！    2017年2月23日星期四，System Seals中国代理与大连诚技代表在上品会议室进行第一次洽谈。本次会议为了进一步洽谈代理事宜，以及顺利合作，双方负责人就双...</p>
					<a class="btn" href="">+ 查看详情</a>
				</dd>
			</dl>
			<dl>
				<dt><a href=""><img src="../images/9.jpg"></a></dt>
				<dd class="title">
					<p><a href="">不忘初心 不畏前行</a><span class="date">[ 2017-02-24 ]</span></p>
					<p class="neirong">时光飞逝，岁月如梭，转眼间忙碌的2016年已过去，充满期待的2017年向我们走来。新的一年，孕育新的目标和希望。大连诚技机电设备有限公司 2017年年会于2017年1月18日在九龙湾隆重举行，公司全体员工，公司同仁与公司领导欢聚一堂，共度联欢...</p>
					<a class="btn" href="">+ 查看详情</a>
				</dd>
			</dl>
		</div>
	</div>
</body>
</html>