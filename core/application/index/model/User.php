<?php
namespace app\index\model;
use think\Model;

class User extends Model
{
    protected $autoWriteTimestamp = true;

    /**
     * @param $data
     * @return mixed
     * 保存编辑用户信息
     */
    public function save_edit_user($data){
        $updata = [];
        foreach($data as $k=>$v){
            $updata = $v;
        }
        if(!empty($updata['turn_on_time']) && !empty($updata['end_time'])){
            $updata['turn_on_time'] = strtotime($updata['turn_on_time']);
            $updata['end_time'] = strtotime($updata['end_time']);
        }

        $res = $this->allowField(true)->save($updata,['id'=>$updata['id']]);
        if( $res > 0 ){
            return json(['code'=>1,'msg'=>'success']);
        }else{
            return json(['code'=>0,'msg'=>'error']);
        }
    }

    /**查询用户列表数据**/
    public function select_user($page=10){

        $where = [
            'status'=>['neq',2]
        ];
        $order = [
            'id'    => 'desc'
        ];
        $res = $this->where($where)->order($order)->paginate($page);
        return $res;
    }

    /**更改用户状态**/
    public function do_change($data){
        $data['status'] == 1? $data['status']=3 :$data['status']=1;
        $key = [
            'id' => $data['id'],
        ];
        $res = $this->save(['status'=>$data['status']],$key);

        if($res > 0){
            return json(['code'=>1,'msg'=>'success']);
        }else{
            return json(['code'=>0,'msg'=>'error']);
        }
    }

    /**批量删除**/
    public function do_delAll($data){
        $ids = [];
        if(!empty($data)){
            foreach ($data as $v){
                $ids = $v;
            }
            $res = $this->destroy($ids);
            if($res > 0){
                return json(['code'=>1,'msg'=>'success']);
            }else{
                return json(['code'=>0,'msg'=>'error']);
            }

        }

        return false;
    }
}