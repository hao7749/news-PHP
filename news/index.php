<html>
<meta charset="UTF-8" />

<head>
<title>任动新闻</title>
<link rel="stylesheet" type="text/css" href="public/css/index.css" />
<link rel="stylesheet" type="text/css" href="public/js/css/layui.css"/>
<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
</head>

<body>
<!--外层包裹-->
<div id="nav">
<h1 class="logo"><a href="#"><img src="public/img/logoko.png" alt=""></a></h1>
<div class="nav-item">
<a href="#">要闻</a>
<a href="#">热点</a>
<a href="#">专题</a>
</div>
</div>
<div class="layui-carousel" id="banner">
  <div carousel-item>
    <div><img src="public/img/banner2.jpeg"/></div>
    <div><img src="public/img/banner2.jpg"/></div>
    <div><img src="public/img/banner3.jpeg"/></div>
    <div><img src="public/img/banner4.jpg"/></div>
    <div><img src="public/img/banner4.jpg"/></div>
  </div>
</div>
<div id="content">

<div id="main">
<h2>要闻|</h2>
<?php
include './controller/dataTreating.php';

if ($data) {

	for ($i = 0; $i < count($data); $i++) {
		echo "<div class='new-list'>
	              <h2 class='new-title'><a href='./view/news.php?index=$i'  >{$data["$i"]['news_title']}</a></h2>
	              <p>{$data["$i"]['news_content']}</p>
	              <span>
	                  时间：{$data["$i"]['release_time']} 作者：{$data["$i"]['News_author']}
	              </span>
	          </div>";
	}
}
            	?>
          <!--<div class="new-list">
                <h2 class="new-title"><a href="#">标题巴拉巴拉</a></h2>
                <p>adshhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhehhhhhhhhhhhhhhhhhhhhhhhhhhhhhh</p>
                <span>
                    时间：2020-11-11 作者：huang
                </span>
            </div>-->
        </div>
        <div id="paging">
            <button>《 上一页</button>
            <input type="text" name="pagination" placeholder="跳转到几页" />
            <button>下一页 》</button>
        </div>

    </div>
    <div id="footer">
        <p>版权所有：huang</p>
        <p>隐私政策 服务条款 粤ICP备10005211号</p>
        <p></p>
    </div>
<script src="public/js/layui.js"></script>  
  <script type="text/javascript">
    	layui.use('carousel', function(){
  var carousel = layui.carousel;
  //建造实例
  carousel.render({
    elem: '#banner'
    ,width: '80%' //设置容器宽度
    ,arrow: 'always' //始终显示箭头
    //,anim: 'updown' //切换动画方式
  });
});
    </script>
</body>

</html>
