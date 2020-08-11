<ul class="form">
    <?php echo $this->Form->input('id'); ?>
    <li>
        <span class="label">网站名称：</span>

        <div class="fc">
            <?php echo $this->Form->input('name', array('div' => false, 'label' => false, 'class' => 'iText', 'style' => 'width:400px;')); ?>
        </div>
    </li>
    <li>
        <span class="label">网站title：</span>

        <div class="fc">
            <?php echo $this->Form->input('title', array('div' => false, 'label' => false,"type"=>"textarea")); ?>
        </div>
    </li>
    <li>
        <span class="label">网站 关键词：</span>

        <div class="fc">
            <?php echo $this->Form->input('keywords', array('div' => false, 'label' => false, "type"=>"textarea")); ?>
        </div>
    </li>
    <li>
        <span class="label">网站 描述：</span>

        <div class="fc">
            <?php echo $this->Form->input('description', array('div' => false, 'label' => false, "type"=>"textarea")); ?>
        </div>
    </li>

    <li>
        <span class="label">网站 域名：</span>

        <div class="fc">
            <?php echo $this->Form->input('domain_name', array('div' => false, 'label' => false, 'class' => 'iText','style' => 'width:500px;')); ?>
        </div>
    </li>

    <li>
        <span class="label">网站 模版目录：</span>

        <div class="fc">
            <?php echo $this->Form->input('directory_name', array('div' => false, 'label' => false, 'class' => 'iText','style' => 'width:500px;')); ?>
        </div>
    </li>
    <li>
        <span class="label">网站 状态：</span>

        <div class="fc">
            <?php echo $this->Form->radio('status', array('0' => '关闭', '1' => '开放'), array('label' => false, 'legend' => false)); ?>
        </div>
    </li>
</ul>
	
