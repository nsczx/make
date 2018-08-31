<?php
namespace app\index\controller;
use think\Db;
use think\Request;


class Appointment extends Base
{

    private $model;
    public function _initialize()
    {
        $this->model = model('appointment');
    }

    public function lst(){
        $res = $this->model->do_query();

        return $this->fetch('',[
            'res' => $res,
        ]);
    }

    public function datum(Request $request){
        $id = $request->param();
        $re = $this->model->getuser_info($id);

        return $this->fetch('',[
            're' => $re
        ]);

    }

    public function edit(Request $request){
        $id = $request->param();
        $re = $this->model->getuser_info($id);

        if( $request->isAjax() ){
            $data = $request->param();
            $res = $this->model->save_edit($data);
            return $res;
        }

        return $this->fetch('',[
            're' => $re
        ]);
    }

    //修改用户状态
    public function change_status(Request $request){
        if($request->isAjax()){
            $data = $request->param();
            $res = $this->model->do_change($data);
            return $res;
        }
    }

    //将状态修改为删除
    public function del_order(Request $request){
        if( $request->isAjax() ){
            $ids = $request->param();
            $re = $this->model->changeAll($ids);
            return $re;
        }
    }

    //批量删除预约
    public function delAll(Request $request){
        if( $request->isAjax()){
            $data = $request->param();
            $res = $this->model->do_delAll($data);
            return $res;
        }
    }

    public function del_list(){
        $where =['status'=>2];
        $res = Db::name('appointment')
            ->where($where)
            ->paginate(10);

        return $this->fetch('',[
            'res' => $res
        ]);
    }

    //还原删除的预约列表
    public function restore_order(Request $request){
        if( $request->isAjax()){
            $data = $request->param();
            $res = $this->model->do_restore($data);
            return $res;
        }
    }
}