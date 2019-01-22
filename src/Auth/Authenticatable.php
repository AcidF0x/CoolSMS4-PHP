<?php

namespace AcidF0x\CoolSMSv4\Auth;

/**
 * Interface Authenticatable
 * @package AcidF0x\CoolSMSv4\Auth
 */
interface Authenticatable
{
    /**
     * @param string $apiKey
     * @param string $apiSecret
     * @return mixed
     */
    public function toHeader(string $apiKey, string $apiSecret);
}
