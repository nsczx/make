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
    switch (intval($status)){
        case 1:
            return '<span class="layui-btn layui-btn-radius">正常</span>';
        case 2:
            return '<span class="layui-btn layui-btn-radius layui-btn-normal">删除</span>';
        case 3:
            return '<span class="layui-btn layui-btn-radius layui-btn-warm">禁用</span>';
    }
}

function app_status($status){
    switch (intval($status)){
        case 0:
            return '<span class="layui-btn layui-btn-radius layui-btn-normal">未处理</span>';
        case 1:
            return '<span class="layui-btn layui-btn-radius">已处理</span>';
        case 2:
            return '<span class="layui-btn layui-btn-radius layui-btn-warm">删除</span>';
    }
}

function message($code,$message,$data){
    $code == '' ? 1:$code;
    $message == '' ?'success':$message;
    $data == '' ? '':$data;
    $arr = [
        'code' => intval($code),
        'message' => $message,
        'data' => $data
    ];

    return json($arr);
}