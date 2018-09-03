<?php
/**
 * User: Administrator
 */

namespace app\index\model;


class Homeicon extends  Base
{
    protected $autoWriteTimestamp = true;
    public function do_add($data){
        if(array_key_exists('status',$data)){
            $data['status'] = 1;
        }else{
            $data['status'] = 2;
        }
        $this->allowField(true)->save($data);
        if($this->id > 0 ){
            return message(1,'success','');
        }else{
            return message(0,'error','');
        }
    }

    public function do_change($data){
        ($data['status'] == 1)?$data['status']=2:$data['status']=1;
        $this->allowField(true)->isUpdate(true)->save(['status'=>$data['status']],['id'=>$data['id']]);
        if( $this->id >0 ){
            return message(1,'success','');
        }
            return message(0,'error','');

    }
}