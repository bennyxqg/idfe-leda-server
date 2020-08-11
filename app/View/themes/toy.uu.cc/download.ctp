<!doctype html>
<html>
<head>
<meta charset="utf-8">
<?php /*BLOCK*/
$this->Website->init();
echo '<title>'.GET_BLOCK('web_title').'</title>';
echo '<meta content="'.GET_BLOCK('web_keywords').'" name="keywords" />';
echo '<meta content="'.GET_BLOCK('web_description').'" name="description" />';
/*BLOCK*/ ?>

<script type="text/javascript" src="/manage/assets/js/edit/jquery.min.js"></script>
<!-- CUSTOM-JS-COMPONENT -->

<?php /*BLOCK*/
$agent=$_SERVER['HTTP_USER_AGENT'];
if(preg_match('/(iPhone|iPad|iPod|iOS)/i', $agent) == 1)
	$downloadurl=GET_BLOCK('ios_download_url');
else 
	$downloadurl=GET_BLOCK('android_download_url');
	
if(strlen(trim($downloadurl)) > 0)
{
echo <<<_HTML
<script>
$(function(){
	window.location.href="{$downloadurl}"; 
});
</script>
_HTML;
}
else
{
echo <<<_HTML
<script>
$(function(){
	alert('敬请期待');
});
</script>
_HTML;
}
/*BLOCK*/ ?>
</head>

<body>

</body>
</html>
