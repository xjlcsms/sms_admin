<?php
/**
 * Created by PhpStorm.
 * User: Viter
 * Date: 2018/6/30
 * Time: 10:25
 */
namespace M\Mapper;

class SmsChannel extends \M\Mapper\MapperAbstract
{

    use \M\Instance;

    protected $modelClass = '\M\SmsChannel';

    protected $table = 'sms_channel';

    private $_types = array(
        0=>'平台',1=>'移动',2=>'电信',3=>'联通'
    );

    /**获取通道类型
     * @return array
     */
    public function getTypes(){
        return $this->_types;
    }

}