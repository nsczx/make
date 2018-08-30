<?php if (!defined('THINK_PATH')) exit(); /*a:5:{s:111:"F:\phpstudy\PHPTutorial\WWW\we7\addons\make_xyx\core\public/../application/index\view\appointment\del_list.html";i:1535623245;s:94:"F:\phpstudy\PHPTutorial\WWW\we7\addons\make_xyx\core\application\index\view\common\layout.html";i:1535533633;s:92:"F:\phpstudy\PHPTutorial\WWW\we7\addons\make_xyx\core\application\index\view\common\head.html";i:1535533612;s:92:"F:\phpstudy\PHPTutorial\WWW\we7\addons\make_xyx\core\application\index\view\common\menu.html";i:1535619620;s:94:"F:\phpstudy\PHPTutorial\WWW\we7\addons\make_xyx\core\application\index\view\common\footer.html";i:1535438089;}*/ ?>
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
    <div class="layui-row">
        <form class="layui-form layui-col-md12 x-so">
            <input class="layui-input" placeholder="开始日" name="start" id="start" autocomplete="off">
            <input class="layui-input" placeholder="截止日" name="end" id="end" autocomplete="off">
            <input type="text" name="username"  placeholder="请输入用户名" autocomplete="off" class="layui-input">
            <button class="layui-btn"  lay-submit="" lay-filter="sreach"><i class="layui-icon">&#xe615;</i></button>
        </form>
    </div>
    <xblock>
        <button class="layui-btn layui-btn-danger" onclick="delAll()"><i class="layui-icon"></i>批量删除</button>
        <button class="layui-btn " onclick="restore()"><i class="layui-icon">&#xe666;</i>批量还原</button>
    </xblock>
    <table class="layui-table">
        <thead>
        <tr>
            <th>
                <div class="layui-unselect header layui-form-checkbox" lay-skin="primary"><i class="layui-icon">&#xe605;</i></div>
            </th>
            <th>ID</th>
            <th>用户名</th>
            <th>联系人</th>
            <th>联系电话</th>
            <th>备注</th>
            <th>出发日期</th>
            <th>预约时间</th>
            <th>状态</th>
            <th>操作</th>
        </thead>
        <tbody>
        <?php foreach($res as $v): ?>
        <tr>
            <td>
                <div id="userid" class="layui-unselect layui-form-checkbox" lay-skin="primary" data-id=<?php echo $v['id']; ?>><i class="layui-icon">&#xe605;</i></div>
            </td>
            <td><?php echo $v['id']; ?></td>
            <td>23423</td>
            <td>刘德华</td>
            <td><?php echo $v['phone']; ?></td>
            <td><?php echo $v['remark']; ?></td>
            <td><?php echo date("Y-m-d",$v['depart_time']); ?></td>
            <td><?php echo date("Y-m-d H:i:s",$v['create_time']); ?></td>
            <td class="td-status"><?php echo app_status($v['status']); ?></td>
            <td class="td-manage">
                <a  onclick="x_admin_show('详情资料','<?php echo tp_url('appointment/datum',['id'=>$v['id']]); ?>','1000','700')" href="javascript:;"  title="详情">
                    <i class="layui-icon">&#xe63c;</i>
                </a>
                <a title="还原" onclick="restore_one(this,<?php echo $v['id']; ?>)" href="javascript:;">
                    <i class="layui-icon">&#xe666;</i>
                </a>
                <a title="删除" onclick="member_del(this,<?php echo $v['id']; ?>)" href="javascript:;">
                    <i class="layui-icon">&#xe640;</i>
                </a>
            </td>
        </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
    <div class="page">
        <?php echo $res->render(); ?>
    </div>
</div>

<script>

    function member_del(obj,id){

        layer.confirm('确认要删除吗？',function(index){
            var success = function(res){
                if(res.code == 1){
                    $(obj).parents("tr").remove();
                    layer.msg('已删除!',{icon:1,time:1000});
                }else{
                    layer.msg('删除失败!',{icon:1,time:1000});
                }
                return;
            }
            var data = {id:id}
            app.ajaxRequest("<?php echo tp_url('appointment/delAll'); ?>",'post',data,'',success);
        });
    }


    function delAll (argument) {

        var data = tableCheck.getData();
        var len = data.length;
        var data ={id:data};
        layer.confirm('确认要删除所选的'+len+'位用户吗？',function(index){
            var success = function(res){
                if(res.code == 1){
                    layer.msg('删除成功', {icon: 1});
                    $(".layui-form-checked").not('.header').parents('tr').remove();
                    return;
                }else{
                    layer.msg('删除失败!',{icon:1,time:1000});
                }
                return false;
            };

            app.ajaxRequest("<?php echo tp_url('appointment/delAll'); ?>",'get',data,'',success);

        });
    }

    function restore_one(obj,id){
        var data = {id:id};
        layer.confirm('是否恢复？',function(index){
            var success = function(res){
                if(res.code == 1){
                    $(obj).parents("tr").remove();
                    layer.msg('已恢复!',{icon:1,time:1000});
                    return;
                }else{
                    layer.msg('恢复失败!',{icon:1,time:1000});
                }
                return false;
            }
            app.ajaxRequest("<?php echo tp_url('appointment/restore_order'); ?>",'post',data,'',success)
        });
    }

    function restore (argument) {

        var data = tableCheck.getData();
        if(data.length < 1) {
            return;
        }
        layer.confirm('是否恢复？',function(index){
            $.ajax({
                url: "<?php echo tp_url('appointment/restore_order'); ?>",
                data:{
                    id:data
                },
                dataType:'json',
                success:function(res){
                    if(res.code == 1){
                        layer.msg('恢复成功', {icon: 1});
                        $(".layui-form-checked").not('.header').parents('tr').remove();
                        return;
                    }else{
                        layer.msg('恢复失败!',{icon:1,time:1000});
                    }
                    return false;
                },
                error:function(){
                    layer.msg('请求服务器失败!',{icon:1,time:1000});
                }
            })
        });
    }

</script>

                </div>
            </div>
        </div>
    </div>
    <div class="page-content-bg"></div>

</body>
</html>