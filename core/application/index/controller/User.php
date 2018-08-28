<?php
namespace app\index\controller;
use think\Db;
use think\Request;
use app\index\model\User as UserModel;

class User  extends Base
{
    private $model;
    public function _initialize()
    {
        $this->model = new UserModel();
    }

    /**用户列表**/
    public function lst(){
        $res = $this->model->select_user();
        $count = Db::name('user')->where('status','neq',2)->count();
        return $this->fetch('',[
            'res' => $res,
            'count'=>$count,
        ]);
    }
    /**将用户状态修改为删除**/
    public function del_user(Request $request){
        if($request->isAjax()){
            $id = $request->param('id');
            $res = $this->model->save(['status'=>2],['id'=>$id]);
            if($res>0){
                return json(['code'=>1,'msg'=>'success']);
            }else{
                return json(['code'=>0,'msg'=>'error']);
            }
        }
        return $this->fetch();
    }

    /**修改用户状态**/
    public function change_status(Request $request){
        if($request->isAjax()){
            $data = $request->param();
            $res = $this->model->do_change($data);
            return $res;
        }
    }
    /**编辑用户信息**/
    public function edit(Request $request){
        $id = $request->param('id');
        $re = Db::name('user')->find($id);

        if($request->isAjax()){
            $data = $request->param();
            $res = $this->model->save_edit_user($data);
            return $res;
        }
        return $this->fetch('',[
            're'  => $re,
        ]);
    }

    /**批量删除用户**/
    public function delAll(Request $request){
        if( $request->isAjax()){
            $data = $request->param();
            $res = $this->model->do_delAll($data);
            return $res;
        }
    }
}