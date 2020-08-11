<?php 
App::uses('AppHelper', "View/Helper");
class PageHelper extends AppHelper {

	private  $each_disNums;//每页显示的条目数
	private  $nums;//总条目数
	private  $current_page;//当前被选中的页
	private  $sub_pages;//每次显示的页数
	private  $pageNums;//总页数
	private  $page_array = array();//用来构造分页的数组
	private  $subPage_link;//每个分页的链接
	private  $subPage_type;//显示分页的类型
	/**
	*__construct是SubPages的构造函数，用来在创建类的时候自动运行.
	*@$each_disNums   每页显示的条目数
	*@nums          总条目数
	*@current_num     当前被选中的页
	*@sub_pages       每次显示的页数
	*@subPage_link    每个分页的链接
	*@subPage_type    显示分页的类型
	*当@subPage_type=1的时候为普通分页模式
	*example：   共4523条记录,每页显示10条,当前第1/453页 [首页] [上页] [下页] [尾页]
	*当@subPage_type=2的时候为经典分页样式
	*example：   当前第1/453页 [首页] [上页] 1 2 3 4 5 6 7 8 9 10 [下页] [尾页]
	*/
	function __construct(){

	}
	function show($each_disNums,$nums,$current_page,$sub_pages,$subPage_link,$subPage_type){
	$this->each_disNums=intval($each_disNums);
	$this->nums=intval($nums);
	if(!$current_page){
	$this->current_page=1;
	}else{
	$this->current_page=intval($current_page);
	}
		$this->sub_pages=intval($sub_pages);
		$this->pageNums=ceil($nums/$each_disNums);
		$this->subPage_link=$subPage_link;
		$this->show_SubPages($subPage_type);

		//echo $this->pageNums."--".$this->sub_pages;
	}


	/**
	*__destruct析构函数，当类不在使用的时候调用，该函数用来释放资源。
	*/
	function __destruct(){
	unset($each_disNums);
	unset($nums);
	unset($current_page);
	unset($sub_pages);
	unset($pageNums);
	unset($page_array);
	unset($subPage_link);
	unset($subPage_type);
	}

	/**
	*show_SubPages函数用在构造函数里面。而且用来判断显示什么样子的分页
	*/
	function show_SubPages($subPage_type){
	if($subPage_type == 1){
	$this->subPageCss1();
	}elseif ($subPage_type == 2){
	$this->subPageCss2();
	}elseif ($subPage_type == 3){
	$this->subPageCss3();
	}elseif ($subPage_type == 4){
	$this->subPageCss4();
}
}


/**
	*用来给建立分页的数组初始化的函数。
	*/
	function initArray(){
	for($i=0;$i<$this->sub_pages;$i++){
	$this->page_array[$i]=$i;
	}
		return $this->page_array;
	}


	/**
	*construct_num_Page该函数使用来构造显示的条目
		*即使：[1][2][3][4][5][6][7][8][9][10]
		**/
		function construct_num_Page(){
		if($this->pageNums < $this->sub_pages){
	$current_array=array();
	for($i=0;$i<$this->pageNums;$i++){
	$current_array[$i]=$i+1;
	}
	}else{
		$current_array=$this->initArray();
		if($this->current_page <= 3){
		for($i=0;$i<count($current_array);$i++){
		$current_array[$i]=$i+1;
		}
		}elseif ($this->current_page <= $this->pageNums && $this->current_page > $this->pageNums - $this->sub_pages + 1 ){
		for($i=0;$i<count($current_array);$i++){
		$current_array[$i]=($this->pageNums)-($this->sub_pages)+1+$i;
		}
		}else{
		for($i=0;$i<count($current_array);$i++){
			$current_array[$i]=$this->current_page-2+$i;
		}
		}
		}

		return $current_array;
		}

			/**
			*构造普通模式的分页
			*共4523条记录,每页显示10条,当前第1/453页 [首页] [上页] [下页] [尾页]
			**/
			function subPageCss1(){
			$subPageCss1Str="";
			$subPageCss1Str.="共".$this->nums."条记录，";
			$subPageCss1Str.="每页显示".$this->each_disNums."条，";
			$subPageCss1Str.="当前第".$this->current_page."/".$this->pageNums."页 ";
				if($this->current_page > 1){
				$firstPageUrl=$this->subPage_link."1";
				$prewPageUrl=$this->subPage_link.($this->current_page-1);
				$subPageCss1Str.="[<a href='$firstPageUrl'>首页</a>] ";
				$subPageCss1Str.="[<a href='$prewPageUrl'>上一页</a>] ";
				}else {
				$subPageCss1Str.="[首页] ";
				$subPageCss1Str.="[上一页] ";
				}

				if($this->current_page < $this->pageNums){
				$lastPageUrl=$this->subPage_link.$this->pageNums;
				$nextPageUrl=$this->subPage_link.($this->current_page+1);
						$subPageCss1Str.=" [<a href='$nextPageUrl'>下一页</a>] ";
								$subPageCss1Str.="[<a href='$lastPageUrl'>尾页</a>] ";
				}else {
				$subPageCss1Str.="[下一页] ";
				$subPageCss1Str.="[尾页] ";
				}

				echo  $subPageCss1Str;

}


/**
*构造经典模式的分页
*[首页] [上页] 1 2 3 4 5 6 7 8 9 10 [下页] [尾页]
*/
function subPageCss2(){
$subPageCss2Str="";

if($this->current_page > 1){
$firstPageUrl=$this->subPage_link."1".'/pageTotal:'.$this->pageNums;
	$prewPageUrl=$this->subPage_link.($this->current_page-1).'/pageTotal:'.$this->pageNums;
	$subPageCss2Str.="<a class='y-width' href='$firstPageUrl'>首页</a> ";
	$subPageCss2Str.="<a class='y-width' href='$prewPageUrl'>上一页</a> ";
	}else {
	$subPageCss2Str.="<span class='y-width y-act-c'>首页</span>";
	$subPageCss2Str.="<span class='y-width y-act-c'>上一页</span>";
	}

	$a=$this->construct_num_Page();
	for($i=0;$i<count($a);$i++){
		$s=$a[$i];
		if($s == $this->current_page ){
		$subPageCss2Str.="<span style='color:red;font-weight:bold;'>".$s."</span>";
		}else{
		$url=$this->subPage_link.$s.'/pageTotal:'.$this->pageNums;
		$subPageCss2Str.="<a href='$url'>".$s."</a>";
		}
		}

		if($this->current_page < $this->pageNums){
		$lastPageUrl=$this->subPage_link.$this->pageNums.'/pageTotal:'.$this->pageNums;
		$nextPageUrl=$this->subPage_link.($this->current_page+1).'/pageTotal:'.$this->pageNums;
		$subPageCss2Str.=" <a class='y-width' href='$nextPageUrl'>下一页</a> ";
		$subPageCss2Str.="<a class='y-width' href='$lastPageUrl'>尾页</a> ";
		}else {
		$subPageCss2Str.="<span class='y-width y-act-c'>下一页</span>";
            $subPageCss2Str.="<span class='y-width y-act-c'>尾页</span>";
        }
        $subPageCss2Str.="共".$this->nums."条记录，";
        $subPageCss2Str.="当前第".$this->current_page."/".$this->pageNums."页 ";
        echo $subPageCss2Str;
		}


		/**
		*构造经典模式的分页
        	*当前第1/453页 首页 尾页 1 2 3 4 5
     **/
    function subPageCss3(){
        	$subPageCss3Str="";
        	$subPageCss3Str.="当前第".$this->current_page."/".$this->pageNums."页 ";


        	if($this->current_page > 1){
        	$firstPageUrl=$this->subPage_link."1";
        	$prewPageUrl=$this->subPage_link.($this->current_page-1);
        	$subPageCss3Str.="<a href='$firstPageUrl'>首页</a> ";
        	}else {
        	$subPageCss3Str.="首页";
        	}

        	if($this->current_page < $this->pageNums){
        	$lastPageUrl=$this->subPage_link.$this->pageNums;
        	$nextPageUrl=$this->subPage_link.($this->current_page+1);
        			$subPageCss3Str.="<a href='$lastPageUrl'>尾页</a> ";
        	}else {
        	$subPageCss3Str.="尾页";
        }

        			$a=$this->construct_num_Page();
        for($i=0;$i<count($a);$i++){
        			$s=$a[$i];
        			if($s == $this->current_page ){
        			$subPageCss3Str.="【 <span style='color:red;font-weight:bold;'>".$s."</span> 】";
}else{
        			$url=$this->subPage_link.$s;
        			$subPageCss3Str.="<a href='$url'>".$s."</a>";
}
}

	echo $subPageCss3Str;
}

/**
*构造经典模式的分页
*共4523条记录,每页显示10条, [首页] [上页] [下页] 1 2 3 4 5 .... [尾页]
*/

function subPageCss4(){
$subPageCss4Str="";
	$subPageCss4Str.="共".$this->nums."条记录，";
	$subPageCss4Str.="当前第".$this->current_page."/".$this->pageNums."页 ";
	//$subPageCss1Str.="当前第".$this->current_page."/".$this->pageNums."页 ";
	if($this->current_page > 1){
	$firstPageUrl=$this->subPage_link."1";
	$prewPageUrl=$this->subPage_link.($this->current_page-1);
	$subPageCss4Str.="[<a href='$firstPageUrl'>首页</a>] ";
	$subPageCss4Str.="[<a href='$prewPageUrl'>上一页</a>] ";
	}else {
	$subPageCss4Str.="[首页] ";
	$subPageCss4Str.="[上一页] ";
	}

	$a=$this->construct_num_Page();
	for($i=0;$i<count($a);$i++){
	$s=$a[$i];
	if($s == $this->current_page ){
	$subPageCss4Str.="【 <span style='color:red;font-weight:bold;'>".$s."</span> 】";
	}else{
	$url=$this->subPage_link.$s;
	$subPageCss4Str.="<a href='$url'>".$s."</a>";
	}
	}

	if($this->current_page < $this->pageNums){
	$lastPageUrl=$this->subPage_link.$this->pageNums;
	$nextPageUrl=$this->subPage_link.($this->current_page+1);
	$subPageCss4Str.=" [<a href='$nextPageUrl'>下一页</a>] ";
	$subPageCss4Str.="[<a href='$lastPageUrl'>尾页</a>] ";
	}else {
	$subPageCss4Str.="[下一页] ";
	$subPageCss4Str.="[尾页] ";
	}

	echo  $subPageCss4Str;

	}

	}
