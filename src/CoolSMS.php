<?php

namespace AcidF0x\CoolSMSv4;

use AcidF0x\CoolSMSv4\Auth\IAuth;

/**
 * Class CoolSMS
 */
class CoolSMS
{
    protected $auth;

    public function __construct(IAuth $auth = null)
    {
        $this->auth = $auth;
    }

    public function setAuth(IAuth $auth)
    {
        $this->auth = $auth;
        return $this;
    }

}