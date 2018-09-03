<?php

namespace app\index\controller;
use think\Db;
use think\Request;


class Banner extends Base
{
    private $model;
    public function _initialize()
    {
        $this->model = model('banner');
    }

    public function lst(){
        $res = Db::name('banner')->order('id','desc')
            ->paginate(10);


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
        return $this->fetch();
    }

    public function edit(){
        $id = input('id');
        $re = Db::name('banner')->find($id);
        if(request()->isAjax()){
            $data = request()->param();
            $re = $this->model->do_save_edit($data);
            return $re;
        }
        return $this->fetch('',[
           're'=>$re
        ]);
    }
        //更改状态
    public function change_status(Request $request){
        if($request->isAjax()){
            $data = $request->param();
            $re = $this->model->do_change_status($data);
            return $re;
        }
    }
    //删除轮播图
    public function del_banner(Request $request){
        if($request->isAjax()){
            $data = $request->param();
            $re = $this->model->do_del_banner($data);
            return $re;
        }
    }

    public function change_sort(){
        if(request()->isAjax()){
            $data = request()->param();
            $res = do_change_sort($data,'banner');
            return $res;
        }
    }


}