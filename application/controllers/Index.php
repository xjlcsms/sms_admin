<?php

class IndexController extends \Base\ApplicationController
{

    public function indexAction()
    {
//        $business = \Business\Smser::getInstance();
//        $business->setMobiles('13950894896,13606061652');
//        $business->setSign('信嘉联创');
//        $business->setContent('你的验证码是：1234');
//        $res = $business->send('kuizhan2');
//        var_dump($res);
        $business = \Business\Pull::getInstance();
        $res = $business->get('kuizhan2');
        if(!$res){
            var_dump($business->getMessage());
        }else{
            var_dump($res);
        }
    }




}
