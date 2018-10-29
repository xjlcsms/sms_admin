<?php

/**
 * Sms_authority
 * 
 * @Table Schema: sms_2
 * @Table Name: sms_authority
 */
namespace M;

class SmsAuthority extends \M\ModelAbstract {

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
     * 用户Id
     * 
     * Column Type: int(11) unsigned
     * Default: 0
     * 
     * @var int
     */
    protected $_userId = 0;

    /**
     * 发送类型,对应channel_type
     * 
     * Column Type: varchar(20)
     * 
     * @var string
     */
    protected $_smsSn = '';

    /**
     * 是否开启
     * 
     * Column Type: tinyint(1) unsigned
     * Default: 1
     * 
     * @var int
     */
    protected $_isOpen = 1;

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
     * @return \M\Smsauthority
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
     * 用户Id
     * 
     * Column Type: int(11) unsigned
     * Default: 0
     * 
     * @param int $userId
     * @return \M\Smsauthority
     */
    public function setUserId($userId) {
        $this->_userId = (int)$userId;
        $this->_params['userId'] = (int)$userId;
        return $this;
    }

    /**
     * 用户Id
     * 
     * Column Type: int(11) unsigned
     * Default: 0
     * 
     * @return int
     */
    public function getUserId() {
        return $this->_userId;
    }

    /**
     * 发送类型,对应channel_type
     * 
     * Column Type: varchar(20)
     * 
     * @param string $smsSn
     * @return \M\Smsauthority
     */
    public function setSmsSn($smsSn) {
        $this->_smsSn = (string)$smsSn;
        $this->_params['smsSn'] = (string)$smsSn;
        return $this;
    }

    /**
     * 发送类型,对应channel_type
     * 
     * Column Type: varchar(20)
     * 
     * @return string
     */
    public function getSmsSn() {
        return $this->_smsSn;
    }

    /**
     * 是否开启
     * 
     * Column Type: tinyint(1) unsigned
     * Default: 1
     * 
     * @param int $isOpen
     * @return \M\Smsauthority
     */
    public function setIsOpen($isOpen) {
        $this->_isOpen = (int)$isOpen;
        $this->_params['isOpen'] = (int)$isOpen;
        return $this;
    }

    /**
     * 是否开启
     * 
     * Column Type: tinyint(1) unsigned
     * Default: 1
     * 
     * @return int
     */
    public function getIsOpen() {
        return $this->_isOpen;
    }

    /**
     * Return a array of model properties
     * 
     * @return array
     */
    public function toArray() {
        return array(
            'id'     => $this->_id,
            'userId' => $this->_userId,
            'smsSn'  => $this->_smsSn,
            'isOpen' => $this->_isOpen
        );
    }

}
