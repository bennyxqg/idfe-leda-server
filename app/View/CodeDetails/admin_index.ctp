<div class="colMain">
    <div class="title"><p class="fl">兑换码详情管理</p></div>
    <div class="main">
        <div class="toolbar">
            <div class="search fl">
                <?php if ($this->Base->checkSite($site_list)): ?>
                    <span>按站点查询
                            <select name="site_id" id="site_id">
                                <?php foreach ($server_info as $key => $value): ?>
                                    <option value="<?= $value["id"] ?>"><?= $value["name"] ?></option>
                                <?php endforeach; ?>
                            </select>
                        </span>
                <?php endif; ?>
                <!--
                <span>
                      按标题查询
                            <input typt="text" class="iText"><input type="submit" class="submit" value="">
                    </span>-->
            </div>
            <a href="/admin/CodeDetails/add" class="fr add" title="补充兑换码">新增</a>
        </div>
        <div class="content">
            <div class="grid">
                <table>
                    <thead>
                    <tr>
                        <th>id</th>
                        <th>发号标题</th>
                        <th>描述</th>
                        <th>发号所属网站</th>
                        <th>状态</th>
                        <th>已发</th>
                        <th>剩余</th>
                        <th>创建时间</th>
                        <th>操作</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php $page = isset($this->params->params['named']['page']) ? $this->params->params['named']['page'] : 1; ?>
                    <?php if($result):?>
                    <?php foreach ($result as $result): ?>
                        <tr>
                            <td><span class="blue"><?php echo h($result['id']); ?></span></td>

                            <td><?php echo h($result['name']); ?>&nbsp;</td>
                            <td><?php echo h($result['decription']); ?>&nbsp;</td>

                            <td><?php echo h($website_list[$result['site_id']]); ?>&nbsp;</td>
                            <td><?php echo $result['status'] == 1 ? "开启" : "关闭"; ?>&nbsp;</td>

                            <td><?php echo isset($code_count_list[$result["site_id"] . "_" . $result["id"] . "_1"]) ? $code_count_list[$result["site_id"] . "_" . $result["id"] . "_1"] : 0; ?></td>
                            <td><?php echo isset($code_count_list[$result["site_id"] . "_" . $result["id"] . "_0"]) ? $code_count_list[$result["site_id"] . "_" . $result["id"] . "_0"] : 0; ?></td>

                            <td><?php echo $result['created']; ?>&nbsp;</td>
                            <td>
                                <?php echo $this->Html->link(__(''), array('action' => 'add'), array('class' => 'edit', 'title' => '编辑')); ?>
                                |
                                <?php echo $this->Form->postLink(__('删除'), array('action' => 'delete', $result['id'], $page), null, __('你确定要删除# %s?', $result['id'])); ?>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                    <?php endif;?>

                    </tbody>
                </table>
            </div>

        </div>
    </div>
</div>


