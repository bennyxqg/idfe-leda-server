<div class="colMain">
    <div class="main">
        <div class="app-detail">
            <?php echo $this->Form->create('User'); ?>
            <fieldset>
                <?php echo $this->element('Users/_form'); ?>
            </fieldset>
            <div style="text-align: center">
                <?php echo $this->Form->end(array('type' => 'submit', 'class' => 'btn')); ?>
            </div>
        </div>
    </div>
</div>


