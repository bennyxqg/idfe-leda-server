<div id="tip" style="position:absolute;background-color:#fff;padding:5px;border:1px solid #cecece;display:none;">
导入格式为csv个数, 格式如下<br/>
第一名,某玩家昵称,12456,总排名,活动名<br/>
第二名,某玩家昵称,12411,总排名,活动名<br/>
第一名,某玩家昵称,12456,南昌市,活动名<br/>
第二名,某玩家昵称,12411,南昌市,活动名<br/>
...<br/>
</div>
<div class="colMain">
    <div class="title"><p class="fl">积分排行榜管理</p></div>
    <div class="main">
        <div class="toolbar">
            <div class="search fl">
                
                    <span>活动名称
                            <select name="actname_select" id="actname_select">
                                <?php
								$len=count($actnames);
								for($i=0;$i<$len;$i++)
								{
									$l=$actnames[$i]['user_score']['act_name'];
									if(strcmp($actname_select,$l) == 0)
										$s='selected';
									else
										$s='';
								?>
									<option <?php echo $s; ?> value="<?php echo $l; ?>"><?php echo $l; ?></option>
								<?php
								}
								?>
                            </select>
                     </span>
                
                
            </div>




<form action="/admin/Tp2/import" enctype="multipart/form-data" method="post" accept-charset="utf-8"><div style="display:none;"><input type="hidden" name="_method" value="POST"/></div>
	<input type="file" name="file" style="width:400px;"/>
	<input type="submit" id="import_btn" class="submit btn" value="导入"/>
</form>






        </div>
        <div class="content">
            <div class="grid">
                <table>
                    <thead>
                    <tr>
                        <th>名次</th>
                        <th>昵称</th>
                        <th>比赛分数</th>
						<th>所属</th>
						<th>活动名称</th>
                    </tr>
                    </thead>
                    <tbody>
                    
                    <?php
					$len=count($data);
                    for($i=0;$i<$len;$i++)
					{
                   	?>
                        <tr>
                            <td><span class="blue"><?php echo h($data[$i]['user_score']['rank']); ?></span></td>

                            <td><?php echo h($data[$i]['user_score']['nickname']); ?>&nbsp;</td>
                            <td><?php echo h($data[$i]['user_score']['score']); ?>&nbsp;</td>
							<td><?php echo h($data[$i]['user_score']['location']); ?>&nbsp;</td>
							<td><?php echo h($data[$i]['user_score']['act_name']); ?>&nbsp;</td>
                        </tr>
                    <?php
                    }
                    ?>
                    </tbody>
                </table>
            </div>

            <div class="pagination">
                <?php echo $this->Paginator->numbers(array('separator' => '')); ?>
            </div>

        </div>
    </div>
</div>
<script>
	$(document).ready(function(){
		$('#actname_select').change(function(){
			var l = $(this).children('option:selected').val();
			window.location.href="/admin/Tp2/index?actname="+l;
		});
		$("#import_btn").click(function(){
			alert('导入的数据会覆盖之前的数据');

		});

		$("#import_btn").mouseover(function(e){
			$("#tip").css('display','block');
			$("#tip").css('top',e.clientY+'px');
			$("#tip").css('right',e.clientX+'px');
		});

		$("#import_btn").mouseout(function(){
			$("#tip").css('display','none');
		});
	});                    
</script>

