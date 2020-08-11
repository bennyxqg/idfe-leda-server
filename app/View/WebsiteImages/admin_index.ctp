<div class="colMain">
    <div class="title"><p class="fl">图片列表</p></div>
    <div class="main">
        <div class="toolbar">
            <div class="search fl">
                <form action="/admin/WebsiteImages/index" method="post" name="search">

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
            <a href="/admin/websiteImages/add" class="fr add">新增</a>
        </div>
        <div class="content">
            <div class="grid">
                <table>
                    <thead>
                    <tr>
                        <th>图片 id</th>
                        <th>所属站点</th>
                        <th>图片类型</th>
                        <th>小图</th>
                        <th>大图</th>

                        <th>排序</th>

                        <th>操作</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php $page = isset($this->params->params['named']['page']) ? $this->params->params['named']['page'] : 1; ?>
                    <?php foreach ($websiteImages as $websiteImage): ?>
                        <tr>
                            <td><?php echo h($websiteImage['WebsiteImage']['id']); ?>&nbsp;</td>
                            <td><?php echo h($website_list[$websiteImage['WebsiteImage']['site_id']]); ?>&nbsp;</td>
                            <td><?php echo h($img_type[$websiteImage['WebsiteImage']['type']]); ?>&nbsp;</td>
                            <td>
                                <?php if (!empty($websiteImage['WebsiteImage']['small_url'])): ?>
                                    <img src="<?= PHOTO_URL . ($websiteImage['WebsiteImage']['small_url']); ?>"
                                         width='60px' height='50px'>&nbsp;
                                <?php endif; ?>
                            </td>
                            <td>
                                <?php if (!empty($websiteImage['WebsiteImage']['big_url'])): ?>
                                    <img src="<?= PHOTO_URL . ($websiteImage['WebsiteImage']['big_url']); ?>"
                                         width='60px' height='50px'>&nbsp;
                                <?php endif; ?>
                            </td>
                            <td><?php echo $websiteImage['WebsiteImage']["sort"];?></td>
                            <td>
                                <?php echo $this->Html->link(__(''), array('action' => 'edit', $websiteImage['WebsiteImage']['id'], $page), array('class' => 'edit', 'title' => '编辑')); ?>
                                |
                                <?php echo $this->Form->postLink(__('删除'), array('action' => 'delete', $websiteImage['WebsiteImage']['id'], $page), null, __('你确定要删除# %s?', $websiteImage['WebsiteImage']['id'])); ?>
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



