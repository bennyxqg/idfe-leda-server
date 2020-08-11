<div class="colMain">
    <div class="main">
        <div class="app-detail">
            <?php echo $this->Form->create('News', array('enctype' => 'multipart/form-data')); ?>
            <fieldset>
                <?php echo $this->element('News/_form'); ?>
            </fieldset>
            <div style="text-align: center;margin-bottom: 50px">
                <?php echo $this->Form->end(array('type' => 'submit', 'class' => 'submit btn')); ?>
            </div>
        </div>
    </div>
</div>
