<div id="foot">
    <div class="footer">
        <div class="cr">
           <span class="logo"><img src="http://fr.uu.cc/fr.uu.cc/images/f_logo.png"><img style="margin-left:20px;" src="http://fr.uu.cc/fr.uu.cc/images/tshd.png"></span>

             <div id="demo">
                <div id="indemo">
                <div id="demo1">
                <?php if (!empty($topData['business_list'])): ?>
                <?php foreach ($topData['business_list'] as $k =>$v):?>
                
                <a href="<?php echo $v['str2']; ?>"><img src="<?php echo $v['str1']; ?>" width="100" height="40"  /></a>
                <?php endforeach; ?>
                <?php endif; ?>
               
                </div>
                <div id="demo2"></div>
                </div>
             </div>
             <div class="hezuo">
                  <a href="javascript:;" class="hz_hover"><img src="http://fr.uu.cc/fr.uu.cc/images/hezuo.jpg" width="285" height="35" /></a>
                  <ul class="bar_hz">
                    <?php if (!empty($topData['business_list'])): ?>
                    <?php foreach ($topData['business_list'] as $k =>$v):?>
                    <li><a href="<?php echo $v['str2']; ?>"><?php echo $v['label']; ?></a></li>
                    <?php endforeach; ?>
                    <?php endif; ?>
                  </ul>
             </div>
        </div>
        <div class="zg"><strong>健康游戏忠告：</strong>抵制不良游戏，拒绝盗版游戏。注意自我保护，谨防上当受骗。适度游戏益脑，沉迷游戏伤身。合理安排时间，享受健康生活。</div>
        <div class="messages">
            <p class="link"> <a class="first_o" target="_blank" href="http://www.idreamsky.com/homes/about">关于我们</a> | <a target="_blank" href="http://www.idreamsky.com/jobs">诚聘英才</a> | <a target="_blank" href="http://www.idreamsky.com/homes/contact">联系我们</a> | <a target="_blank" href="http://www.idreamsky.com/homes/events">公司大事记</a> | <a target="_blank" href="http://www.idreamsky.com/homes/customer_service">客服中心</a> | <a target="_blank" href="http://www.idreamsky.com/homes/contact">网站合作</a> | <a target="_blank" href="http://www.idreamsky.com/homes/disclaimer">用户协议</a> | <a target="_blank" href="http://www.idreamsky.com/homes/disclaimer">家长控制</a> </p>
            <p> <span>Copyright©2009-2017 TENCENT. ALL RIGHTS RESERVED. &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;深圳市创梦天地科技有限公司  版权所有<br />  粤ICP备11018438号 
                &nbsp;&nbsp; 粤网文〔2016〕6871-1632号  &nbsp;&nbsp;&nbsp;   批准文号：文网游备字〔2016〕Ｍ-RPG 7577 号  新广出审[2016]2185号 <br> 出版号：ISBN  978-7-7979-0814-6</span> 
            <a target="_blank" href="http://www.sznet110.gov.cn/netalarm/index.jsp"> <img src="http://pao.uu.cc/pao.uu.cc/images/shenwang.jpg" width="16" alt="深圳网络警察报警平台"> </a> 
            <a target="_blank" href="http://www.sznet110.gov.cn/webrecord/doquery.jsp"> <img src="http://pao.uu.cc/pao.uu.cc/images/anwang.jpg" alt="公共信息安全网络监察" width="16"> </a> 
            <a target="_blank" href="http://net.china.com.cn/index.htm"> <img src="http://pao.uu.cc/pao.uu.cc/images/jubao.jpg" alt="经营性网站备案信息" width="16"> </a> 
            <a target="_blank" href="http://www.miitbeian.gov.cn/publish/query/indexFirst.action"> <img src="http://pao.uu.cc/pao.uu.cc/images/beian.jpg" alt="不良信息举报中心" width="16"> </a>
            <a target="_blank" href="http://sq.ccm.gov.cn:80/ccnt/sczr/service/business/emark/gameNetTag/4028c08c5829652f01585178205f00c5"> <img src="<?php BASE_URL() ?>images/w_foot2_icon2.png" alt="电子标签" width="16"> </a> </p>
        </div>
    </div>
</div>