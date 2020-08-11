<ul class="form">
    <?php echo $this->Form->input('id'); ?>
    <li>
        <span class="label">用户名：</span>

        <div class="fc">
            <?php echo $this->Form->input('name', array('div' => false, 'label' => false, 'class' => 'iText', 'style' => 'width:400px;')); ?>
        </div>
    </li>

    <li>
        <span class="label">密码：</span>

        <div class="fc">
            <?php echo $this->Form->input('password', array('div' => false, 'label' => false, 'class' => 'iText', 'style' => 'width:400px;')); ?>
        </div>
    </li>
    <li>
        <span class="label">配置站点列表：</span>
        <div class="fc">
            <?php echo $this->Form->input('site_id', array('label' => false, 'div' => false, 'class' => 'select', 'type' => 'select', 'multiple' => 'checkbox', 'options' => $website_list)); ?>
        </div>
    </li>
</ul>
