<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/9/3
 * Time: 13:10
 */

namespace app\index\model;


class Clubcard
{
    protected $autoWriteTimestamp = true;
    public function do_save_card($data){

        if( array_key_exists("id",$data) ){
            $this->allowField(true)->isUpdate(true)->save($data,['id'=>$data['id'] ]);
        }else{
            $this->allowField(true)->save($data);
        }

        if($this->id > 0){
            return message(1,'success','');
        }else{
            return message(0,'error','');
        }
    }
}