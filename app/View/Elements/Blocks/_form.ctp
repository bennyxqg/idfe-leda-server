<ul class="form">
    <?php echo $this->Form->input('id'); ?>
    <li>
        <span class="label">区块标题：</span>

        <div class="fc">
            <?php echo $this->Form->input('title', array('div' => false, 'label' => false, 'class' => 'iText', 'style' => 'width:400px;')); ?>
        </div>
    </li>

    <li>
        <span class="label">key：</span>

        <div class="fc">
            <?php echo $this->Form->input('Abbr', array('div' => false, 'label' => false, 'class' => 'iText', 'style' => 'width:400px;')); ?>
        </div>
    </li>

    <li>
        <span class="label">区块内容：</span>

        <div class="fc">
            <?php echo $this->Form->input('content', array('div' => false, 'label' => false, 'class' => 'iText')); ?>
        </div>
    </li>

    <?php
    if ($this->Base->checkSite($site_list)):?>

        <li>
            <span class="label">站点id：</span>

            <div class="fc">
                <?php

                $this->request->data['Block']['site_id'] = isset($this->request->data['Block']['site_id']) ? (int)$this->request->data['Block']['site_id'] : "";
                echo $this->Form->input('site_id', array('div' => false, 'label' => false, 'class' => 'iText', 'options' => $website_list, 'selected' => $this->request->data['Block']['site_id'], 'style' => 'height:30px;'));?>
            </div>
        </li>
    <?php else: ?>
        <?php echo $this->Form->input('site_id', array("type" => "hidden", "value" => $site_list)) ?>
    <?php endif; ?>

</ul>
<script>
    $(function () {
        CKEDITOR.replace('data[Block][content]', {
            skin: 'kama' });

    });
</script>

