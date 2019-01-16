<?php

namespace AcidF0x\CoolSMSv4\Auth;

/**
 * Interface IAuth
 * @package AcidF0x\CoolSMSv4\Auth
 */
interface IAuth
{
    /**
     * @param string $apiKey
     * @param string $apiSecret
     * @return mixed
     */
    public function toHeader(string $apiKey, string $apiSecret);
}
