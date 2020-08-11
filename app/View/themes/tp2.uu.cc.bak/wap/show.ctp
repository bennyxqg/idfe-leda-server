<html>
<head>
    <title>封神诀</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1.0, user-scalable=yes;"/>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <script src="/js/jquery-1.8.2.min.js" type="text/javascript"></script>
    <style type="text/css">
        * {
            margin: 0;
            padding: 0;
        }

        body {
            font-size: 62.6%;
            background: #5b4433 url(/images/wap/footer.png) no-repeat 50% 100%;
        }

        img {
            max-width: 100%;
        }

        .page {
            max-width: 320px;
            margin: 0 auto;
        }

        .top {
            background: url(/images/wap/top.jpg) no-repeat;
            height: 51px;
            position: relative;
        }

        .bbsBtn {
            top: 7px;
            right: 4px;
            position: absolute;
        }

        .introduce {
            top: 7px;
            left: 112px;
            position: absolute;
        }

        .detail {
            -webkit-box-flex: 1;
            box-flex: 1;
            color: #d9d196;
        }

        h1 {
            font-size: 2.4em;
            line-height: 1;
            padding: 0.8em 0 0.3em 0;
            color: #e5a34b;
            text-align: center;
        }

        .info {
            text-align: center;
            font-size: 1.4em;
            line-height: 1.8em;
            margin-bottom: 0.8em;
            color: #8a8560;
        }

        .text {
            font-size: 1.4em;
            padding: 0.4em 1.1em;
            border-top: 1px dashed #412614;
            line-height: 1.6em;
        }

        .orange {
            color: #e5a34b;
            font-size: 1.2em;
            margin-bottom: 0.4em;
        }

        .copyright {
            line-height: 22px;
            padding: 5px 10px 2px;
            color: #7d7d7d;
            font-family: Arial;
            font-size: 12px;
        }

        .copyright a {
            font-size: 1em;
            color: #7d7d7d;
            text-decoration: none;
        }
    </style>
</head>
<body>
<div class="page">
    <div class="top">
        <a href="#" class="introduce"><img src="/images/wap/introduce.png"></a>
        <a href="<?php echo $bbs_info; ?>" class="bbsBtn"><img src="/images/wap/btn.png"/></a>
    </div>
    <div class="detail">
        <h1><?php echo $news['News']['title'] ?></h1>

        <p class="info"><?php echo date('Y-m-d H:i', $news['News']['updated']) ?>
            点击：<?php echo $news['News']['clicks'] ?>次</p>

        <div class="text" id='cardcode'>
            <p class="orange"> <?php echo $news['News']['title'] ?></p>
            <?php echo $news['News']['content'] ?>
        </div>
    </div>
    <div class="copyright">
        <?php echo $this->element('_foot') ?>
    </div>
</div>
<script>
    window.addEventListener("load", function () {
        setTimeout(function () {
            window.scrollTo(0, 1);
        }, 0);
    }, false);
</script>
</body>
</html>