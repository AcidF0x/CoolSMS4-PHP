<?php

namespace AcidF0x\CoolSMSv4;

class KakaoOption
{
    /**
     * @var string $senderKey
     */
    protected $senderKey = '';
    /**
     * @var string $templateCode
     */
    protected $templateCode = '';
    /**
     * @var string $buttonName
     */
    protected $buttonName = '';
    /**
     * @var string $buttonUrl
     */
    protected $buttonUrl = '';

    /**
     * @return string
     */
    public function getSenderKey(): string
    {
        return $this->senderKey;
    }

    /**
     * @param string $senderKey
     * @return KakaoOption
     */
    public function setSenderKey(string $senderKey): KakaoOption
    {
        $this->senderKey = $senderKey;
        return $this;
    }

    /**
     * @return string
     */
    public function getTemplateCode(): string
    {
        return $this->templateCode;
    }

    /**
     * @param string $templateCode
     * @return KakaoOption
     */
    public function setTemplateCode(string $templateCode): KakaoOption
    {
        $this->templateCode = $templateCode;
        return $this;
    }

    /**
     * @return string
     */
    public function getButtonName(): string
    {
        return $this->buttonName;
    }

    /**
     * @param string $buttonName
     * @return KakaoOption
     */
    public function setButtonName(string $buttonName): KakaoOption
    {
        $this->buttonName = $buttonName;
        return $this;
    }

    /**
     * @return string
     */
    public function getButtonUrl(): string
    {
        return $this->buttonUrl;
    }

    /**
     * @param string $buttonUrl
     * @return KakaoOption
     */
    public function setButtonUrl(string $buttonUrl): KakaoOption
    {
        $this->buttonUrl = $buttonUrl;
        return $this;
    }

    /**
     * @return bool
     */
    public function isDisableSms(): bool
    {
        return $this->disableSms;
    }

    /**
     * @param bool $disableSms
     * @return KakaoOption
     */
    public function setDisableSms(bool $disableSms): KakaoOption
    {
        $this->disableSms = $disableSms;
        return $this;
    }
    /**
     * @var bool $disableSms
     */
    protected $disableSms = false;
}