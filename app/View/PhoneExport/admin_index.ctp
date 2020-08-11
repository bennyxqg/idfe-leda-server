<div class="colMain">
    <div class="title"><p class="fl">预约手机查看</p></div>
    <div class="main">
        <div class="toolbar">
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
                <!--
                <span>
                            按标题查询
                            <input typt="text" class="iText"><input type="submit" class="submit" value="">
                        </span>
                        -->
            </div>
            <a href="/admin/PhoneExport/export" class="fr add">导出</a>
        </div>
        <div class="content">
            <div class="grid">
                <table>
                    <thead>
                    <tr>
                        <th>id</th>
                        <th>手机号码</th>
                        <th>时间</th>
                        <th>操作系统</th>
                        <th>所属网站</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php $page = isset($this->params->params['named']['page']) ? $this->params->params['named']['page'] : 1; ?>
                    <?php
                    if(!empty($result)):
                    foreach ($result as $result): ?>
                        <tr>
                            <td><span class="blue"><?php echo h($result['id']); ?></span></td>

                            <td><?php echo h($result['phone']); ?>&nbsp;</td>
                            <td><?php echo h($result['update_time']); ?>&nbsp;</td>
                            <td><?php if($result['type'] == 1) echo h('IOS'); else echo h('Android'); ?>&nbsp;</td>
                            <td><?php echo h($all_site_map[$result['collect_name']]); ?>&nbsp;</td>
                        </tr>
                    <?php
                    endforeach;
                    endif;
                    ?>
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
			window.location.href="/admin/PhoneExport/index?site_id="+_site_id;
		});
	});                    
</script>

