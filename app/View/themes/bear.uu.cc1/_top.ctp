<h1 class="fl"><a href="#">熊出没之小熊大冒险</a></h1>
<div class="note fl" id="note">
    <ul>
        <?php 
        if ($notices):
            foreach ($notices as $notice):
        ?>   
        <li><a href="<?php echo $this->Base->getShowUrl($notice["id"]);?>">公告：<?php echo $notice['title']?></a></li>
        <?php 
            endforeach;
        endif;
        ?>
    </ul>
</div>
<a href="//www.idreamsky.com" class="gw">乐逗游戏官网</a>