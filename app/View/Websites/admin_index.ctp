<div class="colMain">
    <div class="title"><p class="fl">网站列表</p></div>
    <div class="main">
        <div class="toolbar">
            <a href="/admin/Websites/add" class="fr add">新增</a>
        </div>
        <div class="content">
            <div class="grid">
                <table>
                    <thead>
                    <tr>
                        <th>网站id</th>
                        <th>网站名称</th>
                        <th>网站域名</th>
                        <th>模版目录</th>
                        <th>创建时间</th>
                        <th>操作</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php $page = isset($this->params->params['named']['page']) ? $this->params->params['named']['page'] : 1; ?>
                    <?php foreach ($websites as $website): ?>
                        <tr>
                            <td><span class="blue"><?php echo h($website['Website']['id']); ?></span></td>

                            <td><?php echo h($website['Website']['name']); ?></td>
                            <td>
                                <p><?php echo h($website['Website']['domain_name']); ?></p>
                            </td>

                            <td>
                                <p><?php echo h($website['Website']['directory_name']); ?></p>
                            </td>
                            <td>
                                <p><?php echo h($website['Website']['created']); ?></p>
                            </td>
                            <td>
                                <?php echo $this->Html->link(__(''), array('action' => 'edit', $website['Website']['id'], $page), array('class' => 'edit', 'title' => '编辑')); ?>
                                |
                                <?php echo $this->Form->postLink(__('删除'), array('action' => 'delete', $website['Website']['id'], $page), null, __('你确定要删除# %s?', $website['Website']['id'])); ?>

                            </td>
                        </tr>
                    <?php endforeach;
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
