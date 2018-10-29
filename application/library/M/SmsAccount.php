<?php

/**
 * 账户表
 * 
 * @Table Schema: sms_2
 * @Table Name: sms_account
 */
namespace M;

class SmsAccount extends \M\ModelAbstract {

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
     * 用户ID
     * 
     * Column Type: int(11)
     * Default: 0
     * 
     * @var int
     */
    protected $_userId = 0;

    /**
     * 余额字段名称
     * 
     * Column Type: varchar(20)
     * 
     * @var string
     */
    protected $_accountKey = '';

    /**
     * 账户余额
     * 
     * Column Type: int(11)
     * Default: 0
     * 
     * @var int
     */
    protected $_amount = 0;

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
     * @return \M\Smsaccount
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
     * 用户ID
     * 
     * Column Type: int(11)
     * Default: 0
     * 
     * @param int $userId
     * @return \M\Smsaccount
     */
    public function setUserId($userId) {
        $this->_userId = (int)$userId;
        $this->_params['userId'] = (int)$userId;
        return $this;
    }

    /**
     * 用户ID
     * 
     * Column Type: int(11)
     * Default: 0
     * 
     * @return int
     */
    public function getUserId() {
        return $this->_userId;
    }

    /**
     * 余额字段名称
     * 
     * Column Type: varchar(20)
     * 
     * @param string $accountKey
     * @return \M\Smsaccount
     */
    public function setAccountKey($accountKey) {
        $this->_accountKey = (string)$accountKey;
        $this->_params['accountKey'] = (string)$accountKey;
        return $this;
    }

    /**
     * 余额字段名称
     * 
     * Column Type: varchar(20)
     * 
     * @return string
     */
    public function getAccountKey() {
        return $this->_accountKey;
    }

    /**
     * 账户余额
     * 
     * Column Type: int(11)
     * Default: 0
     * 
     * @param int $amount
     * @return \M\Smsaccount
     */
    public function setAmount($amount) {
        $this->_amount = (int)$amount;
        $this->_params['amount'] = (int)$amount;
        return $this;
    }

    /**
     * 账户余额
     * 
     * Column Type: int(11)
     * Default: 0
     * 
     * @return int
     */
    public function getAmount() {
        return $this->_amount;
    }

    /**
     * Return a array of model properties
     * 
     * @return array
     */
    public function toArray() {
        return array(
            'id'         => $this->_id,
            'userId'     => $this->_userId,
            'accountKey' => $this->_accountKey,
            'amount'     => $this->_amount
        );
    }

}
