<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:108:"F:\phpstudy\PHPTutorial\WWW\we7\addons\make_xyx\core\public/../application/index\view\appointment\datum.html";i:1535621004;}*/ ?>

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
    <script type="text/javascript" src="/we7/addons/make_xyx/core/public/static/index/js/common.js"></script>

    <style>
        .label-width{
            width:90px;
        }
    </style>
</head>
<body class="layui-layout-body">
<div class="x-body">

        <div class="layui-form-item">
            <label  class="layui-form-label label-width">
                <span class="x-red"></span>用户名
            </label>
            <div class="layui-input-inline" style="padding-top: 11px">
                <span style="padding-left:10px;"><?php echo $re['userinfo']['nick_name']; ?></span>
            </div>
        </div>
        <div class="layui-form-item">
            <label  class="layui-form-label label-width">
                <span class="x-red"></span>联系人
            </label>
            <div class="layui-input-inline">
                <input type="text"  name="attn" required=""
                       autocomplete="off" class="layui-input" value="<?php echo $re['attn']; ?>">
            </div>
        </div>
        <div class="layui-form-item">
            <label class="layui-form-label label-width">
                <span class="x-red"></span>联系电话
            </label>
            <div class="layui-input-inline" >
                <input type="text"  name="phone" required=""
                       autocomplete="off" class="layui-input" value="<?php echo $re['phone']; ?>">
            </div>
        </div>
        <div class="layui-form-item">
            <label  class="layui-form-label label-width">
                <span class="x-red"></span>真实姓名
            </label>
            <div class="layui-input-inline" style="padding-top: 11px">
                <span style="padding-left:10px;"><?php echo $re['userinfo']['name']; ?></span>
            </div>
        </div>
        <div class="layui-form-item">
            <label  class="layui-form-label label-width">
                <span class="x-red"></span>身份证号
            </label>
            <div class="layui-input-inline" style="padding-top: 11px">
                <span style="padding-left:10px;"><?php echo $re['userinfo']['ID_card']; ?></span>
            </div>
        </div>
        <div class="layui-form-item">
            <label  class="layui-form-label label-width">
                <span class="x-red"></span>备注
            </label>
            <div class="layui-input-inline">
                <textarea name="remark" id="" cols="30" rows="10" ><?php echo $re['remark']; ?></textarea>
            </div>
        </div>
        <div class="layui-form-item">
            <label  class="layui-form-label label-width" >
                <span class="x-red"></span>出发时间
            </label>
            <div class="layui-input-inline">
                <input type="text"  id="start" name="depart_time" required=""
                       autocomplete="off" class="layui-input" value="<?php echo date('Y-m-d',$re['depart_time']); ?>">
            </div>
        </div>
        <div class="layui-form-item">
            <label  class="layui-form-label label-width" >
                <span class="x-red"></span>预约时间
            </label>
            <div class="layui-input-inline" style="padding-top: 11px">
                <span style="padding-left:10px;"><?php echo date("Y-m-d H-i-s",$re['create_time']); ?></span>
            </div>
        </div>
        <?php if($re['update_time']): ?>
        <div class="layui-form-item">
            <label  class="layui-form-label label-width" >
                <span class="x-red"></span>修改时间
            </label>
            <div class="layui-input-inline" style="padding-top: 11px">
                <span style="padding-left:10px;"><?php echo date("Y-m-d H-i-s",$re['update_time']); ?></span>
            </div>
        </div>
        <?php endif; ?>

</div>
<script>
    layui.use('laydate', function(){
        var laydate = layui.laydate;

        //执行一个laydate实例
        laydate.render({
            elem: '#start', //指定元素
            type: 'date'
        });

    });


</script>
</body>
</html>