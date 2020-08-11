<div class="fl page_left">
        	<div class="pr page_down_code">
        	<img src="<?php BLOCK('game_download_qrcode') ?>" />
        	扫一扫下载游戏</div>
            <div class="page_down">
            <?php
            	echo '<a class="ios_down" href="'.GET_BLOCK('ios_download_url').'"></a>';
                echo '<a class="az_down" href="'.GET_BLOCK('android_download_url').'"></a>';
            ?>
            </div>
            <div class="page_contact">
            <?php
                echo '<div class="pr page_wx"><img src="'.GET_BLOCK('weixin_qrcode').'" />扫一扫关注微信</div>';
                echo '<div class="page_wx_txt">微信号<em>'.GET_BLOCK('weixin_account').'</em></div>';
            ?>
                <div class="page_qq">
                	<h3>官方QQ交流群</h3>
                    <ul>
                    <?php
		            	$qqs=explode(',',GET_BLOCK('qq_group'));
		            	$len=count($qqs);
		            	for($i=0;$i<$len;$i++)
		            		echo '<li>官方'.($i+1).'群：'.$qqs[$i].'</li>';
		            ?>
                    </ul>
                </div>
                <div class="page_wb_tb">
                <?php
                	echo '<a href="'.GET_BLOCK('weibo_url').'" target="_blank"></a>';
                    echo '<a href="'.GET_BLOCK('baidu_tieba_url').'" target="_blank"></a>';
                ?>
                </div>
            </div>
        </div>