<?php

namespace AcidF0x\CoolSMSv4;

use AcidF0x\CoolSMSv4\Auth\Authenticatable;
use AcidF0x\CoolSMSv4\Sendable;

/**
 * Class CoolSMS
 */
class CoolSMS
{
    protected $auth;

    public function __construct(Authenticatable $auth = null)
    {
        $this->auth = $auth;
    }

    public function setAuth(Authenticatable $auth)
    {
        $this->auth = $auth;
        return $this;
    }

    public function send(Sendable $payload)
    {
        //
    }
}