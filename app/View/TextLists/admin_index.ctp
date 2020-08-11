<div class="colMain">
    <div class="title"><p class="fl">文本列表管理</p></div>
    <div class="main">
        <div class="toolbar">

            <div class="search fl">

                <form action="/admin/TextLists/index" method="post">

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
                    <span>
                            按标题查询
                            <input typt="text" name="title" class="iText"><input type="submit" class="submit" value="">
                        </span>

                </form>
            </div>
            <a href="/admin/TextLists/add" class="fr add">新增</a>
        </div>
        <div class="content">
            <div class="grid">
                <table>
                    <thead>
                    <tr>
                        <th>id</th>
                        <th>标题</th>
                        <th>链接</th>
                        <th>类型</th>
                        <th>所属站点</th>
                        <th>排序</th>

                        <th>创建时间</th>
                        <th>操作</th>
                    </tr>

                    </thead>
                    <tbody>
                    <?php $page = isset($this->params->params['named']['page']) ? $this->params->params['named']['page'] : 1; ?>
                    <?php if ($result): ?>
                        <?php foreach ($result as $result): ?>
                            <tr>
                                <td><span class="blue"><?php echo h($result['id']); ?></span></td>

                                <td><?php echo h($result['title']); ?>&nbsp;</td>
                                <td><?php echo h($result['url']); ?>&nbsp;</td>

                                <td><?php echo h($text_type[$result['type']]); ?>&nbsp;</td>

                                <td><?php echo h($website_list[$result['site_id']]); ?>&nbsp;</td>

                                <td><?php echo $result['sort']; ?>&nbsp;</td>

                                <td><?php echo $result['created']; ?>&nbsp;</td>
                                <td>
                                    <?php echo $this->Html->link(__(''), array('action' => 'edit', $result['id'], $page), array('class' => 'edit', 'title' => '编辑')); ?>
                                    |
                                    <?php echo $this->Form->postLink(__('删除'), array('action' => 'delete', $result['id'], $page), null, __('你确定要删除# %s?', $result['id'])); ?>                                   </td>
                            </tr>
                        <?php endforeach; ?>

                    <?php endif; ?>

                    </tbody>
                </table>
            </div>

            <div class="pagination">
                <?php echo $this->Paginator->numbers(array('separator' => '')); ?>
            </div>

        </div>
    </div>
</div>


