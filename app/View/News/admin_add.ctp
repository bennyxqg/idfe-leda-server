<div class="colMain">
    <div class="main">
        <div class="app-detail">
            <?php echo $this->Form->create('News', array('enctype' => 'multipart/form-data')); ?>
            <fieldset>
                <legend>
                    <?php // echo __('Admin Add News'); ?>
                </legend>
                <?php echo $this->element('News/_form'); ?>
            </fieldset>
            <div style="text-align: center;margin-bottom: 50px">
                <?php echo $this->Form->end(array('type' => 'submit', 'class' => 'submit btn')); ?>
            </div>
        </div>
    </div>
</div>
<script>
$(document).ready(function(){
	$('#NewsSiteId').change(function(){
		var _site_id = $(this).children('option:selected').val();
		$.post(
                '/admin/NewsCategories/add',
                { site_id: _site_id },
                function (ret) {
                    if (ret.data) {
                    	$("#NewsNewsCategoriesId").html(ret.data);
                    } else {
                    }
                },
                'json'
         );
	});
});
</script>
