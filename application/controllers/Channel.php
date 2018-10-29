<?php
/**
 * Created by PhpStorm.
 * User: Viter
 * Date: 2018/10/29
 * Time: 21:58
 */
class ChannelController extends \Base\ApplicationController{

    /**通道列表
     * @throws Exception
     */
    public function indexAction(){
        $mapper = \M\Mapper\SmsChannel::getInstance();
        $where = array();
        $name = $this->getParam('name','','string');
        if($name){
            $where['key'] = $name;
        }
        $this->assign('name',$name);
        $select = $mapper->select();
        $select->where($where);
        $select->order(array('createTime desc'));
        $page = $this->getParam('page', 1, 'int');
        $pagelimit = $this->getParam('pagelimit', 15, 'int');
        $pager = new \Ku\Page($select, $page, $pagelimit, $mapper->getAdapter());
        $channelTypaMapper = \M\Mapper\SmsChannelType::getInstance();
        $data = $pager->getList();
        foreach ($data as $key=>$item){
            $typeWhere = array('channelId'=>$item['id'],'isdel'=>0);
            $typeNum = $channelTypaMapper->count($typeWhere);
            $data[$key]['typeNum'] = $typeNum;
        }
        $pager->setList($data);
        $this->assign('pager', $pager);
        $this->assign('pagelimit', $pagelimit);
        $this->assign('types', $mapper->getTypes());
    }

    public function addAction(){
        $mapper = \M\Mapper\SmsChannel::getInstance();
        $name = $this->getParam('name','','string');
        $key = $this->getParam('key','','string');
        $type = $this->getParam('type',0,'int');
        $account = $this->getParam('name','','string');
        $secret = $this->getParam('secret','','string');
        $url = $this->getParam('url','','string');
        $other = $this->getParam('other','','string');
        $desc = $this->getParam('desc','','string');
        $exist = $mapper->fetch(array('key'=>$key));
        if(empty($name) or empty($key)){
            return $this->returnData('名称和key不能为空',1000);
        }
        if($exist instanceof \M\SmsChannel){
            return $this->returnData('key已存在',1000);
        }
        if($other){
            $others = explode(';',$other);
            $otherData = [];
            foreach ($others as $item){
               $temp =  explode(',',$item);
               if(!isset($temp[1])){
                   return $this->returnData('扩展参数格式有误',1000);
               }
               $otherData[$temp[0]] = $temp[1];
            }
            $other = json_encode($otherData);
        }
        $channel = new \M\SmsChannel();
        $channel->setName($name);
        $channel->setType($type);
        $channel->setAccount($account);
        $channel->setSecret($secret);
        $channel->setApiUrl($url);
        $channel->setOther($other);
        $channel->setDesc($desc);
        $channel->setCreateTime(date('YmdHis'));
        $res = $mapper->insert($channel);
        if($res === false){
            return $this->returnData('添加失败，请重试',1000);
        }
        return $this->returnData('添加成功',1001,true);
    }

}