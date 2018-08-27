<?php
namespace app\index\model;
use think\Model;

class User extends Model
{
    protected $autoWriteTimestamp = true;
    public function save_edit_user($data){

        foreach($data as $k=>$v){
            $updata = $v;
        }

        $this->allowField(true)->save($updata,['id'=>$updata['id']]);
        if($this->id > 0 ){
            return json(['status'=>'success','code'=>200,'data'=>'']);
        }else{
            return json(['status'=>'error','code'=>400,'data'=>'']);
        }

    }
}