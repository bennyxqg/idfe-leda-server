                <?php if($this->params->params['action'] == 'index') :?>
                	<ul>
		               <li class="first"><a target="_blank" href="/news/<?=$total[0]['news_categories_id']?>"></a></li>
		               <li class="two"><a target="_blank" href="/gonglue"></a></li>
		               <li class="three"><a target="_blank" href="//ld.uu.cc/tese"></a></li>
		               <li class="four"><a target="_blank" href="/video"></a></li>
		               <li class="five"><a target="_blank" href="//ldzw.vxinyou.com/bbs/forum.php"></a></li>
		             </ul>
                <?php else :?>
                	<ul>
		                <li class="l_one"><a target="_blank" href="/news/<?=$total[0]['news_categories_id']?>">新闻资讯</a></li>
		                <li class="l_two"><a target="_blank" href="/gonglue">游戏攻略</a></li>
		                <li class="l_three"><a target="_blank" href="//ld.uu.cc/tese">游戏特色</a></li>
		                <li class="l_four"><a target="_blank" href="/video">影音专区</a></li>
		            </ul>
                <?php endif;?>
               