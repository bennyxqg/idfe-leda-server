<div class="colMain">
    <div class="title"><p class="fl">点赞管理</p></div>
    <div class="main">
        <div class="toolbar">
        <form action="/admin/ClickLike/index" method="POST">
            <div class="search fl">
                <?php if ($this->Base->checkSite($site_list)): ?>
                    <span>按站点查询
                            <select name="site_id" id="site_id">
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
            </form>
            <a href="/admin/ClickLike/add" class="fr add">新增</a>
        </div>
        <div class="content">
            <div class="grid">
                <table>
                    <thead>
                    <tr>
                        <th>id</th>
                        <th>标签</th>
                        <th>点赞数</th>
                        <th>有效性检查</th>
                        <th>检查间隔</th>
                        <th>有效值设置</th>
                        <th>最大随机值(固定值)</th>
                        <th>所属网站</th>
                        <th>操作</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    $ip_check_mode=array(0=>'没有检查',1=>'唯一性检查',2=>'有效期内唯一性检查');
                    $effect_mode=array(0=>'固定值1',1=>'随机值',2=>'指定固定值');
                    ?>
                    <?php $page = isset($this->params->params['named']['page']) ? $this->params->params['named']['page'] : 1; ?>
                    <?php foreach ($LikePoint as $point): ?>
                        <tr>
                            <td><span class="blue"><?php echo h($point['LikePoint']['id']); ?></span></td>

                            <td><?php echo h($point['LikePoint']['label']); ?>&nbsp;</td>
                            <td><?php echo h($point['LikePoint']['praise']); ?></td>
                            
                            <td><?php echo h($ip_check_mode[$point['LikePoint']['ip_check_mode']]); ?>&nbsp;</td>
                            <td><?php if($point['LikePoint']['ip_check_mode'] == 2) echo h($point['LikePoint']['check_interval']); else echo '无'; ?></td>
                            
                            <td><?php echo h($effect_mode[$point['LikePoint']['effect_mode']]); ?>&nbsp;</td>
                            <td><?php if($point['LikePoint']['effect_mode'] != 0) echo h($point['LikePoint']['effect_value']); else echo '无'; ?></td>
                            
                            <td><?php echo h($website_list[$point['LikePoint']['site_id']]); ?>&nbsp;</td>
              
                            <td>
                                <?php echo $this->Html->link(__(''), array('action' => 'edit', $point['LikePoint']['id'], $page), array('class' => 'edit', 'title' => '编辑')); ?>
                                |
                                <?php echo $this->Form->postLink(__('删除'), array('action' => 'delete', $point['LikePoint']['id'], $page), null, __('你确定要删除# %s?', $point['LikePoint']['id'])); ?>
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
			window.location.href="/admin/ClickLike/index?site_id="+_site_id;
		});
	});                    
</script>

