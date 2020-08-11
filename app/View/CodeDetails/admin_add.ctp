<div class="colMain">
    <div class="main">
        <div class="app-detail">
            <?php echo $this->Form->create('CodeDetail', array('enctype' => "multipart/form-data")); ?>
            <fieldset>

                <ul class="form">
                    <?php echo $this->Form->input('id'); ?>
                    <li>
                        <span class="label">选择兑换码信息：</span>

                        <div class="fc">
                            <?php echo $this->Form->input('code_id', array('label' => false, 'div' => false, 'options' => $code_list, 'class' => "col-sm-5 form-control")) ?>
                        </div>
                    </li>

                    <li>
                        <span class="label">上传兑换码文件：</span>

                        <div class="fc">
                            <?php echo $this->Form->input('code', array("type" => "file", 'div' => false, 'label' => false, 'style' => 'width:400px;')); ?>
                        </div>
                    </li>

                    <?php
                    if ($this->Base->checkSite($site_list)):?>

                        <li>
                            <span class="label">站点id：</span>

                            <div class="fc">
                                <?php
                                $this->request->data['CodeDetail']['site_id'] = isset($this->request->data['CodeDetail']['site_id']) ? (int)$this->request->data['CodeDetail']['site_id'] : "";
                                echo $this->Form->input('site_id', array('div' => false, 'label' => false, 'class' => 'iText', 'options' => $website_list, 'selected' => $this->request->data['CodeDetail']['site_id'], 'style' => 'height:30px;'));?>
                            </div>
                        </li>
                    <?php else: ?>
                        <?php echo $this->Form->input('site_id', array("type" => "hidden", "value" => $site_list)) ?>
                    <?php endif; ?>

                </ul>

            </fieldset>
            <div style="text-align: center;margin-bottom: 50px">
                <?php echo $this->Form->end(array('type' => 'submit', 'class' => 'submit btn')); ?>
            </div>

        </div>
    </div>
</div>

