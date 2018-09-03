<?php if (!defined('THINK_PATH')) exit(); /*a:5:{s:101:"F:\phpstudy\PHPTutorial\WWW\we7\addons\make_xyx\core\public/../application/index\view\banner\lst.html";i:1535971908;s:94:"F:\phpstudy\PHPTutorial\WWW\we7\addons\make_xyx\core\application\index\view\common\layout.html";i:1535959333;s:92:"F:\phpstudy\PHPTutorial\WWW\we7\addons\make_xyx\core\application\index\view\common\head.html";i:1535533612;s:92:"F:\phpstudy\PHPTutorial\WWW\we7\addons\make_xyx\core\application\index\view\common\menu.html";i:1535973614;s:94:"F:\phpstudy\PHPTutorial\WWW\we7\addons\make_xyx\core\application\index\view\common\footer.html";i:1535438089;}*/ ?>
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
                        <a href="<?php echo tp_url('line/lst'); ?>">
                            <i class="iconfont">&#xe6a7;</i>
                            <cite>分类列表</cite>
                        </a>
                    </li >
                </ul>
            </li>
            <li>
                <a href="javascript:;">
                    <i class="iconfont">&#xe723;</i>
                    <cite>其他设置</cite>
                    <i class="iconfont nav_right">&#xe697;</i>
                </a>
                <ul class="sub-menu">
                    <li>
                        <a href="<?php echo tp_url('Clubcard/lst'); ?>">
                            <i class="iconfont">&#xe6a7;</i>
                            <cite>秀程卡设置</cite>
                        </a>
                    </li >
                    <li>
                        <a href="<?php echo tp_url('homeicon/lst'); ?>">
                            <i class="iconfont">&#xe6a7;</i>
                            <cite>首页图标设置</cite>
                        </a>
                    </li >
                    <li>
                        <a href="<?php echo tp_url('Banner/lst'); ?>">
                            <i class="iconfont">&#xe6a7;</i>
                            <cite>轮播图设置</cite>
                        </a>
                    </li >
                    <li>
                        <a href="<?php echo tp_url('cardpas/card_lst'); ?>">
                            <i class="iconfont">&#xe6a7;</i>
                            <cite>卡密生成</cite>
                        </a>
                    </li >
                </ul>
            </li>
        </ul>
    </div>
</div>


    <div class="page-content" style="height:100%;">
        <div class="layui-tab tab" lay-filter="xbs_tab" lay-allowclose="false">
            <div class="layui-tab-content">
                <div class="layui-tab-item layui-show">
                    <div class="x-nav">
                        <a class="layui-btn layui-btn-small" style="line-height:1.6em;margin-top:3px;float:right" href="javascript:location.replace(location.href);" title="刷新">
                            <i class="layui-icon" style="line-height:30px">ဂ</i></a>
                    </div>
                    <div class="x-body">
    <xblock>
        <button class="layui-btn layui-btn-radius" onclick="x_admin_show('添加分类','<?php echo tp_url('banner/add'); ?>',1200,800)">添加分类</button>
    </xblock>
    <table class="layui-table layui-form">
        <thead>
        <tr>

            <th>ID</th>
            <th>标题</th>
            <th>轮播图片</th>
            <th width="20%">链接</th>
            <th>添加时间</th>
            <th width="5%">排序</th>
            <th>状态</th>
            <th>操作</th>
        </thead>
        <tbody>
        <?php foreach($res as $v): ?>
        <tr>
            <td><?php echo $v['id']; ?></td>
            <td><?php echo $v['title']; ?></td>
            <td><img alt="" width="50px" height="60px" src="/we7/addons/make_xyx/core/public/static/<?php echo $v['img_url']; ?>" ></td>
            <td><a href="<?php echo $v['href']; ?>"><?php echo $v['href']; ?></a></td>
            <td><?php echo date("Y-m-d   H:i",$v['create_time']); ?></td>
            <td><input type="text"  value="<?php echo $v['sort']; ?>" name="sort" attr-id="<?php echo $v['id']; ?>" size="3px"></td>
            <td>
                <input type="checkbox" name="status"  attr-id="<?php echo $v['id']; ?>" lay-text="开启|停用"  value="<?php echo $v['status']; ?>"
                       <?php if($v['status'] == 1): ?> checked="" <?php endif; ?> lay-skin="switch" lay-filter="status" >
            </td>
            <td class="td-manage">
                <a title="编辑"  onclick="x_admin_show('编辑','<?php echo tp_url('banner/edit',['id'=>$v['id']]); ?>','1000','800')" href="javascript:;">
                    <i class="layui-icon">&#xe642;</i>
                </a>
                <a title="删除" onclick="banner_del(this,<?php echo $v['id']; ?>)" href="javascript:;">
                    <i class="layui-icon">&#xe640;</i>
                </a>
            </td>
        </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
</div>
<script>
    function banner_del(obj,id){
        layer.confirm('确认要删除吗？',function(index){
            var success = function(res){
                if(res.code == 1){
                    $(obj).parents("tr").remove();
                    layer.msg('已删除!',{icon:1,time:1000});
                }else{
                    layer.msg('删除失败!',{icon:1,time:1000});
                }
            };
            var data = {id:id}
            app.ajaxRequest("<?php echo tp_url('banner/del_banner'); ?>",'post',data,'',success);
        })
    };
    layui.use('form',function(){
        var form = layui.form;
        form.on('switch(status)', function(data){
            var data = {
                'status' :data.value,
                'id' : $(this).attr("attr-id")
            };

            var success = function( res ){
                if(res.code == 1){
                    layer.msg('更新成功',{time:1000});
                }else{
                    layer.msg('更新失败',{time:1000});
                }
            };
            app.ajaxRequest("<?php echo tp_url('banner/change_status'); ?>",'get',data,'',success);
        });
    })

    $('input[name=sort]').blur(function(){
        var sort = $(this).val();
        var success = function( res ){
            if(res.code == 1){
                layer.msg('更新成功',{time:1000});
            }
        };
        if(sort){
            var data = {
                'id' : $(this).attr('attr-id'),
                'sort':sort
            };
            app.ajaxRequest("<?php echo tp_url('banner/change_sort'); ?>",'get',data,'',success);
        }
    })


</script>
                </div>
            </div>
        </div>
    </div>
    <div class="page-content-bg"></div>

</body>
</html>