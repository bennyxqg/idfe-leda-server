   <div id="header">
       <a href="/" class="logo"><img src="<?php echo GET_BLOCK('game_logo');?>" width="200" height="102" /></a>
       <ul class="nav">
           <a class="<?php if($this->view == "index"){echo "on";}?>" href="/"><em>HOME</em>首 页</a><span>/</span>
           <a href="/news/1.html" class="<?php if($this->view == "news" || $this->view == "show" && (isset($category_id)&&$category_id<=5)){echo "on";}?>"><em>NEWS</em>新闻资讯</a><span>/</span>
           <!--<a href="//fr.uu.cc/game_data/334.html"><em>GAME DATA</em>游戏资料</a><span>/</span>-->
           <a href="<?php echo GET_BLOCK('forum_url');?>"><em>BBS</em>官方论坛</a>
       </ul>
   </div>