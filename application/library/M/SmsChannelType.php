<?php

/**
 * Sms_channel_type
 * 
 * @Table Schema: sms_2
 * @Table Name: sms_channel_type
 */
namespace M;

class SmsChannelType extends \M\ModelAbstract {

    /**
     * Params
     * 
     * @var array
     */
    protected $_params = null;

    /**
     * Id
     * 
     * Column Type: int(11)
     * auto_increment
     * PRI
     * 
     * @var int
     */
    protected $_id = null;

    /**
     * 渠道ID
     * 
     * Column Type: int(11) unsigned
     * Default: 0
     * 
     * @var int
     */
    protected $_channelId = 0;

    /**
     * 渠道类型名
     * 
     * Column Type: varchar(30)
     * 
     * @var string
     */
    protected $_name = '';

    /**
     * 渠道类型发送编码
     * 
     * Column Type: varchar(20)
     * 
     * @var string
     */
    protected $_smsSn = '';

    /**
     * 对应的用户账户余额字段
     * 
     * Column Type: varchar(20)
     * 
     * @var string
     */
    protected $_acountKey = '';

    /**
     * 描述
     * 
     * Column Type: varchar(45)
     * 
     * @var string
     */
    protected $_desc = '';

    /**
     * 是否可使用
     * 
     * Column Type: tinyint(1)
     * Default: 1
     * 
     * @var int
     */
    protected $_isOpen = 1;

    /**
     * 是否删除
     * 
     * Column Type: varchar(45)
     * Default: 0
     * 
     * @var string
     */
    protected $_isdel = 0;

    /**
     * Params
     * 
     * Column Type: array
     * Default: null
     * 
     * @var array
     */
    public function getParams() {
        return $this->_params;
    }

    /**
     * Id
     * 
     * Column Type: int(11)
     * auto_increment
     * PRI
     * 
     * @param int $id
     * @return \M\Smschanneltype
     */
    public function setId($id) {
        $this->_id = (int)$id;
        $this->_params['id'] = (int)$id;
        return $this;
    }

    /**
     * Id
     * 
     * Column Type: int(11)
     * auto_increment
     * PRI
     * 
     * @return int
     */
    public function getId() {
        return $this->_id;
    }

    /**
     * 渠道ID
     * 
     * Column Type: int(11) unsigned
     * Default: 0
     * 
     * @param int $channelId
     * @return \M\Smschanneltype
     */
    public function setChannelId($channelId) {
        $this->_channelId = (int)$channelId;
        $this->_params['channelId'] = (int)$channelId;
        return $this;
    }

    /**
     * 渠道ID
     * 
     * Column Type: int(11) unsigned
     * Default: 0
     * 
     * @return int
     */
    public function getChannelId() {
        return $this->_channelId;
    }

    /**
     * 渠道类型名
     * 
     * Column Type: varchar(30)
     * 
     * @param string $name
     * @return \M\Smschanneltype
     */
    public function setName($name) {
        $this->_name = (string)$name;
        $this->_params['name'] = (string)$name;
        return $this;
    }

    /**
     * 渠道类型名
     * 
     * Column Type: varchar(30)
     * 
     * @return string
     */
    public function getName() {
        return $this->_name;
    }

    /**
     * 渠道类型发送编码
     * 
     * Column Type: varchar(20)
     * 
     * @param string $smsSn
     * @return \M\Smschanneltype
     */
    public function setSmsSn($smsSn) {
        $this->_smsSn = (string)$smsSn;
        $this->_params['smsSn'] = (string)$smsSn;
        return $this;
    }

    /**
     * 渠道类型发送编码
     * 
     * Column Type: varchar(20)
     * 
     * @return string
     */
    public function getSmsSn() {
        return $this->_smsSn;
    }

    /**
     * 对应的用户账户余额字段
     * 
     * Column Type: varchar(20)
     * 
     * @param string $acountKey
     * @return \M\Smschanneltype
     */
    public function setAcountKey($acountKey) {
        $this->_acountKey = (string)$acountKey;
        $this->_params['acountKey'] = (string)$acountKey;
        return $this;
    }

    /**
     * 对应的用户账户余额字段
     * 
     * Column Type: varchar(20)
     * 
     * @return string
     */
    public function getAcountKey() {
        return $this->_acountKey;
    }

    /**
     * 描述
     * 
     * Column Type: varchar(45)
     * 
     * @param string $desc
     * @return \M\Smschanneltype
     */
    public function setDesc($desc) {
        $this->_desc = (string)$desc;
        $this->_params['desc'] = (string)$desc;
        return $this;
    }

    /**
     * 描述
     * 
     * Column Type: varchar(45)
     * 
     * @return string
     */
    public function getDesc() {
        return $this->_desc;
    }

    /**
     * 是否可使用
     * 
     * Column Type: tinyint(1)
     * Default: 1
     * 
     * @param int $isOpen
     * @return \M\Smschanneltype
     */
    public function setIsOpen($isOpen) {
        $this->_isOpen = (int)$isOpen;
        $this->_params['isOpen'] = (int)$isOpen;
        return $this;
    }

    /**
     * 是否可使用
     * 
     * Column Type: tinyint(1)
     * Default: 1
     * 
     * @return int
     */
    public function getIsOpen() {
        return $this->_isOpen;
    }

    /**
     * 是否删除
     * 
     * Column Type: varchar(45)
     * Default: 0
     * 
     * @param string $isdel
     * @return \M\Smschanneltype
     */
    public function setIsdel($isdel) {
        $this->_isdel = (string)$isdel;
        $this->_params['isdel'] = (string)$isdel;
        return $this;
    }

    /**
     * 是否删除
     * 
     * Column Type: varchar(45)
     * Default: 0
     * 
     * @return string
     */
    public function getIsdel() {
        return $this->_isdel;
    }

    /**
     * Return a array of model properties
     * 
     * @return array
     */
    public function toArray() {
        return array(
            'id'        => $this->_id,
            'channelId' => $this->_channelId,
            'name'      => $this->_name,
            'smsSn'     => $this->_smsSn,
            'acountKey' => $this->_acountKey,
            'desc'      => $this->_desc,
            'isOpen'    => $this->_isOpen,
            'isdel'     => $this->_isdel
        );
    }

}
