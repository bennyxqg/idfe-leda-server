<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "//www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="//www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php 
$this->Website->init();
?>
<meta name="viewport" content="target-densitydpi=device-dpi,width=640, user-scalable=no">
<meta content="yes" name="apple-mobile-web-app-capable">
<meta content="telephone=no" name="format-detection">
<title>圣斗士星矢专题</title>
<link href="<?php BASE_URL() ?>act/wap/css/index.css?v=20160511.css" rel="stylesheet" type="text/css" />
<link rel="prefetch" href="<?php BASE_URL() ?>act/wap/images/bj.jpg" />
<link rel="prefetch" href="<?php BASE_URL() ?>act/wap/images/bj2.gif" />
<link rel="prefetch" href="<?php BASE_URL() ?>act/wap/images/logo.png" />
<link rel="prefetch" href="<?php BASE_URL() ?>act/wap/images/p1.jpg" />
<link rel="prefetch" href="<?php BASE_URL() ?>act/wap/images/p2.jpg" />

</head>

<body>
<div id="container">
   <section class="content">
       <header>
            <img src="<?php BASE_URL() ?>act/wap/images/logo.png" width="253" height="101" /> 
       </header>
       <section class="baom">
         
          <form>
              <h3>我们将会对您填写的联系方式进行保密</h3>
              <p class="peple_p" style="position:relative">
                   <label for="tx">头像:</label><span id="imgPreview" data-url=""><img id="viewImg" src="" /></span>
                    
                   <input id="icon" name="icon" type="file"  style="margin-top:20px;filter:alpha(opacity=0);position:absolute;opacity:0;width:76px;height:60px;margin-left:305px;"  hidefocus />
                  
                   <input type="button" id="file_bth" value="浏览"  />  
                  
                   <!--
                   <input id="fileupload" name="mypic" type="file"  style="filter:alpha(opacity=0);position:absolute;opacity:0;width:76px;height:60px;"  hidefocus />
                   
                   <input id="fileupload" type="file" name="mypic" style="position: absolute;top:130px;z-index:7; right:50px;margin: 0;height:60px;width:90px;border: solid transparent;opacity: 0;filter:alpha(opacity=0); cursor: pointer;"  hidefocus />
                   -->
                   <input type="button" id="sc" value="上传"  />
                   
                  <!-- <div class="fl img_upbox"> 
                        <div class="btn fl">
                            <span>上传头像</span>
                            <input id="fileupload" type="file" name="mypic">
                        </div>
                       
                        <div class="progress fl" >
                            <span class="bar"></span><span class="percent" >0%</span >
                        </div>
                        <div class="files fl" ></div>
                  <!-- </div>  -->
                  
              </p>
              <p>
                   姓名:<input type="text" id="name" />
              </p>
              <p>
                   Q Q: <input type="text" id="qq" />
              </p>
              <p>
                   手机:<input type="text" id="phone" />
              </p>
              <p>
                   地址:<input type="text" id="adress" />
              </p>
              <h3>写出你与圣斗士星矢的故事</h3>
              <p class="sy">
                   <span>故事:</span><textarea id="story"  class="story"></textarea>
              </p>
              <input type="button" id="submit" value="我准备好进行圣迷测试了！">  
          </form>
          
       </section>
     
    
   </section>
   

</div>

<script type="text/javascript" src="<?php BASE_URL() ?>act/wap/js/jquery-1.8.0.min.js"></script>
<script type="text/javascript">
$(function(){

	var viewFiles = document.getElementById("icon");
    var viewImg = document.getElementById("viewImg");
    function viewFile (file) {
        
        var reader = new FileReader();
        reader.onload = function( evt ){
			var fileSize = viewFiles.files[0].size;
			var size = Math.ceil(fileSize / 1024);    
			if(size > 400){
			    alert("您上传的文件大小是："+size+"KB，超过了400KB哦");
			}else{
				viewImg.src = evt.target.result;
				
			}
        }
        reader.readAsDataURL(file);
    }
    viewFiles.addEventListener("change", function () {
        //通过 this.files 取到 FileList ，这里只有一个
        viewFile(this.files[0]);
    }, false);
	
	$('#sc').on('click',function(){
		var imgUrl = $('#viewImg').attr('src');
		var iurl = imgUrl.substring(0,16); 
		if(iurl == "//sds.uu.cc"){
			alert('请勿重复上传图片');
		}else{
			$.ajax({
					type:"post",
					url:"//sds.uu.cc/act/uploadimg",
					data:{icon:imgUrl},
					dataType:"json",
					success:function(res){
						if(res.ret == 0){
							alert(res.msg);
							$('#viewImg').attr('data-url',res.name);
							$('#viewImg').attr('src',"//sds.uu.cc/uploads/sds.uu.cc/"+res.name)
						}else{
							alert(res.msg);
						}
						
					}
			})
		}
	})
	
	

	//提交表单
	$('#submit').on('click',function(){
		 var imgUrl = $('#viewImg').attr('src');
		 var name_xm = $('#name').val();
		 var qq = $('#qq').val();
		 var phone = $('#phone').val();
		 var adress = $('#adress').val();
		 var story = $('#story').val();
		 var re=/[1-9][0-9]{4,}/;
		 var myreg = /^1[34578]\d{9}$/;
		 
		//判断姓名是否为空
		if(name_xm == ''){
		      alert('请输入有效的姓名哦！');
			  return false;
		}
		
		//qq验证
		if(qq == ''){
			  alert('请输入QQ号哦！');
			  return false;
		 }else if(!re.test(qq)){
			  alert('您输入的QQ号码不对哦！');
			  return false;
		 }
		
		//手机号验证
		 if(phone == ''){
			  alert('您的手机号没有填哦！');
			  return false;
		 }else if(!myreg.exec(phone)){
			  alert('您输入的手机号码不对哦！');
			  return false;
		 }
		 
		 //地址非空
		 if(adress == ''){
		      alert('请输入地址哦！');
			  return false;
		 }
		 
		 if(story == ''){
		      alert('写点对圣斗士的想法吧！');
			  return false;
		 }
		 
		 $.ajax({
				type:"post",
				url:"//sds.uu.cc/act/2",
				data:{icon:$('#viewImg').attr('data-url'),name:name_xm,phone:phone,qq:qq,address:adress,story:story},
				dataType:"json",
				success:function(res){
					if(res.ret == 0){
						window.location.href="//sds.uu.cc/act/3?phone="+phone;
					}else if(res.ret == 1){
						alert('请先上传图片！');
					}else if(res.ret == 2){
						alert(res.msg);
					}else{
						alert(res.msg);
					}
					
				}
			});	

	})
 
  
})
</script>
</body>
</html>
