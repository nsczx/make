<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006-2016 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: 流年 <liu21st@gmail.com>
// +----------------------------------------------------------------------

// 应用公共文件

function status($status){
    switch ($status){
        case 1:
            return '<span class="layui-btn layui-btn-radius">正常</span>';
        case 2:
            return '<span class="layui-btn layui-btn-radius layui-btn-normal">删除</span>';
        case 3:
            return '<span class="layui-btn layui-btn-radius layui-btn-warm">禁用</span>';
    }
}