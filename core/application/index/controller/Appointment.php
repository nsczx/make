<?php
namespace app\index\controller;


class Appointment extends Base
{
    public function lst(){
        return $this->fetch();
    }
}