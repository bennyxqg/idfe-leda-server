<footer>
    <p>深圳市创梦天地科技有限公司 版权所有 Copyright©2009-<span class="copy-year">2018</span></p>
    <p>粤ICP备11018438号 粤网文【2014】0153-003号</p>
    <p>深圳市创梦天地科技有限公司</p>
    <span class="bottom"></span>
</footer>
<script type="text/javascript" src="<?php BASE_URL() ?>/js/jquery-1.9.1.js"></script>
<script>
    $(document).ready(function(){
        //版权自动年份
        var d = new Date();
        $('.copy-year').html(d.getFullYear());
    });
</script>