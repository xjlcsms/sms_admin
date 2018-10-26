<?php

class IndexController extends \Base\ApplicationController
{

    public function indexAction()
    {
//        $business = \Business\Smser::getInstance();
//        $business->setMobiles('13386936061');
//        $business->setSign('cdq');
//        $business->setContent('好像可以');
//        $res = $business->send('kuizhan1');
        $business = \Business\Pull::getInstance();
        $res = $business->get('kuizhan1');
        if(!$res){
            var_dump($business->getMessage());
        }else{
            var_dump($res);
        }
    }




}
