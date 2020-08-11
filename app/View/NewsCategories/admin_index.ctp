<div class="colMain">
    <div class="title"><p class="fl">分類列表</p></div>
    <div class="main">
        <div class="toolbar">
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
            </div>
            <a href="/admin/NewsCategories/add" class="fr add">新增</a>
        </div>
        <div class="content">
            <div class="grid">
                <table>
                    <thead>
                    <tr>
                        <th>分类id</th>
                        <th>分类名称</th>
                        <th>创建时间</th>
                        <th>操作</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php $page = isset($this->params->params['named']['page']) ? $this->params->params['named']['page'] : 1; ?>
                    <?php
                    foreach ($newsCategories as $newsCategory): ?>
                        <tr>
                            <td><span class="blue"><?php echo h($newsCategory['NewsCategory']['id']); ?></span></td>
                            <td><?php echo h($newsCategory['NewsCategory']['name']); ?>&nbsp;</td>
                            <td><?php echo date('Y-m-d H:i:s', $newsCategory['NewsCategory']['created']); ?>&nbsp;</td>
                            <td>
                                <?php echo $this->Html->link(__(''), array('action' => 'edit', $newsCategory['NewsCategory']['id'], $page), array('class' => 'edit', 'title' => '编辑')); ?>
                                |
                                <?php echo $this->Form->postLink(__('删除'), array('action' => 'delete', $newsCategory['NewsCategory']['id'], $page), null, __('你确定要删除# %s?', $newsCategory['NewsCategory']['id'])); ?>
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
			window.location.href="/admin/NewsCategories/index?site_id="+_site_id;
		});
	});                    
</script>





