<?php

/**
 * Sms_channel
 * 
 * @Table Schema: sms_2
 * @Table Name: sms_channel
 */
namespace M;

class SmsChannel extends \M\ModelAbstract {

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
     * 渠道名称
     * 
     * Column Type: varchar(50)
     * 
     * @var string
     */
    protected $_name = '';

    /**
     * 渠道名(唯一)
     * 
     * Column Type: varchar(45)
     * 
     * @var string
     */
    protected $_key = '';

    /**
     * 类型
     * 
     * Column Type: tinyint(3)
     * Default: 0
     * 
     * @var int
     */
    protected $_type = 0;

    /**
     * 渠道账号
     * 
     * Column Type: varchar(45)
     * 
     * @var string
     */
    protected $_account = '';

    /**
     * 渠道密码
     * 
     * Column Type: varchar(100)
     * 
     * @var string
     */
    protected $_secret = '';

    /**
     * 渠道访问的url
     * 
     * Column Type: varchar(255)
     * 
     * @var string
     */
    protected $_apiUrl = '';

    /**
     * 描述
     * 
     * Column Type: varchar(256)
     * 
     * @var string
     */
    protected $_desc = '';

    /**
     * 其他配置参数
     * 
     * Column Type: varchar(500)
     * 
     * @var string
     */
    protected $_other = '';

    /**
     * CreateTime
     * 
     * Column Type: bigint(20) unsigned
     * Default: 0
     * 
     * @var int
     */
    protected $_createTime = 0;

    /**
     * UpdateTime
     * 
     * Column Type: bigint(20) unsigned
     * Default: 0
     * 
     * @var int
     */
    protected $_updateTime = 0;

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
     * @return \M\Smschannel
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
     * 渠道名称
     * 
     * Column Type: varchar(50)
     * 
     * @param string $name
     * @return \M\Smschannel
     */
    public function setName($name) {
        $this->_name = (string)$name;
        $this->_params['name'] = (string)$name;
        return $this;
    }

    /**
     * 渠道名称
     * 
     * Column Type: varchar(50)
     * 
     * @return string
     */
    public function getName() {
        return $this->_name;
    }

    /**
     * 渠道名(唯一)
     * 
     * Column Type: varchar(45)
     * 
     * @param string $key
     * @return \M\Smschannel
     */
    public function setKey($key) {
        $this->_key = (string)$key;
        $this->_params['key'] = (string)$key;
        return $this;
    }

    /**
     * 渠道名(唯一)
     * 
     * Column Type: varchar(45)
     * 
     * @return string
     */
    public function getKey() {
        return $this->_key;
    }

    /**
     * 类型
     * 
     * Column Type: tinyint(3)
     * Default: 0
     * 
     * @param int $type
     * @return \M\Smschannel
     */
    public function setType($type) {
        $this->_type = (int)$type;
        $this->_params['type'] = (int)$type;
        return $this;
    }

    /**
     * 类型
     * 
     * Column Type: tinyint(3)
     * Default: 0
     * 
     * @return int
     */
    public function getType() {
        return $this->_type;
    }

    /**
     * 渠道账号
     * 
     * Column Type: varchar(45)
     * 
     * @param string $account
     * @return \M\Smschannel
     */
    public function setAccount($account) {
        $this->_account = (string)$account;
        $this->_params['account'] = (string)$account;
        return $this;
    }

    /**
     * 渠道账号
     * 
     * Column Type: varchar(45)
     * 
     * @return string
     */
    public function getAccount() {
        return $this->_account;
    }

    /**
     * 渠道密码
     * 
     * Column Type: varchar(100)
     * 
     * @param string $secret
     * @return \M\Smschannel
     */
    public function setSecret($secret) {
        $this->_secret = (string)$secret;
        $this->_params['secret'] = (string)$secret;
        return $this;
    }

    /**
     * 渠道密码
     * 
     * Column Type: varchar(100)
     * 
     * @return string
     */
    public function getSecret() {
        return $this->_secret;
    }

    /**
     * 渠道访问的url
     * 
     * Column Type: varchar(255)
     * 
     * @param string $apiUrl
     * @return \M\Smschannel
     */
    public function setApiUrl($apiUrl) {
        $this->_apiUrl = (string)$apiUrl;
        $this->_params['apiUrl'] = (string)$apiUrl;
        return $this;
    }

    /**
     * 渠道访问的url
     * 
     * Column Type: varchar(255)
     * 
     * @return string
     */
    public function getApiUrl() {
        return $this->_apiUrl;
    }

    /**
     * 描述
     * 
     * Column Type: varchar(256)
     * 
     * @param string $desc
     * @return \M\Smschannel
     */
    public function setDesc($desc) {
        $this->_desc = (string)$desc;
        $this->_params['desc'] = (string)$desc;
        return $this;
    }

    /**
     * 描述
     * 
     * Column Type: varchar(256)
     * 
     * @return string
     */
    public function getDesc() {
        return $this->_desc;
    }

    /**
     * 其他配置参数
     * 
     * Column Type: varchar(500)
     * 
     * @param string $other
     * @return \M\Smschannel
     */
    public function setOther($other) {
        $this->_other = (string)$other;
        $this->_params['other'] = (string)$other;
        return $this;
    }

    /**
     * 其他配置参数
     * 
     * Column Type: varchar(500)
     * 
     * @return string
     */
    public function getOther() {
        return $this->_other;
    }

    /**
     * CreateTime
     * 
     * Column Type: bigint(20) unsigned
     * Default: 0
     * 
     * @param int $createTime
     * @return \M\Smschannel
     */
    public function setCreateTime($createTime) {
        $this->_createTime = (int)$createTime;
        $this->_params['createTime'] = (int)$createTime;
        return $this;
    }

    /**
     * CreateTime
     * 
     * Column Type: bigint(20) unsigned
     * Default: 0
     * 
     * @return int
     */
    public function getCreateTime() {
        return $this->_createTime;
    }

    /**
     * UpdateTime
     * 
     * Column Type: bigint(20) unsigned
     * Default: 0
     * 
     * @param int $updateTime
     * @return \M\Smschannel
     */
    public function setUpdateTime($updateTime) {
        $this->_updateTime = (int)$updateTime;
        $this->_params['updateTime'] = (int)$updateTime;
        return $this;
    }

    /**
     * UpdateTime
     * 
     * Column Type: bigint(20) unsigned
     * Default: 0
     * 
     * @return int
     */
    public function getUpdateTime() {
        return $this->_updateTime;
    }

    /**
     * Return a array of model properties
     * 
     * @return array
     */
    public function toArray() {
        return array(
            'id'         => $this->_id,
            'name'       => $this->_name,
            'key'        => $this->_key,
            'type'       => $this->_type,
            'account'    => $this->_account,
            'secret'     => $this->_secret,
            'apiUrl'     => $this->_apiUrl,
            'desc'       => $this->_desc,
            'other'      => $this->_other,
            'createTime' => $this->_createTime,
            'updateTime' => $this->_updateTime
        );
    }

}
