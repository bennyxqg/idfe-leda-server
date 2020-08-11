<div class="colMain">
    <div class="title"><p class="fl">区块列表</p></div>
    <div class="main">
        <div class="toolbar">
        <form action="/admin/Blocks/index" method="POST">
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
                <span>
                            按标题查询
                            <input typt="text" class="iText" name="title" value="<?= !empty($title) ? $title : ''; ?>">
                            <input type="submit" class="submit" value="">
                        </span>
            </div>
            </form>
            <a href="/admin/Blocks/add" class="fr add">新增</a>
        </div>
        <div class="content">
            <div class="grid">
                <table>
                    <thead>
                    <tr>
                        <th>区块id</th>
                        <th>区块标题</th>
                        <th>key</th>
                        <th>区块区块所属网站</th>
                        <th>创建时间</th>
                        <th>操作</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php $page = isset($this->params->params['named']['page']) ? $this->params->params['named']['page'] : 1; ?>
                    <?php foreach ($blocks as $block): ?>
                        <tr>
                            <td><span class="blue"><?php echo h($block['Block']['id']); ?></span></td>

                            <td><?php echo h($block['Block']['title']); ?>&nbsp;</td>
                            <td><?php echo h($block['Block']['Abbr']); ?></td>
                            <td><?php echo h($website_list[$block['Block']['site_id']]); ?>&nbsp;</td>
                            <td><?php echo date('Y-m-d H:i:s', $block['Block']['created']); ?>&nbsp;</td>
                            <td>
                                <?php echo $this->Html->link(__(''), array('action' => 'edit', $block['Block']['id'], $page), array('class' => 'edit', 'title' => '编辑')); ?>
                                |
                                <?php echo $this->Form->postLink(__('删除'), array('action' => 'delete', $block['Block']['id'], $page), null, __('你确定要删除# %s?', $block['Block']['id'])); ?>
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


