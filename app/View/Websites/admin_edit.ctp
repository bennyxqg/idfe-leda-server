<div class="colMain">
    <div class="main">
        <div class="app-detail">

            <?php echo $this->Form->create('Website'); ?>
            <fieldset>
                <?php echo $this->element('Websites/_form'); ?>
            </fieldset>
            <div style="text-align: center;margin-bottom: 20px">
                <?php echo $this->Form->end(array('type' => 'submit', 'class' => 'submit btn')); ?>
            </div>
        </div>
    </div>
</div>
