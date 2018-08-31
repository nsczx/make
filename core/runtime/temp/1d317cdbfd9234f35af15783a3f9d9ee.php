<?php if (!defined('THINK_PATH')) exit(); /*a:5:{s:101:"F:\phpstudy\PHPTutorial\WWW\we7\addons\make_xyx\core\public/../application/index\view\scenic\lst.html";i:1535702808;s:94:"F:\phpstudy\PHPTutorial\WWW\we7\addons\make_xyx\core\application\index\view\common\layout.html";i:1535533633;s:92:"F:\phpstudy\PHPTutorial\WWW\we7\addons\make_xyx\core\application\index\view\common\head.html";i:1535533612;s:92:"F:\phpstudy\PHPTutorial\WWW\we7\addons\make_xyx\core\application\index\view\common\menu.html";i:1535702674;s:94:"F:\phpstudy\PHPTutorial\WWW\we7\addons\make_xyx\core\application\index\view\common\footer.html";i:1535438089;}*/ ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>layout 后台大布局 - Layui</title>
    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon" />
    <link rel="stylesheet" href="/we7/addons/make_xyx/core/public/static/index/css/font.css">
    <link rel="stylesheet" href="/we7/addons/make_xyx/core/public/static/index/css/xadmin.css">
    <script type="text/javascript" src="/we7/addons/make_xyx/core/public/static/index/lib/jquery/jquery.min.js"></script>
    <script src="/we7/addons/make_xyx/core/public/static/index/lib/layui/layui.js" charset="utf-8"></script>
    <script type="text/javascript" src="/we7/addons/make_xyx/core/public/static/index/js/xadmin.js"></script>
    <script src="/we7/addons/make_xyx/core/public/static/index/js/common.js" charset="utf-8"></script>
</head>
<body class="layui-layout-body">
<div class="container">
    <div class="logo"><a href="./index.html">后台管理</a></div>
    <div class="left_open">
        <i title="展开左侧栏" class="iconfont">&#xe699;</i>
    </div>
    <ul class="layui-nav left fast-add" lay-filter="">
        <li class="layui-nav-item">
            <a href="javascript:;">+新增</a>
            <dl class="layui-nav-child"> <!-- 二级菜单 -->
                <dd><a onclick="x_admin_show('资讯','http://www.baidu.com')"><i class="iconfont">&#xe6a2;</i>资讯</a></dd>
                <dd><a onclick="x_admin_show('图片','http://www.baidu.com')"><i class="iconfont">&#xe6a8;</i>图片</a></dd>
                <dd><a onclick="x_admin_show('用户','http://www.baidu.com')"><i class="iconfont">&#xe6b8;</i>用户</a></dd>
            </dl>
        </li>
    </ul>
    <ul class="layui-nav right" lay-filter="">
        <li class="layui-nav-item">
            <a href="javascript:;">admin</a>
            <dl class="layui-nav-child"> <!-- 二级菜单 -->
                <dd><a onclick="x_admin_show('个人信息','http://www.baidu.com')">个人信息</a></dd>
                <dd><a onclick="x_admin_show('切换帐号','http://www.baidu.com')">切换帐号</a></dd>
                <dd><a href="./login.html">退出</a></dd>
            </dl>
        </li>
        <li class="layui-nav-item to-index"><a href="/">前台首页</a></li>
    </ul>
</div>



<div class="left-nav" style="height:100%;">
    <div id="side-nav">
        <ul id="nav">
            <li>
                <a href="javascript:;">
                    <i class="iconfont">&#xe6b8;</i>
                    <cite>会员管理</cite>
                    <i class="iconfont nav_right">&#xe697;</i>
                </a>
                <ul class="sub-menu">
                    <li>
                        <a href="<?php echo tp_url('user/lst'); ?>">
                            <i class="iconfont">&#xe6a7;</i>
                            <cite>会员列表</cite>
                        </a>
                    </li >
                    <li>
                        <a href="<?php echo tp_url('user/del_list'); ?>">
                            <i class="iconfont">&#xe6a7;</i>
                            <cite>会员删除</cite>

                        </a>
                    </li>
                    <li>
                        <a href="<?php echo tp_url('clubcard/index'); ?>">
                            <i class="iconfont">&#xe6a7;</i>
                            <cite>会员卡管理</cite>
                        </a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="javascript:;">
                    <i class="iconfont">&#xe723;</i>
                    <cite>预约管理</cite>
                    <i class="iconfont nav_right">&#xe697;</i>
                </a>
                <ul class="sub-menu">
                    <li>
                        <a href="<?php echo tp_url('appointment/lst'); ?>">
                            <i class="iconfont ">&#xe6a7;</i>
                            <cite>预约列表</cite>
                        </a>
                    </li >
                    <li>
                        <a href="<?php echo tp_url('appointment/del_list'); ?>">
                            <i class="iconfont ">&#xe6a7;</i>
                            <cite>预约删除</cite>
                        </a>
                    </li >
                </ul>
            </li>
            <li>
                <a href="javascript:;">
                    <i class="iconfont">&#xe723;</i>
                    <cite>景点管理</cite>
                    <i class="iconfont nav_right">&#xe697;</i>
                </a>
                <ul class="sub-menu">
                    <li>
                        <a href="<?php echo tp_url('scenic/lst'); ?>">
                            <i class="iconfont">&#xe6a7;</i>
                            <cite>分类列表</cite>
                        </a>
                    </li >
                </ul>
            </li>
            <li>
                <a href="javascript:;">
                    <i class="iconfont">&#xe723;</i>
                    <cite>轮播图</cite>
                    <i class="iconfont nav_right">&#xe697;</i>
                </a>
                <ul class="sub-menu">
                    <li>
                        <a href="<?php echo tp_url('index/lst'); ?>">
                            <i class="iconfont">&#xe6a7;</i>
                            <cite>轮播图列表</cite>
                        </a>
                    </li >
                </ul>
            </li>
            <li>
            <li>
                <a href="javascript:;">
                    <i class="iconfont">&#xe723;</i>
                    <cite>订单管理</cite>
                    <i class="iconfont nav_right">&#xe697;</i>
                </a>
                <ul class="sub-menu">
                    <li>
                        <a _href="order-list.html">
                            <i class="iconfont">&#xe6a7;</i>
                            <cite>订单列表</cite>
                        </a>
                    </li >
                </ul>
            </li>
            <li>
                <a href="javascript:;">
                    <i class="iconfont">&#xe6b4;</i>
                    <cite>预约景点</cite>
                    <i class="iconfont nav_right">&#xe697;</i>
                </a>
                <ul class="sub-menu">
                    <li>
                        <a _href="unicode.html">
                            <i class="iconfont">&#xe6a7;</i>
                            <cite>景点列表</cite>
                        </a>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
</div>


    <div class="page-content">
        <div class="layui-tab tab" lay-filter="xbs_tab" lay-allowclose="false">
            <div class="layui-tab-content">
                <div class="layui-tab-item layui-show">
                    <div class="x-nav">
                        <a class="layui-btn layui-btn-small" style="line-height:1.6em;margin-top:3px;float:right" href="javascript:location.replace(location.href);" title="刷新">
                            <i class="layui-icon" style="line-height:30px">ဂ</i></a>
                    </div>
                    <div class="x-body">
    <xblock>
    <button class="layui-btn layui-btn-radius" onclick="x_admin_show('添加分类','<?php echo tp_url('scenic/add'); ?>',1000,700)">添加分类</button>
    </xblock>
    <table class="layui-table">
    <thead>
    <tr>

        <th>ID</th>
        <th>标题</th>
        <th>图片</th>
        <th>添加时间</th>
        <th>状态</th>
        <th>操作</th>
    </thead>
    <tbody>

    <tr>
        <td>id</td>
        <td>标题</td>
        <td><img alt="" width="50px" height="50px" src="https://bpic.588ku.com/illus_water_img/18/08/22/1cb29a2217107caad949763cf111e9fa.jpg!/watermark/url/L3dhdGVyL3dhdGVyX2JhY2tfNDAwXzIwMC5wbmc=/repeat/true" ></td>
        <td>添加时间</td>

        <td class="td-status">状态</td>
        <td class="td-manage">
            <a onclick="member_change(this)" href="javascript:;"  title="点击更改状态">
                <i class="layui-icon">&#xe601;</i>
            </a>
            <a  onclick="x_admin_show('详情','<?php echo tp_url('user/datum'); ?>','800','500')" href="javascript:;"  title="用户详情">
                <i class="layui-icon">&#xe63c;</i>
            </a>
            <a title="编辑"  onclick="x_admin_show('编辑','<?php echo tp_url('user/edit'); ?>','800','500')" href="javascript:;">
                <i class="layui-icon">&#xe642;</i>
            </a>
            <a title="删除" onclick="member_del(this)" href="javascript:;">
                <i class="layui-icon">&#xe640;</i>
            </a>
        </td>
    </tr>
    </tbody>
</table>
</div>
                </div>
            </div>
        </div>
    </div>
    <div class="page-content-bg"></div>

</body>
</html>