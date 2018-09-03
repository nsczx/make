<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:100:"F:\phpstudy\PHPTutorial\WWW\we7\addons\make_xyx\core\public/../application/index\view\line\edit.html";i:1535957637;}*/ ?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>layout 后台大布局 - Layui</title>
    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon" />
    <link rel="stylesheet" href="/we7/addons/make_xyx/core/public/static/index/css/font.css">
    <link rel="stylesheet" href="/we7/addons/make_xyx/core/public/static/index/css/common.css" />
    <link rel="stylesheet" href="/we7/addons/make_xyx/core/public/static/index/lib/webuploader/webuploader.css" />
    <link rel="stylesheet" href="/we7/addons/make_xyx/core/public/static/index/css/xadmin.css">
    <script type="text/javascript" src="/we7/addons/make_xyx/core/public/static/index/lib/jquery/jquery.min.js"></script>
    <script src="/we7/addons/make_xyx/core/public/static/index/lib/layui/layui.js" charset="utf-8"></script>
    <script type="text/javascript" src="/we7/addons/make_xyx/core/public/static/index/js/xadmin.js"></script>
    <script type="text/javascript" src="/we7/addons/make_xyx/core/public/static/index/js/common.js"></script>
    <script type="text/javascript" src="/we7/addons/make_xyx/core/public/static/index/lib/webuploader/webuploader.min.js"></script>
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
            <label  class="layui-form-label label-width">
                <span class="x-red"></span>标题
            </label>
            <div class="layui-input-inline" >
                <input type="text"  name="title" required=""
                       autocomplete="off" class="layui-input" placeholder="请输入标题" value="<?php echo $re['title']; ?>">
            </div>
        </div>
        <div class="layui-form-item">
            <label  class="layui-form-label label-width">
                <span class="x-red"></span>图标
            </label>
            <div class="layui-inline" style="width:50%">
                <img src="/we7/addons/make_xyx/core/public/static/<?php echo $re['img_url']; ?>" alt="" width="80px" height="80px"/>
            </div>
        <div class="layui-form-item">
            <label  class="layui-form-label label-width">
                <span class="x-red"></span>更改图标
            </label>
            <div class="layui-inline" style="width:50%">
                <div class="uploader-list-container">
                    <div class="queueList">
                        <div id="dndArea" class="placeholder">
                            <div id="filePicker-2"></div>
                            <p>或将照片拖到这里</p>
                            <p>单个文件大小不能超过2M</p>
                        </div>
                    </div>
                    <div class="statusBar" style="display:none;">
                        <div class="progress"> <span class="text">0%</span> <span class="percentage"></span> </div>
                        <div class="info"></div>
                        <div class="btns">
                            <div id="filePicker2"></div>
                            <div class="uploadBtn">开始上传</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <input type="hidden" id="img_url" name="img_url" value="">
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

    layui.use('form', function(){
        var form = layui.form;
        var layer = layui.layer;
        form.on('submit(add)', function (data) {
            var success = function (res) {
                if (res.code == 1) {
                    layer.msg("修改成功",{time:1000},function(){
                        var index = parent.layer.getFrameIndex(window.name);
                        parent.layer.close(index);
                    });
                } else {
                    layer.msg('修改失败', {time: 1000})
                }
            };
            var data = {
                data: data.field
            };
            app.ajaxRequest("<?php echo tp_url('line/edit'); ?>", 'post', data, '', success);
            return false;
        });
    });

    (function( $ ){
        $(function(){
            var data = {
                'server':"<?php echo tp_url('base/uploadimage'); ?>",
                'fileNumLimit':1
            };
            var success = function(file,res){
                if(res.code == 1){
                    $('#img_url').val(res.data)
                    var layer = layui.layer;
                    layer.msg('上传成功',{icon:1,time:1000})
                }else{
                    var layer = layui.layer;
                    layer.msg('上传失败',{icon:5,time:1000})
                }
            };
            app.upload(data,success);
        });
    })( jQuery );

</script>