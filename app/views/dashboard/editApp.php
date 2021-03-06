<?php echo $header; ?>
<div class="row">
    <div class="">
        <?php echo \Utils\FormBuilderHelper::begin();//注册表单JS ?>
        <form data-status="0" id="addAppForm" class="form-horizontal"  action="<?php echo URL::action('DashBoardController@updateApp')?>" method="post">
            <fieldset>
                <legend>修改应用:<?php echo $app->name; ?></legend>
                <div class="control-group">
                    <label for="app_id" class="control-label">应用名称*:</label>
                    <div class="controls">
                        <input type="hidden" name="app_id" value="<?php echo $app->id; ?>" >
                        <input name="name" class="input-medium" value="<?php echo $app->name?>" type="text" placeholder="应用名称" id="name" >
                    </div>
                </div>
                <div class="control-group">
                    <label for="info" class="control-label">信息*:</label>
                    <div class="controls">
                        <input name="info" class="input-xxlarge" value="" type="text" placeholder="信息" id="info" >
                    </div>
                </div>
                <div class="form-actions">
                    <button  id="JS_Sub" class="btn btn-primary">提交</button>
                    <a href="javascript:void (0)" class="btn" onclick="history.back();">取消</a>
                </div>
            </fieldset>
        </form>
    </div>
    <script>
        $().ready(function(){
            $.validator.setDefaults({
                errorClass:'error help-inline',
                errorElement : 'span',
                errorPlacement:function(error,element){
                    element.parent().parent().addClass('error');
                    error.appendTo(element.parent());
                },
                success:function(label){
                    label.parent().parent().removeClass('error').addClass('success');
                    label.html('<i class="icon-ok"></i>');
                }
            });
            var validate = $("#addAppForm").validate({
                rules:{"name":"required"}
            });
        });
    </script>
</div>
<?php echo $footer; ?>