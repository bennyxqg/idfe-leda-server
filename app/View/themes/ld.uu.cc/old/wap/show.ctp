<?php require_once '_include.ctp';?>
</head>

<body style="background:#e4e4e4;">
<section id="show">
 <div class="article">
    <h1><?php echo $result["News"]["title"];?></h1>
    <span class="date">时间：<?php echo date("Y-m-d H:i",$result["News"]["updated"])?></span>
    <div class="art_wz">
      <p><?php echo $result['News']['content'];?></p>
      <img src="<?php echo $full_base_url ?>/mobile/images/p2_list1.jpg" />
    </div>
 </div>
    
  <p class="tb"><img src="<?php echo $full_base_url ?>/mobile/images/ld_logo.png" width="161" height="65" /><img src="<?php echo $full_base_url ?>/mobile/images/xy_logo.png" width="168" height="40" /></p>
  <nav id="nav" style="background:#000 url(<?php echo $full_base_url ?>/mobile/images/xw.png) no-repeat center center">
     <a href="index.html"></a>
     <a href="/news/196"></a>
     <a href="tese.html"></a>
     <a href="shequ.html"></a>
  </nav>
</section>


<script type="text/javascript" src="js/jquery-1.8.0.min.js"></script>
</body>
</html>
  