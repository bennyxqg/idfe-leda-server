<!--
<li><a href="<?php  echo $this->Base->getBlock(18,"ios_download_2");?>"><img src="<?php echo $full_base_url ?>/images/wrap/d_01.jpg" width="100%" alt=""></a></li>
<li><a href="<?php  echo $this->Base->getBlock(18,"ios_download");?>"><img src="<?php echo $full_base_url ?>/images/wrap/d_02.jpg" width="100%" alt=""></a></li>
-->
<li class="last"><a class="m_download" href=""><img src="<?php echo $full_base_url ?>/images/wrap/download_xz.jpg" width="100%" alt=""></a></li>
<script type="text/javascript" src="<?php echo $full_base_url ?>/js/jquery-1.8.2.min.js"></script>
 <script type="text/javascript">
            /*
             * 智能机浏览器版本信息:
             *
             */
            var browser = {
                versions: function() {
                    var u = navigator.userAgent, app = navigator.appVersion;
                    return {//移动终端浏览器版本信息
                        trident: u.indexOf('Trident') > -1, //IE内核
                        presto: u.indexOf('Presto') > -1, //opera内核
                        webKit: u.indexOf('AppleWebKit') > -1, //苹果、谷歌内核
                        gecko: u.indexOf('Gecko') > -1 && u.indexOf('KHTML') == -1, //火狐内核
                        mobile: !!u.match(/AppleWebKit.*Mobile.*/) || !!u.match(/AppleWebKit/), //是否为移动终端
                        ios: !!u.match(/\(i[^;]+;( U;)? CPU.+Mac OS X/), //ios终端
                        android: u.indexOf('Android') > -1 || u.indexOf('Linux') > -1, //android终端或者uc浏览器
                        iPhone: u.indexOf('iPhone') > -1 || u.indexOf('Mac') > -1, //是否为iPhone或者QQHD浏览器
                        iPad: u.indexOf('iPad') > -1, //是否iPad
                        webApp: u.indexOf('Safari') == -1 //是否web应该程序，没有头部与底部
                    };
                }(),
                language: (navigator.browserLanguage || navigator.language).toLowerCase()
            }
		   
            $(function(){
           	 if(browser.versions.android){
            	   $('.m_download').attr('href','<?php  echo $this->Base->getBlock(18,"android_download");?>');    //安卓链接地址
               }else{
            	   $('.m_download').attr('href','<?php  echo $this->Base->getBlock(18,"ios_download_2");?>');    

              }
           })
 
 
        </script>