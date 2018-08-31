<?php
namespace app\index\controller;
use think\Controller;

class Base extends Controller
{
    public function _initialize()
    {
        global $_W;
        if(empty($_W['user'])){
            $url = 'http://' . $_SERVER['HTTP_HOST'];
            $this -> redirect($url);
            die;
        }
    }

    public function uploadimage()
    {
        // 获取表单上传文件 例如上传了001.jpg
        $files = request()->file('images');
        // 移动到框架应用根目录/public/uploads/ 目录下
        foreach($files as $file){
            // 移动到框架应用根目录/public/uploads/ 目录下
            $info = $file->move(ROOT_PATH . 'public' . DS . 'uploads');
            if($info){
                return  message(1,'success','uploads'.DS.$info->getSaveName());
            }else{
                return  message(0,'error','uploads'.DS.$info->getSaveName());
            }
        }


    }
}