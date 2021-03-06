<?php

class ClientFactoryMockService extends \IngatlanCom\ApiClient\Service\ClientFactoryService
{
    /**
     * @var \Guzzle\Http\Client
     */
    private $client;

    /**
     * @param string $baseUrl
     * @param null $config
     * @return \Guzzle\Http\Client
     */
    public function getClient($baseUrl = '', $config = null)
    {
        if (!$this->client) {
            $this->client = parent::getClient($baseUrl, $config);
        }
        return $this->client;
    }
}
