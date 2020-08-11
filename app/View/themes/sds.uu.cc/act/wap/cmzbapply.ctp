<html>
<head>
<title>信息填写</title>
<!-- 新 Bootstrap 核心 CSS 文件 -->
<link rel="stylesheet" href="//cdn.bootcss.com/bootstrap/3.3.5/css/bootstrap.min.css">
<script src="//cdn.bootcss.com/jquery/1.7.1/jquery.min.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
</head>
<body>
<p class="bg-primary" style="text-align: center;padding:30px;font-size:30px;">填写信息</p>
<div style="padding:20px;">
<form>
  <div class="form-group">
    <label for="exampleInputEmail1">姓名</label>
    <input type="text" id="name" name="name" class="form-control" id="exampleInputEmail1" placeholder="请输入姓名" required="true">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">手机</label>
    <input type="text" id="phone" name="phone" class="form-control" id="exampleInputPassword1" placeholder="请输入手机号码" required="true">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">公司</label>
    <input type="text" id="company" name="company" class="form-control" id="exampleInputPassword1" placeholder="请输入公司名称" required="true">
  </div>
  <br>
  <a href="javascript:;" id="submit" class="btn btn-primary btn-lg btn-block">提交</a>
</form>
</div>

</body>
</html>
<script type="text/javascript">
$(document).ready(function(){
	$("#submit").click(function(){
		var name = $("#name").val();
		var phone = $("#phone").val();
		var company = $("#company").val()
		if (name == "" || phone == "" || company == "") {
			alert("姓名，手机号码，公司名称都不能为空");
			return;
		}
		if(!check_phone(phone)) {
			alert("手机号码不正确");
			return false;
		}
		$.ajax({
			  url: "//sds.uu.cc/act/cmzbapply",
			  type:"POST",
			  dataType: 'json',
			  data: $("form").serialize(),
			  success: function(data){
					if (data.ret == 0) {
						alert(data.msg);
					} else {
						alert(data.msg);
					}
				}
			});
	});
});
function check_phone(tel) {
	 var reg = /^0?1[3|4|5|8][0-9]\d{8}$/;
	 if (reg.test(tel)) {
	      return true;
	 }else{
		 return false;
	 };
}
</script>
