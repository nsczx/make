<?php
namespace app\index\model;


class Scenic extends Base
{
    protected $autoWriteTimestamp = true;
    public function do_add($data){

        $data = [
            'title' => $data['title'],
            'img_url'=> $data['img_path']
        ];

        $this->allowField(true)->save($data);
        if( $this->id > 0 ){
            return message(1,'success','');
        }else{
            return message(0,'error','');
        }
    }
}