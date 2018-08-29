<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:101:"F:\phpstudy\PHPTutorial\WWW\we7\addons\make_xyx\core\public/../application/index\view\user\datum.html";i:1535529208;}*/ ?>

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
    <div class="layui-form-item">
        <label  class="layui-form-label label-width">
            <span class="x-red"></span>用户名
        </label>
        <div class="layui-input-inline">
            <input type="text"
                   autocomplete="off" class="layui-input" value="<?php echo $re['nick_name']; ?>">
        </div>
    </div>
    <div class="layui-form-item">
        <label for="phone" class="layui-form-label label-width">
            <span class="x-red">*</span>头像
        </label>
        <div class="layui-input-inline">
            <img width="50px" height="50px"  src="http://pic108.huitu.com/res/20180719/1301968_20180719085940092080_1.jpg" alt="">
        </div>
    </div>
    <div class="layui-form-item">
        <label for="phone" class="layui-form-label label-width">
            <span class="x-red">*</span>等级
        </label>
        <div class="layui-input-inline">
            <input type="text" id="phone" name="phone" required="" lay-verify="phone"
                   autocomplete="off" class="layui-input" value="<?php echo $re['phone']==1?'会员':'普通'; ?>">
        </div>
    </div>
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

</div>
<script>
</script>
</body>
</html>