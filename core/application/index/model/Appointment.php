<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/8/30
 * Time: 10:54
 */

namespace app\index\model;


class Appointment extends Base
{
    protected $autoWriteTimestamp = true;
    public function userinfo(){
        return $this->hasOne('user','appointment_id','id')
                    ->field('id,nick_name,name,ID_card,appointment_id');

    }
    //获取正常状态列表
    public function do_query(){
        $where=['status'=>['neq',2] ];
        $res = $this->with(['userinfo'])
            ->where($where)
            ->paginate(10);
        return $res;
    }

    //获取编辑用户信息
    public static function getuser_info($id){
        $re = self::with(['userinfo'])
            ->find($id)
            ->toArray();
        return $re;
    }

    //更改编辑信息
    public function save_edit($data){
        $data['depart_time'] = strtotime($data['depart_time']);
        $re = $this->allowField(true)->update($data,['id'=>$data['id']]);
        if($re){
            return message(1,'success','');
        }else{
            return message(0,'error','');
        }
    }

    //更改用户状态
    public function do_change($data){
        if($data['status'] == 0){
            $data['status'] = 1;
        }else{
            $data['status'] = 0;
        }
        $key = [
            'id' => $data['id'],
        ];

        $res = $this->allowField(true)->update(['status'=>$data['status']],$key);

        if($res){
            return message(1,'success','');
        }else{
            return message(0,'error','');
        }
    }

    //将用户状态批量修改为删除
    public function changeAll($ids){
        if(is_array($ids)){
            foreach ($ids as $k=>$v){
                $id = $v;
            }

            if(count($id) > 1){
                $ids = implode(',',$id);
            }else{
                $ids = $id;
            }

            $where = [
                'id' =>['in',$ids]
            ];
            $res = $this->allowField(true)->where($where)->update(['status'=>2]);

            if($res>0){
                return message(1,'success','');
            }else{
                return message(0,'error','');
            }
        }
    }

    //批量删除
    public function do_delAll($data){
        $ids = [];
        if(!empty($data)){
            foreach ($data as $v){
                $ids = $v;
            }
            $res = $this->destroy($ids);
            if($res > 0){
                return message(1,'success','');
            }else{
                return message(0,'error','');
            }

        }
        return false;
    }

    //恢复删除预约
    public function do_restore($ids){
        if( is_array($ids) ){
            foreach ($ids as $k=>$v){
                $id = $v;
            }

            if(count($id) > 1){
                $ids = implode(',',$id);
            }else{
                $ids = $id;
            }

        }

        $where = [
            'id' =>['in',$ids]
        ];

        $res = $this->where($where)->update(['status'=>1]);

        if($res>0){
            return json(['code'=>1,'msg'=>'success']);
        }else{
            return json(['code'=>0,'msg'=>'error']);
        }
    }
}