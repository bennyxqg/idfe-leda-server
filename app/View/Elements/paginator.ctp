<?php
if ($paginator->params['paging'][$paginator->defaultModel()]['page'] == 0) {
    $paginator->params['paging'][$paginator->defaultModel()]['page'] = 1;
}
$paginator->options(array('url' => $this->passedArgs));
$options = array('before' => '&nbsp;', 'after' => '&nbsp;', 'separator' => '&nbsp;', 'first' => '1...', 'last' => $paginator->counter(array('format' => '...%pages%')));
$page = '<div class="pagination">' . $paginator->counter(array('format' => "<span>第%page%/%pages%页</span>")) . '&nbsp;' . $paginator->numbers($options) . '</div>';
echo $page;
?>