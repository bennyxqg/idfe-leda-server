<script src="//cdn.bootcss.com/jquery/1.2.3/jquery.min.js"></script>
<script type="text/javascript" src="//sds.uu.cc/sds.uu.cc/act/wap/js/ajaxfileupload.js"></script>
<form id="form1" method="POST" action="//sds.uu.cc/act/up_img" enctype="multipart/form-data" >
    <div>
    <a id="addAttach" href="#">12</a>
    <div id="files">

    <input type="file" name="icon" id="icon"/>
	<a href="javascript:;" id="icon1">12</a>

    </div>
	
	<input type="submit" value="ti">
    
    </div>
    </form>
	<script>
	$(document).ready(function(){
		$("#icon1").click(function(){
			$.ajaxFileUpload({
				url: '//sds.uu.cc/act/up_img',
				secureuri: false,
				fileElementId: 'icon',
				dataType: 'json',
				success: function (data,status) {
					alert(data);
				},
				error: function (data, status, e){
		            alert(e);
		        }
		
			});
		});
	});
	
	
	
	</script>
	