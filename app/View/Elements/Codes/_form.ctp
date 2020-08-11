<ul class="form">
    <?php echo $this->Form->input('id'); ?>
    <li>
        <span class="label">发号标题：</span>

        <div class="fc">
            <?php echo $this->Form->input('name', array('div' => false, 'label' => false, 'class' => 'iText', 'style' => 'width:400px;')); ?>
        </div>
    </li>

    <li>
        <span class="label">发号描述：</span>

        <div class="fc">
            <?php echo $this->Form->input('decription', array('div' => false, 'label' => false, 'class' => 'iText', 'style' => 'width:400px;')); ?>
        </div>
    </li>

    <li>
        <span class="label">状态：</span>

        <div class="fc">
            <?php echo $this->Form->input('status', array("options" => array(0 => '关闭', "1" => "开启"), 'div' => false, 'label' => false)); ?>
        </div>
    </li>

    <?php
    if ($this->Base->checkSite($site_list)):?>

        <li>
            <span class="label">站点id：</span>

            <div class="fc">
                <?php
                $this->request->data['Code']['site_id'] = isset($this->request->data['Code']['site_id']) ? (int)$this->request->data['Code']['site_id'] : "";
                echo $this->Form->input('site_id', array('div' => false, 'label' => false, 'class' => 'iText', 'options' => $website_list, 'selected' => $this->request->data['Code']['site_id'], 'style' => 'height:30px;'));?>
            </div>
        </li>
    <?php else: ?>
        <?php echo $this->Form->input('site_id', array("type" => "hidden", "value" => $site_list)) ?>
    <?php endif; ?>

</ul>


