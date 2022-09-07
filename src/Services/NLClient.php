<?php

/**
 * @Author TungND
 * @Date   Sep 07, 2022
 */

namespace Laravel\NganLuong\Services;

use Exception;

class NLClient
{
    /**
     * @var string
     */
    private string $apiUrl;

    /**
     * @var string $apiUrl
     */
    private string $merchantID;

    /**
     * @var string $merchantPassword
     */
    private string $merchantPassword;

    /**
     * @var string $receiverEmail
     */
    private string $receiverEmail;


    public function __construct()
    {

    }


    // public function init(){
    //     $this->setApiUrl(config())
    //         ->setMerchantID()
    //         ->setMerchantPassword()
    //         ->setReceiverEmail()
    // }


    /**
     * @return string
     */
    public function getApiUrl(): string
    {
        return $this->apiUrl;
    }

    /**
     * @param string $apiUrl
     *
     * @return NLClient
     */
    public function setApiUrl(string $apiUrl): static
    {
        $this->apiUrl = $apiUrl;

        return $this;
    }

    /**
     * @return string
     */
    public function getMerchantID(): string
    {
        return $this->merchantID;
    }

    /**
     * @param string $merchantID
     *
     * @return NLClient
     */
    public function setMerchantID(string $merchantID): static
    {
        $this->merchantID = $merchantID;

        return $this;
    }

    /**
     * @return string
     */
    public function getMerchantPassword(): string
    {
        return $this->merchantPassword;
    }

    /**
     * @param string $merchantPassword
     *
     * @return NLClient
     */
    public function setMerchantPassword(string $merchantPassword): static
    {
        $this->merchantPassword = $merchantPassword;

        return $this;
    }

    /**
     * @return string
     */
    public function getReceiverEmail(): string
    {
        return $this->receiverEmail;
    }

    /**
     * @param string $receiverEmail
     *
     * @return NLClient
     */
    public function setReceiverEmail(string $receiverEmail): static
    {
        $this->receiverEmail = $receiverEmail;

        return $this;
    }

    /**
     * Function To Set PayPal API Configuration.
     *
     * @param array $config
     *
     * @throws Exception
     */
    private function setConfig(array $config): void
    {
        $api_config = function_exists('config') && !empty(config('config')) ? config('config') : $config;

        // Set Api Credentials
        // $this->setApiCredentials($api_config);
    }
}
