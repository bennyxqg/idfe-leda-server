<!DOCTYPE html>
<html>
<head>
    <meta content="text/html;charset=utf-8" http-equiv="Content-Type">
    <title>网站管理系统 </title>
    <link media="screen" href="/css/reset.css" rel="stylesheet" type="text/css">
    <link media="screen" href="/css/layout.css" rel="stylesheet" type="text/css">
    <script src="/js/jquery-1.8.2.min.js" type="text/javascript"></script>
    <script src="/js/md5.js" type="text/javascript"></script>
    <script src="/js/core.js" type="text/javascript"></script>
    <style type="text/css">
        .login {
            width: 500px;
            height: 240px;
            padding: 20px;
            position: absolute;
            top: 50%;
            left: 50%;
            margin: -141px 0 0 -271px;
            border: 1px solid #bbb;
            background: #fff;
        }

        .login h1 {
            float: none;
            clear: both;
            text-align: center;
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
<div class="login">
    <h1>网站管理系统</h1>
    <?php echo $this->Session->flash(); ?>
    <form action='/admin/Users/login' method='post' id="loginForm">
        <ul class="form clearfix">
            <li>
                <span class="label">用户名：</span>

                <div class="fc">
                    <input type="text" class="iText" style="width:220px;" name='name' id="name"/>
                </div>
            </li>
            <li>
                <span class="label">密码：</span>

                <div class="fc">
                    <input type="password" class="iText" style="width:220px;" name='password' id="password"/>
                </div>
            </li>
            <li>
                <div class="fc">
                    <input type="submit" value="登录" class="submit"/>
                </div>
            </li>
        </ul>
    </form>
</div>
<script type="text/javascript">
$(function(){
	$("#loginForm").submit(function(){
		$("#password").val(hex_md5($("#password").val()));
		return true;
	});
});
</script>
</body>
</html>