<!--如果是总管理员登录 显示站点列表--->
<?php if (!empty($site_list) && ($site_list == "all" || is_array($site_list))): ?>
    <span>按站点查询
                            <select name="site_id" id="site_id">
                                <?php foreach ($server_info as $key => $value): ?>
                                    <option value="<?= $value["id"] ?>"><?= $value["name"] ?></option>
                                <?php endforeach; ?>
                            </select>
                        </span>
<?php endif; ?>

<?php if (!empty($site_list) && $site_list == "all"): ?>
    <span>按分类查询
                            <select name="category_id" id="category_id">
                                <?php foreach ($category_list as $key => $value): ?>
                                    <option <? if (!empty($category_id) && $category_id == $key) {
                                        echo 'selected';
                                    } ?>value="<?= $key ?>"><?= $value ?></option>
                                <?php endforeach; ?>
                            </select>
                        </span>
<?php endif; ?>
<script>
    $(function () {
        $("#site_id").change(function () {
            var site_id = $(this).val();
            $.ajax({
                type: "post",
                url: "/admin/NewsCategories/get_list_by_id",
                dataType: "json",
                data: "site_id=" + site_id,
                success: function (data) {
                    $("#category_id option").remove();
                    if (data.ret == 0) {
                        if (data.data) {
                            $.each(data.data, function (i, k) {
                                $("#category_id").append("<option value='" + i + "'>" + k + "</option>");
                            });
                        } else {
                            $("#category_id").append("<option value=0>暂无分类</option>");
                        }
                    } else {
                        $("#category_id").append("<option value=0>暂无分类</option>");
                    }
                }
            });
        });
    });
</script>

