<ul class="form">
    <?php echo $this->Form->input('id'); ?>
    <li>
        <span class="label">文本标题：</span>

        <div class="fc">
            <?php echo $this->Form->input('title', array('div' => false, 'label' => false, 'class' => 'iText', 'style' => 'width:400px;')); ?>
        </div>
    </li>


    <li>
        <span class="label">链接内容：</span>

        <div class="fc">
            <?php echo $this->Form->input('url', array('div' => false, 'label' => false, 'class' => 'iText', 'style' => 'width:400px;')); ?>
        </div>
    </li>

    <?php
    if ($this->Base->checkSite($site_list)):?>

        <li>
            <span class="label">站点id：</span>

            <div class="fc">
                <?php

                $this->request->data['TextList']['site_id'] = isset($this->request->data['TextList']['site_id']) ? (int)$this->request->data['TextList']['site_id'] : "";
                echo $this->Form->input('site_id', array('div' => false, 'label' => false, 'class' => 'iText', 'options' => $website_list, 'selected' => $this->request->data['TextList']['site_id'], 'style' => 'height:30px;'));?>
            </div>
        </li>
    <?php else: ?>
        <?php echo $this->Form->input('site_id', array("type" => "hidden", "value" => $site_list)) ?>
    <?php endif; ?>
    <li>
        <span class="label">类型：</span>

        <div class="fc">
            <?php
            $type_id = isset($this->request->data['TextList']['type']) ? $this->request->data['TextList']['type'] : '';
            echo $this->Form->input('type', array('div' => false, 'label' => false, 'class' => 'iText', 'options' => $text_type, 'selected' => $type_id, 'style' => 'height:30px;'));?>
        </div>
    </li>


    <li>
        <span class="label"> 排序</span>
        <div class="fc">
            <?php  echo $this->Form->input("sort",array("type"=>"text","div"=>false,"label"=>false));?>
            <span>数字越小 排序靠前</span>
        </div>
    </li>


</ul>


