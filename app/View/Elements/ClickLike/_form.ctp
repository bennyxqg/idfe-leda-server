<ul class="form">
    <?php echo $this->Form->input('id'); ?>
    <li>
        <span class="label">标签：</span>

        <div class="fc">
            <?php echo $this->Form->input('label', array('div' => false, 'label' => false, 'class' => 'iText', 'style' => 'width:400px;')); ?>
        </div>
    </li>

    <li>
        <span class="label">点赞数：</span>

        <div class="fc">
            <?php echo $this->Form->input('praise', array('div' => false, 'label' => false, 'class' => 'iText', 'style' => 'width:200px;',value => (int)$this->request->data['LikePoint']['praise'])); ?>
        </div>
    </li>
    
    <li>
        <span class="label">有效性检查：</span>

        <div class="fc">
            <?php 
            $mode = array('0' => '没有检查', '1' => '唯一性检查', '2' => '有效期内唯一性检查');
			echo $this->Form->input('ip_check_mode',array('options' => $mode, 'default' => '0','div' => false, 'label' => false,  'style' => 'width:200px;')); 
           	?>
        </div>
    </li>
    
    

    <li>
        <span class="label">有效时间(秒)：</span>
        <div class="fc">
            <?php echo $this->Form->input('check_interval', array('div' => false, 'label' => false, 'class' => 'iText',value => (int)$this->request->data['LikePoint']['check_interval'])); ?>
        </div>
    </li>
    
    <li>
        <span class="label">有效值设定：</span>

        <div class="fc">
            <?php 
            $mode = array('0' => '固定值1', '1' => '随机值', '2' => '指定固定值');
			echo $this->Form->input('effect_mode',array('options' => $mode, 'default' => '0','div' => false, 'label' => false,  'style' => 'width:200px;')); 
           	?>
        </div>
    </li>
    
    <li>
        <span class="label">最大随机值(固定值)：</span>
        <div class="fc">
            <?php echo $this->Form->input('effect_value', array('div' => false, 'label' => false, 'class' => 'iText',value => (int)$this->request->data['LikePoint']['effect_value'])); ?>
        </div>
    </li>

    <?php
    if ($this->Base->checkSite($site_list)):?>

        <li>
            <span class="label">站点id：</span>

            <div class="fc">
                <?php

                $this->request->data['LikePoint']['site_id'] = isset($this->request->data['LikePoint']['site_id']) ? (int)$this->request->data['LikePoint']['site_id'] : "";
                echo $this->Form->input('site_id', array('div' => false, 'label' => false, 'class' => 'iText', 'options' => $website_list, 'selected' => $this->request->data['LikePoint']['site_id'], 'style' => 'height:30px;'));?>
            </div>
        </li>
    <?php else: ?>
        <?php echo $this->Form->input('site_id', array("type" => "hidden", "value" => $site_list)) ?>
    <?php endif; ?>

</ul>
<script>
    $(function () {
       // CKEDITOR.replace('data[LikePoint][content]', {
       //     skin: 'kama' });

    });
</script>

