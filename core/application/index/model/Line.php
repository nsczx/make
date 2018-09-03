<?php
namespace app\index\model;


class Line extends Base
{
    protected $autoWriteTimestamp = true;

    public function do_save_edit($data){

        $data = $data['data'];
        $re = $this->find($data['id']);

        if($data['img_url']){
            $path = '../public/static/'.$re['img_url'];
            if(is_file($path)){
                unlink($path);
            }
            $res = $this->allowField(true)
                ->isUpdate(true)
                ->save($data,['id'=>$data['id'] ]);
            if($res >0){
                return message(1,'success','');
            }else{
                return message(0,'error','');
            }
        }else{
            $updata = [
                'title' =>$data['title'],
                'img_url' => $re['img_url']
            ];
            $res = $this->allowField(true)
                ->isUpdate(true)
                ->save($updata,['id'=>$data['id'] ]);

            if($res >0){
                return message(1,'success','');
            }else{
                return message(0,'error','');
            }
        }
    }

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

    public function do_del_lin($data){

        if(!empty($data)){
            $re = $this->find($data['id']);
            if($re['img_url']) {
                $path = '../public/static/' . $re['img_url'];
                if (is_file($path)) {
                    unlink($path);
                }
                $res = $this->destroy($data['id']);
                if ($res > 0) {
                    return message(1, 'success', '');
                } else {
                    return message(0, 'error', '');
                }
            }

        }
    }

    public function change_status($data){
        ($data['status'] == 1) ? $data['status'] = 2:$data['status'] = 1;
        $re = $this->allowField(true)
            ->isUpdate(true)
            ->save(['status'=>$data['status']],['id'=>$data['id']]);
        if($re > 0 ){
            return message(1,'success','');
        }else{
            return message(0,'error','');
        }
    }


}