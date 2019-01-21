<?php

namespace AcidF0x\CoolSMSv4;

class Message
{
    /**
     * @var string $to
     */
    protected $to = '';
    /**
     * @var string $from
     */
    protected $from = '';
    /**
     * @var string  $text
     */
    protected $text = '';
    /**
     * @var string $country
     */
    protected $country = '';
    /**
     * @var string $subject
     */
    protected $subject = '';
    /**
     * @var string $imageId
     */
    protected $imageId = '';
    /**
     * @var \AcidF0x\CoolSMSv4\KakaoOption $kakaoOptions
     */
    protected $kakaoOptions;
    /**
     * @var array $customFields
     */
    protected $customFields = [];
    /**
     * @var bool $autoTypeDetect
     */
    protected $autoTypeDetect = false;

    /**
     * @return string
     */
    public function getTo(): string
    {
        return $this->to;
    }

    /**
     * @param string $to
     * @return Message
     */
    public function setTo(string $to): Message
    {
        $this->to = $to;
        return $this;
    }

    /**
     * @return string
     */
    public function getFrom(): string
    {
        return $this->from;
    }

    /**
     * @param string $from
     * @return Message
     */
    public function setFrom(string $from): Message
    {
        $this->from = $from;
        return $this;
    }

    /**
     * @return string
     */
    public function getText(): string
    {
        return $this->text;
    }

    /**
     * @param string $text
     * @return Message
     */
    public function setText(string $text): Message
    {
        $this->text = $text;
        return $this;
    }

    /**
     * @return string
     */
    public function getCountry(): string
    {
        return $this->country;
    }

    /**
     * @param string $country
     * @return Message
     */
    public function setCountry(string $country): Message
    {
        $this->country = $country;
        return $this;
    }

    /**
     * @return string
     */
    public function getSubject(): string
    {
        return $this->subject;
    }

    /**
     * @param string $subject
     * @return Message
     */
    public function setSubject(string $subject): Message
    {
        $this->subject = $subject;
        return $this;
    }

    /**
     * @return string
     */
    public function getImageId(): string
    {
        return $this->imageId;
    }

    /**
     * @param string $imageId
     * @return Message
     */
    public function setImageId(string $imageId): Message
    {
        $this->imageId = $imageId;
        return $this;
    }

    /**
     * @return KakaoOption
     */
    public function getKakaoOptions(): KakaoOption
    {
        return $this->kakaoOptions;
    }

    /**
     * @param KakaoOption $kakaoOptions
     * @return Message
     */
    public function setKakaoOptions(KakaoOption $kakaoOptions): Message
    {
        $this->kakaoOptions = $kakaoOptions;
        return $this;
    }

    /**
     * @return array
     */
    public function getCustomFields(): array
    {
        return $this->customFields;
    }

    /**
     * @param array $customFields
     * @return Message
     */
    public function setCustomFields(array $customFields): Message
    {
        $this->customFields = $customFields;
        return $this;
    }

    /**
     * @return bool
     */
    public function isAutoTypeDetect(): bool
    {
        return $this->autoTypeDetect;
    }

    /**
     * @param bool $autoTypeDetect
     * @return Message
     */
    public function setAutoTypeDetect(bool $autoTypeDetect): Message
    {
        $this->autoTypeDetect = $autoTypeDetect;
        return $this;
    }
}