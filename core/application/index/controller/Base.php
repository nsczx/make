<?php
namespace app\index\controller;
use think\Controller;
use think\Db;

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

        $files = request()->file('images');
        foreach($files as $file){
            $info = $file->move(ROOT_PATH . 'public' . DS .'static'.DS. 'uploads');
            if($info){
                return  message(1,'success','uploads'.DS.$info->getSaveName());
            }else{
                return  message(0,'error','uploads'.DS.$info->getSaveName());
            }
        }
    }


}