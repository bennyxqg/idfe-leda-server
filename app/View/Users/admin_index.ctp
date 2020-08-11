<div class="colMain">
    <div class="title"><p class="fl">用户列表</p></div>
    <div class="main">
        <div class="toolbar">
            <div class="search fl">
            </div>
            <a href="/admin/Users/add" class="fr add">新增</a>
        </div>
        <div class="content">
            <div class="grid">
                <table>
                    <thead>
                    <tr>
                        <th>用户 id</th>
                        <th>用户名</th>
                        <th>所拥有的的站点</th>
                        <th>操作</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <?php $page = isset($this->params->params['named']['page']) ? $this->params->params['named']['page'] : 1; ?>
                        <?php if ($user_info['User']['site_id'] != 'all'): ?>
                            <td colspan="5">没有权限</td>
                        <?php
                        else:
                        ?>
                        <?php foreach ($users as $user): ?>
                        <td><?php echo h($user['User']['id']); ?>&nbsp;</td>
                        <td><?php echo h($user['User']['name']); ?>&nbsp;</td>
                        <td>
                            <?php
                            if ($user['User']['site_id'] != 'all') {
                                $site_list = explode(',', $user['User']['site_id']);
                                foreach ($site_list as $key => $value) {
                                    echo $website_list[$value];
                                    echo "&nbsp";
                                }
                            } else {
                                echo '所有权限';
                            }
                            ?>

                            &nbsp;</td>
                        <td>
                            <?php echo $this->Html->link(__(''), array('action' => 'edit', $user['User']['id'], $page), array('class' => 'edit', 'title' => '编辑')); ?>
                            |
                            <?php echo $this->Form->postLink(__('删除'), array('action' => 'delete', $user['User']['id'], $page), null, __('你确定要删除# %s?', $user['User']['id'])); ?>
                        </td>

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
