<div class="colMain">
    <div class="title"><p class="fl">新闻列表</p></div>
    <div class="main">
        <div class="toolbar">
            <form action="/admin/News/index" method="POST">
                <div class="search fl">
                    <?php if (!empty($site_list) && ($site_list == "all" || is_array($site_list))): ?>
                        <span>按站点查询
                            <select name="site_id" id="site_id">
                            <option value='0'>请选择站点</option>
                                <?php foreach ($server_info as $key => $value): ?>
                                <?php 
                                if(isset($site_id) && $value["id"] == $site_id){
                                	?>
                                	<option selected value="<?= $value["id"] ?>"><?= $value["name"] ?></option>
                                	<?php 
                                }else{
                                	?>
                                	<option value="<?= $value["id"] ?>"><?= $value["name"] ?></option>
                                	<?php 
                                	
                                }
                                
                                ?>
                                    
                                <?php endforeach; ?>
                            
                            </select>
                        </span>
                    <?php endif; ?>
                    <span>
                            <input typt="text" class="iText" name="title" value="<?= !empty($title) ? $title : ''; ?>">
                            <input type="submit" class="submit" value="">
                        </span>
                </div>
            </form>

            <a href="/admin/News/add" class="fr add">新增</a>
        </div>
        <div class="content">
            <div class="grid">
                <table>
                    <thead>
                    <tr>
                        <th><a href="/admin/News/index?order=id">新闻id</a></th>
                        <th>标题</th>
                        <th><a href="/admin/News/index?order=site_id">所属站点</a></th>
                        <th><a href="/admin/News/index?order=news_categories_id">所属栏目</a></th>
                        <th><a href="/admin/News/index?order=clicks">点击数</a></th>
                        <th><a href="/admin/News/index?order=created">创建时间</a></th>
                        <th>操作</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php $page = isset($this->params->params['named']['page']) ? $this->params->params['named']['page'] : 1; ?>
                    <?php
                    foreach ($news as $news): ?>
                        <tr>
                            <td><span class="blue"><?php echo h($news['News']['id']); ?></span></td>
                            <td><?php echo h($news['News']['title']); ?>&nbsp;</td>
                            <td><?php echo h($website_list[$news['News']['site_id']]); ?>&nbsp;</td>
                            <td><?php echo h($category_list[$news['News']['news_categories_id']]); ?>&nbsp;</td>
                            <td><?php echo h($news['News']['clicks']); ?>&nbsp;</td>
                            <td><?php echo date('Y-m-d H:i:s', $news['News']['created']); ?>&nbsp;</td>

                            <td>
                                <?php echo $this->Html->link(__(''), array('action' => 'edit', $news['News']['id'], $page), array('class' => 'edit', 'title' => '编辑')); ?>
                                |
                                <?php echo $this->Form->postLink(__('删除'), array('action' => 'delete', $news['News']['id'], $page), null, __('你确定要删除# %s?', $news['News']['id'])); ?>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                    </tbody>
                </table>
            </div>

            <div class="pagination">
                <?php echo $this->Paginator->numbers(array('separator' => '')); ?>
            </div>

        </div>
    </div>
</div>
<script>
	$(document).ready(function(){
		$('#site_id').change(function(){
			var _site_id = $(this).children('option:selected').val();
			window.location.href="/admin/News/index?site_id="+_site_id;
		});
	});                    
</script>






