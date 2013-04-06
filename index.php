<?php ob_start('ob_gzhandler'); ?>
<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>THEC.ME - ("▔□▔)</title>
<link href="static/x.css" rel="stylesheet" />
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
</head>

<body id="me">
<div id="about">
	<div class="wrapper clearfix" id="opacity">
        <img src="avatar.jpg" title="别……别乱戳" alt="好像图片显示不出来？这里本来是我的头像..." id="avatar" />
        <div id="profile">
            <h1>没有妹子就跟没有活过一样！</h1>
            <h2>产于1991年，喜欢ACG、软妹、历史，偶尔搞点高科技</h2>
            <ul>
            	<li><a href="http://blog.thec.me" title="千歳屋" target="_blank"><img src="http://s.wordpress.org/favicon.ico?3" />&nbsp;博客</a>
                <li><a href="http://weibo.com/chitosai" title="渣浪微博求交往" target="_blank"><img src="http://weibo.com/favicon.ico" />&nbsp;微博</a>
                <li><a href="http://bgm.tv/user/thec" title="Bangumi" target="_blank"><img src="http://bgm.tv/img/favicon.ico" />&nbsp;Bangumi</a>
            </ul>
        </div>
    </div>
</div>

<div class="color-sep"></div>

<div id="more">
	<div class="wrapper clearfix">
    	<a id="upAndDown" href="javascript:void();"><img src="static/arrow.png" id="arrow" />&nbsp;&nbsp;CODE for FUN</a>
        <div id="projects" class="clearfix">
        	<a href="http://static.acfun.tv/ac2011/" target="_blank">
            	<img src="static/p-1-ac2011.jpg" />
                <p>AcFun 2011年鉴</p>
            </a>
            <a href="http://acgindex.sinaapp.com/" target="_blank">
            	<img src="static/p-2-acgindex.jpg" />
                <p>简单易懂的魔法禁书目录</p>
            </a>
            <a href="http://www.030buy.com/" target="_blank">
                <img src="static/p-3-030.jpg" />
                <p>萌购 <small>v20121029</small></p>
            </a>
            <a href="http://exceed.ln.gg/" target="_blank">
            	<img src="static/p-4-exceed.jpg" />
                <p>《断罪的EXCEED》小说官网</p>
            </a>
            <a href="http://rakuen.thec.me/ac2012" target="_blank">
                <img src="static/p-5-ac2012.jpg" />
                <p>AcFun 2012年鉴（坑</p>
            </a>
        </div>
    </div>
</div>
<div class="wrapper"><p id="copyright"><a href="blog">TheC</a> 2012 | DESIGN FOR FUN</p></div>
</body>
<script type="text/javascript">
var h = 0, m = 0;
function initPos() {
	var w = $(window).height()-580;
	w = w>0?w:0;
	$('#avatar').css('margin', w/2 + 'px 0');
	$('#profile').css('top', w/2 + 200 + 'px');
	$('#more').css('height', $(window).height() - 24 + 'px' );
	h = $('#about').height();
	m = h - w/2;
}
function scrollPage() {
	var ch = $(window).scrollTop();
	// 页面滚动效果
	if(ch < h/2) $('body,html').animate({'scrollTop': h + 'px'}, 1000, 'swing');
	else $('body,html').animate({'scrollTop': 0}, 1000, 'swing');
}
function onScroll() {
	var ch = $(window).scrollTop(), d = $('#arrow').data('direction');
	// 箭头方向
	if((ch < h/2 && d == 'up') || (ch > h/2 && d == 'down')) {
		// TODO: animate
		$('#arrow').toggleClass('rotated');
		d = d=='up' ? 'down' : 'up';
		$('#arrow').data('direction', d);
	}
	// profile透明度
	if(ch < m) $('#opacity').css('opacity', 1 - ch/m);
}
function init() {
	$(window).resize(initPos).scroll(onScroll);
	$('#upAndDown').click(scrollPage);
	$('#arrow').data('direction','down');
	initPos();
}
$(document).ready(init);


var _gaq = _gaq || [];
_gaq.push(['_setAccount', 'UA-24680734-2']);
_gaq.push(['_trackPageview']);

(function() {
var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
})();


</script>
</html>
