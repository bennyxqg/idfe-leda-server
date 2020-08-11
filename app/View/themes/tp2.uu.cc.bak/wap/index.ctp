<html>
<head>
    <title>封神诀</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1.0, user-scalable=yes;"/>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
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

        .box .head {
            height: 33px;
            position: relative;
        }

        .box .n {
            background: url(/images/wap/h_bg.png) no-repeat 0 0, url(/images/wap/h_bg.png) repeat-x 0 -120px;
        }

        .box .t {
            background: url(/images/wap/h_bg.png) no-repeat 0 -32px, url(/images/wap/h_bg.png) repeat-x 0 -120px;
        }

        .box .s {
            background: url(/images/wap/h_bg.png) no-repeat 0 -64px, url(/images/wap/h_bg.png) repeat-x 0 -120px;
        }

        .box .head a {
            width: 30px;
            height: 13px;
            display: block;
            position: absolute;
            overflow: hidden;
            text-indent: -999em;
            right: 10px;
            top: 9px;
            background: url("/images/wap/h_bg.png") no-repeat 0 -195px;
        }

        .list {
            font-size: 1.4em;
            line-height: 2em;
        }

        .list li {
            padding: 0 10px;
            list-style: none;
            position: relative;
            border-bottom: 1px dashed #6f5d4f;
        }

        .list li.last {
            border: none;
        }

        .list li .d {
            position: absolute;
            right: 10px;
            top: 0.1em;
            color: #8a8560;
        }

        .list a {
            text-decoration: none;
            color: #d9d196;
            display: block;
            padding-right: 4em;
            overflow: hidden;
            white-space: nowrap;
            text-overflow: ellipsis;
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
    <div class="ad"><a href="<?php echo $download_url ?>"><img src="/images/wap/ad.jpg"/></a></div>
    <div class="box">
        <div class="head n"><a href="/news?cid=1">more</a></div>
        <div class="list">
            <ul>
                <?php if (!empty($notice_list)) {
                    foreach ($notice_list as $k => $game) { ?>
                        <li <?php if ($k + 1 == count($notice_list)) {
                            echo 'class=last';
                        } ?>>
                            <a href="show?id=<?php echo $game['News']['id'] ?>"><?php echo mb_substr($game['News']['title'], 0, 18) ?></a><span
                                class='d'><?php echo date('m/d', $game['News']['updated']) ?></span></li>
                    <?php }
                } else { ?>
                    <li></li>
                <?php } ?>
            </ul>
        </div>
    </div>
    <div class="box">
        <div class="head t"><a href="/news?cid=4">more</a></div>
        <div class="list">
            <ul>
                <?php if (!empty($gameinfo)) {
                    foreach ($gameinfo as $k => $game) { ?>
                        <li <?php if ($k + 1 == count($gameinfo)) {
                            echo 'class=last';
                        } ?>>
                            <a href="show?id=<?php echo $game['News']['id'] ?>"><?php echo mb_substr($game['News']['title'], 0, 18) ?></a><span
                                class='d'><?php echo date('m/d', $game['News']['updated']) ?></span></li>
                    <?php }
                } else { ?>
                    <li></li>
                <?php } ?>
            </ul>
        </div>
    </div>
    <div class="box">
        <div class="head s"><a href="/news?cid=5">more</a></div>
        <div class="list">
            <ul>
                <?php if (!empty($gonglue_list)) {
                    foreach ($gonglue_list as $k => $game) { ?>
                        <li <?php if ($k + 1 == count($gonglue_list)) {
                            echo 'class=last';
                        } ?>>
                            <a href="show?id=<?php echo $game['News']['id'] ?>"><?php echo mb_substr($game['News']['title'], 0, 18) ?></a><span
                                class='d'><?php echo date('m/d', $game['News']['updated']) ?></span></li>
                    <?php }
                } else { ?>
                    <li></li>
                <?php } ?>
            </ul>
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