<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:100:"F:\phpstudy\PHPTutorial\WWW\we7\addons\make_xyx\core\public/../application/index\view\user\edit.html";i:1535433816;}*/ ?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>layout 后台大布局 - Layui</title>
    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon" />
    <link rel="stylesheet" href="/we7/addons/make_xyx/core/public/static/index/css/font.css">
    <link rel="stylesheet" href="/we7/addons/make_xyx/core/public/static/index/css/common.css" />
    <link rel="stylesheet" href="/we7/addons/make_xyx/core/public/static/index/css/xadmin.css">
    <script type="text/javascript" src="/we7/addons/make_xyx/core/public/static/index/lib/jquery/jquery.min.js"></script>
    <script src="/we7/addons/make_xyx/core/public/static/index/lib/layui/layui.js" charset="utf-8"></script>
    <script type="text/javascript" src="/we7/addons/make_xyx/core/public/static/index/js/xadmin.js"></script>
    <style>
        .label-width{
            width:90px;
        }
    </style>
</head>
<body class="layui-layout-body">
<div class="x-body">
    <form class="layui-form">
        <input type="hidden" name="id" value="<?php echo $re['id']; ?>">
        <div class="layui-form-item">
            <label for="phone" class="layui-form-label label-width">
                <span class="x-red">*</span>手机
            </label>
            <div class="layui-input-inline">
                <input type="text" id="phone" name="phone" required="" lay-verify="phone"
                       autocomplete="off" class="layui-input" value="<?php echo $re['phone']; ?>">
            </div>
        </div>
        <div class="layui-form-item">
            <label  class="layui-form-label label-width">
                <span class="x-red">*</span>真实姓名
            </label>
            <div class="layui-input-inline">
                <input type="text" name="name" required=""
                       autocomplete="off" class="layui-input" value="<?php echo $re['name']; ?>">
            </div>
        </div>
        <div class="layui-form-item">
            <label  class="layui-form-label label-width">
                <span class="x-red">*</span>身份证号
            </label>
            <div class="layui-input-inline">
                <input type="text"  name="ID_card" required=""
                       autocomplete="off" class="layui-input" value="<?php echo $re['ID_card']; ?>">
            </div>
        </div>
        <div class="layui-form-item">
            <label for="phone" class="layui-form-label label-width" >
                <span class="x-red">*</span>注册时间
            </label>
            <div class="layui-input-inline" style="padding-top: 11px">
                    <span style="padding-left:10px;"><?php echo date("Y-m-d H:i:s",$re['create_time']); ?></span>
            </div>
        </div>
        <?php if($re['grade'] == 2): ?>
        <div class="layui-form-item">
            <label  class="layui-form-label label-width" >
                <span class="x-red">*</span>会员开通时间
            </label>
            <div class="layui-input-inline">
                <input type="text" id="start" name="turn_on_time" required=""
                       autocomplete="off" class="layui-input" value="<?php echo date("Y-m-d H:i:s",$re['turn_on_time']); ?>">
            </div>
        </div>
        <div class="layui-form-item">
            <label for="phone" class="layui-form-label label-width">
                <span class="x-red">*</span>会员到期时间
            </label>
            <div class="layui-input-inline">
                <input type="text" id="end" name="end_time" required=""
                       autocomplete="off" class="layui-input" value="<?php echo date("Y-m-d H:i:s",$re['end_time']); ?>">
            </div>
        </div>
        <?php endif; ?>
        <div class="layui-form-item">
            <label  class="layui-form-label label-width">
            </label>
            <button  class="layui-btn" lay-filter="add" lay-submit="">
                修改
            </button>
        </div>
    </form>
</div>
<script>
    layui.use('laydate', function(){
        var laydate = layui.laydate;

        //执行一个laydate实例
        laydate.render({
            elem: '#start', //指定元素
            type: 'datetime'
        });

        //执行一个laydate实例
        laydate.render({
            elem: '#end', //指定元素
            type: 'datetime'
        });
    });
    layui.use(['form','layer'], function(){
        var form = layui.form
            ,layer = layui.layer;


        //监听提交
        form.on('submit(add)', function(data){

            $.ajax({
                url: "<?php echo tp_url('user/edit'); ?>",
                method:'POST',
                data:{
                    data:data.field,
                },
                dataType:'json',
                success:function(res){
                    if(res.code == 1){
                        layer.msg("修改成功",{time:1000},function(){
                            var index = parent.layer.getFrameIndex(window.name);
                            parent.layer.close(index);
                        });
                        return;
                    }else{
                        alert('修改失败');
                    }
                    return false;
                },
                error:function(){
                    alert('请求服务器失败');
                }
            });
            return false;
        });

    });

</script>
</body>
</html>