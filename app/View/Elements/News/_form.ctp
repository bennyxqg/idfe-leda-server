<ul class="form">
    <?php echo $this->Form->input('id'); ?>
    <li>
        <span class="label">新闻标题：</span>

        <div class="fc">
            <?php echo $this->Form->input('title', array('div' => false, 'label' => false, 'class' => 'iText', 'style' => 'width:400px;')); ?>
        </div>
    </li>

    <li>
        <span class="label">新闻描述：</span>

        <div class="fc">
            <?php echo $this->Form->input('decription', array("type" => "textarea", 'div' => false, 'label' => false, 'style' => 'width:400px;')); ?>
        </div>
    </li>
    
    <li>
        <span class="label">点击数：</span>

        <div class="fc">
            <?php echo $this->Form->input('clicks', array('div' => false, 'label' => false, 'class' => 'iText', 'style' => 'width:200px;', value => (int)$this->request->data['News']['clicks'])); ?>
        </div>
    </li>
    
    <li>
        <span class="label">排序(数字越小排越前)：</span>

        <div class="fc">
            <?php echo $this->Form->input('sort', array('div' => false, 'label' => false, 'class' => 'iText', 'style' => 'width:200px;', value => (int)$this->request->data['News']['sort'])); ?>
        </div>
    </li>

	<li>
        <div class="label">新闻图片(PC端)<br>(百科头图,180X126)：</div>

        <div class="fc">
            <?php echo $this->Form->input('big_url', array('div' => false, 'label' => false, 'class' => 'iText', 'type' => 'file')); ?>
            <?php if (isset($this->request->data['News']['big_url']) && !empty($this->request->data['News']['big_url'])): ?>
                <input type="hidden" name='big_url' value='<?= $this->request->data['News']['big_url'] ?>'>
                <img src='<?= PHOTO_URL . $this->request->data['News']['big_url'] ?>' width="70px" height="100px">
            <?php endif; ?>
        </div>
    </li>
    <li>
        <span class="label">新闻图片(手机端)：</span>

        <div class="fc">
            <?php echo $this->Form->input('small_url', array('div' => false, 'label' => false, 'class' => 'iText', 'type' => 'file')); ?>
            <?php if (isset($this->request->data['News']['small_url']) && !empty($this->request->data['News']['small_url'])): ?>
                <input type="hidden" name='small_url' value='<?= $this->request->data['News']['small_url'] ?>'>
                <img src='<?= PHOTO_URL . $this->request->data['News']['small_url'] ?>' width="70px" height="100px">
            <?php endif; ?>
        </div>
    </li>
    <li>
        <span class="label">新闻内容：</span>

        <div class="fc">
            <?php echo $this->Form->input('content', array('div' => false, 'label' => false, 'class' => 'iText')); ?>
        </div>
    </li>


    <?php if ($this->Base->checkSite($site_list)): ?>

        <li>
            <span class="label">站点id：</span>

            <div class="fc">
                <?php
                $this->request->data['News']['site_id'] = isset($this->request->data['News']['site_id']) ? (int)$this->request->data['News']['site_id'] : $site_id;
                echo $this->Form->input('site_id', array('div' => false, 'label' => false, 'class' => 'iText', 'options' => $website_list, 'selected' => $this->request->data['News']['site_id'], 'style' => 'height:30px;'));?>
            </div>
        </li>
    <?php else: ?>
        <?php echo $this->Form->input('site_id', array("type" => "hidden", "value" => $site_list)) ?>
    <?php endif; ?>

    <li>
        <span class="label">新闻分类</span>

        <div class="fc">
            <?php
            
            $this->request->data['News']['news_categories_id'] = isset($this->request->data['News']['news_categories_id']) ? $this->request->data['News']['news_categories_id'] : "";
            echo $this->Form->input('news_categories_id', array('div' => false, 'label' => false, 'class' => 'iText', 'options' => $category_list, 'selected' => (int)$this->request->data['News']['news_categories_id'], 'style' => 'height:30px;'));?>
        </div>
    </li>

    <li>
        <span class="label">推荐</span>
        <div class="fc">
            <?php echo $this->Form->radio('home', array(1 => '推荐', 0 => '不推荐'), array('label' => false, 'legend' => false,'checked'=>true)); ?>
        </div>
    </li>
    
    <li>
        <span class="label">推荐到百度</span>
        <div class="fc">
            
            <?php if(strcmp($this->request->data['News']['tags'],'baidu') == 0) { ?>
            <input name="data[News][tags]" checked value="baidu" type="radio"> 推荐
            <input name="data[News][tags]" value="" type="radio"> 不推荐
            <?php }else{ ?>
            <input name="data[News][tags]" value="baidu" type="radio"> 推荐
            <input name="data[News][tags]" checked value="" type="radio"> 不推荐
            <?php } ?>
        </div>
    </li>

</ul>
<script>
    $(function () {
        CKEDITOR.replace('data[News][content]', {
            skin: 'kama'  });

    });
</script>

