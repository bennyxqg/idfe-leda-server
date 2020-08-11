<?php
////debug($paginator->params);
$paginator = $this->paginator;
if ($paginator->params['paging'][$paginator->defaultModel()]['page'] == 0) {
    $paginator->params['paging'][$paginator->defaultModel()]['page'] = 1;
}
$n = $paginator->params['paging'][$paginator->defaultModel()]['pageCount'];
$cid = $paginator->params['url']['cid'];
$href = '';
for ($i = 1; $i <= $n; $i++) {
    $href .= "<a href = /news?cid=$cid&page=$i>$i</a>";
}
$paginator->options(array('url' => array('cid' => $paginator->params['url']['cid'])));
$options = array('before' => '&nbsp;', 'after' => '&nbsp;', 'separator' => '&nbsp;', 'first' => '1...', 'last' => $paginator->counter(array('format' => '...%pages%')));
$page = '<div class="pagination">' . $paginator->counter(array('format' => "<span>第%page%/%pages%页</span>")) . '&nbsp;' . $href . '</div>';
echo $page;
?>


