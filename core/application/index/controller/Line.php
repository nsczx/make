<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/8/31
 * Time: 10:22
 */

namespace app\index\controller;
use think\Request;
use think\Db;

class Line extends Base
{
    private  $model;
    public function _initialize()
    {
        $this->model = model('line');
    }

    public function lst(){
        $res = Db::name('line')->order('id','desc')->paginate(10);
        return $this->fetch('',[
            'res' => $res
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

    public function edit(Request $request){
        if($request->isAjax()){
            $data = $request->param();
            $re = $this->model->do_save_edit($data);
            return $re;
        }
        $data = $request->param('id');
        $re = Db::name('line')->find($data);
        return $this->fetch('',[
            're' => $re
        ]);
    }

    public function del_line(Request $request){
        if( $request->isAjax()){
            $data = $request->param();
            $res = $this->model->do_del_lin($data);
            return $res;
        }
    }

    public function change_status(Request $request){
        if( $request->isAjax() ){
            $data = $request->param();
            $res = $this->model->change_status($data);
            return $res;
        }
    }

    public function change_sort(){
        if(request()->isAjax()){
            $data = request()->param();
            $res = do_change_sort($data,'line');
            return $res;
        }
    }

}