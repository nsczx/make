<?php
/**
 * User: Administrator
 */

namespace app\index\controller;
use think\Request;
use think\Db;

class Homeicon  extends Base
{
    private $model;
    public function _initialize()
    {
       $this->model = model('homeicon');
    }

    public function lst()
    {
        $res = Db::name('homeicon')->order('sort','desc')->paginate(10);
        return $this->fetch('',[
            'res' => $res
        ]);
    }

    public function add(Request $request){
        if($request->isAjax()){
            $data = $request ->post();
            $re = $this->model->do_add($data);
            return $re;
        }
        return $this->fetch();
    }

    public function change_status(Request $request){
        if($request->isAjax()){
            $data = $request->param();
            $re = $this->model->do_change($data);
            return $re;
        }
    }
}