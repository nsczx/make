<?php
/**
 * User: Administrator
 */

namespace app\index\controller;
use think\Request;
use think\Db;
class Clubcard extends Base
{
    private $model;
    public function _initialize()
    {
       $this->model = model('clubcard');
    }

    public function lst(Request $request){

        if( $request->isAjax() ){
            $data = $request->post();
            $re = $this->model->do_save_card($data);
            return $re;
        }
        $re = Db::name('clubcard')->find();

        return $this->fetch('',['re'=>$re]);
    }
}