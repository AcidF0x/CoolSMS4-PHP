<?php

namespace AcidF0x\CoolSMSv4\Auth;

use InvalidArgumentException;

/**
 * Class Key
 * @package AcidF0x\CoolSMSv4\Auth
 */
class Key implements Authenticatable
{
    const SUPPORT_HASH_ALGOS = [
        'SHA256' => 'HMAC-SHA256',
        'MD5' => 'HMAC-MD5'
    ];

    /**
     * @var string $salt
     */
    protected $salt = '';

    /**
     * @var string $alog
     */
    protected $alog = 'SHA256';

    /**
     * Key constructor.
     * @param string $salt
     */
    public function __construct(string $salt)
    {
        $this->salt = $salt;
    }

    /**
     * Set Hash Algorithm
     * @param string $alog
     * @return $this
     */
    public function setHashAlog(string $alog)
    {
        if (!key_exists($alog, static::SUPPORT_HASH_ALGOS)) {
            throw new InvalidArgumentException('An unsupported hash Algorithm.');
        }
        $this->alog = $alog;
        return $this;
    }

    /**
     * Convert Authorization Header
     * @param string $apiKey
     * @param string $apiSecret
     * @return string
     */
    public function toHeader(string $apiKey, string $apiSecret)
    {
        date_default_timezone_set('Asia/Seoul');
        $date = date('Y-m-d\TH:i:s.Z\Z', time());
        $signature = hash_hmac($this->alog, $date.$this->salt, $apiSecret);
        return "Authorization: " . self::SUPPORT_HASH_ALGOS[$this->alog] .
            " apiKey={$apiKey}, date={$date}, salt={$this->salt}, signature={$signature}";
    }
}