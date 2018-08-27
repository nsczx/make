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

    public function lst(){
        $res = Db::name('user')->paginate(1);
        $count = Db::name('user')->count();


        return $this->fetch('',[
            'res' => $res,
            'count'=>$count,
        ]);
    }

    public function add(){

        return $this->fetch();
    }

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
}