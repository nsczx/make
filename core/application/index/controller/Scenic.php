<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/8/31
 * Time: 10:22
 */

namespace app\index\controller;
use think\Request;

class Scenic extends Base
{
    private  $model;
    public function _initialize()
    {
        $this->model = model('scenic');
    }

    public function lst(){

        return $this->fetch('',[

        ]);
    }

    public function add(Request $request){
        if($request->isAjax()){
            $data = $request->param();
            $res = $this->model->do_add($data);
            return $res;
        }
        return $this->fetch('',[

        ]);
    }
}