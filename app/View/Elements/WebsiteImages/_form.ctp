<ul class="form">
    <?php echo $this->Form->input('id'); ?>
    <li>
        <span class="label">小图片：</span>

        <div class="fc">
            <?php echo $this->Form->input('small_url', array('type' => 'file', 'div' => false, 'label' => false, 'style' => 'width:163px;')); ?>

            <?php if (!empty($this->request->data['WebsiteImage']['small_url']) && file_exists(WWW_ROOT . "/uploads/" . $this->request->data['WebsiteImage']['small_url'])): ?>
                <input type="hidden" name='small_url' value='<?= $this->request->data['WebsiteImage']['small_url'] ?>'>
                <img src='<?= PHOTO_URL . $this->request->data['WebsiteImage']['small_url'] ?>' width="100px"
                     height="47px">
            <?php endif; ?>
            <br>
            <input type="checkbox" name="small_url_check" value="1">删除
        </div>
    </li>
    <li>
                        <span class="label">
                            小图链接
                        </span>
        <?php echo $this->Form->input('small_link', array('div' => false, 'label' => false, 'class' => 'iText', 'style' => 'width:280px;')); ?>
    </li>

    <li>
        <span class="label">大图片：</span>

        <div class="fc">
            <?php echo $this->Form->input('big_url', array('type' => 'file', 'div' => false, 'label' => false, 'style' => 'width:163px;')); ?>

            <?php if (!empty($this->request->data['WebsiteImage']['big_url']) && file_exists(WWW_ROOT . "/uploads/" . $this->request->data['WebsiteImage']['big_url'])): ?>
                <input type="hidden" name='big_url' value='<?= $this->request->data['WebsiteImage']['big_url'] ?>'>
                <img src='<?= PHOTO_URL . $this->request->data['WebsiteImage']['big_url'] ?>' width="100px"
                     height="47px">
            <?php endif; ?>
            <br>
            <input type="checkbox" name="big_url_check" value="1">删除
        </div>

    </li>

    <li>
                                            <span class="label">
                                                大图链接
                                            </span>
        <?php echo $this->Form->input('big_link', array('div' => false, 'label' => false, 'class' => 'iText', 'style' => 'width:280px;','maxlength'=>'100')); ?>
    </li>
    <?php if ($this->Base->checkSite($site_list)): ?>

        <li>
            <span class="label">站点id：</span>

            <div class="fc">
                <?php
                $this->request->data['WebsiteImage']['site_id'] = isset($this->request->data['WebsiteImage']['site_id']) ? (int)$this->request->data['WebsiteImage']['site_id'] : "";
                echo $this->Form->input('site_id', array('div' => false, 'label' => false, 'class' => 'iText', 'options' => $website_list, 'selected' => $this->request->data['WebsiteImage']['site_id'], 'style' => 'height:30px;'));?>
            </div>
        </li>
    <?php else: ?>
        <?php echo $this->Form->input('site_id', array("type" => "hidden", "value" => $site_list)) ?>
    <?php endif; ?>

    <li>
        <span class="label">类型：</span>
        <div class="fc">
            <?php
            $type_id = isset($this->request->data['WebsiteImage']['type']) ? $this->request->data['WebsiteImage']['type'] : '';
            echo $this->Form->input('type', array('div' => false, 'label' => false, 'class' => 'iText', 'options' => $img_type, 'selected' => $type_id, 'style' => 'height:30px;'));?>
        </div>
    </li>

    <li>
        <span class="label"> 排序</span>
        <div class="fc">
                <?php  echo $this->Form->input("sort",array("type"=>"text","div"=>false,"label"=>false));?>
            <span>数字越小 排序靠前</span>
        </div>
    </li>

    <li>
        <span class="label"> 图片alt</span>
        <div class="fc">
            <?php  echo $this->Form->input("alt",array("type"=>"text","div"=>false,"label"=>false,"class"=>"iText", 'style' => 'width:230px;'));?>
        </div>
    </li>

    <li>
        <span class="label"> 图片title</span>
        <div class="fc">
            <?php  echo $this->Form->input("title",array("type"=>"text","div"=>false,"label"=>false,"class"=>"iText", 'style' => 'width:230px;'));?>
        </div>
    </li>
</ul>
