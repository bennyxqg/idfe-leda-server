<?php
/**
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */
//$cakeDescription = __d('cake_dev', 'CakePHP: the rapid development php framework');
?>
<!DOCTYPE html>
<html>
<head>
    <?php echo $this->Html->charset(); ?>
    <title>
        <?php echo $title_for_layout; ?>
    </title>
    <?php
    echo $this->Html->meta('icon');
    echo $this->Html->css(array('reset', 'layout'));
    echo $this->Html->script(array('jquery-1.8.2.min', 'core', 'ckeditor/ckeditor'));
    ?>
</head>
<body>
<div id="container">
    <?php echo $this->Session->flash(); ?>
    <div class="header">
        <h1>网游网站管理系统</h1>

        <p class="fr">
            <span>欢迎您，</span>
            <a href="#"><?php echo isset($user_info['User']['name']) ? $user_info['User']['name'] : ''; ?></a>
            <a href="/Users/logout" class="logout">退出</a>
        </p>
    </div>
    <div id="content">
        <div class="mainWrap clearfix">
            <div class="sidebar">
                <div class="box">
                    <div class="title">
                        <h3 class="kfz">网站内容管理</h3>
                    </div>
                    <ul>
                        <li>
                            <a href="/admin/NewsCategories/index">分类管理</a>
                        </li>
                        <li>
                            <a href="/admin/Blocks/index">区块管理</a>
                        </li>

                        <li>
                            <a href="/admin/WebsiteImages/index">图片列表管理</a>
                        </li>

                        <li>
                            <a href="/admin/TextLists/index">文本列表管理</a>
                        </li>

                        <li>
                            <a href="/admin/News/index">新闻管理</a>
                        </li>
                        
                        <li class="last">
                        	<a href="/admin/ClickLike/index">点赞管理</a>
                        </li>
                    </ul>

                </div>
                <div class="box">
                    <div class="title">
                        <h3 class="gg">网站配置</h3>
                    </div>
                    <ul>
                        <li>
                            <a href="/admin/Websites/index">网站发布管理</a>
                        </li>
                        <li>
                            <a href="/admin/Users/index">用户权限管理</a>
                        </li>
                        <li>
                            <a href="/admin/ListType/index">列表类型管理</a>
                        </li>
                    </ul>
                </div>
                
                <div class="box">
                    <div class="title">
                        <h3 class="gg">网站特制</h3>
                    </div>
                    <ul>
                        <li>
                            <a href="/admin/Tp2/index">积分排行榜</a>
                        </li>
                        
                    </ul>
                </div>
                

                <div class="box">
                    <div class="title">
                        <h3 class="qt">发号管理</h3>
                    </div>
                    <ul>
                        <li>
                            <a href="/admin/Codes/index">发号基本信息管理</a>
                        </li>
                        <li>
                            <a href="/admin/CodeDetails/index">发号领取管理</a>
                        </li>
                        <li>
                            <a href="/admin/PhoneExport/index">预约手机导出</a>
                        </li>
                        
                    </ul>
                </div>
            </div>
            <?php echo $this->fetch('content'); ?>
        </div>
    </div>
    <div class="footer">
        <p>
            <a href="#">联系我们</a>
        </p>
        <p>
            copyright@2013
        </p>
    </div>
</div>
<?php
$url = isset($_SERVER['REQUEST_URI']) ? $_SERVER['REQUEST_URI'] : '';
$controller = $this->request->controller;
?>
<script>
    $(function () {
        $('.box li').each(function () {
            var $object = $(this);
            console.log($object.children().attr('href').indexOf("<?=$controller;?>"));
            if ($object.children().attr('href') == "<?=$url?>") {
                $object.attr('class', 'cur');
            }
        })
    })
</script>
<?php echo $this->element('sql_dump'); ?>
</body>
</html>
