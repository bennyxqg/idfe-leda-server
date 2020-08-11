<ul class="form">
    <?php echo $this->Form->input('id'); ?>
    <li>
        <span class="label">名称：</span>

        <div class="fc">
            <?php echo $this->Form->input('name', array('div' => false, 'label' => false, 'class' => 'iText', 'style' => 'width:400px;')); ?>
        </div>
    </li>

    <li>
        <span class="label">key：</span>

        <div class="fc">
            <?php echo $this->Form->input('Abbr', array('div' => false, 'label' => false, 'class' => 'iText', 'style' => 'width:400px;')); ?>
            <span>这个是唯一的 最好用英文</span>
        </div>
    </li>

    <li>
        <span class="label">类型：</span>

        <div class="fc">
            <?php echo $this->Form->input('type', array("options" => array(0 => "文本", 1 => '图片'), 'div' => false, 'label' => false, 'style' => 'width:400px;')); ?>
        </div>
    </li>
    <?php
    if ($this->Base->checkSite($site_list)):?>

        <li>
            <span class="label">站点id：</span>

            <div class="fc">
                <?php
                $this->request->data['ListType']['site_id'] = isset($this->request->data['ListType']['site_id']) ? (int)$this->request->data['ListType']['site_id'] : "";
                echo $this->Form->input('site_id', array('div' => false, 'label' => false, 'class' => 'iText', 'options' => $website_list, 'selected' => $this->request->data['ListType']['site_id'], 'style' => 'height:30px;'));?>
            </div>
        </li>
    <?php else: ?>
        <?php echo $this->Form->input('site_id', array("type" => "hidden", "value" => $site_list)) ?>
    <?php endif; ?>
</ul>


