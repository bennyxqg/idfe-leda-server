<div class="colMain">
            <div class="title"><p class="fl">列表类型管理</p></div>
            <div class="main">
                <div class="toolbar">
                	<div class="search fl">
                	   <form action="" method="post" name="search">

                        <?php if ($this->Base->checkSite($site_list)): ?>
                            <span>按站点查询
                                <select name="site_id" id="site_id">
                                    <option value="0">请选择站点</option>
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
                                </select><input type="submit" class="submit" value="">
                            </span>
                        <?php endif; ?>
                    
                    </form>
                    <script>
                    $(document).ready(function(){
                        $('#site_id').change(function(){
                            $('form[name="search"]').submit();
                        });
                    });
                    </script>
                    </div>
                    <a href="/admin/ListType/add" class="fr add">新增</a>
                </div>
                <div class="content">
                    <div class="grid">
                        <table>
                            <thead>
                                <tr>
                                    <th>id</th>
                                    <th>名称</th>
                                    <th>类型</th>
                                    <th>所属站点</th>
                                    <th>key</th>
                                    <th>创建时间</th>
                                    <th>操作</th>
                                </tr>
                            </thead>
                            <tbody>
                            	<?php $page=isset($this->params->params['named']['page'])?$this->params->params['named']['page']:1;?>
                              <?php
                                if(!empty($result)):
								foreach ($result as $result): ?>
							    <tr>
                                    <td><span class="blue"><?php echo h($result['id']); ?></span></td>
									<td><?php echo h($result['name']); ?>&nbsp;</td>
									<td><?php echo h(1 == $result['type']?"图片":"文本"); ?>&nbsp;</td>
									<td><?php echo h($website_list[$result['site_id']]) ?>&nbsp;</td>

									<td><?php echo $result['Abbr']; ?>&nbsp;</td>
									<td><?php echo $result['created']; ?>&nbsp;</td>
									<td>
                                        <?php echo $this->Html->link(__(''), array('action' => 'edit', $result['id'],$page),array('class'=>'edit','title'=>'编辑')); ?>
                                        |
										<?php echo $this->Form->postLink(__('删除'), array('action' => 'delete', $result['id'],$page), null, __('你确定要删除# %s?', $result['id'])); ?>
                                    </td>
                                </tr>
								<?php
                                endforeach;
                                endif;?>
                            </tbody>
                        </table>
                    </div>
                   
				    <div class="pagination">
                      <?php echo $this->Paginator->numbers(array('separator' => '')); ?>
                    </div>
					
                </div>
            </div>
        </div>





