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
}