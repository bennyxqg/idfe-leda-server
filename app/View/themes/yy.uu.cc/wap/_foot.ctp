<script type="text/javascript">
$('#down_link').click(function(){ //下载
	is_weixn();
});

function is_weixn(){
	var u = navigator.userAgent;
	var ua = u.toLowerCase();
	
	if(!!u.match(/(i[^;]+\;(U;)? CPU.+Mac OS X)/g)){
		location.href="https://itunes.apple.com/cn/app/wo-jia-gong-zhu-zui-ke-ai/id984454081?l=zh&ls=1&mt=8";
	}else{
		location.href="//sj.qq.com/myapp/detail.htm?apkName=com.tencent.tmgp.yurudora"
	}
}
//百度统计
var _hmt = _hmt || [];
(function() {
  var hm = document.createElement("script");
  hm.src = "//hm.baidu.com/hm.js?3b479605fe000c07848264c46f72453c";
  var s = document.getElementsByTagName("script")[0]; 
  s.parentNode.insertBefore(hm, s);
})();
</script>
</body>
</html>