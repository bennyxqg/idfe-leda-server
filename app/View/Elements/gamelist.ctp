<style>
    .fl {
        float: left;
    }

    .fr {
        float: right;
    }

    .ghp-box, .ghp-logo, .ghp-gl-btn {
        background: url("/css/gamelist/ghp_bg.png") no-repeat;
    }

    .ghp-box {
        width: 100%;
        position: absolute;
        z-index: 9999;
        left: 0;
        top: 0;
        background-position: 0 0;
        background-repeat: repeat-x;
        border-bottom: 1px solid #e6e6e6;
        font-family: Tahoma, "simsun";
        font-size: 12px;
        min-width: 980px;
    }

    .ghp-inner {
        line-height: 39px;
        margin: 0 auto;
        padding: 0 5px;
        position: relative;
        width: 980px;
        z-index: 100;
        zoom: 1;
    }

    .ghp-inner:after, .ghp-game-inner:after {
        content: "";
        height: 0;
        display: block;
        overflow: hidden;
        visibility: hidden;
    }

    .ghp-inner li {
        height: 40px;
        overflow: hidden;
    }

    .ghp-inner li.ghp-logo a {
        display: block;
        *zoom: 1;
        line-height: 999em;
        height: 40px;
    }

    .ghp-logo {
        background-position: 0 -39px;
        width: 209px;
        padding-right: 19px;
    }

    .ghp-ad {
        width: 230px;
    }

    .ghp-gl-btn {
        background-position: 0 -78px;
        width: 98px;
    }

    .ghp-gl-btn h3 {
        font-size: 12px;
        font-weight: 400;
        padding: 0 0 0 12px;
        color: #666;
    }

    .ghp-ad-box {
        background: #fff;
        border-bottom: 1px solid #EEEEEE;
        display: none;
        height: 185px;
        left: 50%;
        margin: 0 0 0 -488px;
        overflow: hidden;
        padding: 0 3px 3px;
        position: absolute;
        top: 0;
        width: 970px;
    }

    .ghp-g-pop {
        height: 332px;
        position: absolute;
        right: 7px;
        top: 35px;
        width: 813px;
        z-index: 9000;
    }
</style>
<div class="ghp-box">
    <ul class="ghp-inner">
        <li class="ghp-logo fl"><a href="#" target="_blank" title="乐逗游戏">乐逗游戏</a></li>
        <li class="ghp-ad fl"><img id="ghpAdGame" src="/css/gamelist/ad.jpg"/></li>
        <li class="ghp-gl-btn fr" id="ghpGBtn">
            <h3>更多游戏</h3>
            <iframe id="ghpGBox" class="ghp-g-pop" scrolling="no" frameborder="0" allowtransparency="true"
                    src="/Online/game_list" style="display: none;"></iframe>
        </li>
    </ul>
    <div class="ghp-ad-box" id="ghpAD">
        <a target="_blank" href="http://birzzle.uu.cc/">
            <img alt="" src="/css/img/top/ad-b.jpg"/>
        </a>
    </div>
</div>
<script>
    (function () {
        function $(id) {
            return document.getElementById(id);
        }

        $("ghpAdGame").onmouseover = function () {
            this.style.display = "none";
            $("ghpAD").style.display = "block";
        }
        $("ghpAD").onmouseout = function () {
            this.style.display = "none";
            $("ghpAdGame").style.display = "block";
        }
        $("ghpGBtn").onmouseover = function () {
            $("ghpGBox").style.display = "block";
        }
        $("ghpGBtn").onmouseout = function () {
            $("ghpGBox").style.display = "none";
        }
    })();
</script> 